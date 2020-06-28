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
						<img src="https://sekartaji.desa.id/desa/upload/artikel/sedang_1545369951_visi.jpg" />
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
					<h2 class='artikel-judul text-title mt0'><a href='https://sekartaji.desa.id/first/artikel/92'>Pemerintah Desa</a></h2>
					<div class='artikel-waktu text-muted'>

						<span class='mr10'><i class='fa fa-user'></i> Administrator</span>
					</div>
					<div class='clearfix mt20'>
						<div class='artikel-gambar-kecil'>
							<div class='artikel-opensid-img'>
								<img src='https://sekartaji.desa.id/desa/upload/artikel/kecil_1545370055_pemerintah.jpg' alt='Pemerintah Desa' />
							</div>
						</div>
						<div class='artikel-konten'>SUSUNAN ORGANISASI DAN TATA KERJA PEMERINTAH DESA
							DESA ..............&nbsp; KECAMATAN .................. KABUPATEN KLUNGKUNG
							&nbsp;&nbsp;
							Kepala Desa bertugas menyelenggarakan Pemerintahan Desa, melaksanakan pembangunan, pembinaan kemasyarakatan, dan pemberdayaan masyarakat. Untuk melaksanakan tugas Kepala Desa memiliki fungsi-fungsi sebagai berikut:

							Menyelenggarakan Pemerintahan Desa, seperti tata praja <a href='https://sekartaji.desa.id/first/artikel/92'>..selengkapnya</a></div>
					</div>
				</div>

				<div class='clearfix mb20'></div>
				<h1 class='text-title content-title mt0 mb20'><span>Artikel Terkini</span></h1>

				<div class='list-view artikel-daftar'>
					<div class='btd-card btd-card-top mb20'>
						<h3 class='artikel-judul title mt0'><a href='https://sekartaji.desa.id/first/artikel/101'>Test</a></h3>
						<div class='artikel-waktu text-muted'>

							<span class='mr10'><i class='fa fa-user'></i> Administrator</span>
						</div>
						<div class='clearfix mt20'>
							<div class='artikel-konten'>tersttt <a href='https://sekartaji.desa.id/first/artikel/101'>..selengkapnya</a></div>
						</div>
					</div>

					<div class='clearfix mb20'></div>
					<div class='btd-card btd-card-top mb20'>
						<h3 class='artikel-judul title mt0'><a href='https://sekartaji.desa.id/first/artikel/100'>Selamat Datang di Website Resmi Desa Sekartaji</a></h3>
						<div class='artikel-waktu text-muted'>

							<span class='mr10'><i class='fa fa-user'></i> Administrator</span> <span><i class='fa fa-tag'></i> <a href='https://sekartaji.desa.id/first/kategori/22'>teks_berjalan</a></span>
						</div>
						<div class='clearfix mt20'>
							<div class='artikel-gambar-kecil'>
								<div class='artikel-opensid-img'>
									<img src='https://sekartaji.desa.id/desa/upload/artikel/kecil_1545370216_welcome.jpg' alt='Selamat Datang di Website Resmi Desa Sekartaji' />
								</div>
							</div>
							<div class='artikel-konten'>Selamat Datang di Website Resmi Desa Sekartaji , Kecamatan Nusapenida Kabupaten Klungkung. Media komunikasi dan transparansi Pemerintah Desa Sekartaji untuk seluruh masyarakat. <a href='https://sekartaji.desa.id/first/artikel/100'>..selengkapnya</a></div>
						</div>
					</div>

					<div class='clearfix mb20'></div>
					<div class='btd-card btd-card-top mb20'>
						<h3 class='artikel-judul title mt0'><a href='https://sekartaji.desa.id/first/artikel/99'>Sejarah Desa Sekartaji</a></h3>
						<div class='artikel-waktu text-muted'>

							<span class='mr10'><i class='fa fa-user'></i> Administrator</span>
						</div>
						<div class='clearfix mt20'>
							<div class='artikel-gambar-kecil'>
								<div class='artikel-opensid-img'>
									<img src='https://sekartaji.desa.id/desa/upload/artikel/kecil_1545369790_sejarah.jpg' alt='Sejarah Desa Sekartaji' />
								</div>
							</div>
							<div class='artikel-konten'>Berikut ini sejarah Desa Sekartaji
								Desa Sekartaji adalah salah satu desa di Kecamatan Nusa Penida, yang terletak 22 Kilometer dari Kota Kecamatan. Sampai saat ini sejarah kelahiran Desa Sekartaji belum bisa diketahui secara pasti karena tidak adanya bukti-bukti tertulis yang menerangkan tentang asal usul atau sejarah dari Desa Sekartaji, akan tetapi berdasarkan cerita dari para tetua kami, Penyusun mencoba <a href='https://sekartaji.desa.id/first/artikel/99'>..selengkapnya</a></div>
						</div>
					</div>

					<div class='clearfix mb20'></div>
					<div class='btd-card btd-card-top mb20'>
						<h3 class='artikel-judul title mt0'><a href='https://sekartaji.desa.id/first/artikel/98'>Profil Wilayah Desa Sekartaji</a></h3>
						<div class='artikel-waktu text-muted'>

							<span class='mr10'><i class='fa fa-user'></i> Administrator</span>
						</div>
						<div class='clearfix mt20'>
							<div class='artikel-gambar-kecil'>
								<div class='artikel-opensid-img'>
									<img src='https://sekartaji.desa.id/desa/upload/artikel/kecil_1545370084_wilayah.jpg' alt='Profil Wilayah Desa Sekartaji' />
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




								Luas <a href='https://sekartaji.desa.id/first/artikel/98'>..selengkapnya</a></div>
						</div>
					</div>

					<div class='clearfix mb20'></div>
					<div class='btd-card btd-card-top mb20'>
						<h3 class='artikel-judul title mt0'><a href='https://sekartaji.desa.id/first/artikel/93'>Visi dan Misi</a></h3>
						<div class='artikel-waktu text-muted'>

							<span class='mr10'><i class='fa fa-user'></i> Administrator</span>
						</div>
						<div class='clearfix mt20'>
							<div class='artikel-gambar-kecil'>
								<div class='artikel-opensid-img'>
									<img src='https://sekartaji.desa.id/desa/upload/artikel/kecil_1545369951_visi.jpg' alt='Visi dan Misi' />
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
					<div class='btd-card btd-card-top mb20'>
						<h3 class='artikel-judul title mt0'><a href='https://sekartaji.desa.id/first/artikel/15'>Pemdes se-Kabupaten Klungkung Kembangkan Website Desa Berbasis OpenSID</a></h3>
						<div class='artikel-waktu text-muted'>

							<span class='mr10'><i class='fa fa-user'></i> Administrator</span> <span><i class='fa fa-tag'></i> <a href='https://sekartaji.desa.id/first/kategori/1'>Berita Desa</a></span>
						</div>
						<div class='clearfix mt20'>
							<div class='artikel-gambar-kecil'>
								<div class='artikel-opensid-img'>
									<img src='https://sekartaji.desa.id/desa/upload/artikel/kecil_1542003372_pemdes.jpg' alt='Pemdes se-Kabupaten Klungkung Kembangkan Website Desa Berbasis OpenSID' />
								</div>
							</div>
							<div class='artikel-konten'>Dalam rangka meningkatkan kepercayaan dan partisipasi masyarakat Pemerintah Desa mengembangkan Sistem Informasi Desa berbasis website. Sistem yang dipergunakan berplatform OpenSID. Platform ini digunakan mengingat sistem ini gratis dan tidak membebani desa dalam biaya pengadaan software atau sistem operasi.
								Pengembangan Sistem Informasi Desa dimaksudkan untuk membuka akses informasi publik kepada seluruh masyarakat, <a href='https://sekartaji.desa.id/first/artikel/15'>..selengkapnya</a></div>
						</div>
					</div>

					<div class='clearfix mb20'></div>
					<div class='btd-card btd-card-top mb20'>
						<h3 class='artikel-judul title mt0'><a href='https://sekartaji.desa.id/first/artikel/31'>Desa Membangun Indonesia</a></h3>
						<div class='artikel-waktu text-muted'>

							<span class='mr10'><i class='fa fa-user'></i> Administrator</span> <span><i class='fa fa-tag'></i> <a href='https://sekartaji.desa.id/first/kategori/23'>Perpustakaan Desa</a></span>
						</div>
						<div class='clearfix mt20'>
							<div class='artikel-gambar-kecil'>
								<div class='artikel-opensid-img'>
									<img src='https://sekartaji.desa.id/desa/upload/artikel/kecil_1529745573_desa+membangun+indonesia.jpg' alt='Desa Membangun Indonesia' />
								</div>
							</div>
							<div class='artikel-konten'>Menemukan ruh pembangunan yang memberdayakan tidaklah mudah. Reformasi di Indonesia pada tahun 1998 telah memilih sis-tem desentralisasi. Otonomi daerah menjadi konsep operasionalnya. Bukan tidak berhasil, tapi penyelenggaraan otonomi daerah ternyata belum mampu melahirkan kesejahteraan bagi lapisan masyarakat ter-bawah yang hidup di desa. Bahkan gini rasio 1 terus meningkat sudah di atas 0,41 yang menandakan <a href='https://sekartaji.desa.id/first/artikel/31'>..selengkapnya</a></div>
						</div>
					</div>

					<div class='clearfix mb20'></div>
					<div class='btd-card btd-card-top mb20'>
						<h3 class='artikel-judul title mt0'><a href='https://sekartaji.desa.id/first/artikel/28'>Penyelenggaraan Pemerintahan Desa</a></h3>
						<div class='artikel-waktu text-muted'>

							<span class='mr10'><i class='fa fa-user'></i> Administrator</span> <span><i class='fa fa-tag'></i> <a href='https://sekartaji.desa.id/first/kategori/23'>Perpustakaan Desa</a></span>
						</div>
						<div class='clearfix mt20'>
							<div class='artikel-gambar-kecil'>
								<div class='artikel-opensid-img'>
									<img src='https://sekartaji.desa.id/desa/upload/artikel/kecil_1529743449_pemerintahan+desa.jpg' alt='Penyelenggaraan Pemerintahan Desa' />
								</div>
							</div>
							<div class='artikel-konten'>Membumikan makna desa sebagai subjek paska UU Desa bukanlah sesuatu yang mudah dilakukan. Pelbagai ujicoba dilakukan oleh elemen pemerintah dan masyarakat sipil untuk dapat menggerakkan desa agar benar-benar menjadi subjek pembangunan. Berbagai praktik dan pembelajaran telah muncul sebagai bagian dari upaya menggerakkan desa menjadi subjek pembangunan seutuhnya. Idiom subjek tidak bermakna pemerintahan desa <a href='https://sekartaji.desa.id/first/artikel/28'>..selengkapnya</a></div>
						</div>
					</div>

					<div class='clearfix mb20'></div>
				</div> <!-- .list-view -->
				<div>
					<ul class='pagination'>
						<li><a href="https://sekartaji.desa.id/first/index/1" title='Halaman Pertama'>&laquo;</a></li>
						<li class='active'><a href="https://sekartaji.desa.id/first/index/1" title='Halaman 1'>1</a></li>
						<li><a href="https://sekartaji.desa.id/first/index/2" title='Halaman 2'>2</a></li>
						<li><a href="https://sekartaji.desa.id/first/index/3" title='Halaman 3'>3</a></li>
						<li><a href="https://sekartaji.desa.id/first/index/2" title='Halaman Selanjutnya'>&rarr;</a></li>
						<li><a href="https://sekartaji.desa.id/first/index/3" title='Halaman Terakhir'>&raquo;</a></li>
					</ul>
				</div>
			</div>
			<div class='col-md-4'>

				<!-- Daftar Widget disebelah kanan -->

				<div class='btd-right-menu'>
					<div class='row'>
						<div class='col-sm-6 col-md-12'>
							<div class='list-frame'>
								<div class='list-view'>
									<h1 class='title'><span>Peta Desa</span></h1>
									<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31543.175034001793!2d115.5530158259313!3d-8.795758184652428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd279f83142af73:0x5030bfbca832410!2sSekartaji,+Nusapenida,+Klungkung+Regency,+Bali!5e0!3m2!1sen!2sid!4v1546617815171" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></div>
								</div>
							</div>
							<div class='mb20'></div>
						</div>
						<div class='col-sm-6 col-md-12'>
							<div class='list-frame'>
								<div class='list-view'>
									<h1 class='title'><span>Pengaduan Online</span></h1>
									<div><a href="https://wa.me/6281338925201?text=Saya mau .........">
											<img src="https://aan.desa.id/wa.jpg" alt="Pengaduan Online" style="width:42px;height:42px;border:0;">
										</a>
									</div>
								</div>
							</div>
							<div class='mb20'></div>
						</div>
						<div class='clearfix visible-sm'></div>
						<div class='col-sm-6 col-md-12'>
							<!-- widget Layanan Mandiri -->
							<div class="box box-primary box-solid">
								<div class="box-header">
									<h3 class="box-title"><i class="fa fa-user"></i> Layanan Mandiri</h3><br />
									Silakan datang atau hubungi operator desa untuk mendapatkan kode PIN anda.
								</div>
								<div class="box-body">
									<h4>Masukan NIK dan PIN</h4>
									<form action="https://sekartaji.desa.id/first/auth" method="post">
										<input name="nik" type="text" placeholder="NIK" style="margin-left:0px" value="" required>
										<input name="pin" type="password" placeholder="PIN" style="margin-left:0px" value="" required>
										<button type="submit" id="but" style="margin-left:0px">Masuk</button>
									</form>
								</div>
							</div>

							<div class='mb20'></div>
						</div>
						<div class='col-sm-6 col-md-12'>
							<!-- widget Statistik -->

							<div class="box box-info box-solid">
								<div class="box-header">
									<h3 class="box-title"><a href="https://sekartaji.desa.id/first/statistik/1"><i class="fa fa-bar-chart"></i> Statistik Sekartaji</a></h3>
								</div>
								<div class="box-body">
									<script type="text/javascript">
										$(function() {
											var chart_widget;
											$(document).ready(function() {
												// Build the chart
												chart_widget = new Highcharts.Chart({
													chart: {
														renderTo: 'container_widget',
														plotBackgroundColor: null,
														plotBorderWidth: null,
														plotShadow: false
													},
													title: {
														text: 'Statistik Penduduk'
													},
													yAxis: {
														title: {
															text: 'Jumlah'
														}
													},
													legend: {
														enabled: false
													},
													plotOptions: {
														series: {
															colorByPoint: true
														},
														column: {
															pointPadding: 0,
															borderWidth: 0
														}
													},
													series: [{
														type: 'column',
														name: 'Populasi',
														data: [
															['LAKI-LAKI', 1046],
															['PEREMPUAN', 948],
															['TOTAL', 1994],
														]
													}]
												});
											});

										});
									</script>
									<script src="https://sekartaji.desa.id//assets/js/highcharts/highcharts.js"></script>
									<div id="container_widget" style="width: 100%; height: 150px; margin: 0 auto"></div>
								</div>
							</div>

							<div class='mb20'></div>
						</div>
						<div class='clearfix visible-sm'></div>
						<div class='col-sm-6 col-md-12'>
							<!-- widget Sinergi Program-->

							<style>
								#sinergi_program {
									text-align: center;
								}

								#sinergi_program table {
									margin: auto;
								}

								#sinergi_program img {
									max-width: 100%;
									max-height: 100%;
									transition: all 0.5s;
									-o-transition: all 0.5s;
									-moz-transition: all 0.5s;
									-webkit-transition: all 0.5s;
								}

								#sinergi_program img:hover {
									transition: all 0.3s;
									-o-transition: all 0.3s;
									-moz-transition: all 0.3s;
									-webkit-transition: all 0.3s;
									transform: scale(1.5);
									-moz-transform: scale(1.5);
									-o-transform: scale(1.5);
									-webkit-transform: scale(1.5);
									box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.5);
								}
							</style>
							<div class="box box-warning box-solid">
								<div class="box-header">
									<h3 class="box-title"><i class="fa fa-external-link"></i> Sinergi Program</h3>
								</div>
								<div id="sinergi_program" class="box-body">
									<table>
										<tr>
											<td>
												<span style="display: inline-block; width: 48%">
													<a href="http://prodeskel.binapemdes.kemendagri.go.id/mpublik/" target="_blank"><img src="https://sekartaji.desa.id/desa/upload/widget/1539351074_prodeskel.JPG" alt="Prodeskel" /></a>
												</span>
												<span style="display: inline-block; width: 48%">
													<a href="https://sse3.pajak.go.id/" target="_blank"><img src="https://sekartaji.desa.id/desa/upload/widget/1539351074_sse.jpg" alt="Pajak Online" /></a>
												</span>
											</td>
										</tr>
									</table>
								</div>
							</div>
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

							<!-- widget Aparatur Desa -->
							<div class="box box-warning box-solid">
								<div class="box-header">
									<h3 class="box-title"><i class="fa fa-user"></i> Aparatur Desa</h3>
								</div>
								<div class="box-body">

									<div id="aparatur_desa">
										<span class="cycle-pager"></span> <!-- Untuk membuat tanda bulat atau link pada slider -->
									</div>
								</div>
							</div>
							<div class='mb20'></div>
						</div>
						<div class='clearfix visible-sm'></div>
						<div class='col-sm-6 col-md-12'>
							<!-- widget SocMed -->

							<div class="box box-default">
								<div class="box-header">
									<h3 class="box-title"><i class="fa fa-globe"></i> Info Media Sosial</h3>
								</div>
								<div class="box-body">
									<a href="https://www.facebook.com/" target="_blank"><img src="https://sekartaji.desa.id/assets/front/fb.png" alt="Facebook" style="width:50px;height:50px;" /></a> </div>
							</div>

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
										<li><a href="https://sekartaji.desa.id/first/kategori/1">Berita Desa</a>
										</li>
										<li><a href="https://sekartaji.desa.id/first/kategori/4">Agenda Desa</a>
										</li>
										<li><a href="https://sekartaji.desa.id/first/kategori/5">Peraturan Desa</a>
										</li>
										<li><a href="https://sekartaji.desa.id/first/kategori/23">Perpustakaan Desa</a>
										</li>
										<li><a href="https://sekartaji.desa.id/first/kategori/24">Transparansi Keuangan</a>
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
									<h3 class="box-title"><a href="https://sekartaji.desa.id/first/arsip"><i class="fa fa-archive"></i> Arsip Artikel</a></h3>
								</div>
								<div class="box-body">
									<ul id="ul-menu">
										<li><a href="https://sekartaji.desa.id/first/artikel/101">Test</a></li>
										<li><a href="https://sekartaji.desa.id/first/artikel/100">Selamat Datang di Website Resmi Desa Sekartaji</a></li>
										<li><a href="https://sekartaji.desa.id/first/artikel/99">Sejarah Desa Sekartaji</a></li>
										<li><a href="https://sekartaji.desa.id/first/artikel/98">Profil Wilayah Desa Sekartaji</a></li>
										<li><a href="https://sekartaji.desa.id/first/artikel/93">Visi dan Misi</a></li>
										<li><a href="https://sekartaji.desa.id/first/artikel/92">Pemerintah Desa</a></li>
										<li><a href="https://sekartaji.desa.id/first/artikel/15">Pemdes se-Kabupaten Klungkung Kembangkan Website Desa Berbasis OpenSID</a></li>
									</ul>
								</div>
							</div>

							<div class='mb20'></div>
						</div>
						<div class='col-sm-6 col-md-12'>
							<!-- Widget Agenda -->


							<div class='mb20'></div>
						</div>
						<div class='clearfix visible-sm'></div>
						<div class='col-sm-6 col-md-12'>
							<!-- widget Galeri-->
							<div class="box box-warning box-solid">
								<div class="box-header">
									<h3 class="box-title"><a href="https://sekartaji.desa.id/first/gallery"><i class="fa fa-camera"></i> Galeri Foto</a></h3>
								</div>
								<div class="box-body">
									<ul id="li-komentar" class="sidebar-latest">
									</ul>
								</div>
							</div>

							<div class='mb20'></div>
						</div>
						<div class='col-sm-6 col-md-12'>
							<!-- widget Statistik Pengunjung -->

							<div class="box box-success">
								<div class="box-header">
									<h3 class="box-title"><i class="fa fa-bar-chart-o"></i> Statistik Pengunjung</h3>
								</div>
								<div class="box-body">
									<div id="container" align="center">
										<table cellpadding="0" cellspacing="0" class="counter">
											<tr>
												<td> Hari ini</td>
												<td><img src="https://sekartaji.desa.id//assets/images/counter/0.gif" align="absmiddle" /><img src="https://sekartaji.desa.id//assets/images/counter/0.gif" align="absmiddle" /><img src="https://sekartaji.desa.id//assets/images/counter/0.gif" align="absmiddle" /><img src="https://sekartaji.desa.id//assets/images/counter/5.gif" align="absmiddle" /><img src="https://sekartaji.desa.id//assets/images/counter/animasi/9.gif" align="absmiddle" /></td>
											</tr>
											<tr>
												<td valign="middle" height="20">Kemarin </td>
												<td valign="middle"><img src="https://sekartaji.desa.id//assets/images/counter/0.gif" align="absmiddle" /><img src="https://sekartaji.desa.id//assets/images/counter/0.gif" align="absmiddle" /><img src="https://sekartaji.desa.id//assets/images/counter/1.gif" align="absmiddle" /><img src="https://sekartaji.desa.id//assets/images/counter/1.gif" align="absmiddle" /><img src="https://sekartaji.desa.id//assets/images/counter/animasi/4.gif" align="absmiddle" /></td>
											</tr>
											<tr>
												<td valign="middle" height="20">Jumlah pengunjung</td>
												<td valign="middle"><img src="https://sekartaji.desa.id//assets/images/counter/5.gif" align="absmiddle" /><img src="https://sekartaji.desa.id//assets/images/counter/6.gif" align="absmiddle" /><img src="https://sekartaji.desa.id//assets/images/counter/3.gif" align="absmiddle" /><img src="https://sekartaji.desa.id//assets/images/counter/6.gif" align="absmiddle" /><img src="https://sekartaji.desa.id//assets/images/counter/animasi/2.gif" align="absmiddle" /></td>
											</tr>
										</table>
									</div>
								</div>
							</div>


							<div class='mb20'></div>
						</div>
						<div class='clearfix visible-sm'></div>
						<div class='col-sm-6 col-md-12'>
							<!-- widget Komentar-->
							<div class="box box-primary box-solid">
								<div class="box-header">
									<h3 class="box-title"><i class="fa fa-comments"></i> Komentar Terkini</h3>
								</div>
								<div class="box-body">
									<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="up" width="100%" height="100" align="center" behavior=”alternate”>
										<ul class="sidebar-latest" id="li-komentar">
										</ul>
									</marquee>
								</div>
							</div>
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