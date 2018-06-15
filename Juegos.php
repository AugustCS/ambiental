<!Doctype html>
<html lang="es">
<head>
 		<title>Aprendamos Jugando</title>
 		<meta charset="utf-8">
 		<?php 
 			include "head.php";
		 ?>
 </head> 	
 <body id="body-game">
 	<div class="section">
	 	<h1 class="animated bounceInLeft"> Vamos  a  jugar !! </h1>

	 	<br>
	 	<br>
	 	<h3 class="animated bounceInRight">Instrucciones de Switch Off</h3>
	 	<br>
	 	<p class="animated zoomInLeft">El punto Principal del juego es apagar las fabricas que son instaladas en el bosque
	 	,veremos un indicador que nos permitira darnos cuenta que esta llegando a contaminar totalmente,debemos
	 	presionar el boton rojo antes que se llene el medidor y contamine el bosque.
	 	¡Es hora de Jugar!
	 	</p>

		<a target="_blank" href="http://wwf.moccu.com/game.php?lang=es" class="enlace1">
		<span class="icon-pacman"> Switch Offs </span>
		</a>
		<br>
		<br>

		<h3 class="animated bounceInRight">Instrucciones de Amigo de Medio Ambiente</h3>
		<br>
		<p class="animated zoomInLeft">El proposito del juego es apagar la mayor cantidad de maquinas antes que el policia te atrape,lo que debes hacer
		es moverte con las flechas"Izquierda"  o "derecha" dependiendo de que maquina este mas cerca a ti,si el policia esta acercandose 
		a ti debes tirar una bombita con las teclas "A"(Izquierda) o "D"(Derecha) dependiendo de donde el este viniendo.Al finalizar debes 
		correr hacia la puerta que dice "EXIT" sin que el policia te atrape.	
		</p>

		<a target="_blank" href="http://www.oyunlar1.com/juegos.php?flash=9315" class="enlace2">
		<span class="icon-pacman"> Amigo Ambiente </span>
		</a>
		<br>
		<br>


		<h3 class="animated bounceInRight">Instrucciones de Energy Game</h3>
		<br>
		<p class="animated zoomInLeft">El usuario es:user17 y la contraseña es:123456<br>
		El proposito del juego es dar una idea a la persona que desea tomar las vacaciones,la idea debe ser
		en base a la mejor forma de cuidar el medio ambiente,por ejemplo si una persona tiene bicicleta y carro
		es mas saludable que se transporte en bibicleta que en carro.Debes empezar escogiendo un ambiente(ejem: ciudad,campo,etc).El juego te dira que es lo que quiere realizar la persona,
		en base a eso deberas analizar de que forma puedes tu darle la idea de cuidar mejor el medio ambiente. 	
		</p>
		<a target="_blank" href="http://www.2020energy.eu/game" class="enlace3">
		<span class="icon-pacman"> Energy Game </span>
		</a>
		<br>
		<br>

		<h3 class="animated bounceInRight">Instrucciones de MR. Iglu</h3>
		<br>
		<p class="animated zoomInLeft">
		El proposito del juego es dar de comer a MR. Iglu,lo que debes hacer es moverte de izquierda a derecha con las flechas del teclado,
		pero ten cuidado porque el solo como envases de vidrio,si le das de comer envases que no sean de vidrio tres veces ,perderas :( . 	
		</p>

		<a target="_blank" href="http://www.daledecomeramriglu.com/" class="enlace4">
		<span class="icon-pacman"> MR. Iglu </span>
		</a>  	


 	</div>

<?php
	include 'footer.php';
 ?>
<script src="js/jquery-1.11.2.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script>
	$(document).ready(function(){
		// codigo del backstrecht de la pagina juegos
	$("#body-game").backstretch([
			"images/juego.png",
			"images/juegos.jpg"
			],{
				fade:750,
				duration:5000
			});
	})
</script>
<script src="js/logica.js"></script>
</body>
</html>	

