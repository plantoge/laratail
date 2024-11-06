<?php

namespace App\Livewire\Tagihan;

use App\Models\Kuitansi;
use App\Models\Tagihan;
use App\Models\Transaksi;
use App\Models\TransaksiItem;
use Barryvdh\DomPDF\Facade\PDF;
use Livewire\Attributes\Title;
use Livewire\Component;

class TagihanIndex extends Component
{
    #[Title('Tagihan')]
    public $search;

    public function Exportpdf($id)
    {
        $tagihan = Tagihan::findOrFail($id);
        $transaksi = Transaksi::findOrFail($tagihan->transaksi_id);
        $item = TransaksiItem::join('produk', 'produk.produk_id', '=', 'transaksi_item.produk_id')
            ->where('transaksi_id', $tagihan->transaksi_id)
            ->get();

        $pdf = PDF::loadView('livewire.tagihan.tagihan-pdf', [
            'tagihan' => $tagihan,
            'transaksi' => $transaksi,
            'item' => $item
        ]);

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, 'tagihan_' . date('Y-m-d') . '.pdf');

    }

    public function destroy($id)
    {
        $tagihan = Tagihan::find($id);
        $kuitansi = Kuitansi::find($tagihan->kuitansi_id);
        $kuitansi->delete();
        $tagihan->delete();

        session()->flash('message', 'Tagihan berhasil di hapus');

        return $this->redirect('/tagihan', navigate: true);
    }

    public function render()
    {
        $tagihan = Tagihan::join('kuitansi', 'kuitansi.kuitansi_id', '=', 'tagihan.kuitansi_id', 'left')
            ->selectRaw('
                tagihan.tagihan_id,
                tagihan.tanggal as tanggal_tagihan,
                tagihan.kepada,
                tagihan.jumlah,
                tagihan.created_at,
                kuitansi.kuitansi_id,
                kuitansi.kuitansi_nomor
            ')
            ->distinct()
            ->where('kuitansi.kuitansi_nomor', 'like', '%' . $this->search . '%')
            ->orwhere('tagihan.jumlah', 'like', '%' . $this->search . '%')
            ->orwhere('tagihan.kepada', 'like', '%' . $this->search . '%')
            ->orwhere('tagihan.tanggal', 'like', '%' . $this->search . '%')
            ->orderBy('tagihan.created_at', 'desc')
            ->paginate(5);

        return view('livewire.tagihan.tagihan-index', [
            'tagihan' => $tagihan
        ]);
    }
}
