<?php

namespace App\Http\Controllers;

use App\Models\Wbp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class WbpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $wbp = Wbp::paginate(25)->withQueryString();
        $wbp = DB::table('wbps')->orderBy('nama', 'asc')->paginate(30);
        return view('/dashboard/wbp/index',[
            "wbp" => $wbp,
            "counterTahanan" => 0,
            "counterNarapidana" => 0
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::get();
        return view('/dashboard/wbp/create',[
            "user" => $user,
            "counterTahanan" => 0,
            "counterNarapidana" => 0
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request['id_registrasi'] = preg_replace('/\s+/', '-', $request['id_registrasi']);
        $request['id_registrasi'] = str_replace("/", "-", $request['id_registrasi']);
        $validatedData = $request->validate([
            'id_registrasi' => 'required|max:15',
            'nama' => 'required|max:255',
            'user_id' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required|max:255',
            'jenis_kelamin' => 'required|max:6',
            'agama' => 'required|max:255',
            'sepertiga_masa_pidana' => 'required|max:255',
            'setengah_masa_pidana' => 'required|max:255',
            'duapertiga_masa_pidana' => 'required|max:255',
            'ekspirasi_awal' => 'required|max:255',
            'ekspirasi_akhir' => 'required|max:255',
            'nama_ibu' => 'required|max:255',
            'remisi' => 'required|max:255'
        ]);
        Wbp::create($validatedData);
        return redirect('/dashboard/wbp')->with('success','New Post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wbp  $wbp
     * @return \Illuminate\Http\Response
     */
    public function show(Wbp $wbp)
    {
        $wali = DB::table('users')
            ->select('users.id','users.name')
            ->join('wbps','wbps.user_id','users.id')
            ->where('users.id',$wbp->user_id) ->first();

        $kegiatan = DB::table('wbps')
            ->join('kegiatans','kegiatans.id_registrasi','wbps.id_registrasi')
            ->where('kegiatans.wbp_id',$wbp->id)
            ->get();

        $kesehatan = DB::table('wbps')
            ->join('kesehatans','kesehatans.id_registrasi','wbps.id_registrasi')
            ->where('kesehatans.wbp_id',$wbp->id)
            ->get();

        $pelanggaran = DB::table('wbps')
            ->join('pelanggarans','pelanggarans.id_registrasi','wbps.id_registrasi')
            ->where('pelanggarans.wbp_id',$wbp->id)
            ->get();

        $status = DB::table('wbps')
            ->join('statuses','statuses.id_registrasi','wbps.id_registrasi')
            ->where('statuses.wbp_id',$wbp->id)
            ->get();

        // $kegiatan kegiatans::get($wbp->id);
        // dd($query,$wbp);
        return view('/dashboard/wbp/show',[
            "wali" => $wali,
            "wbp" => $wbp,
            "kegiatan" => $kegiatan,
            "kesehatan" => $kesehatan,
            "pelanggaran" => $pelanggaran,
            "status" => $status,
            "counterTahanan" => 0,
            "counterNarapidana" => 0
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wbp  $wbp
     * @return \Illuminate\Http\Response
     */
    public function edit(Wbp $wbp)
    {
        $user = User::get();
        // dd($wbp,$user);
        return view('/dashboard/wbp/edit',[
            'wbp' => $wbp,
            'user' => $user,
            "counterTahanan" => 0,
            "counterNarapidana" => 0
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wbp  $wbp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wbp $wbp)
    {
        $request['id_registrasi'] = preg_replace('/\s+/', '-', $request['id_registrasi']);
        $request['id_registrasi'] = str_replace("/", "-", $request['id_registrasi']);
        $rules = [
            'nama' => 'required|max:255',
            'user_id' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required|max:255',
            'jenis_kelamin' => 'required|max:6',
            'agama' => 'required|max:255',
            'sepertiga_masa_pidana' => 'required|max:255',
            'setengah_masa_pidana' => 'required|max:255',
            'duapertiga_masa_pidana' => 'required|max:255',
            'ekspirasi_awal' => 'required|max:255',
            'ekspirasi_akhir' => 'required|max:255',
            'nama_ibu' => 'required|max:255',
            'remisi' => 'required|max:255'
        ];
        if($request->id_registrasi != $wbp->id_registrasi){
            $rules['id_registrasi'] = 'required|unique:wbps';
        }

        $validatedData = $request->validate($rules);

        Wbp::where('id', $wbp->id)->update($validatedData);
        return redirect('/dashboard/wbp')->with('success','Data WBP telah diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wbp  $wbp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wbp $wbp)
    {
        dd($wbp);
        Wbp::destroy($wbp->id);
        return redirect('/dashboard/wbp')->with('success','Data WBP telah dihapus!');
    }
}
