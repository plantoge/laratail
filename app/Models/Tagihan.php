<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    protected $table = 'tagihan';
    protected $primaryKey = 'tagihan_id';
    public $timestamps = true;

    protected $fillable = [
        'tagihan_id',
        'transaksi_id',
        'kuitansi_id',
        'kepada',
        'dari',
        'tagihan_mengenai',
        'bagian',
        'tanggal',
        'jumlah',
        'nama_bank',
        'nama_rekening',
        'nomor_rekening',
        'npwp',
        'nomor_kuitansi',
    ];
}
