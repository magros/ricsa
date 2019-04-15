<?php

namespace App\Http\Controllers\Cotizacion;

use App\Ric;
use App\Customer;
use Carbon\Traits\Date;
use Illuminate\Http\Request;
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
        return view('propuestas.createoredit')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
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
            'clients' => Ric::all(),
            'tab' => 'system',
            'subtab' => 'quotations'
        ];
        return view('cotizacion.index')->with($data);
    }
}
