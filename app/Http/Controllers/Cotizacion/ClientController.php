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
            'tab' => 'quotation',
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
            'tab' =>'quotation',
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
            'rfc' => 'required',
            'delivery_conditions' => 'required',
            'payment_conditions' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'business_name' => 'required'

         ]);

        $client = Customer::create([
            'name' => $request->name,
            'company' => $request->company,
            'email' => $request->email,
            'phone' => $request->phone,
            'rfc' => $request->phone,
            'delivery_conditions' => $request->delivery_conditions,
            'payment_conditions' => $request->payment_conditions,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'business_name' => $request->business_name
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
            'tab' => 'quotation',
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
            'email' => 'required|unique:users,email',
            'name'=> 'required',
            'company' => 'required',
            'phone' => 'required',
            'rfc' => 'required',
            'delivery_conditions' => 'required',
            'payment_conditions' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'business_name' => 'required'
         ]);
         $user = Customer::find($id);
         $user->update([
             'name' => $request->get('name'),
             'company' => $request->get('company'),
             'email' => $request->get('email'),
             'phone' => $request->get('phone'),
             'rfc' => $request->get('rfc'),
             'delivery_conditions' => $request->get('delivery_conditions'),
             'payment_conditions' => $request->get('payment_conditions'),
             'country' => $request->get('country'),
             'state' => $request->get('state'),
             'city' => $request->get('city'),
             'business_name' => $request->get('business_name')
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
