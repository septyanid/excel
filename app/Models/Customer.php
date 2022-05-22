<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  use HasFactory;

  protected $fillable = [
    'customer_id',
    'name',
    'gender_id',
    'address',
    'phone_number',
  ];

  public function gender()
  {
    return $this->belongsTo(Gender::class);
  }

}

