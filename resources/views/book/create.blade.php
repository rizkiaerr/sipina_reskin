@extends('layouts.main')

@section('container')

<div class="container-xxl bg-primary hero-header">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card text-dark" style="border-radius: 1rem; background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px);">
          <div class="card-body p-5 text-center">
            @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <main class="form-signin">
              <h1 class="h3 mb-3 fw-normal text-center">Daftar Pengunjung</h1>
              <form method="post" action="/book/create">
                @csrf
                <div class="form-floating mt-2">
                  <input type="text" name="nama_pengunjung" class="form-control @error('nama_pengunjung') is-invalid @enderror" id="nama_pengunjung" placeholder="Ranggi" autofocus required value="{{ old('nama_pengunjung') }}">
                  <label for="nama_pengunjung">Nama Pengunjung</label>
                  @error('nama_pengunjung')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-floating mt-2">
                  <input type="text" name="nik_pengunjung" class="form-control @error('nik_pengunjung') is-invalid @enderror" id="nik_pengunjung" placeholder="1234567890" autofocus required value="{{ old('nik_pengunjung') }}">
                  <label for="nik_pengunjung">NIK Pengunjung</label>
                  @error('nik_pengunjung')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-floating mt-2">
                  <input type="date" name="tanggal_kunjungan" class="form-control @error('tanggal_kunjungan') is-invalid @enderror" id="tanggal_kunjungan" placeholder="31-12-2000" autofocus required value="{{ old('tanggal_kunjungan') }}">
                  <label for="tanggal_kunjungan">Tanggal Berkunjung</label>
                  @error('tanggal_kunjungan')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <div class="form-floating">
                            <input type="number" min="0" max="8" name="jumlah_pengunjung" class="form-control @error('jumlah_pengunjung') is-invalid @enderror" id="jumlah_pengunjung" placeholder="0"  autofocus required value="{{ old('jumlah_pengunjung') }}">
                            <label for="jumlah_pengunjung">Jumlah Pengikut</label>
                            @error('jumlah_pengunjung')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                                @enderror
                        </div>
                    </div>
                    <div class="col-md-5 ">
                        <div class="form-floating">
                            <select class="form-select" id="status_wbp" name="status_wbp">
                                <option selected value="Tahanan">Tahanan</option>
                                <option value="Narapidana">Narapidana</option>
                            </select>
                            <label for="status_wbp">Status</label>
                        </div>
                    </div>
                </div>
                <div class="form-floating mt-2">
                    <input type="text" name="nama_wbp" class="form-control" id="nama_wbp" placeholder="" required>
                    <label for="nama_wbp">Nama WBP</label>
                </div>
                <div class="form-floating mt-2">
                    <input type="text" name="titipan_barang" class="form-control" id="titipan_barang">
                    <label for="nama_wbp">Titipan Barang</label>
                    <small class="d-block text-danger">Contoh : Makanan dan Uang Senilai 200 Ribu, Apabila tidak ada yang dititipkan, maka kosongkan saja</small>
                </div>
                <button class="w-100 btn btn-lg btn-info rounded-pill mt-3" type="submit">Daftar</button>
              </form>
              <small class="d-block text-danger mt-3">Pastikan sudah memiliki KK dan KTP dan kirimkan data melalui Livechat!</small>
              <small class="form-text text-danger mt-2">Pastikan Nama WBP benar</small>
            </main>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
