<?php

namespace App\Http\Controllers\Almacen;

use App\Material;
use App\Inventory;
use App\MaterialType;
use App\Libraries\Helpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class InventoryController extends Controller
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
            'tab' => 'warehouse',
            'subtab' => 'materials',
        ];
        return view('almacen.inventories.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'material_types' => MaterialType::pluck('name','id'),
            'tab' => 'warehouse',
            'subtab' => 'materials'
        ];
        return view('almacen.inventories.createoredit')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'description' => 'required',
            'specification'=> 'required',
            'thickness' => 'required',
            'dimension' => 'required',
            'length' => 'required',
            'net_weight' => 'required',
            'gross_weight' => 'required',
            'trademark' => 'required',
            'price' => 'required',
            'material_type_id'=>'required'
        ]);

        $material = Material::create([
            'description' => $request->description,
            'specification'=> $request->specification,
            'thickness' => $request->thickness,
            'dimension' => $request->dimension,
            'thickness' => $request->thickness,
            'length' => $request->length,
            'net_weight' => $request->net_weight,
            'gross_weight' => $request->gross_weight,
            'trademark' => $request->trademark,
            'price' => $request->price,
            'r_rc' => 'R',
            'material_type_id'=>$request->material_type_id
        ]);
        $material->save();
        return redirect()->route('almacen.inventory.create')->with('alert', Helpers::alertData('success','','saveSuccess'));
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
        $materials = DB::table('materials')
        ->select('description','specification','thickness','dimension','length','net_weight','gross_weight','trademark','price')
        ->where('id', '=', $id )
        ->get();
        $data = [
            'materials' => $materials,
            'material_types' => MaterialType::pluck('name','id'),
            'inventories' => Inventory::find($id),
            'tab' => 'engineering',
            'subtab' => 'materials',
        ];
        return view('almacen.inventories.createoredit')->with($data);
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
