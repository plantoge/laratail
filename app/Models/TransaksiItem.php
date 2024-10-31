<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransaksiItem extends Model
{
    protected $table = 'transaksi_item';
    protected $primaryKey = 'transaksiitem_id';
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'produk_id',
        'transaksi_id',
        'kuantitas',
    ];
}
