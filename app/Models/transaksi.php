<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    public $fillable = ['uuid', 'user_id', 'produk_id', 'amount', 'tax', 'admin_fee' , 'total'];
}
