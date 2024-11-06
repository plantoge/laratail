<?php

namespace App\Livewire\Produk;

use App\Models\produk;
use Livewire\Attributes\Title;
use Livewire\Component;

class Produkcreate extends Component
{
    #[Title('Tambah Produk')]

    public $nama;
    public $harga;

    public function save()
    {
        $this->validate([
            'nama' => 'required',
            'harga' => 'required',
        ]);

        produk::create([
            'nama' => $this->nama,
            'harga' => $this->harga
        ]);

        //flash message
        session()->flash('message', 'Data Berhasil Disimpan.');

        //redirect
        return $this->redirect('/produk', navigate: true);
    }

    public function render()
    {
        return view('livewire.produk.produkcreate');
    }
}
