<?php 

$name= $_POST['nama'];

$jkelamin= $_POST['gender'];

$email= $_POST['email'];

$nohp= $_POST['nohp'];

$pesan= $_POST['pesan'];

$tgl = date('Y-m-d');

$sql_insert = "INSERT INTO t_tabel(no,nama,jkelamin,email,nohp,pesan,tgl)
values ('','$name','$jkelamin','$email','$nohp','$pesan','$tgl')";

$query_insert = mysql_query($sql_insert);

if ($query_insert) {
	//echo "inputan masuk";
	//echo "<SCRIPT LANGUAGE= 'JavaScript'>alert('selamat data berhasil di simpan')</SCRIPT>";
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=tabel'>";
	//exit();

}else {
	//echo "gagal memasukkan data";
	echo "<SCRIPT LANGUAGE= 'JavaScript'>alert('data gagal di inputkan')</SCRIPT>";
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=tabel'>";
}
 ?>