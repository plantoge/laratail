<?php

namespace App\Livewire\Transaksi;

use Livewire\Attributes\Title;
use Livewire\Component;

class TransaksiIndex extends Component
{
    #[Title('Transaksi')]
    public function render()
    {
        return view('livewire.transaksi.transaksi-index');
    }
}
