<?php

namespace App\Livewire\Transaksi;

use App\Models\Transaksi;
use App\Models\TransaksiItem;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

class TransaksiDetail extends Component
{
    #[Title('Transaksi Detail')]
    public $total_harga = 0;
    public $nomor_transaksi;
    public $payment;
    public $status;
    public $user;
    public $rows = [];

    public function mount($id)
    {
        $transaksi = Transaksi::find($id);
        $this->user = User::find($transaksi->user_id);
        $this->nomor_transaksi = $transaksi->nomor_transaksi;
        $this->payment = $transaksi->payment;
        $this->status = $transaksi->status;
        $this->total_harga = $transaksi->total_harga;

        $this->rows = TransaksiItem::join('produk', 'produk.produk_id', '=', 'transaksi_item.produk_id')
            ->where('transaksi_id', $id)->get();
    }
    public function render()
    {
        return view('livewire.transaksi.transaksi-detail');
    }
}
