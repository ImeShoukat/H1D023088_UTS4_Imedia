<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'Aplikasi Buku Tamu' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .navbar {
            background-color: #007bff; 
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: #007bff !important;
        }

        .navbar-nav .nav-link {
            font-size: 1.1rem;
            color: #007bff !important;
        }

        .navbar-nav .nav-link:hover {
            color: #000000 !important;
        }

        .navbar-light .navbar-nav .nav-link {
            color: white;
        }

        .btn-outline-primary:hover, .btn-outline-danger:hover {
            color: white;
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?= site_url() ?>">Buku Tamu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto" >

                <li class="nav-item">
                    <a href="<?= base_url() ?>" class="btn btn-sm btn-outline-primary mx-2">Home</a>
                </li>


                <?php if (isset($user)): ?>
                    <!-- klo login sebagai admin -->
                    <li class="nav-item">
                        <a href="<?= base_url('admin/dashboard') ?>" class="btn btn-sm btn-outline-primary mx-2">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/logout') ?>" class="btn btn-sm btn-outline-danger mx-2">Logout</a>
                    </li>
                <?php else: ?>
                    <!-- klo ga login -->
                    <li class="nav-item">
                        <a href="<?= base_url('admin/login') ?>" class="btn btn-sm btn-outline-Secondary">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <?php
    if (isset($page)) {
        $this->load->view($page);
    } else {
        echo "<p>Halaman tidak ditemukan.</p>";
    }
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
