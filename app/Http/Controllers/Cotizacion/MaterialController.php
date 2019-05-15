<?php

namespace App\Http\Controllers\Cotizacion;

use App\User;
use App\Manpower;
use App\Material;
use App\Consumable;
use App\MaterialType;
use App\Libraries\Helpers;
use App\MaterialQuotation;
use App\Mail\Notifications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\Facade as PDF;

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
        $material = MaterialQuotation::find($id);
        if(!is_null($material)){
            return response()->json($material->delete());
        }
        return abort(500);
    }

    private function getMaterialsQuotationByName($ricId, $name)
    {
        return MaterialQuotation::with('material')->where('ric_id', $ricId)->where('name', $name)->get();
    }

    public function listV2(Request $request)
    {
        $total = $request->gross_weight * $request->price;

        $material_quotation = MaterialQuotation::create([
            'quantity'=> $request->quantity,
            'name' => $request->name,
            'total' => $total,
            'ric_id' => $request->ricId,
            'material_id' => $request->id
        ]);

        $materials = $this->getMaterialsQuotationByName($request->ricId, $material_quotation->name);

        $peso_neto = 0;
        $peso_bruto = 0;
        $total = 0;

        $pe = MaterialQuotation::where('ric_id', $request->ricId)->get();

        foreach ($pe as $p ) {
            $peso_neto = $peso_neto + $p->material->net_weight;
            $peso_bruto = $peso_bruto + $p->material->gross_weight;
            $total = $total + $p->total;
        }

        $precio_kilo = $total / $peso_neto;

        return response()->json([
            'material'=>$materials,
            'peso_neto'=>$peso_neto,
            'peso_burto'=>$peso_bruto,
            'precio_kilo'=>$precio_kilo,
            'total' => $total
        ]);
    }

    public function list(Request $request)
    {
        $total = $request->peso * $request->price;

        $material_quotation = MaterialQuotation::create([
            'quantity'=>$request->cantidad,
            'name'=>$request->name,
            'total'=>$total,
            'ric_id'=>$request->id_ric,
            'material_id'=>$request->material_id
        ]);

        $materials = $this->getMaterialsQuotationByName($request->id_ric, $material_quotation->name);

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

    public function ManoObra(Request $request){
        if(!is_null($request->type)){
            $peso_neto = 0;
            if($request->type==1){
                $material = MaterialQuotation::where('name','cuerpo')
                ->orWhere('name', 'tapas')
                ->get();
                foreach ($material as $m) {
                    $peso_neto = $peso_neto + $m->material->net_weight;
                }
            }
            if($request->type==2){
                $material = MaterialQuotation::where('name','soporte')
                ->get();
                foreach ($material as $m) {
                    $peso_neto = $peso_neto + $m->material->net_weight;
                }
            }
            if($request->type==3){
                $material = MaterialQuotation::where('name','escalera')
                ->get();
                foreach ($material as $m) {
                    $peso_neto = $peso_neto + $m->material->net_weight;
                }
            }
            if($request->type==4){
                $material = MaterialQuotation::where('name','boquillas')
                ->get();
                foreach ($material as $m) {
                    $peso_neto = $peso_neto + $m->material->net_weight;
                }
            }
            if($request->type==5){
               $peso_neto = 0.05;
            }
            return response()->json([
                'peso_neto'=>$peso_neto,
                ]);
        }
        if($request->description!=5){
            $hours = $request->peso/$request->cadencia;
            $total =$hours * $request->precio_hora;
            $p = $total / $request->peso;
            $mano_obra = Manpower::create([
                'ric_id'=>$request->id_ric,
                'description'=>$request->description,
                'price_hour'=>$request->precio_hora,
                'net_weight'=>$request->peso,
                'cadence'=>$request->cadencia,
                'hours'=>$hours,
                'costo'=>$p,
                'total'=>$total
            ]);
        }else{
            $hours = 0;
            $a = Manpower::where('ric_id',$request->id_ric)->where('description','<>',5)->get();
            foreach ($a as $b) {
                $hours = $hours + $b->hours;
            }
            $hours = $request->peso * $hours;
            $total = $hours * $request->precio_hora;
            $mano_obra = Manpower::create([
                'ric_id'=>$request->id_ric,
                'description'=>$request->description,
                'price_hour'=>$request->precio_hora,
                'net_weight'=>$request->peso,
                'hours'=>$hours,
                'total'=>$total
            ]);
        }
        return response()->json($mano_obra);
    }

    public function deleteManoObra($id)
    {
        $material = Manpower::find($id);
        if(!is_null($material)){
            return response()->json($material->delete());
        }
        return abort(500);
    }

    public function consumibles(Request $request){
        $consumible = Consumable::create([
            'ric_id' => $request->id_ric,
            'description' => $request->descripcion,
            'quantity' => $request->cantidad,
            'unit_price' => $request->unit_price,
            'total' => $request->cantidad * $request->unit_price,
        ]);
        return response()->json($consumible);
    }

    public function deleteConsumible($id)
    {
        $material = Consumable::find($id);
        if(!is_null($material)){
            return response()->json($material->delete());
        }
        return abort(500);
    }

    public function notificaciones(){
        // return $pdf = PDF::loadView('pdfs.propuesta')->save(public_path().'/path/my_stored_file.pdf');
        // dd(public_path());
        // $pdf->save('pdfs/my_stored_file.pdf');
        // return $pdf->stream();
        try{
            User::chunk(2,function($users){
                foreach($users as $a){
                    Mail::send('emails.notifications', ['user'=> $a], function ($message) use ($a){
                        $message->from('notificaciones@ricsa.com','Notificaciones');
                        $message->to($a->email, $a->name)->subject('Se a terminado de cotizar una propuesta');
                    });
                }
            });
            return redirect()->route('cotizacion.index')->with('alert',Helpers::alertData('success','','saveSuccess'));

        } catch(\Exception $e){
            Log::error('Ocurrió un error al agregar comentario en ItemQuestionsController',[
                'message' => $e->getMessage()
            ]);
            return redirect()->back()->with('alert',Helpers::alertData('warning','','saveError'));
        }
    }

    public function getMaterials(Request $request)
    {
        $specification = $request->get('specification');
        if($specification){
            return Material::whereSpecification($specification)->get();
        }
        return Material::all();
    }
}
