<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> <?= $title; ?></h3>

                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('penduduk/save') ?>" method="post">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="nik">NIK</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="nik" id="nik" placeholder="Nomor Induk Keluarga" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="nama">Nama Lengkap</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="temp_tgl_lahir">Tempat/Tanggal lahir</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="temp_tgl_lahir" id="temp_tgl_lahir" placeholder="ex ; Grobogan, 15 Juli 2000" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="jen_kel">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="jen_kel" id="jen_kel" placeholder="Jenis Kelamin" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="alamat">Alamat</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Manggarwetan RT001/RW001, Godong" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="agama">Agama</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="agama" id="agama" placeholder="Agama" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="status">Status Perkawinan</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="status" id="status" placeholder="ex : Belum Kawin" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="pekerjaan">Pekerjaan</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="<?= base_url('penduduk/index') ?>" id="cancel" name="cancel" class="btn btn-default">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>