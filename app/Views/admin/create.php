<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> <?= $title; ?></h3>
                    </div>

                    <div class="card-body">
                        <?= form_open_multipart(base_url('admin/save')); ?>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="fullname">Nama Lengkap</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Nama Lengkap" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="email">Email</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="ex: safiraauliar@gmail.com" rows="5" cols="50" required></input>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="password">Password</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="password" required></input>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="photo">Gambar/Foto</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="file" class="form-control" name="photo" id="photo" required>
                                    <p class="text-muted">
                                        <strong>*</strong>format yang didukung jpg,jpeg,png
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="level">Level</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="level" id="level" placeholder="level" required></input>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="<?= base_url('admin/index') ?>" id="cancel" name="cancel" class="btn btn-default">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
    </section>
</div>