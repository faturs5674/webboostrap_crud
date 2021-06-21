<?php 

$id =$_GET['id'];

//echo $id;
$sql = "DELETE FROM t_tabel WHERE no='$id'";

$query_hapus = mysql_query($sql);



if ($query_hapus) {
	//header("Location:?page=tabel");
		//echo "<SCRIPT LANGUAGE= 'JavaScript'>alert('selamat data berhasil di hapus')</SCRIPT>";
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=tabel'>";
	//exit();


}
else{
	echo "proses hapus data gagal";
}
 ?>