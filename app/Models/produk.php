<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'produk_id';
    public $timestamps = true;

    protected $fillable = [
        'produk_id',
        'nama',
        'harga'
    ];
}
