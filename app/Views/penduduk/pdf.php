<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        height: 50px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        width: 20px;
        padding: 10px;
        text-align: left;
    }

    th {
        text-align: center;
    }
</style>

<body>
    <h2>Tabel Data Penduduk Konohagakure</h2>
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
            </tr>
        </thead>
        <?php $no = 1;
        foreach ($penduduk as $key => $data) { ?>
            <tr>
                <td style="text-align: center"><?= $no++; ?></td>
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
    </table>
</body>

</html>