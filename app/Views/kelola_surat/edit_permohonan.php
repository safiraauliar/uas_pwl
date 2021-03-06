<html>

<head>
    <title>Aplikasi Surat Online Desa Sekartaji</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='custom.css' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pengajuan Surat</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Surat</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="container">

            <div class="row">

                <div class="col-xl-8 offset-xl-2 py-5">
                    <p class="lead">Silahkan lengkapi semua isian sesuai dengan data yang diperlukan</p>


                    <form action="<?= base_url('surat/update/' . $surat['id']); ?>" method="post">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">Nama *</label>
                                        <input id="nama" type="text" name="nama" class="form-control" value="<?= $surat['nama'] ?>">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nik">NIK *</label>
                                        <input id="nik" type="text" name="nik" class="form-control" value="<?= $surat['nik'] ?>">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="no_hp">No HP *</label>
                                        <input id="no_hp" type="text" name="no_hp" class="form-control" value="<?= $surat['no_hp'] ?>">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jenis_surat">Pilih Jenis Surat *</label>
                                        <select id="jenis_surat" name="jenis_surat" class="form-control" value="<?= $surat['jenis_surat'] ?>">
                                            <option value=""></option>
                                            <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
                                            <option value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu</option>
                                            <option value="Surat Keterangan Miskin">Surat Keterangan Miskin</option>
                                            <option value="Surat Keterangan Belum Pernah Menikah">Surat Keterangan Belum Pernah Menikah</option>
                                            <option value="Surat Keterangan Kelahiran">Surat Keterangan Kelahiran</option>
                                            <option value="Surat Keterangan Kematian">Surat Keterangan Kematian</option>
                                            <option value="Surat Keterangan Beda Nama">Surat Keterangan Beda Nama</option>
                                            <option value="Surat Keterangan Penghasilan">Surat Keterangan Penghasilan</option>
                                            <option value="Surat Keterangan Harga Tanah">Surat Keterangan Harga Tanah</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="pesan">Pesan *</label>
                                        <input id="pesan" name="pesan" class="form-control" value="<?= $surat['pesan'] ?>"></input>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input type="submit" class="btn btn-success btn-send" value="Update">
                                    <a href="<?= base_url('surat/display_permohonan') ?>" id="cancel" name="cancel" class="btn btn-default">Cancle</a>

                                </div>
                                <!-- <div class="col-md-6">
                                    <input type="button" class="btn btn-primary btn-send" value="Kembali" onclick="window.history.back()" />
                                </div> -->
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted">
                                        <strong>*</strong> Harus diisi
                                    </p>
                                    <p class="text-muted">
                                        <strong>*</strong> Jika Surat Sudah Jadi saudara akan diberi tahu melalui SMS
                                    </p>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
                <!-- /.8 -->

            </div>
            <!-- /.row-->

        </div>
        <!-- /.container-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
        <script src="contact.js"></script>
</body>

</html>