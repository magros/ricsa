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

        $clients = Customer::latest()->paginate(10);

        return view('cotizacion.clients.index', compact('clients'));
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

    private function validateCreateOrSave(Request $request)
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateCreateOrSave($request);

        Customer::create($request->all());

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
     * @param Customer $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $client)
    {
        return view('cotizacion.clients.createoredit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Customer $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $client)
    {
        $client->update($request->all());

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
