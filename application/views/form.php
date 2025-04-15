<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Buku Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Form Buku Tamu</h2>
    <form action="<?= site_url('tamu/simpan') ?>" method="post">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Instansi</label>
            <input type="text" name="instansi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Keperluan</label>
            <textarea name="keperluan" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Tanggal Peminjaman</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>

</body>
</html>
