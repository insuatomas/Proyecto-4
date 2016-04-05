<?php
	

	$Nuno = $_POST['num1'];
	$Ndos = $_POST['num2'];
	$Ntres = $_POST['num3'];

	if(isset($_POST['Sumar']))
	{
		$Resultado = $Nuno+$Ndos+$Ntres;
		echo $Resultado;
	}

	if(isset($_POST['Promedio']))
	{
		$Resultado = $Nuno+$Ndos+$Ntres;
		$Resultado = $Resultado/3;
		echo $Resultado;
	}

	if(isset($_POST['PrecioTotalIva']))
	{
		$Resultado = $Nuno+$Ndos+$Ntres;
		$Resultado = $Resultado+(($Resultado*21)/100);
		echo $Resultado;
	}
	
?>