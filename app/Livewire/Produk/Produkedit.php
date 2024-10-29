<?php

namespace App\Livewire\Produk;

use App\Models\produk;
use Livewire\Attributes\Title;
use Livewire\Component;

class Produkedit extends Component
{
    #[Title('Produk Edit')]

    public $id;
    public $nama;
    public $harga;

    public function mount($id)
    {
        $data = produk::find($id);

        if ($data) {
            $this->id = $data->id;
            $this->nama = $data->nama;
            $this->harga = $data->harga;
        }
    }

    public function update()
    {
        $this->validate([
            'nama'   => 'required',
            'harga' => 'required',
        ]);

        if($this->id) {

            $post = produk::find($this->id);
            
            if($post) {
                $post->update([
                    'nama'     => $this->nama,
                    'harga'   => $this->harga
                ]);
            }
        }

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        //redirect
        return $this->redirect('/produk', navigate: true);
    }

    public function render()
    {
        return view('livewire.produk.produkedit');
    }
}
