<?php

namespace App\Http\Controllers\Cotizacion;

use App\Ric;
use App\Customer;
use App\Manpower;
use App\Material;
use App\Consumable;
use Carbon\Traits\Date;
use App\Libraries\Helpers;
use App\MaterialQuotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CotizacionCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $con = count(Ric::all()->where('status','=','3'))+1;
        $pe = count(Ric::all()->where('status','=','1'))+1;

        $Ric = 'Ric-'.date('y').'-'.$con;
        $p = 'Pedido-'.date('y').'-'.$pe;
        $data = [
            'clients' => Customer::pluck('company','id'),
            'Nric' => $Ric,
            'Npedido'=> $p,
            'tab' => 'quotation',
            'subtab' => 'quotations'
        ];
        return view('cotizacion.createoredit')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required',
            'name_proyect' => 'required',
            'delivery_place' => 'required',
            'estimated_time' => 'required',
            'definite_time'=> 'required',
            'complexity' => 'required'
         ]);

        $pe = count(Ric::all()->where('status','=','1'))+1;
        $p = 'Pedido-'.date('y').'-'.$pe;

        $client = Ric::create([
            'customer_id' => $request->customer_id,
            'user_id' => auth()->user()->id,
            'Npedido' => $p,
            'name_proyect' => $request->name_proyect,
            'complexity' => $request->complexity,
            'status' => 1,
            'delivery_place'=> $request->delivery_place,
            'estimated_time' => $request->estimated_time,
            'definite_time' => $request->definite_time
        ]);

        return redirect()->route('cotizacion.create')->with('alert',Helpers::alertData('success','','saveSuccess'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ric = Ric::find($id);
        if(!is_null($ric)){
            return response()->json($ric->delete());
        }
        return abort(500);
    }

    public function proyectos()
    {
        $rics = Ric::latest()->paginate(10);

        return view('cotizacion.index', compact('rics'));
    }

    public function cotizador($id){
                $peso_neto = 0;
                $peso_bruto = 0;
                $total = 0;
                $precio_kilo = 0;
                $total_fabricacion = 0;
                $precio_unitario_ric = 0;
                $total_venta= 0;
                $precio_venta = 0;
                $pe = MaterialQuotation::where('ric_id',$id)->get();
                foreach ($pe as $p ) {
                    $peso_neto = $peso_neto + $p->material->net_weight;
                    $peso_bruto = $peso_bruto + $p->material->gross_weight;
                    $total = $total + $p->total;
                }
                if($total>0 && $peso_neto>0){
                    $precio_kilo = $total/$peso_neto;
                }
                $peso_neto_mo = 0;
                $cadencia = 0;
                $horas = 0;
                $total_mo = 0;
                $total_precio = 0;
                $MO = Manpower::where('ric_id',$id)->get();
                foreach ($MO as $m) {
                    if($m->description!=5){
                        $peso_neto_mo = $peso_neto_mo + $m->net_weight;
                    }
                    $horas = $horas + $m->hours;
                    $total_mo = $total_mo + $m->total;
                }
                if($peso_neto_mo>0 && $horas && $total_mo>0 && $peso_neto > 0){
                    $cadencia = $peso_neto_mo / $horas;
                    $total_precio = $total_mo/$peso_neto;
                }

                $total_consumible = 0;
                $precio_consumible = 0;
                $consumibles = Consumable::where('ric_id',$id)->get();
                foreach ($consumibles as $con) {
                    $total_consumible = $total_consumible + $con->total;
                }
                if($total_consumible> 0 && $peso_neto>0 && $total_fabricacion>0){
                $precio_consumible = $total_consumible/$peso_neto;
                $total_fabricacion = $total + $total_mo + $total_consumible;
                $precio_unitario_ric = $total_fabricacion/$peso_neto;

                }

                if($total_fabricacion > 0 && $total_venta>0 && $peso_neto>0){
                    $total_venta = $total_fabricacion/(1-0.25);
                    $precio_venta = $total_venta/$peso_neto;
                }
        $data = [
            'cuerpo'=>MaterialQuotation::where('ric_id',$id)->where('name','cuerpo')->get(),
            'tapas'=>MaterialQuotation::where('ric_id',$id)->where('name','tapas')->get(),
            'soportes'=>MaterialQuotation::where('ric_id',$id)->where('name','soporte')->get(),
            'escalera'=>MaterialQuotation::where('ric_id',$id)->where('name','escalera')->get(),
            'registro'=>MaterialQuotation::where('ric_id',$id)->where('name','registro')->get(),
            'boquillas'=>MaterialQuotation::where('ric_id',$id)->where('name','boquillas')->get(),
            'mano_obra'=>$MO,
            'peso_neto'=>$peso_neto,
            'peso_burto'=>$peso_bruto,
            'precio_kilo'=>$precio_kilo,
            'total' => $total,
            'total_peso_neto_mo' =>$peso_neto_mo,
            'cadencia'=> $cadencia,
            'total_horas'=>$horas,
            'total_precio_mo'=>$total_precio,
            'total_mo'=>$total_mo,
            'total_consumible' => $total_consumible,
            'precio_consumible'=> $precio_consumible,
            'total_fabricacion'=> $total_fabricacion,
            'precio_unitario_ric' => $precio_unitario_ric,
            'total_venta'=>$total_venta,
            'precio_venta'=> $precio_venta,
            'materials' => Material::pluck('description','id'),
            'consumibles'=> $consumibles,
            'ric'=>$id,
            'tab' => 'quotation',
            'subtab' => 'quotations'
        ];
        return view('cotizacion.quoting')->with($data);
    }

    public function material($id){

        $client = Material::find($id);
        if(!is_null($client)){
            // $specification = $client->specification;
            return response()->json($client);
        }
        return abort(500);
    }

    public function rics(Request $request){
        DB::connection()->enableQueryLog();
        $clients = null;
        if($request->has('c')){
            $clients = $request->get('c');
            if(!is_array($clients)) $clients = [$clients];
        }
        $staus = null;
        if($request->has('e')){
            $staus = $request->get('e');
        }
        $complexity = null;
        if($request->has('o')){
            $complexity = $request->get('o');
        }

        // dd(Ric::byClients($clients)
        //     ->byStatus($staus)
        //     ->byComplexity($complexity)
        //     ->get());
        $data = [
            'rics' => Ric::byClients($clients)
            ->byStatus($staus)
            ->byComplexity($complexity)
            ->get(),
            'tab' => 'quotation',
            'subtab' => 'por_rics',
            'clients'=> $clients,
            'clients_in_system' => Customer::all()
        ];
        $queries = DB::getQueryLog();
        // dd($queries);
        return view('reportes.portafoliorics')->with($data);
    }

    public function autorizar($id){
        $ric = Ric::find($id);
        if(!is_null($ric)){
            $ric->update([
                'status'=>2
            ]);
            return response()->json($ric);
        }
        return abort(500);
    }
}
