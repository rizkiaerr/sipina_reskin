<!DOCTYPE html>
<html lang="en" >
<style type="text/css">
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap");
body,
p,
h1 {
  margin: 0;
  padding: 0;
  font-family: "Open Sans", sans-serif;
}

/* .container {
  background: #e0e2e8;
  position: relative;
  width: 100%;
  height: 100vh;
} */
.container .ticket {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.container .basic {
  display: none;
}

.airline {
  display: block;
  height: 575px;
  width: 270px;
  box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.3);
  border-radius: 25px;
  z-index: 3;
}
.airline .top {
  height: 190px;
  background: #05b8ff;
  border-top-right-radius: 25px;
  border-top-left-radius: 25px;
}
.airline .top h1 {
  text-transform: uppercase;
  font-size: 12px;
  letter-spacing: 2;
  text-align: center;
  position: absolute;
  top: 15px;
  left: 50%;
  transform: translateX(-50%);
}

.airline .top h2 {
  text-transform: uppercase;
  font-size: 12px;
  letter-spacing: 2;
  text-align: center;
  position: absolute;
  top: 40px;
  left: 50%;
  transform: translateX(-50%);
}

.rounded-corners {
  border-radius: 5px;
}

.airline .bottom {
  height: 360px;
  background: #dad7d7;
  border-bottom-right-radius: 25px;
  border-bottom-left-radius: 25px;
}

.top--side {
  position: absolute;
  right: 75px;
  top: 155px;
  text-align: center;
}
.top--side i {
  font-size: 25px;
  margin-bottom: 18px;
}
.top--side p {
  font-size: 10px;
  font-weight: 700;
}
.top--side p + p {
  margin-bottom: 8px;
}

.bottom p {
  display: flex;
  flex-direction: column;
  font-size: 13px;
  font-weight: 700;
}
.bottom p span {
  font-weight: 400;
  font-size: 11px;
  color: #6c6c6c;
}
.bottom .column {
  margin: 0 auto;
  width: 80%;
  padding: 2rem 0;
}
.bottom .row {
  display: flex;
  justify-content: space-between;
}
.bottom .row--right {
  text-align: right;
}
.bottom .row--center {
  text-align: center;
}
.bottom .row-2 {
  margin: 30px 0 60px 0;
  position: relative;
}
.bottom .row-2::after {
  content: "";
  position: absolute;
  width: 100%;
  bottom: -30px;
  left: 0;
  background: #000;
  height: 1px;
}
.bottom .bar--code {
  height: 50px;
  width: 50%;
  margin: 0 auto;
  position: relative;
}
.bottom .bar--code::after {
  content: "";
  position: absolute;
  width: 6px;
  height: 100%;
  top: 0;
  left: 0;
}
.bottom .bar--code::before {
  content: "";
  position: absolute;
  width: 3px;
  height: 100%;
  top: 0;
  left: 11px;
}

.info {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  bottom: 10px;
  font-size: 14px;
  text-align: center;
  z-index: 1;
}
.info a {
  text-decoration: none;
  background: #05b8ff;
}
</style>
<head>
  <meta charset="UTF-8">
  <title>Tiket Kunjungan</title>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
<!--
	<div class="ticket basic">
		<p>Admit One</p>
	</div> -->

	<div class="ticket airline">
		<div class="top">
			<h1>Tiket Kunjungan</h1>
            <h2><img src="img/download.png" class="rounded-corners" width="100" height="100" alt=""></h2>
			<div class="top--side">
				<p>Lembaga Pemasyarakatan</p>
				<p>Kelas IIB Purwakarta</p>
			</div>
		</div>
		<div class="bottom">
			<div class="column">
				{{-- <div class="row">
					<p><span>Kode</span></p>
					<p class="row--right">AA2005</p>
                </div> --}}
				<div class="row">
					<p><span>Waktu Daftar</span></p>
					<p class="row--right">{{ $users->created_at }}</p>
                </div>
                <div class="row">
                    <p><span>Waktu Kunjungan</span></p>
                    <p class="row--right">{{ $users->tanggal_kunjungan }}</p>
                </div>
                <div class="row">
                    <p><span>Nama Pengunjung</span></p>
                    <p class="row--right">{{ $users->nama_pengunjung }}</p>
                </div>
                <div class="row">
                    <p><span>Nama WBP</span></p>
                    <p class="row--right">{{ $users->nama_wbp }}</p>
                </div>
                <div class="row">
                    <p class="row--center">Kode Resi</p>
                    <p class="row--center">{{ $users->status_wbp.'_'.$users->kode_resi }}</p>
                </div>
			</div>
			<div class="bar--code">
                {!! DNS2D::getBarcodeHTML('http://127.0.0.1:8000/'.$users->nama_pengunjung, 'QRCODE',5,5) !!}
            </div>
		</div>
	</div>

</div>

</body>
</html>

