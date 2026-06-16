<?php
include '../includes/session.php';
cek_login('pegawai');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Pegawai</title>
    <link rel="stylesheet" href="../dist/css/adminlte.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info"><a href="#" class="d-block"><?php echo $_SESSION['nama']; ?></a></div>
            </div>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="nav-item"><a href="dashboard.php" class="nav-link active">Dashboard</a></li>
                    <li class="nav-item"><a href="absen.php" class="nav-link">Absen Harian</a></li>
                    <li class="nav-item"><a href="riwayat.php" class="nav-link">Riwayat Absensi</a></li>
                    <li class="nav-item"><a href="../logout.php" class="nav-link text-danger">Logout</a></li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="content-wrapper p-4">
        <div class="content-header">
            <h1 class="m-0">Dashboard Pegawai</h1>
        </div>
        <div class="content mt-3">
            <div class="card">
                <div class="card-body">
                    <h5>Selamat Datang Kembali, <b><?php echo $_SESSION['nama']; ?></b>!</h5>
                    <p class="text-muted">Aplikasi ini digunakan untuk mencatat kehadiran harian Anda secara berkala. Silakan gunakan menu di samping kiri untuk mengelola presensi.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>