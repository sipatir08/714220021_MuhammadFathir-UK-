<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <?php if (session()->getFlashdata('success')) : ?>
        <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>

    <a href="/mahasiswa/create">+ Tambah Mahasiswa</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Aksi</th>
            <th>Dibuat</th>
            <th>Diupdate</th>
        </tr>
        <?php foreach ($mahasiswa as $row) : ?>
        <tr>
            <td><?= esc($row['nim']) ?></td>
            <td><?= esc($row['nama']) ?></td>
            <td><?= esc($row['jurusan']) ?></td>
            <td><?= esc($row['email']) ?></td>
            <td><?= esc($row['created_at']) ?></td>
            <td><?= esc($row['updated_at']) ?></td>
            <td>
                <a href="/mahasiswa/edit/<?= $row['id'] ?>">Edit</a> |
                <a href="/mahasiswa/delete/<?= $row['id'] ?>" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>