<?php
//load konfigurasi website
$site = $this->konfigurasi_model->listing();
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Site Metas -->
  <title><?= $title; ?></title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Site Icons -->
  <link rel="shortcut icon" href="<?= base_url('assets/upload/image/' . $site['icon']); ?>" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?= base_url('assets/template/'); ?>images/apple-touch-icon.png">
  <!-- SEO Google -->
  <meta name="keyword" content="<?= $site['keyword']; ?>">
  <meta name="description" content="<?= $title; ?> , <?= $site['deskripsi'] ?>">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/template/'); ?>css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- Site CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/template/'); ?>css/style.css">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/template/'); ?>css/responsive.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/template/'); ?>css/custom.css">

  <style type="text/css" media="screen">
    ul.pagination {
      padding: 0 10px;
      background-color: #00ffff;
      border-radius: 10px;
    }

    .pagination a,
    .pagination b {
      padding: 10px 20px;

      text-decoration: none;
      float: left;
    }

    .pagination a {
      background-color: #00ffff;
      color: black;
    }

    .pagination b {
      background-color: #00bfff;
      color: black;
    }

    .pagination a:hover {
      background-color: #00bfff;
    }
  </style>
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>