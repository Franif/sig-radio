<?php include('config.php');?>
<?php
$row=$_GET;
$query="delete from profile where id='".$row['id']."'";
if($db->query($query)===TRUE){
	echo "Koneksi berhasil"; 

}else{
	echo "Koneksi gagal";
}
header("Location: profile_read.php");
exit();
?>
