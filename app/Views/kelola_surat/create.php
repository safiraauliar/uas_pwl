<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> <?= $title; ?></h3>
                    </div>
                    <?php
                    if (!empty(session()->getFlashdata('gagal'))) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('gagal'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>
                    <div class="card-body">
                        <?= form_open_multipart(base_url('files/save')); ?>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="file_judul">Judul</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="file_judul" id="file_judul" placeholder="Nama File" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="file_deskripsi">Deskripsi</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="file_deskripsi" id="file_deskripsi" placeholder="Deskripsi file" rows="5" cols="50" required></input>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="file_tgl">Tanggal Upload</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="file_tgl" id="file_tgl" placeholder="15 Juli 2020" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="file_oleh">Oleh</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="file_oleh" id="file_oleh" placeholder="Oleh" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="file_data">File</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="file" class="form-control" name="file_data" id="file_data" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-10">
                                    <p class="text-muted">
                                        <strong>*</strong>format yang didukung pdf,doc,docx
                                    </p>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="<?= base_url('files') ?>" id="cancel" name="cancel" class="btn btn-default">Cancel</a>

                                </div>
                            </div>
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
    </section>
</div>