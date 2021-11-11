<?php include('config.php') ?>
<?php 
 $nilai = $_POST['nilai']; 

             if ($nilai == "") {
                echo "";
            } else if ($nilai >= 0 && $nilai <= 3) {
                echo $grade = 'D', $ket = 'Buruk';
            } else if ($nilai >= 3 && $nilai <= 5) {
                echo $grade = 'C', $ket = 'Cukup';
            } else if ($nilai >= 5 && $nilai <= 8) {
                echo $grade = 'B', $ket = 'Baik';
            }else if ($nilai >= 8 && $nilai <= 10) {
                echo $grade = 'A', $ket = 'Sangat Baik';
            }


  function ubah_data($date){
    $date_fmt = explode("/", $date);
    return $date_fmt[2]."-".$date_fmt[1]."-".$date_fmt[0]; 
 }
  $post = $_POST;
  $tanggal = ubah_data($_POST['tanggal_penugasan']);
  print_r($post);
  // exit;
  $sql = "UPDATE orang SET id ='".$post['id']."', tanggal_penugasan='".$tanggal."' , id_lokasi='".$post['nama_stasiun']."', id_koordinator='".$post['nama_koordinator']."', id_profile ='".$post['nama_karyawan']."', id_tim ='".$post['tim']."', kerajinan ='".$post['kerajinan']."', disiplin='".$post['disiplin']."', etika='".$post['etika']."', inisiatif='".$post['inisiatif']."', cerdas='".$post['cerdas']."', kualitas='".$post['kualitas']."', penguasaan ='".$post['penguasaan']."', komunikasi ='".$post['komunikasi']."', kerjasama ='".$post['kerjasama']."', kejujuran ='".$post['kejujuran']."', nilai ='".$post['nilai']."', grade='".$grade."', ket ='".$ket."' WHERE id='".$post['id']."'";

  if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // if (headers_sent()) {
  //     die("Redirect failed. Please click on this link: <a href=...>");
  // }
  // else{
  //     exit(header("Location: /user.php"));
  
 header("Location: orang_read.php");
  // die();
  exit();
?>

