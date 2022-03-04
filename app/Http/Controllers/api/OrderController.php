<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;

class OrderController extends Controller
{
  public function index()
  {
      return Orders::all();
  }

  public function create()
  {
      //
  }

  public function store(Request $request)
  {
      Orders::create($request->all());
  }

  public function show($id)
  {
      return Orders::findOrFail($id);
  }

  public function edit($id)
  {
      //
  }

  public function update(Request $request, $id)
  {
      $Order = Orders::findOrFail($id);
      $Order->update($request->all());
  }

  public function destroy($id)
  {
      $Order = Orders::findOrFail($id);
      $Order->delete();
  }
}
