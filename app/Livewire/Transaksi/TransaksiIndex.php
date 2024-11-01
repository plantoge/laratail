<?php

namespace App\Livewire\Transaksi;

use App\Models\Transaksi;
use App\Models\TransaksiItem;
use Livewire\Attributes\Title;
use Livewire\Component;

class TransaksiIndex extends Component
{
    #[Title('Transaksi')]
    public $search;

    public function destroy($id)
    {
        $transaksi = Transaksi::find($id);
            TransaksiItem::where('transaksi_id', $transaksi->transaksi_id)->delete();
        $transaksi->delete();

        return $this->redirect('/transaksi', navigate: true);
    }

    public function render()
    {
        $transaksi = Transaksi::join('transaksi_item as item', 'item.transaksi_id', '=', 'transaksi.transaksi_id', 'left')
            ->select('transaksi.*')
            ->distinct()
            ->where('transaksi.nomor_transaksi', 'like', '%' . $this->search . '%')
            ->orwhere('transaksi.payment', 'like', '%' . $this->search . '%')
            ->orwhere('transaksi.total_harga', 'like', '%' . $this->search . '%')
            ->orwhere('transaksi.status', 'like', '%' . $this->search . '%')
            ->orderBy('transaksi.created_at', 'desc')
            ->paginate(5);

        return view('livewire.transaksi.transaksi-index', [
            'transaksi' => $transaksi
        ]);
    }
}
