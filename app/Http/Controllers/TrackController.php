<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $requestData = DB::table('books')
        ->join('tracks','books.kode_resi','=','tracks.kode_resi')
        ->where('books.kode_resi', $request['kode_resi'])
        ->get();
    return view('/resi/index',[
        'title' => 'Cek Resi',
        'active' => 'Cek Resi',
        'kode_resi' => $requestData
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
        {
            $validatedData = $request->validate([
                'kode_resi' => 'required',
                'posisi_titipan' => 'required',
                'titipan_barang' =>'required'
            ]);
            $nama_petugas[0]='Aan';
            $nama_petugas[1]='Imay';
            $nama_petugas[2]='Triadi';
            $nama_petugas[3]='Eko';
            $nama_petugas[4]='Sanjaya';
            $nama_petugas[5]='Jojon';
            $nama_petugas[6]='Haryo';
            $nama_petugas[7]='Putra';
            $nama_petugas[8]='Rafi';
            $nama_petugas[9]='Dadang';
            $nama_petugas[10]='Adi';
            $nama_petugas[11]='Miftah';
            $nama_petugas[12]='Rizkia';
            $nama_petugas[13]='Deta';
            $nama_petugas[14]='Dedi';
            $nama_petugas[15]='Joko';
            $nama_petugas[16]='Prima';
            $nama_petugas[17]='Rizal';
            $nama_petugas[18]='Hidayat';
            $nama_petugas[19]='Veri';
            $nama_petugas[20]='Rizky';
            $nama_petugas[21]='Taufik';
            $nama_petugas[22]='Alfis';
            $nama_petugas[23]='Dimas';
            $nama_petugas[24]='Gugun';
            $nama_petugas[25]='Hadi';
            $nama_petugas[26]='Budi';
            $nama_petugas[27]='';

            $i=0;
            while ($i <= 26) {
                $i++;
                if ($request['nama_petugas'] == $nama_petugas[$i]){
                    $i=26;
                    Track::create($validatedData);
                    return redirect('/resi'.$request['kode_resi'])->with('success','Tracking Baru berhasil ditambahkan!');
                    echo "Ketemu Sudah berulang selama ".$i."kali <br>";
                }
            }

            abort(404);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $requestData = $request->path();
        $requestData = substr($requestData, -8);
        $Data = DB::table('tracks')->join('books','tracks.kode_resi','books.kode_resi')->Where('tracks.kode_resi',$requestData)->get()->toArray();
        // dd($Data);
        $nama_wbp = $Data[0]->nama_wbp;
        $titipan_barang = $Data[0]->titipan_barang;
        return view('/resi/show',[
            'title' => 'Cek Resi',
            'active' => 'Cek Resi',
            'requestData' => $requestData,
            'nama_wbp' => $nama_wbp,

            'titipan_barang' => $titipan_barang
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function edit(Track $track)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Track $track)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function destroy(Track $track)
    {
        //
    }
}
