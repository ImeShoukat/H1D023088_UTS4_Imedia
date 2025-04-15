<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            margin-top: 100px;
        }
        .card {
            border-radius: 1rem;
        }
    </style>
</head>
<body>

<div class="container login-container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">Login Admin</h4>

                    <?php if ($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?= $this->session->flashdata('error'); ?>
                        </div>
                    <?php endif; ?>

                    <form method="post" action="<?= site_url('admin/login_action') ?>">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input 
                                type="text" 
                                name="username" 
                                class="form-control" 
                                id="username" 
                                placeholder="Masukkan Username" 
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="password">Password</label>
                            <input 
                                type="password" 
                                name="password" 
                                class="form-control" 
                                id="password" 
                                placeholder="Masukkan Password" 
                                required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-4">Login</button>
                    </form>
                    <a href="<?= site_url() ?>" class="btn btn-link mt-3">← Kembali ke Form Tamu</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
