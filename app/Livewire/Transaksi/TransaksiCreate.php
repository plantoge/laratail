<?php

namespace App\Livewire\Transaksi;

use App\Models\produk;
use App\Models\Transaksi;
use App\Models\TransaksiItem;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

class TransaksiCreate extends Component
{
    #[Title('Buat Transaksi')]

    public $total_harga = 0;
    public $nomor_transaksi;
    public $payment;
    public $rows = [];

    public function addItem()
    {
        $this->rows[] = ['product_id' => null, 'price' => 0, 'kuantitas' => 0];
    }
    
    public function updatePrice($produk_id, $index)
    {
        $product = produk::find($produk_id);
        $this->rows[$index]['price'] = $product ? $product->harga : 0;
    }

    public function updateTotalPrice($Kuantitas)
    {
        $total = 0;
        foreach ($this->rows as $i => $row) {
            $total += $row['price'] * $row['kuantitas'];
        }

        $this->total_harga = $total;
        
    }

    public function removeItem($index)
    {
        unset($this->rows[$index]);
        $this->rows = array_values($this->rows); // reindex array
    }

    public function save()
    {
        // dd($this->all());

        $this->validate([
            'nomor_transaksi' => 'required',
            'payment' => 'required',
            'total_harga' => 'required',
        ]);

        $transaksi =Transaksi::create([
            'nomor_transaksi' => $this->nomor_transaksi,
            'payment' => $this->payment,
            'total_harga' => $this->total_harga,
            'status' => 'pending',
            'user_id' => Auth::user()->id,
        ]);

        foreach ($this->rows as $row) {
            TransaksiItem::create([
                'transaksi_id' => $transaksi->transaksi_id,
                'produk_id' => $row['product_id'],
                'kuantitas' => $row['kuantitas'],
                'user_id' => Auth::user()->id,
            ]);
        }

        return $this->redirect('/transaksi', navigate: true);
    }

    public function mount()
    {
        $this->nomor_transaksi = strtoupper(uniqid('TR#'));
    }

    public function render()
    {
        return view('livewire.transaksi.transaksi-create', [
            'produk' => produk::all(),
        ]);
    }
}
