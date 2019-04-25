<?php

namespace App\Http\Controllers\Cotizacion;

use App\Ric;
use App\Customer;
use App\Material;
use Carbon\Traits\Date;
use App\Libraries\Helpers;
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
            'tab' => 'system',
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
            'tab' => 'system',
            'subtab' => 'quotations'
        ];
        return view('cotizacion.index')->with($data);
    }

    public function cotizador($id){
        $data = [
            'materials' => Material::pluck('description','id'),
            'ric' => $id,
            'tab' => 'system',
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
            'tab' => 'system',
            'subtab' => 'por_rics',
            'clients'=> $clients,
            'clients_in_system' => Customer::all()
        ];
        $queries = DB::getQueryLog();
        // dd($queries);
        return view('reportes.portafoliorics')->with($data);
    }
}
