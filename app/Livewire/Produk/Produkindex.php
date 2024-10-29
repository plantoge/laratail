<?php

namespace App\Livewire\Produk;

use App\Models\produk;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class Produkindex extends Component
{
    use WithPagination;

    #[Title('Produk')]
    public $search = '';

    public function destroy($id)
    {
        $produk = produk::find($id);
        $produk->delete();

        session()->flash('message', 'Produk berhasil di hapus');

        return $this->redirect('/produk', navigate: true);
    }

    public function render()
    {
        $produk = produk::where('nama', 'like', '%' . $this->search . '%')
            ->orwhere('harga', 'like', '%' . $this->search . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        return view('livewire.produk.produkindex', [
            'produk' => $produk
        ]);
    }
}
