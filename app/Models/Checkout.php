<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

       
    protected $fillable = [
        'user_id',
        'camp_id',
        'card_nummber',
        'expired',
        'cvc',
        'is_paid'
    ];
  
}
