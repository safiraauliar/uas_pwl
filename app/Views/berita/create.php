<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> <?= $title; ?></h3>
                    </div>

                    <div class="card-body">
                        <?= form_open_multipart(base_url('berita/save')); ?>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="judul">Judul Berita</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Berita" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="isi">Isi Berita</label>
                                </div>
                                <div class="col-md-10">
                                    <textarea type="text" class="form-control" name="isi" id="isi" placeholder="Isi Berita" rows="5" cols="50" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="tanggal_upload">Tanggal Upload</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="tanggal_upload" id="tanggal_upload" placeholder="15 Juli 2020" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="gambar">Gambar/Foto</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="file" class="form-control" name="gambar" id="gambar" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="<?= base_url('berita/index') ?>" id="cancel" name="cancel" class="btn btn-default">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
    </section>
</div>