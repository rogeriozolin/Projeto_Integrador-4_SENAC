<?php
error_reporting(0);

switch ($_GET['pag']){
	
	case 'home': include "home.php";
	break;
	
	case 'artigos': include "artigos.php";
	break;
	
	case 'quemsomos': include "quemsomos.php";
	break;
	
	case 'institucional': include "institucional.php";
	break;
	
	case 'contato': include "contato.php";
	break;
	
	default: include "home.php";
	break;
}
?>