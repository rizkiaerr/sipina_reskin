@extends('layouts.main')
@section('container')


<div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">About</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
            <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
        </div>
        <div>
            <h2>Definisi</h2>
            <p>Merupakan singkatan dari Sistem Informasi Pembinaan Narapidana yang memberikan pelayanan kepada keluarga yang bersangkutan mengenai informasi Warga Binaan.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"/></svg>
        </div>
        <div>
            <h2>Memonitoring</h2>
            <p>Keluarga yang bersangkutan bisa memonitoring kegiatan apa yang sedang dilakukan, apakah Warga Binaan melakukan pelanggaran serta memberikan informasi kesehatan Warga Binaan selama melaksanakan masa pidana.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
          <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"/></svg>
            </div>
            <div>
                <h3>Mudah untuk mengajukan PB,CB,CMB</h3>
                <p>Keluarga tidak perlu repot untuk mengambil form pengajuan karena dapat diunduh di website ini</p>
        </div>
      </div>
    </div>
  </div>

<!-- Content Row -->
<div class="row">
    <!-- Map Column -->
    <div class="col-md-6">
        <!-- Embedded Google Map -->
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="100%" height="400px" id="gmap_canvas" src="https://maps.google.com/maps?q=lapas%20kelas%20II%20b%20Purwakarta&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
    <!-- Contact Details Column -->
    <div class="col-md-4">
        <h3><span style="margin-left:10px" class="glyphicon glyphicon-envelope"></span> Detail Kontak</h3>
        <hr>
        <table>
            <tr>
                <td>
                    <i class="fa fa-male"></i>
                    <abbr title="Person">CP</abbr>
                </td>
                <td>
                    : Lapas Kelas II B Purwakarta
                </td>
            </tr>
            <tr>
                <td>
                    <i class="fa fa-phone"></i>
                    <abbr title="Phone">No. Telepon</abbr>
                </td>
                <td>
                    : (0264) 200170
                </td>
            </tr>
            <tr>
                <td>
                    <i class="fa fa-home"></i>
                    <abbr title="Address">Alamat</abbr>
                </td>
                <td>
                    : JL. MR. DR. Kusuma Atmaja No. 14, Cipaisan, Purwakarta, Cipaisan, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 41113
                </td>
            </tr>
            <tr>
                <td>
                    <i class="fa fa-envelope"></i>
                    <abbr title="Email Address">E-Mail</abbr>
                </td>
                <td>
                    <a href="mailto:name@example.com">: lapas2bpurwakarta@gmail.com</a>
                </td>
            </tr>
        </table>
    </div>
</div>

    </div>
  </div>
</main>
@endsection
