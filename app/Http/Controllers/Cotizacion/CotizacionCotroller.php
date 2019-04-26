<?php

namespace App\Http\Controllers\Cotizacion;

use App\Ric;
use App\Customer;
use App\Material;
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
        //
    }

    public function proyectos(){
        $data = [
            'rics' => Ric::all(),
            'tab' => 'quotation',
            'subtab' => 'quotations'
        ];
        return view('cotizacion.index')->with($data);
    }

    public function cotizador($id){
        $peso_neto = 0;
                $peso_bruto = 0;
                $total = 0;
                $precio_kilo = 0;

                $pe = MaterialQuotation::where('ric_id',$id)->get();
                foreach ($pe as $p ) {
                    $peso_neto = $peso_neto + $p->material->net_weight;
                    $peso_bruto = $peso_bruto + $p->material->gross_weight;
                    $total = $total + $p->total;
                }
                if($total>0 && $peso_neto>0){
                    $precio_kilo = $total/$peso_neto;
                }                
        $data = [
            'cuerpo'=>MaterialQuotation::where('ric_id',$id)->where('name','cuerpo')->get(),
            'tapas'=>MaterialQuotation::where('ric_id',$id)->where('name','tapas')->get(),
            'soportes'=>MaterialQuotation::where('ric_id',$id)->where('name','soporte')->get(),
            'escalera'=>MaterialQuotation::where('ric_id',$id)->where('name','escalera')->get(),
            'registro'=>MaterialQuotation::where('ric_id',$id)->where('name','registro')->get(),
            'boquillas'=>MaterialQuotation::where('ric_id',$id)->where('name','boquillas')->get(),
            'peso_neto'=>$peso_neto,
            'peso_burto'=>$peso_bruto,
            'precio_kilo'=>$precio_kilo,
            'total' => $total,
            'materials' => Material::pluck('description','id'),
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
}
