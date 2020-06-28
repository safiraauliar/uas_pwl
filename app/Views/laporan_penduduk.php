<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>TTL</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Status</th>
                <th>Pekerjaan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($penduduk as $key => $data) { ?>
                <td><?= $no++; ?></td>
                <td><?= $data['nik'] ?></td>
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
</body>

</html>