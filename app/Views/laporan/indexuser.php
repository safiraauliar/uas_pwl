<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Berita</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-12 float-sm-right">
                    <div class="float-sm-right ml-2">
                        <a href="<?= base_url('laporan/tambah') ?>" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah</a>
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
                                <th>nama</th>
                                <th>Tanggal lapor</th>
                                <th>Isi Laporan</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($laporan as $key => $data) { ?>
                                <td><?= $no++; ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['tgl_lapor'] ?></td>
                                <td><?= $data['isi_laporan'] ?></td>
                                <td>
                                    <a href="<?= base_url('laporan/edit/' . $data['id']) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
                                    <a href="<?= base_url('laporan/delete_for_user/' . $data['id']) ?>" class="btn btn-danger btn-xs" onClick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="fa fa-trash"></i></a>
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