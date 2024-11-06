<?php

namespace App\Livewire\Tagihan;

use App\Models\Kuitansi;
use App\Models\Tagihan;
use App\Models\Transaksi;
use Livewire\Attributes\Title;
use Livewire\Component;

class TagihanCreate extends Component
{
    #[Title('Tagihan')]
    
    public $kuitansi_nomor, $tanggal_kuitansi, $nama_pembeli, $nominal, $tujuan;
    public $transaksi_id, $kepada, $dari, $tagihan_mengenai, $bagian, $tanggal_tagihan, $jumlah, $nama_bank, $nama_rekening, $nomor_rekening, $npwp;

    public function save()
    {
        $this->validate([
            'kuitansi_nomor' => 'required',
            'tanggal_kuitansi' => 'required',
            'nama_pembeli' => 'required',
            'nominal' => 'required',
            'tujuan' => 'required',
            'kepada' => 'required',
            'dari' => 'required',
            'tagihan_mengenai' => 'required',
            'bagian' => 'required',
            'tanggal_tagihan' => 'required',
            'nama_bank' => 'required',
            'nama_rekening' => 'required',
            'nomor_rekening' => 'required',
            'npwp' => 'required',            
        ]);

        $kuitansi = Kuitansi::create([
            'kuitansi_nomor' => $this->kuitansi_nomor,            
            'tanggal' => $this->tanggal_kuitansi,            
            'nama_pembeli' => $this->nama_pembeli,            
            'nominal' => intval($this->nominal),            
            'tujuan' => $this->tujuan,            
        ]);

        Tagihan::create([
            'kepada' => $this->kepada,
            'dari' => $this->dari,
            'tagihan_mengenai' => $this->tagihan_mengenai,
            'bagian' => $this->bagian,
            'tanggal' => $this->tanggal_tagihan,
            'jumlah' => $this->jumlah,
            'nama_bank' => $this->nama_bank,
            'nama_rekening' => $this->nama_rekening,
            'nomor_rekening' => $this->nomor_rekening,
            'npwp' => $this->npwp,
            'transaksi_id' => $this->transaksi_id,
            'kuitansi_id' => $kuitansi->kuitansi_id,
        ]);

        session()->flash('message', 'Tagihan berhasil di simpan');
        return $this->redirect('/tagihan', navigate: true);
    }

    public function render()
    {
        $transaksi = Transaksi::all();
        return view('livewire.tagihan.tagihan-create', [
            'transaksi' => $transaksi
        ]);
    }
}
