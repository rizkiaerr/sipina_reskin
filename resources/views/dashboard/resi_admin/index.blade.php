@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    {{-- Nanti untuk search isi dengan border-bottom --}}
    <h1 class="h2">Data Warga Binaan</h1>
  </div>

  @if(session()->has('success'))
  <div class="alert alert-success col-md-11" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="col-md-11">
    {{-- <a href="/dashboard/wbp/create" class="btn btn-primary">Search</a> --}}
    <table class="table">
        <thead class="thead">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pengunjung</th>
            <th scope="col">Kode Resi</th>
            <th scope="col">Nama WBP</th>
            <th scope="col">Tanggal Kunjungan</th>
            <th scope="col">Tanggal Registrasi</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ( $book as $list )
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $list->nama_wbp }}</td>
                <td>{{ $list->kode_resi }}</td>
                <td>{{ $list->nama_pengunjung }}</td>
                <td>{{ $list->tanggal_kunjungan }}</td>
                <td>{{ $list->created_at }}</td>
                <td>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Menu:</div>
                            {{-- <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a> --}}
                            <a class="dropdown-item mb-2" href="/dashboard/resi_admin/{{ $list->kode_resi }}">Tampilkan</a>
                            <a class="dropdown-item mb-2" href="/dashboard/resi_admin/{{ $list->kode_resi }}/edit">Edit</a>
                            <form action="/print-pdf/" method="post">
                              @csrf
                              <input type="hidden" id="kode_resi" name="kode_resi" value="{{ $list->kode_resi }}">
                              <button class="dropdown-item " onclick="return confirm('Apa anda yakin untuk mencetak Tiket?')">Cetak
                            </form>
                            <form action="/dashboard/resi_admin/{{ $list->kode_resi }}" method="post" class="dropdown-item">
                            <input type="hidden" name="book_id" id="book_id" value="{{ $list->id }}">
                              @method('delete')
                              @csrf
                              <button class="dropdown-item " onclick="return confirm('Apa anda yakin untuk menghapus data ini?')">Hapus
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
      {{ $book->links() }}
    </div>
  </div>
</div>
@endsection

