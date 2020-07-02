<div id='lunggongo'></div>
<div class="luncuran-box">
	<div>
		<div>
			<div id=luncuran class='carousel slide'>
				<!-- Indicators -->
				<ol class='carousel-indicators'>
					<li data-target='#luncuran' data-slide-to="0" class='active'></li>
					<li data-target='#luncuran' data-slide-to="1"></li>
					<li data-target='#luncuran' data-slide-to="2"></li>
					<li data-target='#luncuran' data-slide-to="3"></li>
					<li data-target='#luncuran' data-slide-to="4"></li>
					<li data-target='#luncuran' data-slide-to="5"></li>
				</ol>
				<div class='carousel-inner'>

					<div class='item active '>
						<img src="<?= base_url(); ?>/lte/dist/img/konoha.jpg" />
						<div class='luncuran-caption'>
							<div class='luncuran-body'>
								<h2>Selamat Datang di Website Resmi Desa Konohagakure</h2>
								<div class='hidden-xs'><a href='' class='btn btn-success btn-lg'><i class='fa fa-newspaper-o'></i> Baca Artikel</a></div>
							</div>
						</div>
					</div>
					<div class='item '>
						<img src="<?= base_url(); ?>/lte/dist/img/konoha2.jpg" />
						<div class='luncuran-caption'>
							<div class='luncuran-body'>
								<h2>Sejarah Desa Konohagakure</h2>
								<div class='hidden-xs'><a href='' class='btn btn-success btn-lg'><i class='fa fa-newspaper-o'></i> Baca Artikel</a></div>
							</div>
						</div>
					</div>
					<div class='item '>
						<img src="<?= base_url(); ?>/lte/dist/img/konoha1.png" />
						<div class='luncuran-caption'>
							<div class='luncuran-body'>
								<h2>Profil Wilayah Desa Konohagakure</h2>
								<div class='hidden-xs'><a href='' class='btn btn-success btn-lg'><i class='fa fa-newspaper-o'></i> Baca Artikel</a></div>
							</div>
						</div>
					</div>
					<div class='item '>
						<img src="<?= base_url(); ?>/lte/dist/img/visimisi.png" />
						<div class='luncuran-caption'>
							<div class='luncuran-body'>
								<h2>Visi dan Misi</h2>
								<div class='hidden-xs'><a href='' class='btn btn-success btn-lg'><i class='fa fa-newspaper-o'></i> Baca Artikel</a></div>
							</div>
						</div>
					</div>
					<div class='item '>
						<img src="<?= base_url(); ?>/lte/dist/img/perangkatdesa.jpg" />
						<div class='luncuran-caption'>
							<div class='luncuran-body'>
								<h2>Pemerintah Desa</h2>
								<div class='hidden-xs'><a href='' class='btn btn-success btn-lg'><i class='fa fa-newspaper-o'></i> Baca Artikel</a></div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#luncuran" data-slide="prev">
				<span class="icon-prev"></span>
			</a>
			<a class="right carousel-control" href="#luncuran" data-slide="next">
				<span class="icon-next"></span>
			</a>
		</div>
	</div>
</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#marquee').on('cycle-initialized', function(event, opts) {
			$('div.marquee-box').removeClass('hide');
		});
		$('#marquee').cycle({
			fx: 'carousel',
			speed: 20000,
			timeout: '10',
			easing: 'linear',
			pauseOnHover: true,
			slides: '> span',
			throttleSpeed: true
		});
	});
</script>

<script language='javascript'>
	$(document).ready(function() {
		$('.carousel').carousel({
			interval: 10000, // 10 detik
		});
	});
</script>

<div id='batanga'>
	<div class='container'>
		<div class='row mt20'>
			<div class='col-md-8 mb20'>


				<div class='btd-card btd-card-full mb20 headline'>
					<h2 class='artikel-judul text-title mt0'><a href=''>Pemerintah Desa</a></h2>
					<div class='artikel-waktu text-muted'>

						<span class='mr10'><i class='fa fa-user'></i> Administrator</span>
					</div>
					<div class='clearfix mt20'>
						<div class='artikel-gambar-kecil'>
							<div class='artikel-opensid-img'>
								<img src='<?= base_url(); ?>/lte/dist/img/perangkatdesa.jpg' alt='Pemerintah Desa' />
							</div>
						</div>
						<div class='artikel-konten'>SUSUNAN ORGANISASI DAN TATA KERJA PEMERINTAH DESA
							DESA ..............&nbsp; KECAMATAN .................. KABUPATEN KLUNGKUNG
							&nbsp;&nbsp;
							Kepala Desa bertugas menyelenggarakan Pemerintahan Desa, melaksanakan pembangunan, pembinaan kemasyarakatan, dan pemberdayaan masyarakat. Untuk melaksanakan tugas Kepala Desa memiliki fungsi-fungsi sebagai berikut:

							Menyelenggarakan Pemerintahan Desa, seperti tata praja <a href=''>..selengkapnya</a></div>
					</div>
				</div>

				<div class='clearfix mb20'></div>
				<h1 class='text-title content-title mt0 mb20'><span>Artikel Terkini</span></h1>

				<div class='list-view artikel-daftar'>

					<div class='clearfix mb20'></div>
					<div class='btd-card btd-card-top mb20'>
						<h3 class='artikel-judul title mt0'><a href=''>Selamat Datang di Website Resmi Desa Konohagakure</a></h3>
						<div class='artikel-waktu text-muted'>

							<span class='mr10'><i class='fa fa-user'></i> Administrator</span> <span><i class='fa fa-tag'></i> <a href=''>teks_berjalan</a></span>
						</div>
						<div class='clearfix mt20'>
							<div class='artikel-gambar-kecil'>
								<div class='artikel-opensid-img'>
									<img src='<?= base_url(); ?>/lte/dist/img/konoha.jpg' alt='Selamat Datang di Website Resmi Desa Sekartaji' />
								</div>
							</div>
							<div class='artikel-konten'>Selamat Datang di Website Resmi Desa Konohagakure , Kabupaten Grobogan. Media komunikasi dan transparansi Pemerintah Desa Konohagakure untuk seluruh masyarakat. <a href=''>..selengkapnya</a></div>
						</div>
					</div>

					<div class='clearfix mb20'></div>
					<div class='btd-card btd-card-top mb20'>
						<h3 class='artikel-judul title mt0'><a href=''>Sejarah Desa Sekartaji</a></h3>
						<div class='artikel-waktu text-muted'>

							<span class='mr10'><i class='fa fa-user'></i> Administrator</span>
						</div>
						<div class='clearfix mt20'>
							<div class='artikel-gambar-kecil'>
								<div class='artikel-opensid-img'>
									<img src='<?= base_url(); ?>/lte/dist/img/konoha2.jpg' alt='Sejarah Desa Konohagakure' />
								</div>
							</div>
							<div class='artikel-konten'>
								dalam:
								Desa, Konoha, Negara Api
								Konohagakure
								Bahasa Indonesia
								Nama Konohagakure no Sato
								Harfiah Desa Disembunyikan oleh Dedaunan Pohon
								Data Desa Negara Negara Api
								PemimpinHokage Simbol Konohagakure Symbol Statistik Populasi 5/5 Militer 3/5 Ekonomi 2/5Konohagakure, Konohagakure no Sato; Secara harfiah berarti "Desa Tersembunyi oleh Daun Pohon", juga dikenal sebagai "Desa Tersem <a href='<?= base_url('beranda/sejarah') ?>'>..selengkapnya</a></div>
						</div>
					</div>

					<div class='clearfix mb20'></div>
					<div class='btd-card btd-card-top mb20'>
						<h3 class='artikel-judul title mt0'><a href=''>Profil Wilayah Desa Sekartaji</a></h3>
						<div class='artikel-waktu text-muted'>

							<span class='mr10'><i class='fa fa-user'></i> Administrator</span>
						</div>
						<div class='clearfix mt20'>
							<div class='artikel-gambar-kecil'>
								<div class='artikel-opensid-img'>
									<img src='<?= base_url(); ?>/lte/dist/img/konoha1.png' alt='Profil Wilayah Desa Konoha' />
								</div>
							</div>
							<div class='artikel-konten'>Berikut ini Profil Wilayah Desa Sekartaji
								1. Luas Wilayah




								Luas pemukiman


								47,5&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.ha/m2




								Luas persawahan


								&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.ha/m2




								Luas perkebunan


								200,5&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.ha/m2




								Luas kuburan


								6,5&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.ha/m2




								Luas <a href=''>..selengkapnya</a></div>
						</div>
					</div>

					<div class='clearfix mb20'></div>
					<div class='btd-card btd-card-top mb20'>
						<h3 class='artikel-judul title mt0'><a href=''>Visi dan Misi</a></h3>
						<div class='artikel-waktu text-muted'>

							<span class='mr10'><i class='fa fa-user'></i> Administrator</span>
						</div>
						<div class='clearfix mt20'>
							<div class='artikel-gambar-kecil'>
								<div class='artikel-opensid-img'>
									<img src='<?= base_url(); ?>/lte/dist/img/visimisi.png' alt='Visi dan Misi' />
								</div>
							</div>
							<div class='artikel-konten'>VISI MISI DESA SEKARTAJI
								&nbsp;Visi&nbsp;
								Visi Desa Sekartaji tahun 2015-2021 : "Terwujudnya Desa Sekartaji yang Aman, Damai dan Sejahtera".
								&nbsp;
								Misi
								Misi Pembangunan Desa Sekartaji:
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href='https://sekartaji.desa.id/first/artikel/93'>..selengkapnya</a></div>
						</div>
					</div>

					<div class='clearfix mb20'></div>
				</div> <!-- .list-view -->
				<div>
					<ul class='pagination'>
						<li><a href="" title='Halaman Pertama'>&laquo;</a></li>
						<li class='active'><a href="https://sekartaji.desa.id/first/index/1" title='Halaman 1'>1</a></li>
						<li><a href="" title='Halaman 2'>2</a></li>
						<li><a href="" title='Halaman 3'>3</a></li>
						<li><a href="" title='Halaman Selanjutnya'>&rarr;</a></li>
						<li><a href="" title='Halaman Terakhir'>&raquo;</a></li>
					</ul>
				</div>
			</div>
			<div class='col-md-4'>

				<!-- Daftar Widget disebelah kanan -->

				<div class='btd-right-menu'>
					<div class='row'>
						<div class='col-sm-6 col-md-12'>
							<div class="mapouter">
								<div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Manggarwetan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/nordvpn-coupon/"></a></div>
								<style>
									.mapouter {
										position: relative;
										text-align: right;
										height: 500px;
										width: 600px;
									}

									.gmap_canvas {
										overflow: hidden;
										background: none !important;
										height: 500px;
										width: 600px;
									}
								</style>
							</div>
							<div class='mb20'></div>
						</div>
						<div class='col-sm-6 col-md-12'>

							<div class='mb20'></div>
						</div>
						<div class='clearfix visible-sm'></div>
						<div class='col-sm-6 col-md-12'>
							<!-- widget Layanan Mandiri -->


							<div class='mb20'></div>
						</div>
						<div class='col-sm-6 col-md-12'>
							<div class='mb20'></div>
						</div>
						<div class='col-sm-6 col-md-12'>
							<link type='text/css' href="https://sekartaji.desa.id/assets/css/slider.css" rel='Stylesheet' />
							<script type="text/javascript">
								$(document).ready(function() {
									$('#aparatur_desa').cycle({
										pauseOnHover: true,
										// Untuk menghilangkan titik-titik di cycle pager
										pagerTemplate: '<span></span>'
									});
								});
							</script>
							<style type="text/css">
								#aparatur_desa img {
									width: 100%;
								}

								#aparatur_desa .cycle-pager span {
									height: 7px;
									width: 7px;
									margin: 0 3px;
								}
							</style>
							<div class='mb20'></div>
						</div>
						<div class='clearfix visible-sm'></div>
						<div class='col-sm-6 col-md-12'>

							<div class='mb20'></div>
						</div>
						<div class='col-sm-6 col-md-12'>
							<!-- widget Menu-->

							<div class="box box-primary box-solid">
								<div class="box-header">
									<h3 class="box-title"><i class="fa fa-bars"></i> Kategori</h3>
								</div>
								<div class="box-body">
									<ul id="ul-menu" class="main">
										<li><a href="">Berita Desa</a>
										</li>
										<li><a href="">Agenda Desa</a>
										</li>
										<li><a href="">Peraturan Desa</a>
										</li>
										</li>
										</li>
									</ul>
								</div>
							</div>

							<div class='mb20'></div>
						</div>
						<div class='clearfix visible-sm'></div>
						<div class='col-sm-6 col-md-12'>
							<!-- widget Arsip Artikel -->

							<div class="box box-primary box-solid">
								<div class="box-header">
									<h3 class="box-title"><a href=""><i class="fa fa-archive"></i> Arsip Artikel</a></h3>
								</div>
								<div class="box-body">
									<ul id="ul-menu">
										<li><a href="">Selamat Datang di Website Resmi Desa Sekartaji</a></li>
										<li><a href="">Sejarah Desa Sekartaji</a></li>
										<li><a href="">Profil Wilayah Desa Sekartaji</a></li>
										<li><a href="">Visi dan Misi</a></li>
										<li><a href="">Pemerintah Desa</a></li>
									</ul>
								</div>
							</div>

							<div class='mb20'></div>
						</div>
						<div class='col-sm-6 col-md-12'>

							<div class='mb20'></div>
						</div>
						<div class='clearfix visible-sm'></div>
						<div class='col-sm-6 col-md-12'>

							<div class='mb20'></div>
						</div>
						<div class='col-sm-6 col-md-12'>

							<div class='mb20'></div>
						</div>
						<div class='clearfix visible-sm'></div>
						<div class='col-sm-6 col-md-12'>
							<div class='mb20'></div>
						</div>
						<div class='col-sm-6 col-md-12'>
							<div class='list-frame'>
								<div class='list-view'>
									<h1 class='title'><span>Covid</span></h1>
									<div><iframe src='https://widget.kompas.com/corona/statistik' width=100% height=350px /></Iframe></div>
								</div>
							</div>
							<div class='mb20'></div>
						</div>
						<div class='clearfix visible-sm'></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>