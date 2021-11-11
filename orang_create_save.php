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
    return $date_fmt[1]."-".$date_fmt[0]."-".$date_fmt[2]; 
 }
  $post = $_POST;
  $tanggal = ubah_data($_POST['tanggal_penugasan']);

  $sql = "INSERT INTO orang (id, tanggal_penugasan, id_lokasi, id_koordinator, id_profile, id_tim, kerajinan, disiplin, etika, inisiatif, cerdas, kualitas, penguasaan, komunikasi, kerjasama, kejujuran, nilai, grade, ket) 
          VALUES (
            '".$post['id']."',
            '".$tanggal."', 
            '".$post['nama_stasiun']."', 
            '".$post['nama_koordinator']."', 
            '".$post['nama']."', 
            '".$post['nama_tim']."', 
            '".$post['kerajinan']."', 
            '".$post['disiplin']."', 
            '".$post['etika']."',
            '".$post['inisiatif']."',
            '".$post['cerdas']."',
            '".$post['kualitas']."',
            '".$post['penguasaan']."',
            '".$post['komunikasi']."',
            '".$post['kerjasama']."',
            '".$post['kejujuran']."',
            '".$post['nilai']."',
            '".$grade."',
            '".$ket."'
          )";

  if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
  }else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // if (headers_sent()) {
  //     die("Redirect failed. Please click on this link: <a href=...>");
  // }
  // else{
  //     exit(header("Location: /user.php"));
  // }
  // header("Location: orang_read.php");
  // die();
  exit();
?>
