@extends ('layouts.main')
@section('container')

<div class="container-xxl bg-primary hero-header">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white mb-4 animated slideInDown">Selamat Datang di SIPINA!</h1>
                <p class="text-white pb-3 animated slideInDown">Kami memberikan kemudahan kepada masyarakat untuk mencari informasi Warga Binaan didalam Lapas Kelas IIB Purwakarta</p>
                <div class="position-relative w-100 mt-3">
                    <form action="/wbp">
                        <div class="form-floating">
                            <input type="text" style="height: 58px;" class="form-control border-2 rounded-pill w-100 ps-4 pe-5" placeholder="Nama Lengkap WBP" name="nama" value="{{ request('nama') }}" required>
                            <label for="email">Nama WBP</label>
                        </div>
                        <div class="form-floating">
                            <input type="date" style="height: 58px;" class="form-control border-2 rounded-pill w-100 ps-4 pe-5" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{ request('tanggal_lahir') }}" required>
                            <label for="email">Tanggal Lahir</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" style="height: 58px;" class="form-control border-2 rounded-pill w-100 ps-4 pe-5" placeholder="Nama Ibu Kandung" name="nama_ibu" value="{{ request('nama_ibu') }}" required >
                            <label for="email">Nama Ibu Kandung</label>
                        </div>
                        <button type="submit" class="btn btn-light rounded-pill py-2 px-3 shadow-none position-absolute end-0 m-2">Cari Data WBP</button>
                        </form>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <img class="img-fluid rounded animated zoomIn border border-info" src="img/download.png" alt="">
            </div>
        </div>
    </div>
</div>

{{-- sisipkan --}}

       <!-- Resi Start -->
       <div class="container-xxl py-6" id="resi">
        <div class="container">
            <div class="row g-5 flex-column-reverse flex-lg-row">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-4">Khawatir Titipan Barang tidak tersampaikan?</h1>
                    <p class="mb-4">Keluarga WBP tidak perlu khawatir titipan makanan tidak tersampaikan, cukup isi kolom dibawah dengan nomor resi yang diperoleh pada saat melakukan kunjungan</p>
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="ms-4">
                            <h5>Titipan Barang akan kami periksa</h5>
                            <p class="mb-0">Barang yang akan diberikan kepada WBP akan diperiksa oleh kami dan dipastikan barang yang diterima sesuai dengan peraturan yang berlaku</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="ms-4">
                            <h5>Tidak ada peredaran uang didalam Blok Hunian</h5>
                            <p class="mb-0">Keluarga WBP yang memberikan uang tunai akan kami topup ke saldo WBP</p>
                        </div>
                    </div>
                    <div class="position-relative w-100 mt-3">
                        <form action="/resi">
                            <div class="form-floating">
                                <input type="text" style="height: 58px;" class="form-control border-2 rounded-pill w-100 ps-4 pe-5" placeholder="Isi sesuai tiket yang diperoleh" name="kode_resi">
                                <label for="kode_resi">No Resi</label>
                            </div>
                            <button type="submit" class="btn btn-light rounded-pill py-2 px-3 shadow-none position-absolute end-0 m-2">Cek Resi</button>
                            </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.5s" src="img/package.png">
                </div>
            </div>
        </div>
    </div>
    <!-- Resi End -->


        <!-- About Start -->
        <div class="container-xxl py-6" id="about">
            <div class="container">
                <div class="row g-5 flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4">Mudah dalam mencari Informasi & memangkas biaya transportasi</h1>
                        <p class="mb-4">Tidak perlu pergi ke kantor untuk menanyakan Kapan WBP bisa pulang, Kenapa WBP dipindahkan ke Lapas Lain, Kenapa keluarga WBP tidak dapat memberikan titipan makanan, kegiatan apa yang dilakukan WBP selama dalam Proses Pembinaan karena kami :</p>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ms-4">
                                <h5>Memberikan informasi yang masyarakat butuhkan</h5>
                                <p class="mb-0">Kami memberikan informasi kegiatan yang telah dilaksanakan selama proses pembinaan, kondisi kesehatan, pelanggaran dan sanksi yang diberikan, progres pengajuan PB, CB dan CMB;</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ms-4">
                                <h5>Mengambil Form Pengajuan dapat diunduh disini</h5>
                                <p class="mb-0">Form Pengajuan PB, CB dan CMB dapat diunduh di website kami.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.5s" src="img/about.jpeg">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Overview Start -->
        <div class="container-xxl bg-light my-6 py-5" id="overview">
            <div class="container">
                <div class="row g-5 py-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/overview-1.png">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">01</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">Cari Informasi WBP</h5>
                        </div>
                        <p class="mb-4">Cari Informasi WBP mudah dengan memasukan Nama WBP, Tanggal Lahir dan Nama Ibu Kandung. Pastikan data yang dimasukan :</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Nama Lengkap WBP Tidak mengandung nama gelar, alias dan bin</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Tanggal Lahir benar</p>
                        <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>Nama Ibu Kandung Tidak mengandung nama gelar, alias, bin dan almh.</p>
                    </div>
                </div>
                <div class="row g-5 py-5 align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">02</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">Melakukan pelanggaran akan diberikan sanksi!</h5>
                        </div>
                        <p class="mb-4">WBP melakukan pelanggaran akan diberikan sanksi dan ini menjadi alasan mengapa:</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>WBP tidak dapat dikunjungi</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>WBP tidak dapat menerima titipan makanan</p>
                        <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>WBP dipindahkan ke Lapas lain</p>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/overview-2.png">
                    </div>
                </div>
                <div class="row g-5 py-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/overview-3.jpeg">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">03</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">Kesehatan adalah No.1</h5>
                        </div>
                        <p class="mb-4">Bila informasi kesehatan kosong, berarti kondisi WBP dinyatakan sehat. Kami akan menangani WBP yang sakit. Apabila tidak dapat ditangani maka akan dirujuk ke Rumah Sakit terdekat.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Overview End -->

        <!-- Testimonial Start -->
        <div class="container-xxl py-6" id="testimonial">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Frequently Asked Question (FAQ)</h1>
                    <p class="mb-5">Beberapa Pertanyaan yang sering ditanyakan oleh Masyarakat atau WBP</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Mohon maaf, Untuk saat ini belum bisa melakukan kunjungan berdasarkan Surat Edaran No. PAS.7-UM.01.01-43 Tahun 2022. tapi kami memberikan fasilitas Video Call dan titipan diperbolehkan masuk.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/question.png" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Apakah sudah bisa melakukan kunjungan?</h5>
                                <!-- <span>Profession</span> -->
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Titipan makanan dibuka pada:
                            <br>Senin - Kamis Pukul 08.00 - 14.00
                            <br>Sabtu Pukul 08.00 - 11.30
                            <br>Tanggal Merah dan Hari Jum'at <B>LIBUR</B></p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/question.png" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Kapan Bisa melakukan titipan makanan?</h5>
                                <!-- <span>Profession</span> -->
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Anda bisa mencari informasi tersebut di website kami pada form pencarian dengan mengisi Nama WBP, Tanggal Lahir dan Nama Ibu Kandung. Informasi kapan WBP bisa pulang akan berubah sewaktu-sewaktu apabila WBP mendapatkan remisi.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/question.png" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Kapan WBP bisa pulang?</h5>
                                <!-- <span>Profession</span> -->
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Pastikan Nama WBP yang diisi adalah nama lengkap tanpa gelar, bin dan alias, begitu pula dengan Nama Ibu Kandung tanpa gelar dan almh (apabila sudah meninggal).</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/question.png" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Kenapa WBP yang dicari tidak ditemukan?</h5>
                                <!-- <span>Profession</span> -->
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>WBP telah menjalani masa pidana paling singkat 2/3, dengan ketentuan 2/3 (dua per tiga) masa pidana tersebut paling sedikit 9 (sembilan) bulan. Selama menjalani masa pidana paling singkat 9 (sembilan) bulan terakhir dihitung sebelum tanggal 2/3 (dua per tiga) masa pidana.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/question.png" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Kapan WBP bisa mengajukan PB, CB dan CMB?</h5>
                                <!-- <span>Profession</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Contact Start -->
        <div class="container-xxl py-6" id="contact">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-3">Detail Contact</h1>
                        <p class="mb-4">Jika mengalami kendala pada penggunaan website kami anda bisa menghubungi kontak kami atau mengujungi kantor kami</p>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Telephone</p>
                                <h5 class="mb-0">(0264) 211369</h5>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">E-Mail</p>
                                <h5 class="mb-0">lppurwakarta@gmail.com</h5>
                            </div>
                        </div>
                        <div class="d-flex mb-0">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Alamat</p>
                                <h5 class="mb-0">JL. MR. DR. Kusuma Atmaja No. 14, Cipaisan, Purwakarta, Cipaisan, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 41113</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="gmap_canvas">
                            <iframe class="rounded border border-info" width="100%" height="400px" id="gmap_canvas" src="https://maps.google.com/maps?q=lapas%20kelas%20II%20b%20Purwakarta&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/62b2fb9a7b967b117995ee5a/1g65idlsa';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
@endsection
