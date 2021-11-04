<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

 	<title>Document</title>
  </head>
 	<body>
 		<form action="calcu_proceso.php" method="post" name="calculadora">
 		<label>PONGA NUMEROS</label> <br><br>
 		<input type="number" name="c1"><br><br>
 		<input type="number" name="c2"><br><br>
 		<input type="number" name="c3"><br><br>
 		
 		<label>SELECCIONA LA OPERACION: <br><br>	
 		<select name="lista">
 			<option value="sumar">Sumar</option>
 			<option value="restar">Restar</option>
 			<option value="multiplicar">Multiplicar</option>
 			<option value="dividir">Dividir</option><br><br>

 			<input type="submit" value="RESULTADO"><br><br>
 		</select>
 		</label>


 		</form>

 	</body>

 </html>