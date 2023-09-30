@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    <h1 class="h4">Identitas Warga Binaan</h1>
  </div>

  @if(session()->has('success'))
  <div class="alert alert-success col-md-11" role="alert">
    {{ session('success') }}
  </div>
  @endif

    <div class="col-md-11">
    <a href="/dashboard/wbp" class="btn btn-primary rounded-pill mb-5">Kembali ke Pencarian</a>
    <table class="table table-primary rounded rounded-6 overflow-hidden">
        <thead></thead>
        <tbody>
            <tr>
                <th scope="row" colspan="1">Nama WBP</th>
                <td colspan="3">{{ $wbp->nama }}</td>
            </tr>
            <tr>
                <th scope="row">Nama Wali</th>
                <td colspan="3">{{ $wali->name }}</td>
            </tr>
            <tr>
                <th scope="row">Tempat, Tanggal Lahir</th>
                <td colspan="3 ">{{ $wbp->tempat_lahir }} , {{ date('d-M-Y',strtotime($wbp->tanggal_lahir)) }}</td></td>
            </tr>
            <tr>
                <th scope="row">Jenis Kelamin</th>
                <td colspan="3">{{ $wbp->jenis_kelamin }}</td>
            </tr>
            <tr>
                <th scope="row">Agama</th>
                <td colspan="3">{{ $wbp->agama }}</td>
            </tr>
            <tr>
                <th scope="row">1/3 Masa Pidana</th>
                <td>{{ $wbp->sepertiga_masa_pidana }}</td>
                <th scope="col">Ekspirasi Awal</th>
                <td>{{ $wbp->ekspirasi_awal }}</td>
            </tr>
            <tr>
                <th scope="row">1/2 Masa Pidana</th>
                <td>{{ $wbp->setengah_masa_pidana }}</td>
                <th scope="col">Ekspirasi Akhir</th>
                <td>{{ $wbp->ekspirasi_akhir }}</td>
            </tr>
            <tr>
                <th scope="row">2/3 Masa Pidana</th>
                <td>{{ $wbp->duapertiga_masa_pidana }}</td>
                <th scope="col">Remisi</th>
                <td>{{ $wbp->remisi }}</td>
            </tr>
        </tbody>
    </table>
    </div>

  <div class="col-md-11 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" data-bs-toggle="collapse" data-bs-target="#collapseKegiatan" aria-expanded="false" aria-controls="collapseKegiatan">
    <h1 class="h4">Kegiatan</h1>
  </div>

  <div class="collapse" id="collapseKegiatan">
    <div class="table-responsive col-md-11">
      <table class="table table-striped table-sm mt-3">
        <thead class="table-secondary">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Kegiatan yang diikuti</th>
            <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($kegiatan as $kegiatans)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $kegiatans->tanggal_kegiatan }}</td>
            <td>{!! $kegiatans->uraian !!}</td>
            <td>
              <form action="/dashboard/kegiatan/{{ $kegiatans->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Apa kamu yakin?')"><span data-feather="x-circle"></span>
              </form>
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="table-responsive col-md-11">
      <form method="POST" action="/dashboard/kegiatan">
        @csrf
        <div class="col-md-3 mb-3">
          <label for="tanggal_kegiatan" class="form-label">Tanggal</label>
          <input type="date" class="form-control @error('tanggal_kegiatan') is-invalid @enderror" id="tanggal_kegiatan" name="tanggal_kegiatan" value="{{ date('Y-m-d') }}">
          @error('tanggal_kegiatan')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="uraian" class="form-label">Uraian Kegiatan</label>
          @error('uraian')
          <p class="text-danger">
            {{ $message }}
          </p>
          @enderror
          <input id="uraian" type="hidden" name="uraian" value="{{ old('uraian') }}" required>
          <trix-editor input="uraian"></trix-editor>
        </div>
        <input type="hidden" name="id_registrasi" id="id_registrasi" value="{{ $wbp->id_registrasi }}">
        <input type="hidden" name="wbp_id" id="wbp_id" value="{{ $wbp->id }}">
        <div class="col-12 mt-3">
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>


  <div class="col-md-11 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" data-bs-toggle="collapse" data-bs-target="#collapseStatus" aria-expanded="false" aria-controls="collapseStatus">
    <h1 class="h4">Status</h1>
  </div>

  <div class="collapse" id="collapseStatus">
    <div class="table-responsive col-md-11">
      <table class="table table-striped table-sm mt-3">
        <thead class="table-secondary">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($status as $statuses)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $statuses->tanggal_status }}</td>
            <td>{!! $statuses->status !!}</td>
            <td>
              <form action="/dashboard/status/{{ $statuses->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Apa kamu yakin?')"><span data-feather="x-circle"></span>
              </form>
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="table-responsive col-md-11">
      <form method="POST" action="/dashboard/status">
        @csrf
        <div class="col-md-3 mb-3">
          <label for="tanggal_status" class="form-label">Tanggal</label>
          <input type="date" class="form-control @error('tanggal_status') is-invalid @enderror" id="tanggal_status" name="tanggal_status" value="{{ date('Y-m-d') }}">
          @error('tanggal_status')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="status" class="form-label">Status WBP</label>
          @error('status')
          <p class="text-danger">
            {{ $message }}
          </p>
          @enderror
          <input id="status" type="hidden" name="status" value="{{ old('status') }}" required>
          <trix-editor input="status"></trix-editor>
        </div>
        <input type="hidden" name="id_registrasi" id="id_registrasi" value="{{ $wbp->id_registrasi }}">
        <input type="hidden" name="wbp_id" id="wbp_id" value="{{ $wbp->id }}">
        <div class="col-12 mt-3">
          <button type="submit" class="btn btn-info">Tambah</button>
        </div>
      </form>
    </div>
  </div>

  <div class="col-md-11 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" data-bs-toggle="collapse" data-bs-target="#collapseKesehatan" aria-expanded="false" aria-controls="collapseKesehatan">
    <h1 class="h4">Kesehatan</h1>
  </div>

  <div class="collapse" id="collapseKesehatan">
    <div class="table-responsive col-md-11">
      <table class="table table-striped table-sm mt-3">
        <thead class="table-secondary">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Keluhan Kesehatan</th>
            <th scope="col">Diagnosa Dokter</th>
            <th scope="col">Penanganan</th>
            <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($kesehatan as $kesehatans)
        <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $kesehatans->tanggal_kesehatan }}</td>
              <td>{!! $kesehatans->keluhan_kesehatan !!}</td>
              <td>{!! $kesehatans->diagnosa !!}</td>
              <td>{!! $kesehatans->penanganan !!}</td>
            <td>
              <form action="/dashboard/kesehatan/{{ $kesehatans->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Apa kamu yakin?')"><span data-feather="x-circle"></span>
              </form>
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="table-responsive col-md-11">
      <form method="POST" action="/dashboard/kesehatan">
        @csrf
        <div class="col-md-3 mb-3">
          <label for="tanggal_kesehatan" class="form-label">Tanggal</label>
          <input type="date" class="form-control @error('tanggal_kesehatan') is-invalid @enderror" id="tanggal_kesehatan" name="tanggal_kesehatan" value="{{ date('Y-m-d') }}">
          @error('tanggal_kesehatan')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="keluhan_kesehatan" class="form-label">Keluhan Kesehatan</label>
          @error('keluhan_kesehatan')
          <p class="text-danger">
            {{ $message }}
          </p>
          @enderror
          <input id="keluhan_kesehatan" type="hidden" name="keluhan_kesehatan" value="{{ old('keluhan_kesehatan') }}" required>
          <trix-editor input="keluhan_kesehatan"></trix-editor>
        </div>

        <div class="mb-3">
            <label for="diagnosa" class="form-label">Diagnosa Dokter</label>
            @error('diagnosa')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
            <input id="diagnosa" type="hidden" name="diagnosa" value="{{ old('diagnosa') }}" required>
            <trix-editor input="diagnosa"></trix-editor>
        </div>
        <div class="mb-3">
            <label for="penanganan" class="form-label">Penanganan</label>
            @error('penanganan')
            <p class="text-danger">
              {{ $message }}
            </p>
            @enderror
            <input id="penanganan" type="hidden" name="penanganan" value="{{ old('penanganan') }}" required>
            <trix-editor input="penanganan"></trix-editor>
          </div>
        <input type="hidden" name="id_registrasi" id="id_registrasi" value="{{ $wbp->id_registrasi }}">
        <input type="hidden" name="wbp_id" id="wbp_id" value="{{ $wbp->id }}">
        <div class="col-12 mt-3">
          <button type="submit" class="btn btn-warning">Tambah</button>
        </div>
      </form>
    </div>
  </div>

  <div class="col-md-11 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" data-bs-toggle="collapse" data-bs-target="#collapsePelanggaran" aria-expanded="false" aria-controls="collapsePelanggaran">
    <h1 class="h4">Pelanggaran</h1>
  </div>

  <div class="collapse" id="collapsePelanggaran">

  <div class="table-responsive col-md-11">
    <table class="table table-striped table-sm mt-3">
      <thead class="table-secondary">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Pelanggaran yang dilakukan</th>
          <th scope="col">Sanksi</th>
          <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pelanggaran as $pelanggaran)
      <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $pelanggaran->tanggal_pelanggaran }}</td>
            <td>{!! $pelanggaran->pelanggaran!!}</td>
            <td>{!! $pelanggaran->sanksi !!}</td>
          <td>
            <form action="/dashboard/pelanggaran/{{ $pelanggaran->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Apa kamu yakin?')"><span data-feather="x-circle"></span>
            </form>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <div class="table-responsive col-md-11">
    <form method="POST" action="/dashboard/pelanggaran">
      @csrf
      <div class="col-md-3 mb-3">
        <label for="tanggal_pelanggaran" class="form-label">Tanggal</label>
        <input type="date" class="form-control @error('tanggal_pelanggaran') is-invalid @enderror" id="tanggal_pelanggaran" name="tanggal_pelanggaran" value="{{ date('Y-m-d') }}">
        @error('tanggal_pelanggaran')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
      <div class="mb-3">
        <label for="pelanggaran" class="form-label"> Pelanggaran yang dilakukan </label>
        @error('pelanggaran')
        <p class="text-danger">
          {{ $message }}
        </p>
        @enderror
        <input id="pelanggaran" type="hidden" name="pelanggaran" value="{{ old('pelanggaran') }}" required>
        <trix-editor input="pelanggaran"></trix-editor>
      </div>

      <div class="mb-3">
        <label for="sanksi" class="form-label">Sanksi yang diberikan</label>
        @error('sanksi')
        <p class="text-danger">
          {{ $message }}
        </p>
        @enderror
        <input id="sanksi" type="hidden" name="sanksi" value="{{ old('sanksi') }}" required>
        <trix-editor input="sanksi"></trix-editor>
      </div>
      <input type="hidden" name="id_registrasi" id="id_registrasi" value="{{ $wbp->id_registrasi }}">
      <input type="hidden" name="wbp_id" id="wbp_id" value="{{ $wbp->id }}">
      <div class="col-12 mt-3">
        <button type="submit" class="btn btn-danger mb-4">Tambah</button>
      </div>
    </form>
  </div>
</div>

@endsection


