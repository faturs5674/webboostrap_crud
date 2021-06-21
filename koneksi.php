<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "db_webbootstrap";

$konek = mysql_connect($host, $user, $pass);

if($konek){
mysql_select_db($database);


}else{
echo"koneksi gagal";
}

?>