<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'transaksi_id';
    public $timestamps = true;

    protected $fillable = [
        'transaksi_id',
        'user_id',
        'nomor_transaksi',
        'payment',
        'total_harga',
        'status',
    ];

}
