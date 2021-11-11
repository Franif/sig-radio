<?php include('config.php');?>
<?php
$row=$_GET;
$query="delete from user_new where id_profile='".$row['nip']."'";
if($db->query($query)===TRUE){
	echo "Koneksi berhasil"; 

}else{
	echo "Koneksi gagal";
}
header("Location: user_read.php");
exit();
?>
