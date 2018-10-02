<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="e.css" />
</head>
<body>
<div class="unaviable">
	<p>Lo sentimos de momento este sitio solo esta adaptado para la vista desde un ordenador.</p>
</div>



<div class="wel">
	<h1>White Label</h1>
	<p>Venta de ropa a todo el pais</p>
</div>

<!-- Codigo del bot-->

	<style type="text/css">
		
		* {
			margin: 0px;
			padding: 0px;
			font-family: Helvetica;
		}

		.unaviable {
			display: none;
		}
		.cuerpo {
			transition: 10s;
			padding: 10px;
			margin: 10px;
			position: fixed;
			top: 0px;
			right: 0%;
			background: orange;
			display: inline-block;
			border-radius: 10px;
			z-index: 1000;
		}	

		#bot {
			padding: 10px;
			width: 300px;
		}
		.e {
			padding: 10px;
		}
		.out {
			padding: 10px;
			width: 300px;
			font-size: 14px;
			overflow: hidden;
		}
		.a {
			animation-name: a;
			animation-duration: 3s;
			animation-iteration-count: infinite;
		}
		@keyframes a {
			from {
				transform: rotate(0deg);
			} 
			to {
				transform: rotate(320deg);
			}
		}
		@keyframes flotar {
			from {
				width: 0px;
				transition: 1s;
			} 
			50% {
				width: 10px;
				transition: 1s;
			}
			to {
				width: auto;
				transition: 1s;
			}
		}
		@media (max-width: 450px){
		.unaviable {
			display: inline-block;
			position: fixed;
			top: 0px;
			left: 0px;
			width: 100%;
			height: 100%;
			background: green;
			z-index: 1100;
		}
		.unaviable p{
			color: #fff;
			position: fixed;top: 15%;
			left: 5%;
			font-size: 130%;
			width: 80%;
		}
		}
	</style>


	<div class="cuerpo">
		<p class="out"></p>
		<input type="text" id="bot" placeholder="No dudes en consultar" />
		<button class="e">Enviar</button>
	</div>
	<script type="text/javascript" src="jquery.js" ></script>
	<script type="text/javascript" src="bot.js"></script>

<section class="main">

<div class="header">
	<h1>Seleccion de ropa de hombre</h1>
</div>
		<article>
		<div class="img">
			<img src="m1.jpg" />
		</div>
		<ul>
			<li><h3>Camisa x345</h3></li>
			<li><b>$300</b></li>
			<li><a href="detalle.php?id=0" class="buy">Ver mas</a></li>
			<li><i>Ropa de hombre</i></li>
		</ul>

	</article>
	
	<article>
		<div class="img">
			<img src="m2.jpg" />
		</div>
		<ul>
			<li><h3>Camisa x345</h3></li>
			<li><b>$300</b></li>
			<li><a href="" class="buy">Ver mas</a></li>
			<li><i>Ropa de hombre</i></li>
		</ul>
	</article>
	
	<article>
		<div class="img">
			<img src="m3.jpg" />
		</div>
		<ul>
			<li><h3>Camisa x345</h3></li>
			<li><b>$300</b></li>
			<li><a href="" class="buy">Ver mas</a></li>
			<li><i>Ropa de hombre</i></li>
		</ul>
	</article>
	<article>
		<div class="img">
			<img src="m4.jpg" />
		</div>
		<ul>
			<li><h3>Camisa x345</h3></li>
			<li><b>$300</b></li>
			<li><a href="" class="buy">Ver mas</a></li>
			<li><i>Ropa de hombre</i></li>
		</ul>
	</article>
	<div class="header">
		<h1>Seleccion de ropa de mujer</h1>
	</div>
	
		<article>
		<div class="img">
			<img src="m1.jpg" />
		</div>
		<ul>
			<li><h3>Camisa x345</h3></li>
			<li><b>$300</b></li>
			<li><a href="" class="buy">Ver mas</a></li>
			<li><i>Ropa de hombre</i></li>
		</ul>

	</article>
	
	<article>
		<div class="img">
			<img src="m2.jpg" />
		</div>
		<ul>
			<li><h3>Camisa x345</h3></li>
			<li><b>$300</b></li>
			<li><a href="" class="buy">Ver mas</a></li>
			<li><i>Ropa de hombre</i></li>
		</ul>
	</article>
	
	<article>
		<div class="img">
			<img src="m3.jpg" />
		</div>
		<ul>
			<li><h3>Camisa x345</h3></li>
			<li><b>$300</b></li>
			<li><a href="" class="buy">Ver mas</a></li>
			<li><i>Ropa de hombre</i></li>
		</ul>
	</article>
	<article>
		<div class="img">
			<img src="m4.jpg" />
		</div>
		<ul>
			<li><h3>Camisa x345</h3></li>
			<li><b>$300</b></li>
			<li><a href="" class="buy">Ver mas</a></li>
			<li><i>Ropa de hombre</i></li>
		</ul>
	</article>
	
		<article>
		<div class="img">
			<img src="m1.jpg" />
		</div>
		<ul>
			<li><h3>Camisa x345</h3></li>
			<li><b>$300</b></li>
			<li><a href="" class="buy">Ver mas</a></li>
			<li><i>Ropa de hombre</i></li>
		</ul>

	</article>
	
	<article>
		<div class="img">
			<img src="m2.jpg" />
		</div>
		<ul>
			<li><h3>Camisa x345</h3></li>
			<li><b>$300</b></li>
			<li><a href="" class="buy">Ver mas</a></li>
			<li><i>Ropa de hombre</i></li>
		</ul>
	</article>
	
	<article>
		<div class="img">
			<img src="m3.jpg" />
		</div>
		<ul>
			<li><h3>Camisa x345</h3></li>
			<li><b>$300</b></li>
			<li><a href="" class="buy">Ver mas</a></li>
			<li><i>Ropa de hombre</i></li>
		</ul>
	</article>
	<article>
		<div class="img">
			<img src="m4.jpg" />
		</div>
		<ul>
			<li><h3>Camisa x345</h3></li>
			<li><b>$300</b></li>
			<li><a href="" class="buy">Ver mas</a></li>
			<li><i>Ropa de hombre</i></li>
		</ul>
	</article>
	
	
</section>

<footer>
	<ul>

		<li><p>Todos los derechos reservados - kabo </p></li>
	</ul>
</footer>
</body>
</html>