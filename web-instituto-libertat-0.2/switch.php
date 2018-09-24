<?php
error_reporting(0);

switch ($_GET['pag']){
	
	case 'home': include "home.php";
	break;
	
	case 'artigos': include "home.php";
	break;
	
	case 'quemsomos': include "quemsomos.php";
	break;
	
	case 'institucional': include "institucional.php";
	break;
	
	case 'linhaeditorial': include "linhaeditorial.php";
	break;
	
	default: include "home.php";
	break;
}
?>