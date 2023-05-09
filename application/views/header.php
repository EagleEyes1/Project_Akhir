<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
    <link href="<?= site_url('asset/font/material-icon/material-icons.css'); ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?= site_url('asset/css/materialize.min.css'); ?>"
        media="screen,projection" />
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Oregano&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="asset/css/mystyle.css">
    <title>Pokemon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <style>
    body {
        background-color: #fafcff;
    }

    .navbar {
        font-family: 'Bangers', cursive;
    }
    </style>
    <script type="text/javascript" src="<?= site_url('asset/js/materialize.min.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/e0f74a96a7.js" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid p-2 movenav">
            <div>
                <img src="asset/images/pokemon.png" style="
                  max-width: 70px;
                  max-height: 70px;
                  padding: 13px;">
                <a style="
          color:#edcb04;
          font-size: 30px;
          -webkit-text-stroke-width: 1px;
          -webkit-text-stroke-color: #2c65b5;" class="navbar-brand" href="#">Pokemon</a>
            </div>
            <div class="d-flex">
                <a class="nav-link active" aria-current="page" href="#" style="
          color:#edcb04;
          font-size: 25px;
          -webkit-text-stroke-width: 1px;
          -webkit-text-stroke-color: #2c65b5;">About Us</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid" style="padding-left:0; padding-right:0;max-width: 100%;overflow-x: hidden;">
        <img src="asset/images/banner-pokemon.png" class="mx-auto d-block" style="height:35vh; width:100vw;"
            alt="pokemon">
    </div>