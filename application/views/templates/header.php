<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugin/css/bootstrap-datepicker.min.css">

    <title><?= $judul; ?></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>home">TLSK</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="<?= base_url(); ?>home">Beranda<span class="sr-only">(current)</span></a>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Transaksi Surat
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?= base_url(); ?>suratmasuk">Surat Masuk</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>suratkeluar">Surat Keluar</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Buku Agenda
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?= base_url(); ?>suratmasuk">Surat Masuk</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>suratkeluar">Surat Keluar</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Laporan
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?= base_url(); ?>disposisi">Disposisi</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>verifikasi">Verifikasi</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pengaturan
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?= base_url(); ?>instansi">Instansi</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>users">Users</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>divisi">Divisi</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown justify-content-end">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?= base_url(); ?>suratmasuk">Profile</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>suratkeluar">Ubah Password</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>suratkeluar">Login</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>suratkeluar">Register</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>suratkeluar">Logout</a>
                        </div>
                    </div>
        </div>    
    </nav>
    

