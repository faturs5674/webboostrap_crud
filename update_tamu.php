<?php  
$no= $_POST['no'];
$name= $_POST['nama'];

$jkelamin= $_POST['gender'];

$email= $_POST['email'];

$nohp= $_POST['nohp'];

$pesan= $_POST['pesan'];


//echo $no."<br>";
//echo $email."<br>";
//echo $name."<br>";
//echo $jkelamin."<br>";
//echo $nohp."<br>";
//echo $pesan."<br>";

$sql= "UPDATE t_tabel SET nama='$name' , jkelamin='$jkelamin' , email='$email' , nohp='$nohp' ,pesan='$pesan' WHERE no='$no'";

$sql_update=mysql_query($sql);
if ($sql_update) {
		//echo "<SCRIPT LANGUAGE= 'JavaScript'>alert('selamat data berhasil di update')</SCRIPT>";
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=tabel'>";
	//exit();
	# code...
}else{
	echo "data gagal di update";
}

?>