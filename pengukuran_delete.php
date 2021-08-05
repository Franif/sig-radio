<?php include('config.php');?>
<?php
$row=$_GET;
$query="delete from pengukuran where id='".$row['id']."'";
if($db->query($query)===TRUE){
	echo "Koneksi berhasil"; 

}else{
	echo "Koneksi gagal";
}
header("Location: pengukuran_read.php");
exit();
?>
