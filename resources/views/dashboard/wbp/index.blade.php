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

  <div class="table-responsive col-md-11">
    {{-- <a href="/dashboard/wbp/create" class="btn btn-primary">Search</a> --}}
    <table class="table table-striped table-sm mt-3">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama WBP</th>
          <th scope="col">Tempat Lahir</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Agama</th>
          {{-- <th scope="col">Tanggal Ekspirasi/Pulang</th> --}}
          {{-- <th scope="col">Masa Pidana</th> --}}
          <th scope="col">Action</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($wbp as $wbps)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $wbps->nama }}</td>
            <td>{{ $wbps->tempat_lahir }}</td>
            <td>{{ date('d-M-Y',strtotime($wbps->tanggal_lahir)) }}</td>
            <td>{{ $wbps->jenis_kelamin }}</td>
            <td>{{ $wbps->agama }}</td>
            {{-- <td>{{ $wbps->tanggal_ekspirasi }}</td> --}}
            {{-- <td>{{ $wbps->masa_pidana }}</td> --}}
            <td>
                <a href="/dashboard/wbp/{{ $wbps->id_registrasi }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/wbp/{{ $wbps->id_registrasi }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/wbp/{{ $wbps->id_registrasi }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Apa anda yakin?')"><span data-feather="x-circle"></span>
                </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="d-flex justify-content-center">
      {{ $wbp->links() }}
    </div>
  </div>
</div>
@endsection

