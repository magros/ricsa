<?php

namespace App\Http\Controllers\Ingenieria;

use App\Material;
use App\Inventory;
use App\MaterialType;
use App\Libraries\Helpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaterialController extends Controller
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
            'tab' => 'engineering',
            'subtab' => 'materials',
        ];
        return view('ingenieria.materials.index')->with($data);
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
            'tab' => 'engineering',
            'subtab' => 'materials'
        ];
        return view('ingenieria.materials.createoredit')->with($data);
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
            'thickness' => 'required',
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
        return redirect()->route('ingenieria.material.create')->with('alert', Helpers::alertData('success','','saveSuccess'));
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
            'materials' => Material::find($id),
            'material_types' => MaterialType::pluck('name','id'),
            'tab' => 'engineering',
            'subtab' => 'materials',
        ];
        return view('ingenieria.materials.createoredit')->with($data);
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
        $request -> validate([
            'description' => 'required',
            'specification'=> 'required',
            'thickness' => 'required',
            'dimension' => 'required',
            'thickness' => 'required',
            'length' => 'required',
            'net_weight' => 'required',
            'gross_weight' => 'required',
            'trademark' => 'required',
            'price' => 'required',
            'material_type_id'=>'required'
        ]);
        $material = Material::find($id);
        $material = Material::update([
            'description' => $request->get('description'),
            'specification'=> $request->get('specification'),
            'thickness' => $request->get('thickness'),
            'dimension' => $request->get('dimension'),
            'thickness' => $request->get('thickness'),
            'length' => $request->get('length'),
            'net_weight' => $request->get('net_weight'),
            'gross_weight' => $request->get('gross_weight'),
            'trademark' => $request->get('trademark'),
            'price' => $request->get('price'),
            'r_rc' => 'R',
            'material_type_id'=>$request->get('material_type_id')
        ]);
        $material->save();
        return redirect()->back()->with('alert',Helpers::alertData('success','','saveSuccess'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material = Material::find($id);
        if(!is_null($material)){
            return response()->json($material->delete());
        }
        return abort(500);
    }
}
