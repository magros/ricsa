<?php

namespace App\Http\Controllers\Almacen;

use App\Material;
use App\Inventory;
use App\MaterialType;
use App\Ric;
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
            'materials' => Material::pluck('description','id'),
            'material_types' => MaterialType::pluck('name','id'),
            'rics' => Ric::pluck('Nric','id'),
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
            'ric_id' => 'required',
            'quantity' => 'required',

        ]);

        $inventory = Inventory::create([
            'material_id' =>$request->description,
            'quantity' =>$request->quantity,
            'ric_id' => $request->ric_id,
        ]);
        $inventory->save();
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
        $data = [
            'rics' => Ric::pluck('Nric','id'),
            'materials' => Material::pluck('description','id'),
            'material_types' => MaterialType::pluck('name','id'),
            'inventories' => Inventory::find($id),
            'tab' => 'engineering',
            'subtab' => 'materials',
        ];
        return view('almacen.inventories.view')->with($data);
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

    public function getMaterial($id){
        $material = Material::find($id);
        if(!is_null($material)){
            return response()->json($material);
        }
        return abort(500);
    }
}
