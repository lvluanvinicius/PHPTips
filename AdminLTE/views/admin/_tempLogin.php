<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= url("../public/inc/panel/components/plugins/fontawesome-free/css/all.min.css")?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= url("../public/inc/panel/components/plugins/icheck-bootstrap/icheck-bootstrap.min.css")?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= url("../public/inc/panel/components/dist/css/adminlte.min.css")?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style>
    .alert {
      height: 50px;
      border-radius: 10px;
      position: absolute;
      top: 28px;
      right: 40px;
      display: none;
    }
    .alert i {
      margin-right: 10px;
      cursor: pointer;
      z-index: 100;
    }
  </style>
</head>
<body class="hold-transition login-page">
  <?= $v->section("content"); ?>
  <?= $v->section("scripts"); ?>
</body>
</html>
