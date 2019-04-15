<?php

namespace App\Http\Controllers\Cotizacion;


use App\Customer;
use Illuminate\Http\Request;
use App\Libraries\Helpers;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'clients' => Customer::all(),
            'tab' => 'system',
            'subtab' => 'clients'
        ];
        return view('cotizacion.clients.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'tab' =>'system',
            'subtab' => 'clients'
        ];
        return view('cotizacion.clients.createoredit')->with($data);
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
            'email' => 'required|unique:users,email',
            'name'=> 'required',
            'company' => 'required',
            'phone' => 'required',
         ]);

         $client = Customer::create([
            'name' => $request->name,
            'company' => $request->company,
            'email' => $request->email,
            'phone' => $request->phone,
         ]);

         return redirect()->route('cotizacion.client.alta')->with('alert',Helpers::alertData('success','','saveSuccess'));

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
            'client' => Customer::find($id),
            'tab' => 'system',
            'subtab' => 'clients'
        ];
        return view('cotizacion.clients.createoredit')->with($data);
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
            'email' => 'required',
            'name'=> 'required',
            'company' => 'required',
            'phone' => 'required',
         ]);
         $user = Customer::find($id);
         $user->update([
             'name' => $request->get('name'),
             'company' => $request->get('company'),
             'email' => $request->get('email'),
             'phone' => $request->get('phone')
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
        $client = Customer::find($id);
        if(!is_null($client)){
            return response()->json($client->delete());
        }
        return abort(500);
    }
}
