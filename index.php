<?php 
include "koneksi.php";


if (isset($_GET['page'])) {
	$page = $_GET['page'];

}
else {
	$page="home";

}

switch ($page) {
	case "home";
			include "header.php";
			include "home.php";
			include "section.php";
			include "footer.php";
		break;
		case "form";
			include "header.php";
			include "home.php";
			include "form.php";
			include "footer.php";
		break;
			case "tabel";
			include "header.php";
			include "home.php";
			include "tabel.php";
			include "footer.php";
		break;
			case "simpan";
			include "header.php";
			include "home.php";
			include "simpan_tamu.php";
			include "footer.php";
		break;
			case "hapus";
			include "header.php";
			include "home.php";
			include "delete.php";
			include "footer.php";
		break;
			case "update";
			include "header.php";
			include "home.php";
			include "update.php";
			include "footer.php";
		break;
			case "prosesupdate";
			include "header.php";
			include "home.php";
			include "update_tamu.php";
			include "footer.php";
		break;

}



 ?>