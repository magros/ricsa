<?php

namespace App\Http\Controllers\Almacen;

use App\Ric;
use App\Material;
use App\Inventory;
use App\MaterialType;
use App\Libraries\Helpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SalidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'materials' => Material::all(),
            'inventories' => Inventory::all(),
            'rics' => Ric::pluck('Nric','id'),
            'tab' => 'warehouse',
            'subtab' => 'exitmaterials',
        ];
        return view('almacen.exits.index')->with($data);
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

    public function list(Request $request)
    {
        if(!is_null($request)){
            $material_cuatation = MaterialQuotation::create([
                'quantity'=>$request->cantidad,
                'name'=>$request->name,
                'total'=>$total,
                'ric_id'=>$request->id_ric,
                'material_id'=>$request->material_id
            ]);
            }
        return abort(500);
    }
}
