<?php

namespace App\Http\Controllers\Ingenieria;

use App\Ric;
use App\MaterialQuotation;
use App\Material;
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
            'materials' => Materials::all(),
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
            'material_quotation' => MaterialQuotation::all(),
            'materials' => Materials::all(),
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
}
