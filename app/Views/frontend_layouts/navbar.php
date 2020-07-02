<div class='navbar navbar-default navbar-fixed-top'>
    <div class='container'>

        <div class='navbar-header'>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href=""><img src="<?= base_url(); ?>/lte/dist/img/konohalogo.png" class='hidden-xs'></a>
            <a class='navbar-brand with-subbrand' href="<?= base_url('beranda') ?>">
                <div>
                    <div class='title hidden-sm'><span class='hidden-xs web-title-desa'>Desa </span>Konohagakure</div>
                    <div class='sub-title hidden-xs hidden-sm'><span class='web-title-kabupaten'>Kabupaten </span>Grobogan</div>
                </div>
            </a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <div class="navbar-form ">
                <form id='formSearch' method='get' action="">
                    <div class="form-group">
                        <div class="input-group">
                            <input type='text' class='form-control' placeholder="Pencarian..." name='cari' value="">
                            <span class="input-group-btn">
                                <button type='submit' class='btn btn-default'><i class='fa fa-search'></i></button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Profil Desa <i class='fa fa-angle-down'></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="">Sejarah Desa</a></li>
                        <li><a href="">Profil Wilayah Desa</a></li>
                        <li><a href="">Arti Lambang Desa</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Pemerintahan Desa <i class='fa fa-angle-down'></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="">Visi dan Misi</a></li>
                        <li><a href="">Pemerintah Desa</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Data Desa <i class='fa fa-angle-down'></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="">Data Penduduk</a></li>
                        <li><a href="#">Data Pendidikan Ditempuh</a></li>
                        <li><a href="#">Data Pekerjaan</a></li>
                        <li><a href="#">Data Jenis Kelamin</a></li>
                        <li><a href="#">Data Kelompok Umur</a></li>
                        <li><a href="#">Data Perkawinan</a></li>
                    </ul>
                </li>
                <li class='$item[status]'><a href="<?= base_url('loginadmin/user') ?>">Login Penduduk</a></li>
                <li class='hidden-xs'><a href='javascript:void(0)' id='btnSearch' class=""><i class='fa fa-search'></i></a></li>
            </ul>

        </div> <!-- #navbar -->

    </div> <!-- .container -->
</div>