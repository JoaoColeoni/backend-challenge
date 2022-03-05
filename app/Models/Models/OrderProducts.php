<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProducts extends Model
{
  use HasFactory;
  
  protected $fillable = [
    'orders_id', 'products_id', 'quantity'
  ];

  public function orders()
  {
    return $this->belongsTo(Orders::class);
  }
}
