<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Admin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="card-title"><?= $title; ?></h3>
                </div>
                <div class="col-sm-6 float-sm-right">
                    <div class="float-sm-right">
                        <a href="<?= base_url('admin/tambah') ?>" class="btn btn-primary">Tambah</a><br></br>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <?php
            if (!empty(session()->getFlashdata('success'))) { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('success'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>email</th>
                            <th>Foto</th>
                            <th>level</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($users as $key => $data) { ?>
                            <td><?= $no++; ?></td>
                            <td><?= $data['fullname'] ?></td>
                            <td><?= $data['email'] ?></td>
                            <td><img src="<?= base_url('admin_photo/' . $data['photo']); ?>" alt="" width="100px"></td>
                            <td><?= $data['level'] ?></td>

                            <td>
                                <a href="<?= base_url('admin/edit/' . $data['id']) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url('admin/delete/' . $data['id']) ?>" class="btn btn-danger btn-xs" onClick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="fa fa-trash"></i></a>
                            </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </section>
</div>
<!-- /.content-wrapper -->