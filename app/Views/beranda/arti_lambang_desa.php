<div id='lunggongo'></div>
<div id='batanga'>
    <div class='container'>
        <div class='row mt20'>
            <div class='col-md-8 mb20'>


                <div class='list-frame artikel' id="artikel-Sejarah Desa Sekartaji">
                    <h1 class='artikel-judul text-title mt0'><strong><?= $title; ?></strong></h1>

                    <div class='artikel-waktu text-muted mb15'>

                        <span class='mr10'><i class='fa fa-user'></i> Administrator</span>
                    </div>
                    <div class='artikel-gambar mb10'>
                        <a href="" class='fancybox' rel="99">
                            <img class='full' src="<?= base_url(); ?>/lte/dist/img/konohalogo.png" />
                        </a>
                    </div>
                    <div class='artikel-konten clearfix'>
                        <p style="text-align: center;">Berikut ini <?= $title; ?></p>

                        <p style="text-align: justify;">
                            < (agak miring sedikit) 2. @(a dihilangkan) 3. /(di pendekkan) Arti lambang adalah seperti daun yang & di tengahnya melambangkan pusaran api karena Konohagakure sendiri terletak di Negara Hi </p> </div> <div class='list-view artikel-galeri'>
                                <div class='row'>
                                </div>
                    </div>


                    <div class='clearfix artikel-komentar-daftar'>
                    </div>


                    <div class='sub-frame-2 artikel-komentar-form'>
                        <p><i>Silakan tulis komentar dalam formulir berikut ini. Gunakan bahasa yang santun dan komentar baru terbit setelah disetujui Admin.</i></p>
                        <div>
                            <form id='form-komentar' name='form' action='https://sekartaji.desa.id/first/add_comment/99' method='POST'>
                                <div>
                                    <div class='form-group'>
                                        <label>Nama</label>
                                        <input class='form-control input-sm' type=text required name='owner' maxlength=30 value="">
                                    </div>
                                    <div class='form-group'>
                                        <label>Alamat E-mail</label>
                                        <input class='form-control input-sm' type=text placeholder='(boleh kosong)' name='email' maxlength=30 value="">
                                    </div>
                                    <div class='form-group'>
                                        <label>Komentar</label>
                                        <textarea class='form-control input-sm' required name='komentar'></textarea>
                                    </div>
                                    <div class='form-group'>
                                        <div class='row'>
                                            <div class='col-sm-4'>
                                                <img id='captcha' src='https://sekartaji.desa.id/securimage/securimage_show.php' alt='CAPTCHA Image' />
                                            </div>
                                            <div class='col-sm-4'>
                                                <a href='#' onclick="document.getElementById('captcha').src = 'https://sekartaji.desa.id/securimage/securimage_show.php?' + Math.random(); return false">[ Ganti Gambar ]</a>
                                                <div><input class='form-control input-sm' type='text' required name='captcha_code' maxlength='6' value='' /> Isikan kode di gambar</div>
                                            </div>
                                        </div>
                                    </div>
                                    <input class='btn btn-primary btn-lg' type='submit' value='Kirim Komentar'>
                                </div>
                            </form>
                        </div>
                    </div> <!-- .sub-frame-2 -->

                </div> <!-- .list-frame -->
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
                        </div>
                        <div class='clearfix visible-sm'></div>
                        <div class='col-sm-6 col-md-12'>
                        </div>
                        <div class='clearfix visible-sm'></div>
                        <div class='col-sm-6 col-md-12'>
                            <!-- widget Arsip Artikel -->

                            <div class="box box-primary box-solid">
                                <div class="box-header">
                                    <h3 class="box-title"><a href=""><i class="fa fa-archive"></i> Arsip Artikel</a></h3>
                                </div>
                                <div class="box-body">
                                    <ul>
                                        <li><a href="<?= base_url('beranda') ?>"><i class="icon ion-link"> Selamat Datang di Website Resmi Desa Konohagakure</i></a></li>
                                        <li><a href="<?= base_url('berita/sejarah') ?>"><i class="icon ion-link"> Sejarah Desa Konohagakure</i></a></li>
                                        <li><a href="<?= base_url('berita/profil_wilayah') ?>"><i class="icon ion-link"> Profil Wilayah Desa Konohagakure</i></a></li>
                                        <li><a href="<?= base_url('berita/visimisi') ?>"><i class="icon ion-link"> Visi dan Misi</i></a></li>
                                        <li><a href="<?= base_url('berita/pemerintah_desa') ?>"><i class="icon ion-link"> Pemerintah Desa</i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class='col-sm-6 col-md-12'>
                        </div>
                        <div class='clearfix visible-sm'></div>
                        <div class='col-sm-6 col-md-12'>
                        </div>
                        <div class='col-sm-6 col-md-12'>
                        </div>
                        <div class='clearfix visible-sm'></div>
                        <div class='col-sm-6 col-md-12'>
                        </div>
                        <div class='col-sm-6 col-md-12'>
                            <div class='list-frame'>
                                <div class='list-view'>
                                    <h1 class='title'><span>Covid</span></h1>
                                    <div><iframe src='https://widget.kompas.com/corona/statistik' width=100% height=350px /></Iframe></div>
                                </div>
                            </div>
                        </div>
                        <div class='clearfix visible-sm'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>