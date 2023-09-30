@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    {{-- Nanti untuk search isi dengan border-bottom --}}
    <h1 class="h3">Titipan {{ $kode_resi->first()->titipan_barang }} dari {{ $kode_resi->first()->nama_pengunjung }} untuk {{ $kode_resi->first()->nama_wbp }}</h1>
  </div>

  @if(session()->has('success'))
  <div class="alert alert-success col-md-11" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive col-md-11">
    {{-- <a href="/dashboard/wbp/create" class="btn btn-primary">Search</a> --}}
    <table class="table">
        <thead class="thead">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Waktu</th>
            <th scope="col">Riwayat</th>
            </tr>
        </thead>
        <tbody>
        @foreach ( $kode_resi as $resi )
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ date('d-M-Y',strtotime($resi->created_at)) }}</td>
                <td>{{ date('H:i:s',strtotime($resi->created_at)) }}</td>
                <td>{{ $resi->posisi_titipan }}</td>
                {{-- <td>
                    <a href="/dashboard/resi_admin/{{ $resi->kode_resi }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/resi_admin/{{ $resi->kode_resi }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/resi_admin/{{ $resi->kode_resi }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="badge bg-danger border-0" onclick="return confirm('Apa anda yakin?')"><span data-feather="x-circle"></span>
                    </form>
                </td> --}}
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
      {{-- {{ $listBook->links() }} --}}
    </div>
  </div>
</div>
@endsection

{{--
<h3 class="mb-3 text-center">Tracking Resi</h3>
<div class="col-md-10 mx-auto">
    <a href="/" class="btn btn-light rounded-pill mb-5">Kembali ke Beranda</a>
    <div class="card">
        <div class="card-body">
            <div id="content">
                <div class="container my-5">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <h4 class="mb-3 text-center">{{ $kode_resi[0]->nama_wbp }}</h4>
                            <ul class="timeline-3">
                                @foreach ($kode_resi as $resi )
                                    <li>
                                        <h3>{{ $resi->titipan_barang }}</h3>
                                        <p class="float-end">{{ date('H:i:s',strtotime($resi->created_at)) }}</p>
                                        <p>{{ date('d-M-Y',strtotime($resi->created_at)) }}</p>
                                        <p class="mt-2">{{ $resi->posisi_titipan }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
