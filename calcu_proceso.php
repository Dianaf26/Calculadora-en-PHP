<?php
$operacion = $_POST['lista'];

switch ($operacion)
 {
	case "sumar":
	echo $_POST['c1'] + $_POST['c2']+$_POST['c3'];
		break;
	case "restar":
	echo $_POST['c1'] - $_POST['c2']-$_POST['c3'];
	break;
	case "multiplicar": 
	echo $_POST['c1'] * $_POST['c2']*$_POST['c3'];
    break;
	
	case "dividir":
	echo $_POST['c1'] /  $_POST['c2'] / $_POST['c3'];
	break;

  default: "no se a podido resolver la operacion";
}


?>
