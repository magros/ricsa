<?php

namespace App\Http\Controllers\Cotizacion;

use App\Material;
use App\MaterialType;
use App\Libraries\Helpers;
use App\MaterialQuotation;
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
            $total = $request->peso * $request->price;
            $material_cuatation = MaterialQuotation::create([
                'quantity'=>$request->cantidad,
                'name'=>$request->name,
                'total'=>$total,
                'ric_id'=>$request->id_ric,
                'material_id'=>$request->material_id
            ]);
            if($material_cuatation){
                if($material_cuatation->name == 'cuerpo'){
                    $materials = MaterialQuotation::with('material')->where('ric_id',$request->id_ric)->where('name','cuerpo')->get();
                }
                if($material_cuatation->name == 'tapas'){
                    $materials = MaterialQuotation::with('material')->where('ric_id',$request->id_ric)->where('name','tapas')->get();
                }
                if($material_cuatation->name == 'soporte'){
                    $materials = MaterialQuotation::with('material')->where('ric_id',$request->id_ric)->where('name','soporte')->get();
                }
                if($material_cuatation->name == 'escalera'){
                    $materials = MaterialQuotation::with('material')->where('ric_id',$request->id_ric)->where('name','escalera')->get();
                }
                if($material_cuatation->name == 'registro'){
                    $materials = MaterialQuotation::with('material')->where('ric_id',$request->id_ric)->where('name','registro')->get();
                }
                if($material_cuatation->name == 'boquillas'){
                    $materials = MaterialQuotation::with('material')->where('ric_id',$request->id_ric)->where('name','boquillas')->get();
                }

                $peso_neto = 0;
                $peso_bruto = 0;
                $total = 0;

                $pe = MaterialQuotation::where('ric_id',$request->id_ric)->get();
                foreach ($pe as $p ) {
                    $peso_neto = $peso_neto + $p->material->net_weight;
                    $peso_bruto = $peso_bruto + $p->material->gross_weight;
                    $total = $total + $p->total;
                }
                $precio_kilo = $total/$peso_neto;
                return response()->json([
                    'material'=>$materials,
                    'peso_neto'=>$peso_neto,
                    'peso_burto'=>$peso_bruto,
                    'precio_kilo'=>$precio_kilo,
                    'total' => $total
                    ]);
            }
            return abort(500);
        }
        return abort(500);
    }

}
