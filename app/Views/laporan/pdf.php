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
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
    }

    th {
        text-align: center;
    }
</style>

<body>
    <h2> Data Laporan Warga Desa Konohagakure</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>nama</th>
                <th>Isi Laporan</th>
                <th>Tanggal lapor</th>
            </tr>
        </thead>
        <?php $no = 1;
        foreach ($laporan as $key => $data) { ?>
            <tr>
                <td style="text-align: center"><?= $no++; ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['isi_laporan'] ?></td>
                <td><?= $data['tgl_lapor'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>