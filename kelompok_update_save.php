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
    return $date_fmt[2]."-".$date_fmt[1]."-".$date_fmt[0]; 
 }
  $post = $_POST;
  $tanggal = ubah_data($_POST['tanggal_penugasan']);
  print_r($post);
  // exit;
  $sql = "UPDATE kelompok SET id ='".$post['id']."', nama_penilai='".$post['penilai']."', tanggal_penugasan='".$tanggal."' , id_tim='".$post['nama_tim']."', id_koordinator='".$post['nama_koordinator']."', ketepatan='".$post['ketepatan']."', inisiatif='".$post['inisiatif']."', penerimaan='".$post['penerimaan']."', atur='".$post['atur']."', kemampuan='".$post['kemampuan']."', disiplin='".$post['disiplin']."', kualitas='".$post['kualitas']."', tanggung_jawab='".$post['tanggung_jawab']."', nilai='".$post['nilai']."', grade='".$grade."', keterangan='".$keterangan."' WHERE id='".$post['id']."'";

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
  
  header("Location: kelompok_read.php");
  // die();
  exit();
?>

