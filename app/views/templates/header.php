<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= Config::BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?= Config::BASEURL; ?>/css/style.css" rel="stylesheet">
    <script src="<?= Config::BASEURL; ?>/js/jquery.js"></script> -->

    <title>Halaman <?= $data['judul'] ?></title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 py-3">
        <div class="container">
            <a class="navbar-brand disabled" href="<?= Config::BASEURL; ?>">PERPUSTAKAAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="<?= Config::BASEURL; ?>">Home</a>
                    <a class="nav-link active" href="<?= Config::BASEURL; ?>/siswa">Siswa</a>
                    <a class="nav-link active" href="<?= Config::BASEURL; ?>/about">About</a>

                </div>
            </div>
        </div>
    </nav>