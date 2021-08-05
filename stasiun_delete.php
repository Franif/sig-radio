<?php include('config.php');?>
<?php
$row=$_GET;
$query="delete from lokasi where id='".$row['id']."'";
if($db->query($query)===TRUE){
	echo "Koneksi berhasil"; 

}else{
	echo "Koneksi gagal";
}
header("Location: stasiun_read.php");
exit();
?>
