<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function exportpdf()
    {
        return view('livewire.tagihan.tagihan-pdf');
    }
}
