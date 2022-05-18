<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/styles.css" />

    <title><?= $title; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top autohide">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand d-flex fw-bolder ms-lg-3" href="#">Intrasa</a>
            <div class="collapse navbar-collapse nav-atas container-fluid" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-lg-2">
                        <a class="nav-link" aria-current="page" href="<?= base_url(); ?>"><i class="bi bi-house-fill me-2"></i>Home</a>
                    </li>
                    <li class="nav-item me-lg-2">
                        <a class="nav-link" aria-current="page" href="<?= base_url(); ?>sekolah"><i class="bi bi-mortarboard-fill me-2"></i>Sekolah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>history"><i class="bi bi-clock-history me-2"></i>History</a>
                    </li>
                </ul>
                <form class="d-flex me-lg-2" method="GET" action="<?= base_url(); ?>sekolah">
                    <input class="form-control" type="search" placeholder="Search . . ." aria-label="Search" name="q" />
                    <button class="btn btn-dark searchBtn" type="submit" title="Search">
                        <span class="bi bi-search search-btn"></span>
                    </button>
                </form>
            </div>
            <div class="d-flex right-nav">
                <a href="login.html" title="Sign In" class="me-2"><span class="bi bi-person-circle sign-btn"></span></a>
                <a href="help.html" title="Help"><span class="bi bi-question-circle help-btn"></span></a>
            </div>
        </div>
    </nav>