<?php

function extraer_productos($valor,$campo)
{
	// esta funcion recibe el valor y el campo a buscar y devuelve un array
	// con todos los articulos que corresponda.
			// Escribe aqui los Estados:  N - Novedades ...
			// escribe aqui los Tipos:    4- Camisetas ....

	//añadimos las funciones generales
	//include ('funciones_generales.php');
	
	// añadimos las comillas a $valor para la busqueda
	$valor=poner_comillas($valor);
		
	//declaracion de las variables para la base de datos
	
	$hostname = "damosbd.db.12550549.hostedresource.com";
$username = "damosbd";
$dbname = "damosbd";
	
	$password = "pacceso1%V";
	$usertable = "productos";
	$yourfield = "codigo";

	// Conexion a la base de datos
	mysql_connect($hostname, $username, $password) OR DIE ("Unable to
	connect to database! Please try again later.");
	mysql_select_db($dbname);

	//Extrayendo los articulos de la base de datos
	$query = "SELECT * FROM $usertable WHERE fotos>0 and $campo=$valor";
	$result = mysql_query($query);


$contador=1;
if ($result) {

	// declaro la tabla
	$tabla_productos=array();

    while($row = mysql_fetch_array($result)) 
    {
    	
    	// paso cada fila (row) a la tabla
    	
    	

    	$tabla_productos[]=$row;
       
    }

        
}
else {
echo "<h3> Sale del if del result, posibles problemas con la base de datos</h3>";

}

	return $tabla_productos;
}
//--------------------------------------------------------------------------------------------

function extraer_secciones()
{
	// esta funcion devuelve un array con las secciones que hay en la base de datos
			

	
	
		
	//declaracion de las variables para la base de datos
	
	$hostname = "bddamoslatalla.db.12550549.hostedresource.com";
	$username = "bddamoslatalla";
	$dbname = "bddamoslatalla";
	
	$password = "blXKn24q%";
	$usertable = "tiposProductos";
	$yourfield = "codigo";

	// Conexion a la base de datos
	mysql_connect($hostname, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");
	mysql_select_db($dbname);

	//Extrayendo los articulos de la base de datos
	$query = "SELECT * FROM $usertable WHERE mostrar";  //hay que añadir este campo en la bd
	$result = mysql_query($query);


$contador=1;
if ($result) 
{

	// declaro la tabla
	$tabla_secciones=array();

    while($row = mysql_fetch_array($result)) 
    {
    	
    	// paso cada fila (row) a la tabla
    	$tabla_secciones[]=$row;
       
    }
        
}
else 
{
	echo "<h3> Sale del if del result, posibles problemas con la base de datos</h3>";

}

	return $tabla_secciones;
}


function extraer_tipo($tipo)
{
	// funcion que recoge un valor numerico, que es el tipo de producto, 
	//  para devolvernos el texto que dice que tipo es
	// indica aqui los tipos de productos

// primero le añadimos las comillas a tipo, para la busqueda
		$tipo=poner_comillas($tipo);


$hostname = "bddamoslatalla.db.12550549.hostedresource.com";
	$username = "bddamoslatalla";
	$dbname = "bddamoslatalla";
	
	$password = "blXKn24q%";
	$usertable = "tiposProductos";
	$campobusqueda = "codigotipo";

	// Conexion a la base de datos
	mysql_connect($hostname, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");
	mysql_select_db($dbname);

	//Extrayendo los articulos de la base de datos
	$query = "SELECT * FROM $usertable WHERE $campobusqueda=$tipo";  //hay que añadir este campo en la bd
	$result = mysql_query($query);


if ($result) 
{

	// declaro la tabla
	$resultado=array();

    while($row = mysql_fetch_array($result)) 
    {
    	
    	// paso cada fila (row) a la tabla
    	$resultado[]=$row;
       
    }
        
}
else 
{
	echo "<h1> Sale del if del result, posibles problemas con la base de datos</h1>";

}

	





//extraemos el texto del nombre del tipo

$texttipo=$resultado[0]['nombretipo'];

	return $texttipo;
}

function extraer_estado($estado)

{
	// funcion que recoge un valor numerico, que es el tipo de producto, 
	//  para devolvernos el texto que dice que tipo es
	// indica aqui los tipos de productos

// primero le añadimos las comillas a tipo, para la busqueda
		$estado=poner_comillas($estado);


$hostname = "bddamoslatalla.db.12550549.hostedresource.com";
	$username = "bddamoslatalla";
	$dbname = "bddamoslatalla";
	
	$password = "blXKn24q%";
	$usertable = "estados";
	$campobusqueda = "codestado";

	// Conexion a la base de datos
	mysql_connect($hostname, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");
	mysql_select_db($dbname);

	//Extrayendo los articulos de la base de datos
	$query = "SELECT * FROM $usertable WHERE $campobusqueda=$estado";  //hay que añadir este campo en la bd
	$result = mysql_query($query);

//extraemos el texto del nombre del tipo
if ($result) 
{

	// declaro la tabla
	$resultado=array();

    while($row = mysql_fetch_array($result)) 
    {
    	
    	// paso cada fila (row) a la tabla
    	$resultado[]=$row;
       
    }
        
}
else 
{
	echo "<h1> Sale del if del result, posibles problemas con la base de datos</h1>";

}
//extraemos el texto del nombre del tipo

$texttipo=$resultado[0]['nombre'];

	return $texttipo;
}

function extraer_marca($marca)

{
	// funcion que recoge un valor numerico, que es el tipo de producto, 
	//  para devolvernos el texto que dice que tipo es
	// indica aqui los tipos de productos

// primero le añadimos las comillas a tipo, para la busqueda
		$estado=poner_comillas($estado);


$hostname = "bddamoslatalla.db.12550549.hostedresource.com";
	$username = "bddamoslatalla";
	$dbname = "bddamoslatalla";
	
	$password = "blXKn24q%";
	$usertable = "marcas";
	$campobusqueda = "codmarca";

	// Conexion a la base de datos
	mysql_connect($hostname, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");
	mysql_select_db($dbname);

	//Extrayendo los articulos de la base de datos
	$query = "SELECT * FROM $usertable WHERE $campobusqueda=$marca";  //hay que añadir este campo en la bd
	$result = mysql_query($query);

//extraemos el texto del nombre del tipo
if ($result) 
{

	// declaro la tabla
	$resultado=array();

    while($row = mysql_fetch_array($result)) 
    {
    	
    	// paso cada fila (row) a la tabla
    	$resultado[]=$row;
       
    }
        
}
else 
{
	echo "<h1> Sale del if del result, posibles problemas con la base de datos</h1>";

}
//extraemos el texto del nombre del tipo

$texttipo=$resultado[0]['nombre'];

	return $texttipo;
}

//--------------------------------------------------------------------------------------------


function mostrar_producto($producto,$user)
{
	// Esta funcion sirve para mostrar el producto en pantalla
	// recibe como argumento un array, en este caso vector, con todas las caracteristicas del producto
	// recibe un segundo argumento opcional, que es el usuario k pide la muestra,
	// este solo se utiliza como admin para el detalle de  DTLadmin, para mostrar mas campos

	$preciourl=urlencode($producto['precio']); // esto lo uso???
		
    $ifoto=1;		// esta variable controla la foto que se va a mostrar
    $codigojpg=$producto['codigo']."-f".$ifoto.".jpg";

  
    
    // paso el precio y las tallas a variables simples sino no puedo meterlasen h2
    $precio_prod=$producto['precio'];
    $tallas_prod=$producto['tallas'];
    $codigo_prod=$producto['codigo'];
    

	echo "	<section class=\"4u 12u(narrower) feature\">
			<div class=\"image-wrapper\">
					<a href=\"detalle.php?codigo=$codigo_prod&ifoto=$ifoto\" class=\"image featured\"><img src=\"ropa/$codigojpg\" alt=\"\" /></a>
			</div>									
								<header>
									<h3>$precio_prod &#8364</h3>
								</header>
								<p>Referencia: $codigo_prod</p>
								<p>Tallas: $tallas_prod</p>
								
							</section>";
					





   

				
		
	if ($user=='admin')
    {
    	// aqui sacamos los campos para DLTAdmin, como usuarios admin
    	$color_prod=$producto['color'];
    	$fotos_prod=$producto['fotos'];
    	$tipo_prod_num=$producto['tipo'];

    	//aqui iran los campos que hay que ver en otra tabla
    	// Ahora llamamos a las funciones k buscan  su correspondiente en cada tabla
    	$tipo_prod=extraer_tipo($producto['tipo']);
		$estado_prod=extraer_estado($producto['estado']);
		$codmarca_prod=extraer_marca($producto['codmarca']);
    	
    	
		

    	//ahora los mostraria como arriba
		echo "	

				
				<p>Tipo o seccion $tipo_prod que es el numero $tipo_prod_num </p>
				<H2>Estado:  $estado_prod </H2
								//faltan estos
				
				
				<p> $tallas_prod  </p>
				<p> Marca :   $codmarca_prod</p>"	;

    }

		echo "	</article>";

		$contador++; // esto sirve de algo??			
       
    
}
function abrir_seccion_html($titulo)

// esta funcion sive para abrir una seccion en index para cada tipo de prenda
// recibe un unico argumento que será el nombre de la seccion, a modo de titulo

{
echo "<section class=\"contenido\" id=\"seccion\" >";		           
echo "		<header>";
echo "			<div id=\"grupotituloseccion\">";
				
echo "				<h1 class=\"tituloSeccion\" > $titulo </h1>";
				
echo "			</div>";
			
echo "		</header>";
		
//echo "		<section class=\"fotos\" >";
}


function cerrar_seccion_html()

// esta funcion sive para cerrar una seccion en index para cada tipo de prenda
// tiene que haberse abierto primero, sino genera codigo erroneo
// 
{
 	echo "		</section>   <!--Fin seccion fotos-->";
	//echo "	</section>		<!--Fin seccion novedades-->";
}



?>

