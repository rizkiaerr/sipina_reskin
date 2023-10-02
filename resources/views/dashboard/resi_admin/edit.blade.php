@extends('dashboard.layouts.main')

@section('container')
    {{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Data WBP</h1>
    </div> --}}

    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
            <h1 class="h3 mb-0 text-gray-800">Update Data WBP</h1>
        </div>

        <div class="row">
            <div class="col-lg-8 ">
                <form method="post" action="/dashboard/resi_admin/{{ $user->first()->kode_resi }}" class="row g-3">
                    @csrf
                    @method('PUT')
                    <div class="col-lg-6 mb-2">
                        <label for="nama_pengunjung" class="form-label">Nama Pengunjung</label>
                        {{-- {{ $user->first()->kode_resi }} --}}
                        <input type="text" class="form-control @error('nama_pengunjung') is-invalid @enderror" id="nama_pengunjung" name="nama_pengunjung" required autofocus value="{{ old('nama_pengunjung',$user->first()->nama_pengunjung) }}">
                        <input type="hidden" id="kode_resi" name="kode_resi" value="{{ $user->first()->kode_resi}}">
                        @error('nama_pengunjung')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="nik_pengunjung" class="form-label">NIK Pengunjung</label>
                        <input type="text" class="form-control @error('nik_pengunjung') is-invalid @enderror" id="nik_pengunjung" name="nik_pengunjung" required autofocus value="{{ old('nik_pengunjung',$user->first()->nik_pengunjung) }}">
                        @error('nik_pengunjung')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="nama_wbp" class="form-label">Nama WBP</label>
                        <input type="text" class="form-control @error('nama_wbp') is-invalid @enderror" id="nama_wbp" name="nama_wbp" required autofocus value="{{ old('nama_wbp',$user->first()->nama_wbp) }}">
                        @error('nama_wbp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="jumlah_pengunjung" class="form-label">Jumlah Pengikut</label>
                        <input type="number" min="0" max="8" name="jumlah_pengunjung" class="form-control @error('jumlah_pengunjung') is-invalid @enderror" id="jumlah_pengunjung" placeholder="0"  autofocus required value="{{ old('jumlah_pengunjung',$user->first()->jumlah_pengunjung) }}">
                        @error('jumlah_pengunjung')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="tanggal_kunjungan" class="form-label">Tanggal Berkunjung</label>
                        <input type="date" class="form-control @error('tanggal_kunjungan') is-invalid @enderror" id="tanggal_kunjungan" name="tanggal_kunjungan" required autofocus value="{{ old('tanggal_kunjungan',$user->first()->tanggal_kunjungan) }}">
                        @error('tanggal_kunjungan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="status_wbp" class="form-label">Status</label>
                        <select id="status_wbp" name="status_wbp" class="form-control">
                            @if(old('status_wbp',$user->first()->status_wbp)=="Tahanan")
                            <option value="Tahanan" selected>Tahanan</option>
                            <option value="Narapidana">Narapidana</option>
                            @elseif(old('status_wbp',$wbp->first()->status_wbp)=="Narapidana")
                            <option value="Narapidana" selected>Narapidana</option>
                            <option value="Tahanan">Tahanan</option>
                            @endif
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="titipan_barang" class="form-label">Titipan Barang</label>
                        <input type="text" class="form-control @error('titipan_barang') is-invalid @enderror" id="titipan_barang" name="titipan_barang" required autofocus value="{{ old('titipan_barang',$user->first()->titipan_barang) }}">
                        @error('titipan_barang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="col-md-2 mb-2 btn btn-lg btn-info rounded-pill mt-3" type="submit">Update</button>
                </form>
            </div>
        </div>

                <small class="d-block text-danger mt-3">Pastikan sudah memiliki KK dan KTP dan kirimkan data melalui Livechat!</small>
                <small class="form-text text-danger mt-2">Pastikan Nama WBP benar</small>
    </div>
@endsection

