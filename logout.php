<?php
  //require('partials/header.php');
  require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');

  if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != null) {
    $_SESSION['user_id'] = null;
    // redirect
          header("Location: /");
  }

  // якщо є куккі
  if(isset($_COOKIE['user_id']) && $_COOKIE['user_id'] != null) {
    setcookie('user_id', '', 0, '/');  // знищити куккі , таймер 0 сек
      header("Location: /login.php");
  }

?>  