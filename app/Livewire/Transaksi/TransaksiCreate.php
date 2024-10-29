<?php

namespace App\Livewire\Transaksi;

use App\Models\TransaksaiItem;
use Livewire\Attributes\Title;
use Livewire\Component;

class TransaksiCreate extends Component
{
    #[Title('Buat Transaksi')]

    public $nama;
    public $harga;

    public function save()
    {
        $this->validate([
            'nama' => 'required',
            'harga' => 'required',
        ]);

        TransaksaiItem::create([
            'nama' => $this->nama,
            'harga' => $this->harga
        ]);

        return $this->redirect('/transaksi', navigate: true);
    }

    public function render()
    {
        return view('livewire.transaksi.transaksi-create');
    }
}
