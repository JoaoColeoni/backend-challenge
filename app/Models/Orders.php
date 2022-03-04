<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
  protected $fillable = [
    'client_id', 'product_id', 'registration_date'
  ];
}
