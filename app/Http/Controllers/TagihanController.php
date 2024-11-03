<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function exportpdf($id)
    {
        $tagihan = Tagihan::findOrFail($id);
        $pdf = PDF::loadView('livewire.tagihan.tagihan-pdf', ['tagihan' => $tagihan]);
        return $pdf->stream('tagihan_' . $id . '.pdf');
        // return $pdf->download('tagihan_' . $id . '.pdf');
    }
}
