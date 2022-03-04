<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
  use HasFactory;

  protected $fillable = [
    'clients_id', 'products_id'
  ];

  public function clients()
  {
    return $this->belongsTo(Clients::class);
  }
}
