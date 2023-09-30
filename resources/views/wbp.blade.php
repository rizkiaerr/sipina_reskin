@extends ('layouts.main')
@section('container')

<div class="container-xxl bg-primary hero-header">
<h3 class="mb-3 text-center">Hasil Pencarian</h3>
    <div class="col-md-10 mx-auto">
        <a href="/" class="btn btn-light rounded-pill mb-5">Kembali ke Pencarian</a>
        <table class="table table-primary rounded rounded-6 overflow-hidden">
            <thead></thead>
            <tbody>
                <tr>
                    <th scope="row" colspan="1">Nama WBP</th>
                    <td colspan="3">{{ $kegiatan->first()->nama }}</td>
                </tr>
                <tr>
                    <th scope="row">Nama Wali</th>
                    <td colspan="3">{{ $kegiatan->first()->name }}</td>
                </tr>
                <tr>
                    <th scope="row">Tempat, Tanggal Lahir</th>
                    <td colspan="3 ">{{ $kegiatan->first()->tempat_lahir }} , {{ date('d-M-Y',strtotime($kegiatan->first()->tanggal_lahir)) }}</td></td>
                </tr>
                <tr>
                    <th scope="row">Jenis Kelamin</th>
                    <td colspan="3">{{ $kegiatan->first()->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <th scope="row">Agama</th>
                    <td colspan="3">{{ $kegiatan->first()->agama }}</td>
                </tr>
                <tr>
                    <th scope="row">1/3 Masa Pidana</th>
                    <td>{{ $kegiatan->first()->sepertiga_masa_pidana }}</td>
                    <th scope="col">Ekspirasi Awal</th>
                    <td>{{ $kegiatan->first()->ekspirasi_awal }}</td>
                </tr>
                <tr>
                    <th scope="row">1/2 Masa Pidana</th>
                    <td>{{ $kegiatan->first()->setengah_masa_pidana }}</td>
                    <th scope="col">Ekspirasi Akhir</th>
                    <td>{{ $kegiatan->first()->ekspirasi_akhir }}</td>
                </tr>
                <tr>
                    <th scope="row">2/3 Masa Pidana</th>
                    <td>{{ $kegiatan->first()->duapertiga_masa_pidana }}</td>
                    <th scope="col">Remisi</th>
                    <td>{{ $kegiatan->first()->remisi }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="col-md-10 mx-auto">

<div class="justify-content-between flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom" data-bs-toggle="collapse" data-bs-target="#collapseKegiatan" aria-expanded="false" aria-controls="collapseKegiatan">
    <h1 class="h4">Kegiatan</h1>
</div>
<div class="collapse" id="collapseKegiatan">
    <table class="table table-striped">
    <thead class="table-primary">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Kegiatan yang diikuti</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($kegiatan as $kegiatans)
      <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $kegiatans->tanggal_kegiatan }}</td>
          <td>{!! $kegiatans->uraian !!}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="d-flex justify-content-center">
    {{ $kegiatan->links() }}
  </div>
</div>

<div class="justify-content-between flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom" data-bs-toggle="collapse" data-bs-target="#collapseKesehatan" aria-expanded="false" aria-controls="collapseKesehatan">
  <h1 class="h4">Kesehatan</h1>
</div>
<div class="collapse" id="collapseKesehatan">
  <table class="table table-striped">
    <thead class="table-primary">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Keluhan Kesehatan</th>
        <th scope="col">Diagnosa Dokter</th>
        <th scope="col">Penanganan</th>
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
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="justify-content-between flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom" data-bs-toggle="collapse" data-bs-target="#collapsePelanggaran" aria-expanded="false" aria-controls="collapsePelanggaran">
  <h1 class="h4">Pelanggaran</h1>
</div>
<div class="collapse" id="collapsePelanggaran">
  <table class="table table-striped">
    <thead class="table-primary">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Pelanggaran yang dilakukan</th>
        <th scope="col">Sanksi yang diberikan</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pelanggaran as $pelanggarans)
      <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $pelanggarans->tanggal_pelanggaran }}</td>
          <td>{!! $pelanggarans->pelanggaran !!}</td>
          <td>{!! $pelanggarans->sanksi !!}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="justify-content-between flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom" data-bs-toggle="collapse" data-bs-target="#collapseStatus" aria-expanded="false" aria-controls="collapseStatus">
  <h1 class="h4">Progress Pengusulan Integrasi (PB/CB/CMB)</h1>
</div>
<div class="collapse" id="collapseStatus">
  <table class="table table-striped">
    <thead class="table-primary">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Progress Pengusulan Integrasi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($status as $statuses)
      <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $statuses->tanggal_status }}</td>
          <td>{!! $statuses->status !!}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
  </div>


@endsection
