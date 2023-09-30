@extends ('layouts.main')
@section('container')
<link href="{{ asset('css/resi.css') }}" rel="stylesheet">

<div class="container-xxl bg-primary hero-header">
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
    </div>
</div>

{{-- <table class="table table-primary rounded rounded-6 overflow-hidden">
    <thead></thead>
    <tbody>
        <tr>
            <th scope="row" colspan="1">Nama WBP</th>
            <td colspan="3"></td>
        </tr>
        <tr>
            <th scope="row">Nama Wali</th>
            <td colspan="3"></td>
        </tr>
        <tr>
            <th scope="row">Tempat, Tanggal Lahir</th>
            <td colspan="3 "></td></td>
        </tr>
        <tr>
            <th scope="row">Jenis Kelamin</th>
            <td colspan="3"></td>
        </tr>
        <tr>
            <th scope="row">Agama</th>
            <td colspan="3"></td>
        </tr>
        <tr>
            <th scope="row">1/3 Masa Pidana</th>
            <td></td>
            <th scope="col">Ekspirasi Awal</th>
            <td></td>
        </tr>
        <tr>
            <th scope="row">1/2 Masa Pidana</th>
            <td></td>
            <th scope="col">Ekspirasi Akhir</th>
            <td></td>
        </tr>
        <tr>
            <th scope="row">2/3 Masa Pidana</th>
            <td></td>
            <th scope="col">Remisi</th>
            <td></td>
        </tr>
    </tbody>
</table> --}}

@endsection

                    {{-- <ul class="timeline">
                        @foreach ( $kode_resi as $resi )
                            <li class="event" data-date="{{ $resi->created_at }}">
                            <h3>{{ $resi->titipan_barang }}</h3>
                            <p>{{ $resi->posisi_titipan }}</p>
                            <p>{{ $resi->updated_at }}</p>
                            </li>
                        @endforeach
                    </ul> --}}
