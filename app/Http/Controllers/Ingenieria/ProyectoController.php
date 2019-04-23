<?php

namespace App\Http\Controllers\Ingenieria;

use App\Ric;
use App\MaterialQuotation;
use App\Material;
use App\Inventory;
use Illuminate\Http\Request;
use App\Libraries\Helpers;
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
            'tab' => 'system',
            'subtab' => 'proyects'
        ];
        return view('ingenieria.proyects.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'material_quotation' => MaterialQuotation::all(),
            'materials' => Material::all(),
            'inventories' => Inventory::all(),
            'tab' => 'system',
            'subtab' => 'proyects',
        ];
        return view('ingenieria.proyects.createoredit')->with($data);
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
            'material_quotation' => MaterialQuotation::find($id),
            'materials' => Material::all(),
            'inventories' => Inventory::all(),
            'tab' => 'system',
            'subtab' => 'proyects',
        ];
        return view('ingenieria.proyects.createoredit')->with($data);
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

    public function insertMaterial(Request $request){
        $data = array();
        foreach($materials as $material){
            $data[$mateiral]['name'] = $request->name;
            $data[$mateiral]['description'] = $request->name;
            $data[$material]['trademark'] = $request->trademark;
            $data[$material]['price'] = $request->price;
            $data[$material]['magnitude'] = $request->magnitude;
            $data[$material]['specification'] = $request->specification;
            $data[$material]['r/rc'] = $request->r/rc;
            $data[$material]['dimension'] = $request->dimension;
            $data[$material]['weight'] = $request->weight;
            $data[$material]['material_type_id'] = $request->material_type_id;
            $data[$material]['family_id'] = $request->family_id;
            Material::insert($data);
            return view('ingenieria.proyects.index');
        }
    }
}
