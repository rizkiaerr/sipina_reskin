@extends ('layouts.main')
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
                    <h1 class="h3 mb-3 fw-normal text-center">Tracking Barang WBP</h1>
                    <h1 class="h3 mb-3 fw-normal text-center"> a.n. {{ $nama_wbp }}</h1>
                    <div class="col-md">
                        <form method="post" action="/dashboard/resi" class="mb-5" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_petugas" class="form-label">Nama Petugas</label>
                                <input text="text" class="form-control @error('nama_petugas') is-invalid @enderror" id="nama_petugas" name="nama_petugas" value="{{ old('nama_petugas') }}">
                                @error('nama_petugas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="kode_resi" class="form-label">Kode Resi</label>
                                <input type="text" class="form-control @error('kode_resi') is-invalid @enderror" id="kode_resi" name="kode_resi" value="{{ $requestData }}" readonly>
                                <input type="hidden" id="titipan_barang" name="titipan_barang" value="{{ $titipan_barang }}">
                                @error('kode_resi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="posisi_titipan" class="form-label">Posisi Titipan</label>
                                <input type="text" class="form-control @error('posisi_titipan') is-invalid @enderror" id="posisi_titipan" name="posisi_titipan" required value="{{ old('posisi_titipan') }}">
                                @error('posisi_titipan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                               @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
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

