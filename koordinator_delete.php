<?php include('config.php');?>
<?php
$row=$_GET;
$query="delete from koordinator where nip='".$row['nip']."'";
if($db->query($query)===TRUE){
	echo "Koneksi berhasil"; 

}else{
	echo "Koneksi gagal";
}
header("Location: koordinator_read.php");
exit();
?>
