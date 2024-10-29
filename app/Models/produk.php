<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'id_produk',
        'nama',
        'harga'
    ];
}
