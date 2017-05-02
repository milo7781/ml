<!DOCTYPE html>
<html>
  <head>
    <title>Užduotis</title>
    <meta charset="UTF-8">
	<script>
	function arSkaicius() 
	{
		var x = document.getElementById("suma").value;
		if (isNaN(x)) 
			alert("Blogai įvesti duomenys!");
	}
	</script>
  </head>
  <body>
	<form action="form.php" method="GET">
	<input type="hidden" name="siusti" value="1">
	Pinigų suma keitimui:<br> <input type="text" id="suma" name="kiek"><br>
	<input type="submit" value="Skaiciuok" onclick="arSkaicius();">
	</form>
	<?php
	if (isset($_GET['siusti']) && $_GET['kiek']!=NULL && is_numeric($_GET['kiek'])) {
		$suma=$_GET['kiek'];
		$k1=floor($suma/500); 															//500
		$k2=floor(($suma-($k1*500))/100);												//100
		$k3=floor(($suma-($k1*500)-($k2*100))/50);										//50
		$k4=floor(($suma-($k1*500)-($k2*100)-($k3*50))/20);								//20
		$k5=floor(($suma-($k1*500)-($k2*100)-($k3*50)-($k4*20))/10);					//10
		$k6=floor(($suma-($k1*500)-($k2*100)-($k3*50)-($k4*20)-($k5*10))/5);			//5
		$k7=floor(($suma-($k1*500)-($k2*100)-($k3*50)-($k4*20)-($k5*10)-($k6*5))/1);	//1
		$kiek_kupiuru=$k1+$k2+$k3+$k4+$k5+$k6+$k7;
		echo 'Minimalus kupiūrų skaičius: ' . $kiek_kupiuru . '<br>';
	}
	?>
  </body>
</html>
