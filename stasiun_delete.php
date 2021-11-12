<?php
  include('adminonly.php');
  include('config.php');

  $query="DELETE FROM lokasi WHERE id_stasiun='".$_GET['id_stasiun']."'";

  if($db->query($query) === TRUE){
    echo "Koneksi berhasil";
  }else{
    echo "Koneksi gagal";
  }
  header("Location: stasiun_read.php");
  exit();
?>
