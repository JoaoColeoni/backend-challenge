<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Products;

class ProductController extends Controller
{
  public function index()
  {
      return Products::all();
  }

  public function create()
  {
      //
  }

  public function store(Request $request)
  {
      Products::create($request->all());
  }

  public function show($id)
  {
      return Products::findOrFail($id);
  }

  public function edit($id)
  {
      //
  }

  public function update(Request $request, $id)
  {
      $Product = Products::findOrFail($id);
      $Product->update($request->all());
  }

  public function destroy($id)
  {
      $Product = Products::findOrFail($id);
      $Product->delete();
  }
}
