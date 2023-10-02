<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrackAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listBook = DB::table('books')->paginate(20);
        return view('dashboard/resi_admin/index',
        [
            'listBook' => $listBook,
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
    public function show(Request $request)
    {
        $Key = $request->path();
        $Key = substr($Key, -8);
        $requestData = DB::table('books')
        // ->where('tracks.kode_resi',$request['kode_resi'])
        ->join('tracks','books.kode_resi','=','tracks.kode_resi')
        ->where('books.kode_resi', $Key)
        // ->where('.kode_resi', $request['kode_resi'])
        ->orderBy('tracks.created_at','asc')->get();
        // dd($requestData);
        return view('/dashboard/resi_admin/show',[
        'title' => 'Cek Resi',
        'active' => 'Cek Resi',
        'kode_resi' => $requestData,
        'counterTahanan' => 0,
        'counterNarapidana' => 0,
        // 'book' => $book
        ]);
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
     * @param  \Illuminate\Http\Request  $request
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
    public function destroy(Request $request)
    {
    $book = Book::find(2);
        dd($book);
        return redirect('/dashboard/resi_admin/')->with('success','Kegiatan telah dihapus!');
    }
}
