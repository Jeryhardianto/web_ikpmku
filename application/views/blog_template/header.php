<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?= base_url('assets/'); ?>img/LOGO1.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?= $title; ?></title>

    <!-- Icon css link -->
    <link href="<?= base_url('assets/'); ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendors/elegant-icon/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendors/themify-icon/themify-icons.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="<?= base_url('assets/'); ?>vendors/revolution/css/settings.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendors/revolution/css/navigation.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendors/animate-css/animate.css" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="<?= base_url('assets/'); ?>vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">

    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/responsive.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Font Awesome -->
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
    <!-- Bootstrap core CSS -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Material Design Bootstrap -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.3/css/mdb.min.css" rel="stylesheet"> -->

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/mdb/'); ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <!-- <link href="<?= base_url('assets/mdb/'); ?>css/mdb.min.css" rel="stylesheet"> -->
    <!-- Your custom styles (optional) -->
    <link href="<?= base_url('assets/mdb/'); ?>css/style.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/36de97794d.js"></script>

</head>

<body>

    <!--================Search Area =================-->
    <section class="search_area">
        <div class="search_inner">
            <input type="text" placeholder="Enter Your Search...">
            <i class="ti-close"></i>
        </div>
    </section>
    <!--================End Search Area =================-->

    <!--================Header Menu Area =================-->
    <header class="main_menu_area">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="<?= base_url('assets/'); ?>img/LOGO2.png" width="50px"
                    height="50px" alt="IKPMKU" class="float-left">
                &np;
                <span class="font-weight-bold text-white">IKPMKU </span>
                <br />
                &nbsp;
                <span class="font-weight-bold text-white small">Daerah Istimewa Yogyakarta</span>


            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>index.php/profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>index.php/asrama">Asrama</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>index.php/berita">Berita</a></li>
                    <li class="nav-item"><a href="<?= base_url(); ?>index.php/galeri">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>index.php/kontak">Hubungi Kami</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
    <!--================End Header Menu Area =================-->