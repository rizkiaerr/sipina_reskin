@extends('dashboard.layouts.main')

@section('container')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
            <h1 class="h3 mb-0 text-gray-800">Data WBP Baru</h1>
        </div>
        <div class="row">
            <div class="col-lg-8 ">
                <form method="post" action="/dashboard/wbp" class="row g-3">
                    @csrf
                    <div class="col-lg-6 mb-2">
                        <label for="id_registrasi" class="form-label">ID Registrasi</label>
                        <input type="text" class="form-control @error('id_registrasi') is-invalid @enderror" id="id_registrasi" name="id_registrasi" required autofocus value="{{ old('id_registrasi') }}">
                        @error('id_registrasi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    <input type="hidden" class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id" required autofocus value="{{ auth()->user()->id }}">

                    @can('admin')
                        <div class="col-lg-6 mb-2">
                            <label for="user_id" class="form-label">Nama Wali</label>
                            <select class="form-control" name="user_id">
                                @foreach($user as $user_id)
                                    <option value="{{ $user_id->id }}" selected>{{ $user_id->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    @endcan

                    <div class="col-md-6 mb-2">
                        <label for="nama" class="form-label">Nama WBP</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="nama_ibu" class="form-label">Nama Ibu Kandung</label>
                        <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu" name="nama_ibu" required autofocus value="{{ old('nama_ibu') }}">
                        @error('nama_ibu')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" required autofocus value="{{ old('tempat_lahir') }}">
                        @error('tempat_lahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" required autofocus value="{{ old('tanggal_lahir') }}">
                        @error('tanggal_lahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                            <option value="Pria" selected>Pria</option>
                            <option value="Wanita" >Wanita</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="agama" class="form-label">Agama</label>
                        <select id="agama" name="agama" class="form-control">
                            <option value="Islam" selected>Islam</option>
                            <option value="Kristen">Protestan</option>
                            <option value="Kristen">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="sepertiga_masa_pidana" class="form-label">1/3 Masa Pidana</label>
                        <input type="date" class="form-control @error('sepertiga_masa_pidana') is-invalid @enderror" id="sepertiga_masa_pidana" name="sepertiga_masa_pidana" required autofocus value="{{ old('sepertiga_masa_pidana') }}">
                        @error('sepertiga_masa_pidana')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="setengah_masa_pidana" class="form-label">1/2 Masa Pidana</label>
                        <input type="date" class="form-control @error('setengah_masa_pidana') is-invalid @enderror" id="setengah_masa_pidana" name="setengah_masa_pidana" required autofocus value="{{ old('setengah_masa_pidana') }}">
                        @error('setengah_masa_pidana')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="duapertiga_masa_pidana" class="form-label">2/3 Masa Pidana</label>
                        <input type="date" class="form-control @error('duapertiga_masa_pidana') is-invalid @enderror" id="duapertiga_masa_pidana" name="duapertiga_masa_pidana" required autofocus value="{{ old('duapertiga_masa_pidana') }}">
                        @error('duapertiga_masa_pidana')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="ekspirasi_awal" class="form-label">Ekspirasi Awal </label>
                        <input type="date" class="form-control @error('ekspirasi_awal') is-invalid @enderror" id="ekspirasi_awal" name="ekspirasi_awal" required autofocus value="{{ old('ekspirasi_awal') }}">
                        @error('ekspirasi_awal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="ekspirasi_akhir" class="form-label">Ekspirasi Akhir</label>
                        <input type="date" class="form-control @error('ekspirasi_akhir') is-invalid @enderror" id="ekspirasi_akhir" name="ekspirasi_akhir" autofocus value="{{ old('ekspirasi_akhir') }}">
                        @error('ekspirasi_akhir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="remisi" class="form-label">Remisi</label>
                        <input type="text" class="form-control @error('remisi') is-invalid @enderror" id="remisi" name="remisi" required autofocus value="{{ old('remisi') }}">
                        @error('remisi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <small class="form-text text-danger mb-2">*Pastikan 2/3 Masa Pidana sudah akurat sesuai dengan teleram</small>
                        <small class="form-text text-danger mb-2">*Tanggal pulang dapat dikosongkan apabila SK belum ada</small>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection



    {{-- <form class="user" method="post" action="/dashboard/wbp">
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user @error('id_registrasi') is-invalid @enderror" placeholder="ID Registrasi" id="id_registrasi" name="id_registrasi" required autofocus value="{{ old('id_registrasi') }}">
                @error('id_registrasi')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
            </div>

            <input type="hidden" class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id" required autofocus value="{{ auth()->user()->id }}">

            <div class="col-sm-6">
                <label for="user_id" class="form-label">Nama Wali</label>
                <select class="form-control" name="user_id">
                <option>Nama Wali</option>
                @foreach($user as $user_id)
                <option value="{{ $user_id->id }}" selected>{{ $user_id->name }}</option>
                @endforeach
            </select>

            <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" id="exampleLastName"
                    placeholder="Last Name">
            </div>
        </div>
        <div class="form-group">
            <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                placeholder="Email Address">
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" class="form-control form-control-user"
                    id="exampleInputPassword" placeholder="Password">
            </div>
            <div class="col-sm-6">
                <input type="password" class="form-control form-control-user"
                    id="exampleRepeatPassword" placeholder="Repeat Password">
            </div>
        </div>
        <a href="login.html" class="btn btn-primary btn-user btn-block">
            Register Account
        </a>
        <hr>
        <a href="index.html" class="btn btn-google btn-user btn-block">
            <i class="fab fa-google fa-fw"></i> Register with Google
        </a>
        <a href="index.html" class="btn btn-facebook btn-user btn-block">
            <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
        </a>
    </form> --}}
