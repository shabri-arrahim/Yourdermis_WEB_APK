<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Yourdermis</title>
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/Logo.png') ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b9267013c9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>


<body>
<header>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-faded">
            <a class="navbar-brand" href="#"><img src="<?= base_url()?>/assets/img/Logo.png" width="130px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mr-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=base_url()?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Feeds</a>
                    </li>  
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>  
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link"href="#"><i class="fas fa-caret-down"></i></a>
                        <div class="dropdown">
                            <div class="dropdown-content dropdown-menu-right">
                                <a href="<?= base_url()?>/index/login"><?php echo "Masuk" ?></a>
                                <a href="<?= base_url()?>/index/register"><?php echo "Daftar" ?></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<script src="<?=base_url()?>/assets/src/main.js"></script>
<!-- <link rel="stylesheet" href="<?=base_url()?>/assets/css/mobile-style.css"> -->