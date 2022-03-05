<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Clients;

class ClientController extends Controller
{
    private $client;

    public function __construct(Clients $client){
      $this->client = $client;
    }

    public function index()
    {
        return $this->client->paginate(10);
        // return Clients::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
          'name' => 'required|min:4|max:120',
          'email' => 'required|min:5|max:80',
          'phone' => 'required|max:14',
          'birthdate' => 'required|date',
          'adress' => 'required|max:80',
          'complement' => 'max:80',
          'district' => 'required|max:80',
          'zipcode' => 'required|max:8'
        ]);
        return Clients::create($request->all());
    }

    public function show(Clients $client)
    {
        return $client->with('orders')->first();
        // return Clients::findOrFail($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $Client = Clients::findOrFail($id);
        $Client->update($request->all());

        return $Client;
    }

    public function destroy($id)
    {
        $Client = Clients::findOrFail($id);
        return $Client->delete();
    }
}
