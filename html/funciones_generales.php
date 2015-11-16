<?php

function poner_comillas($var)

// esta funcion pone comillas a una variable para poder utilizarlas en SQL

{
	$var='\''.$var.'\'';
	return $var;
}

function quitar_comillas($var)

// esta funcion quita las comillas a una variable para que muestre unicamente su valor
// estaaaaaaaaaaaaaaaaa   siiiiiiiiiiiiiinnnnnnn probaaaaaaaaaaaaaaaarrrrrrrrrrrrr
// no la veo necesaria, solo como aprendizaje miralo
{
	$var='\'-$var-\'';
	return $var;
}




			// fin del archivo funciones_generales.php



?>	