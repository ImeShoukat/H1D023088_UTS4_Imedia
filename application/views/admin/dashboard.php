<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		.navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: #007bff !important;
        }
	</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?= site_url() ?>">Buku Tamu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="<?= base_url() ?>" class="btn btn-sm btn-outline-primary mx-1">Home</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/dashboard') ?>" class="btn btn-sm btn-outline-primary mx-1">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/logout') ?>" class="btn btn-sm btn-outline-danger mx-1">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container mt-4">
    <h3>Data Buku Tamu</h3>
	<!-- filternya -->
    <form method="get" class="form-inline mb-3">
        <label for="tanggal" class="mr-2">Filter Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" class="form-control mr-2"
               value="<?= isset($_GET['tanggal']) ? $_GET['tanggal'] : '' ?>">
        <button type="submit" class="btn btn-primary">Filter</button>
        <a href="<?= site_url('admin/dashboard') ?>" class="btn btn-secondary ml-2">Reset</a>
    </form>

    <?php if (!empty($_GET['tanggal'])): ?>
        <p class="text-muted">Menampilkan data tamu untuk tanggal: <strong><?= htmlspecialchars($_GET['tanggal']) ?></strong></p>
    <?php endif; ?>

    <!-- data tamu-->
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
        <tr>
            <th>Nama</th>
            <th>Instansi</th>
            <th>Keperluan</th>
            <th>Tanggal Digunakan</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($tamu)): ?>
            <?php foreach ($tamu as $row): ?>
                <tr>
                    <td><?= htmlspecialchars($row['nama']) ?></td>
                    <td><?= htmlspecialchars($row['instansi']) ?></td>
                    <td><?= htmlspecialchars($row['keperluan']) ?></td>
                    <td><?= date('d M Y', strtotime($row['tanggal'])) ?></td>
                    <td>
                        <a href="<?= site_url('admin/hapus/' . $row['id']) ?>" class="btn btn-sm btn-danger"
                           onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" class="text-center">Tidak ada data tamu.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
