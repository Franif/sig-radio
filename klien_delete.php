<?php include('config.php');?>
<?php
$row=$_GET;
$query="delete from klien_baru where id_klien='".$row['id_klien']."'";
if($db->query($query)===TRUE){
	echo "Koneksi berhasil"; 

}else{
	echo "Koneksi gagal";
}
header("Location: klien_read.php");
exit();
?>
