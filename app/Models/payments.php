<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    use HasFactory;
    protected $fillable = ['invoice_id', 'transaction_id', 'payment_method', 'amount'];
}
