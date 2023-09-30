<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Track;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF(Request $request)
    {
        // dd($request);
        // $users = \App\Models\Track::with('kode_resi')->get();
        $users = Book::get()->last();
        $data = [
            'title' => 'Tiket Kunjungan',
            'date' => date('m/d/Y'),
            'users' => $users
        ];
        // $pdf = PDF::loadView('myPDF', $data);
        $pdf = PDF::loadView('myPDF', $data)->setPaper(array(0,10,210,430));
        return $pdf->download('Tiket_Kunjungan.pdf');
    }

    public function printPDF(Request $request)
    {
        // $users = \App\Models\Track::with('kode_resi')->get();
        // $users = Book::get()->last();
        $users = Book::get()->where('kode_resi',$request['kode_resi'])->last();
        // dd($users);
        $data = [
            'title' => 'Tiket Kunjungan',
            'date' => date('m/d/Y'),
            'users' => $users
        ];
        // $pdf = PDF::loadView('myPDF', $data);
        $pdf = PDF::loadView('myPDF', $data)->setPaper(array(0,10,210,430));
        return $pdf->download('Tiket_Kunjungan.pdf');
    }
}
