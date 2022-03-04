<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Clients;

class ClientController extends Controller
{
    public function index()
    {
        return Clients::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Clients::create($request->all());
    }

    public function show($id)
    {
        return Clients::findOrFail($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $Client = Clients::findOrFail($id);
        $Client->update($request->all());
    }

    public function destroy($id)
    {
        $Client = Clients::findOrFail($id);
        $Client->delete();
    }
}
