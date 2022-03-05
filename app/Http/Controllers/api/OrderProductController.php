<?php

namespace App\Http\Controllers\api;

use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\OrderProducts;
use App\Models\Models\Clients;
use App\Models\Models\Orders;
use App\Models\Models\Products;

class OrderProductController extends Controller
{
    private $order_product;

    public function __construct(OrderProducts $order_product){
      $this->order_product = $order_product;
    }

    public function index()
    {
      return $this->order_product->paginate(10);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
      $request->validate([
        'orders_id' => 'exists:orders,id|required',
        'products_id' => 'exists:products,id|required',
        'quantity' => 'required|numeric',
      ]);

      $Order   = Orders::findOrFail($request->orders_id);
      $Client  = Clients::findOrFail($Order->clients_id);
      $Product = Products::findOrFail($request->products_id);

      Mail::send('mail.info_mail_pedido', ['Cliente' => $Client->name, 'Pedido' => $request->orders_id, 'Produto' => $Product], function ($m) use ($Client) {
        $m->from('joaocoleoni@gmail.com', 'Joao');
        $m->subject('Teste Produto');
        $m->to($Client->email);
      });

      return OrderProducts::create($request->all());
    }

    public function show(OrderProducts $order_product)
    {
      return $order_product;
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
      $Order_product = OrderProducts::findOrFail($id);
      $Order_product->update($request->all());

      return $Order_product;
    }

    public function destroy($id)
    {
        $Order_product = OrderProducts::findOrFail($id);
        return $Order_product->delete();
    }
}
