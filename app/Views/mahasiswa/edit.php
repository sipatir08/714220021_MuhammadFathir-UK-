<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>

    <form action="/mahasiswa/update/<?= $mahasiswa['id'] ?>" method="post">
        <label>NIM:</label><br>
        <input type="text" name="nim" value="<?= esc($mahasiswa['nim']) ?>" required><br><br>

        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?= esc($mahasiswa['nama']) ?>" required><br><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" value="<?= esc($mahasiswa['jurusan']) ?>" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?= esc($mahasiswa['email']) ?>" required><br><br>

        <button type="submit">Update</button>
        <a href="/mahasiswa">Batal</a>
    </form>
</body>
</html>