<?php

namespace App\Http\Controllers\api;

use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Clients;
use App\Models\Models\Orders;

class OrderController extends Controller
{
  private $order;

  public function __construct(Orders $order){
    $this->order = $order;
  }

  public function index()
  {
      return $this->order->paginate(10);
      //return Orders::all();
  }

  public function create()
  {
      //
  }

  public function store(Request $request)
  {
      $request->validate([
        'clients_id' => 'exists:clients,id|required'
      ]);

      $Client = Clients::findOrFail($request->clients_id);
      $Order = Orders::create($request->all());


      Mail::send('mail.info_mail_pedido', ['Cliente' => $Client->name, 'Pedido' => $Order->id, 'Produto' => null], function ($m) use ($Client) {
        $m->from('joaocoleoni@gmail.com', 'Joao');
        $m->subject('Teste');
        $m->to($Client->email);
      });

      return $Order;
  }

  public function show(Orders $order)
  {
      return $order->with('orderProducts')->first();
  }

  public function edit($id)
  {
      //
  }

  public function update(Request $request, $id)
  {
      $Order = Orders::findOrFail($id);
      $Order->update($request->all());

      return $Order;
  }

  public function destroy($id)
  {
      $Order = Orders::findOrFail($id);
      return $Order->delete();
  }
}
