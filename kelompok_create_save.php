<?php include('config.php') ?>


<?php 
$nilai = $_POST['nilai']; 

            if ($nilai == "") {
                echo "";
            } else if ($nilai >= 0 && $nilai <= 3) {
                echo $grade = 'D', $keterangan = 'Buruk';
            } else if ($nilai >= 3 && $nilai <= 5) {
                echo $grade = 'C', $keterangan = 'Cukup';
            } else if ($nilai >= 5 && $nilai <= 8) {
                echo $grade = 'B', $keterangan = 'Baik';
            }else if ($nilai >= 8 && $nilai <= 10) {
                echo $grade = 'A', $keterangan = 'Sangat Baik';
            }

  function ubah_data($date){
    $date_fmt = explode("/", $date);
    return $date_fmt[1]."-".$date_fmt[0]."-".$date_fmt[2]; 
 }
  $post = $_POST;
  $tanggal = ubah_data($_POST['tanggal_penugasan']);

  $sql = "INSERT INTO kelompok (id, nama_penilai, tanggal_penugasan, id_tim, id_koordinator, ketepatan, inisiatif, penerimaan, atur, kemampuan, disiplin, kualitas, tanggung_jawab, nilai, grade, keterangan) 
          VALUES (
            '".$post['id']."',
            '".$post['penilai']."',
            '".$tanggal."', 
            '".$post['nama_tim']."', 
            '".$post['nama_koordinator']."', 
            '".$post['ketepatan']."', 
            '".$post['inisiatif']."', 
            '".$post['penerimaan']."', 
            '".$post['atur']."', 
            '".$post['kemampuan']."',
            '".$post['disiplin']."',
            '".$post['kualitas']."',
            '".$post['tanggung_jawab']."',
            '".$post['nilai']."',
            '".$grade."',
            '".$keterangan."'
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
  header("Location: kelompok_read.php");
  // die();
  exit();
?>
