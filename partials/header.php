<?php
require($_SERVER['DOCUMENT_ROOT'] . '/config/bd.php');  // шукає файл по всьому сервері
//var_dump($_SERVER['DOCUMENT_ROOT'] . 'config/bd.php');
require($_SERVER['DOCUMENT_ROOT'] . '/config/helpers.php');

// старт сесії 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <title>TWO PHP</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

      <meta name="viewport" content="width=device-width, initial-scale=1">

      <meta property="og:title" content="">
      <meta property="og:type" content="">
      <meta property="og:url" content="">
      <meta property="og:image" content="">

      <link rel="manifest" href="site.webmanifest">
      <link rel="apple-touch-icon" href=".assets/img/1.png">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
          <!-- bootstrap css -->
      <link rel="stylesheet" href="partials/any/css/bootstrap.min.css" />
          <!-- site css -->
      <link rel="stylesheet" href="partials/any/style.css" />
          <!-- responsive css -->
      <link rel="stylesheet" href="partials/any/css/responsive.css" />
          <!-- color css 
      <link rel="stylesheet" href="partials/any/css/colors.css" />-->
          <!-- select bootstrap -->
      <link rel="stylesheet" href="partials/any/css/bootstrap-select.css" />
          <!-- scrollbar css -->
      <link rel="stylesheet" href="partials/any/css/perfect-scrollbar.css" />
          <!-- custom css -->
      <link rel="stylesheet" href="partials/any/css/custom.css" />
      
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <!-- <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/style.css"> -->
      <link rel="stylesheet" href="js/semantic.min.css" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>



