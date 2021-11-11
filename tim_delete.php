<?php include('config.php');?>
<?php
$row=$_GET;
$query="DELETE FROM tim_baru WHERE id_tim='".$row['id_tim']."'";
if($db->query($query)===TRUE){
	echo "Koneksi berhasil"; 

}else{
	echo "Koneksi gagal";
}
header("Location: tim_read.php");
exit();
?>
