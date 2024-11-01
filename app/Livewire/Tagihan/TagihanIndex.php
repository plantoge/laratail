<?php

namespace App\Livewire\Tagihan;

use App\Models\Kuitansi;
use App\Models\Tagihan;
use Livewire\Attributes\Title;
use Livewire\Component;

class TagihanIndex extends Component
{
    #[Title('Tagihan')]
    public $search;

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
