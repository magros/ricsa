<?php

namespace App\Http\Controllers\Precio;

use App\Metal;
use Illuminate\Http\Request;
use App\Libraries\Helpers;
use App\Http\Controllers\Controller;

class MetalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'metals' => Metal::all(),
            'tab' => 'system',
            'subtab' => 'metals',
        ];
        return view('precio.metals.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'tab' => 'system',
            'subtab' => 'metals'
        ];
        return view('precio.metals.createoredit')->with($data);
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
            'name' => 'required',
            'descrition' => 'required',
            'price' => 'required',
        ]);

        $metal = Metal::create([
            'name' => $request->name,
            'descption' => $request->description,
            'price' => $request->price,
        ]);
        return redirect()->route('precio.metal.create')->with('alert',Helpers::alertData('success','','saveSuccess'));
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
            'metal' => Metal::find($id),
            'tab' => 'system',
            'subtab' => 'metals',
        ];
        return view('precio.metals.createoredit')->with($data);
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
        $request->validate([
            'description' => 'required',
            'price' => 'required',
        ]);
        $metal = Metal::find($id);
        $metal->update([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
        ]);
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
        $metal = Metal::find($id);
        if(!is_null($metal)){
            return response()->json($metal->delete());
        }
        return \abort(500);
    }
}
