<?php 
switch ($_SESSION['tipo']) {
	case '1':
		include('admin.php');
		break;
}