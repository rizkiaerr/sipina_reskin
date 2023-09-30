<?php

namespace App\Http\Controllers;

use App\Models\Wbp;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class WbpShowController extends Controller
{
    public function show(Wbp $wbp){
        if(request('tanggal_lahir') && request('nama') && request('nama_ibu'))
        {

            $kegiatan = DB::table('wbps')
            ->join('kegiatans','kegiatans.wbp_id','wbps.id')
            ->Where('wbps.tanggal_lahir',request('tanggal_lahir'))
            ->Where('wbps.nama',request('nama'))
            ->Where('wbps.nama_ibu',request('nama_ibu'))
            ->join('users','users.id','wbps.user_id')->orderByDesc('tanggal_kegiatan')->paginate(10)->withQueryString();
            // "posts" => Post::latest()->filter(request(['search','category','author']))
            $kesehatan = DB::table('wbps')
            ->join('kesehatans','kesehatans.wbp_id','wbps.id')
            ->Where('wbps.tanggal_lahir',request('tanggal_lahir'))
            ->Where('wbps.nama',request('nama'))
            ->Where('wbps.nama_ibu',request('nama_ibu'))->get();

            $pelanggaran = DB::table('wbps')
            ->join('pelanggarans','pelanggarans.wbp_id','wbps.id')
            ->Where('wbps.tanggal_lahir',request('tanggal_lahir'))
            ->Where('wbps.nama',request('nama'))
            ->Where('wbps.nama_ibu',request('nama_ibu'))->get();


            $status = DB::table('wbps')
            ->join('statuses','statuses.wbp_id','wbps.id')
            ->Where('wbps.tanggal_lahir',request('tanggal_lahir'))
            ->Where('wbps.nama',request('nama'))
            ->Where('wbps.nama_ibu',request('nama_ibu'))->get();

            if($kegiatan->isEmpty()){
                abort(404);
            }

            return view('/wbp',[
                "title" => "Hasil Pencarian",
                "active" => 'search',
                "kegiatan" => $kegiatan,
                "kesehatan" => $kesehatan,
                "pelanggaran" => $pelanggaran,
                "status" => $status
                
            ]);
        }
    }
}
