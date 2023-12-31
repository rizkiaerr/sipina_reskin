<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TrackAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = DB::table('books')->paginate(20);

        return view('dashboard/resi_admin/index',
        [
            'book' => $book,
            'counterTahanan' => 0,
            'counterNarapidana' => 0
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,Book  $book)
    {
        $Key = $request->path();
        $Key = substr($Key,-8);
        $requestData = DB::table('books')
        ->join('tracks','books.kode_resi','=','tracks.kode_resi')
        ->where('books.kode_resi', $Key)
        ->orderBy('tracks.created_at','asc')->get();
        return view('/dashboard/resi_admin/show',[
        'title' => 'Cek Resi',
        'active' => 'Cek Resi',
        'kode_resi' => $requestData,
        'counterTahanan' => 0,
        'counterNarapidana' => 0
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book, Request $request)
    {
        $Key = $request->path();
        $Key = substr($Key, -13,8);
        $user = DB::table('books')
        ->join('tracks','books.kode_resi','=','tracks.kode_resi')
        ->where('books.kode_resi', $Key)
        ->orderBy('tracks.created_at','asc')->get();
        // dd($user);
        return view('/dashboard/resi_admin/edit',[
            'title' => 'Cek Resi',
            'active' => 'Cek Resi',
            'counterTahanan' => 0,
            'counterNarapidana' => 0,
            'user' => $user
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $updateBook = $request->validate([
            'kode_resi' => 'required',
            'nama_pengunjung' => 'required',
            'nik_pengunjung' => 'required',
            'tanggal_kunjungan' => 'required',
            'jumlah_pengunjung' => 'required',
            'status_wbp' => 'required',
            'nama_wbp' => 'required',
        ]);

        // dd($request['kode_resi']);
        $updateTrack = $request->validate([
            'kode_resi' => 'required',
            'titipan_barang' => 'nullable'
        ]);

        Book::where('kode_resi', $request['kode_resi'])->update($updateBook);
        Track::where('kode_resi', $request['kode_resi'])->update($updateTrack);
        return redirect('/dashboard/resi_admin/')->with('success','Update berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $book)
    {
        $Key = $book->path();
        $Key = substr($Key, -8);
        // dd($Key);
        DB::table('books')->where('kode_resi', $Key)->delete();
        DB::table('tracks')->where('kode_resi', $Key)->delete();
        // Book::destroy($book->book_id);
        // $book = Book::destroy($book->id)->get();
        return redirect('/dashboard/resi_admin')->with('success','Kegiatan telah dihapus!');
    }
}
