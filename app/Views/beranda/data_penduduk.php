<div id='lunggongo'></div>
<div id='batanga'>
    <div class='container'>
        <div class='row mt10'>
            <div class='col-md-8 mb10'>


                <div class='list-frame artikel' id="artikel-Sejarah Desa Sekartaji">
                    <h1 class='artikel-judul text-title mt0'><strong><?= $title; ?></strong></h1>

                    <div class='artikel-waktu text-muted mb15'>

                        <span class='mr10'><i class='fa fa-user'></i> Administrator</span>
                    </div>

                    <div class='artikel-konten clearfix'>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>TTL</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Agama</th>
                                        <th>Status</th>
                                        <th>Pekerjaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($penduduk as $key => $data) { ?>
                                        <td><?= $no++; ?></td>
                                        <td><?= $data['nama'] ?></td>
                                        <td><?= $data['temp_tgl_lahir'] ?></td>
                                        <td><?= $data['jen_kel'] ?></td>
                                        <td><?= $data['alamat'] ?></td>
                                        <td><?= $data['agama'] ?></td>
                                        <td><?= $data['status'] ?></td>
                                        <td><?= $data['pekerjaan'] ?></td>


                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- .list-frame -->
            </div>
            <div class='col-md-4'>

                <!-- Daftar Widget disebelah kanan -->

                <div class='btd-right-menu'>
                    <div class='row'>
                        <div class='col-sm-6 col-md-12'>

                            <div class='mb20'></div>
                        </div>
                        <div class='col-sm-6 col-md-12'>

                            <div class='mb20'></div>
                        </div>
                        <div class='clearfix visible-sm'></div>

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