<?php

namespace App\Http\Controllers\Almacen;

use App\Ric;
use App\MaterialQuotation;
use App\Material;
use App\Inventory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'proyects' => Ric::all(),
            'tab' => 'warehouse',
            'subtab' => 'proyects',
        ];
        return view('almacen.proyects.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $data = [
            'proyects' => Ric::find($id),
            'quotations' => MaterialQuotation::pluck('quantity','id'),
            'materials' => Material::pluck('description','dimension','id'),
            'inventories' => Inventory::pluck('quantity','id'),
            'tab' => 'warehouse',
            'subtab' => 'proyects',
        ];
        return view('almacen.proyects.view')->with($data);
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
}
