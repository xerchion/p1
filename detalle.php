
<?php

require("html/cab.html") // cargamos la head y la header

?>
		<!--          Metemos el estilodetalle tmb porque sino se ve mal, esto es temporal  -->
<head>
	<link rel="stylesheet" href="estilodetalle.css">
</head>

<div class="cuerpo" id="detalle">			<!--          Contenido, donde van las fotos  -->

	<section class="contenido">		           
		<header>
		

			<?
			//añado el archivo de funciones
			require('funciones_detalle.php');

			// lo primero es coger el codigo pasado por la pagina de la que viene
			$codigo=$_GET['codigo'];
			// necesito pasarle la foto, pk puede venir de otro detalle...
			$ifoto=$_GET['ifoto'];

			// ahora debemos llamar a la funcion para k busque este articulo en concreto
			// y nos lo devuelva en un array.

			$articulo=buscar_articulo($codigo); 

			// pasamos valores a variables simples para los echo
			$nombre=$articulo['nombre'];
			$precio=$articulo['precio'];
			$tallas=$articulo['tallas'];
			$fotos=$articulo['fotos'];
			


			
			
			echo "<h1 class=\"tituloSeccion\" id=\"izda\"> $nombre </h1>
		
		
			<div class=\"botonvolver\">
				<a href=\"index.php\"><img src=\"simbolos/volver.gif\"> </a>
			</div>
			 
		</header>
		<!--<section class=\"contenedorArticulo\">-->
			<article class=\"detalle\">	"	;
				
					
					$codigojpg = $codigo."-f".$ifoto.".jpg";
					echo "<img class=\"fotogrande\" src=\"ropa/$codigojpg\">" ;
				
			echo "</article>

			<article class=\"fotosarticulolateral\">";
			
			
			
        
       
       // $fotos=$row['fotos'];
       // $ifoto=$_GET['ifoto'];

        $i=1;
				for ($i=1;$i<=$fotos;$i++){
					if ($i!=$ifoto){
						$codigojpg=$codigo."-f".$i.".jpg";
						
					
						echo "
				

						<article>
				
							<a href=\"detalle.php?codigo=$codigo&ifoto=$i\"><img class=\"fotoarticulodetalle\" src=\"ropa/$codigojpg\"> </a>	
						</article>";
					} 
				}
				
				echo "
			</article> // <!--fin article fotosarticulolateral--> 
							

			<article class=\"caracteristicasArticulo\">

				<article class=\"grupodetalle\">
					<ul class=\"detalleArticulo\">
						
												
											
						<li>  <h2 class=\"precio\"> $precio &#8364</h2><h2> Ref. : $codigo      </h2></li>
						<li> 	<h3> Tallas: $tallas </h3>  </li>
						<!--<li>    <h3> Equivalencia de tallas:   </h3>	 </li>
						<li>    <p>      </p>
								<p>     XL-(50/52) XXL-(54/56)  </p>          </li> -->
						<li>    <p>                 </p>   </li> 
						<li>    <p>                </p>   </li>
						</ul>";	
					
					           	
					?>

						
					






					
				</article><!--fin article grupodetalle -->
			</artice><!--fin article caracteristicasarticulo -->
		</section> <!--fin section contenedorarticulo -->	
	
	</section>  <!--        fin contenido     -->
			
</div>					<!--Fin cuerpo,contenido-->	



		
		
	


<footer id="pie">
	
	<?
		require("pie.html");
	?>
	
</footer>
