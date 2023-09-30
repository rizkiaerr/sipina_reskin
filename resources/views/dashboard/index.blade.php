@extends('dashboard.layouts.main')

@section('container')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Jumlah WBP</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $counterWBP }} Orang</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pengunjung</div>
                                {{-- <p class="text-xs font-weight-bold text-success text-uppercase mb-1">(Keseluruhan)</p> --}}
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $counterBook }} Orang</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            {{-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pengunjung</div>
                                <p class="text-xs font-weight-bold text-info text-uppercase mb-1">(Bulan Ini)</p>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ 0 }} Orang</div>
                                    </div>
                                    <div class="col"> --}}
                                        {{-- <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div> --}}
                                    {{-- </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Pending Requests Card Example -->
            {{-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pengunjung</div>
                                    <p class="text-xs font-weight-bold text-warning text-uppercase mb-1">(Belum Diproses)</p>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>

        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Daftar Pengunjung</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Lihat Detail:</div>
                                <a class="dropdown-item" href="dashboard/resi_admin">Tampilkan Semua</a>
                                {{-- <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <table class="table">
                        <thead class="thead">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pengunjung</th>
                            <th scope="col">Kode Resi</th>
                            <th scope="col">Nama WBP</th>
                            <th scope="col">Tanggal Kunjungan</th>
                            <th scope="col">Tanggal Registrasi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ( $listBook as $list )
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $list->nama_wbp }}</td>
                                <td>{{ $list->kode_resi }}</td>
                                <td>{{ $list->nama_pengunjung }}</td>
                                <td>{{ $list->tanggal_kunjungan }}</td>
                                <td>{{ $list->created_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $listBook->links() }}
                      </div>
                </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Statistik Pengunjung</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Detail</div>
                                <a class="dropdown-item" href="#">Tampilkan Semua</a>
                                {{-- <a class="dropdown-item" href="#">Another action</a> --}}
                                {{-- <div class="dropdown-divider"></div> --}}
                                {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie pt-4 pb-2">
                            <canvas id="myPieChart"></canvas>
                        </div>
                        <div class="mt-4 text-center small">
                            <span class="mr-2">
                                <i class="fas fa-circle text-primary"></i> Tahanan
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-success"></i> Narapidana
                            </span>
                            {{-- <span class="mr-2">
                                <i class="fas fa-circle text-info"></i> Referral
                            </span> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- /.container-fluid -->

@endsection
