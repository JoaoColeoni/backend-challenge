<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Products;

class ProductController extends Controller
{
  private $product;

  public function __construct(Products $product){
    $this->product = $product;
  }

  public function index()
  {
      return $this->product->paginate(10);
      //return Products::all();
  }

  public function create()
  {
      //
  }

  public function store(Request $request)
  {
      $request->validate([
        'name' => 'required|min:4|max:60',
        'price' => 'numeric|required'
      ]);
      return Products::create($request->all());
  }

  public function show(Products $product)
  {
      return $product;
  }

  public function edit($id)
  {
      //
  }

  public function update(Request $request, $id)
  {
      $Product = Products::findOrFail($id);
      $Product->update($request->all());

      return $Product;
  }

  public function destroy($id)
  {
      $Product = Products::findOrFail($id);
      return $Product->delete();
  }
}
