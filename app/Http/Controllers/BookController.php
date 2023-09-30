<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Track;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use Carbon\Carbon;

// use App\Http\Requests\StoreBookRequest;
// use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('book.create',[
            'title' => 'Book',
            'active' => 'Book'
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create',[
            'title' => 'Book',
            'active' => 'Book'
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pengunjung' => 'required',
            'nik_pengunjung' => 'required',
            'tanggal_kunjungan' => 'required',
            'jumlah_pengunjung' => 'required',
            'status_wbp' => 'required',
            'nama_wbp' => 'required',
            'titipan_barang' => 'nullable'
        ]);

        $validatedData['kode_resi'] = Carbon::now()->format('dHis');
        if($validatedData['titipan_barang'] == NULL ){
            $validatedData['posisi_titipan'] = "Tidak ada barang yang akan dititipkan";
        } else {
            $validatedData['posisi_titipan'] = "Titipan sudah didaftar dan akan kami periksa pada saat kunjungan";
        }

        Book::create($validatedData);
        Track::create($validatedData);
        return redirect('/generate-pdf')->with('success','Pendaftaran berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookRequest  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
