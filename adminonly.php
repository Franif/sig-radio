<?php

  session_start();
  if(isset($_SESSION['loggedin']) || $_SESSION['loggedin'] === true){
    if($_SESSION['level'] == 1){
      //do nothing proceed to link
    }else{
      header('Location:index.php');
      exit;
    }
  }else{
    header('Location:login.php');
    exit;
  }
  include('config.php');
?>
