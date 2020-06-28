<html>
<h2>Tabel Data Penduduk Konohagakure</h2>
<table border=1px;>
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
</table>
</body>

</html>