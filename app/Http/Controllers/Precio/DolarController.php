<?php

namespace App\Http\Controllers\Precio;

use App\Dollar;
use Illuminate\Http\Request;
use App\Libraries\Helpers;
use App\Http\Controllers\Controller;

class DolarController extends Controller
{
    /**
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'dollars' => Dollar::all(),
            'tab' => 'system',
            'subtab' => 'dollars',
        ];
        return view('precio.dollars.index')->with($data);
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
            'subtab' => 'dollars',
        ];
        return view('precio.dollars.createoredit')->with($data);
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
            'price' => 'required',
        ]);

        $dollar = Dollar::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);
        return redirect()->route('precio.dollar.create')->with('alert',Helpers::alertData('success','','saveSuccess'));
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
            'dollar' => Dollar::find($id),
            'tab' => 'system',
            'subtab' => 'dollars'
        ];
        return view('precio.dollars.createoredit')->with($data);
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
            'price' => 'required',
        ]);
        $dollar = Dollar::find($id);
        $dollar->update([
            'name' => $request->get('name'),
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
        $dollar = Dollar::find($id);
        if(!is_null($dollar)){
            return response()->json($dollar->delete());
        }
        return abort(500);
    }
}
