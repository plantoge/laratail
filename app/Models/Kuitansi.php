<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kuitansi extends Model
{
    protected $table = 'kuitansi';
    protected $primaryKey = 'kuitansi_id';
    public $timestamps = true;

    protected $fillable = [
        'kuitansi_id',
        'kuitansi_nomor',
        'tanggal',
        'nama_pembeli',
        'nominal',
        'tujuan',
    ];

    public function tagihans(): HasMany
    {
        return $this->hasMany(Tagihan::class, 'kuitansi_id', 'kuitansi_id');
    }
}
