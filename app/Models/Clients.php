<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
  protected $fillable = [
    'name', 'email', 'phone', 'birthdate', 'adress', 'complement', 'district', 'zipcode', 'registration_date'
  ];
}
