<?php

namespace App\Http\Controllers\Cotizacion;

use App\Material;
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
            'tab' => 'quotation',
            'subtab' => 'materials'
        ];
        return view('cotizacion.materiales.index')->with($data);
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
            'tab' =>'quotation',
            'subtab' => 'materials'
        ];
        return view('cotizacion.materiales.createoredit')->with($data);
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

        $client = Material::create([
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

         return redirect()->route('cotizacion.material.create')->with('alert',Helpers::alertData('success','','saveSuccess'));
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
        // $client = Customer::find($id);
        if(!is_null($request)){

            // return response()->json($request);
        }
        return abort(500);
    }

}
