<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>

    <form action="/mahasiswa/store" method="post">
        <label>NIM:</label><br>
        <input type="text" name="nim" required><br><br>

        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <button type="submit">Simpan</button>
        <a href="/mahasiswa">Batal</a>
    </form>
</body>
</html>