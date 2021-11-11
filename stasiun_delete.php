<?php include('config.php');?>
<?php
$row=$_GET;
$query="DELETE FROM lokasi WHERE id_stasiun='".$row['id_stasiun']."'";
if($db->query($query)===TRUE){
	echo "Koneksi berhasil"; 

}else{
	echo "Koneksi gagal";
}
header("Location: stasiun_read.php");
exit();
?>
