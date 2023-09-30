<?php

namespace App\Http\Controllers;

use App\Models\Kesehatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorekesehatanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'keluhan_kesehatan' => 'required',
            'diagnosa' => 'required',
            'penanganan' => 'required',
            'id_registrasi' => 'required',
            'wbp_id' => 'required',
            'tanggal_kesehatan' => 'required'

        ]);

        Kesehatan::create($validatedData);
        return redirect('/dashboard/wbp/'.$validatedData['id_registrasi'])->with('success','Data riwayat Kesehatan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kesehatan  $kesehatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kesehatan $kesehatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kesehatan  $kesehatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kesehatan $kesehatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekesehatanRequest  $request
     * @param  \App\Models\Kesehatan  $kesehatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kesehatan $kesehatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kesehatan  $kesehatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kesehatan $kesehatan)
    {
       Kesehatan::destroy($kesehatan->id);
       return redirect('/dashboard/wbp/'.$kesehatan->id_registrasi)->with('success','Data riwayat kesehatan telah dihapus!');
    }
}
