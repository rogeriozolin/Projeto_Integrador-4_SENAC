<!Doctype html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="Ulises de Oliveira Bravo e Grupo TecInfo">
		<meta name="keywords" content="Instituto Libertat, Liber, Liberdade, Cultura Libertaria, Instituto,">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Instituto Libertat - Buscando a Liberdade</title>
		<link href="css/bootstrap.css" rel="stylesheet" />
		<link href="css/estilos.css" rel="stylesheet" />
	</head>
	<body> 
		<div class="principal_index">
			<div class="redes_sociais">
				<span id="redesSociais">
				<a href="logar.php" id="login" target="_blank">Login
				<img src="img/logar.png" alt="logar" title="Logar"></a>
					<a href="https://www.instagram.com/institutolibertat/" target="_blank">
						<img src="img/redes/icon-instagram.png" alt="instagram" title="Instituto Libertat no Instagram">
					</a>
					<a href="https://www.facebook.com/InsLibertat/" target="_blank">
						<img src="img/redes/icon-facebook.png" alt="facebook" title="Instituto Libertat no Facebook">
					</a>

					<img src="img/redes/icon-youtube.png" alt="youtube" title="Instituto Libertat no Youtube">
					<img src="img/redes/icon-twitter.png" alt="twitter" title="Instituto Libertat no Twitter">
					
				</span>
			</div>
			<header class="banner">
				<img src="img/banner.jpg" alt="banner"/>
			</header>
			<nav class="menu margens"> 
				<?php include('menu.php')?>
			</nav>
			<nav class="mobile">
				<a href="#" class="botao">
					<img src="img/mobile_menu.png" alt="icone do menu" title="menu">
				Menu</a>
				<ul class="lista">
					<li><a href="?pag=home">Home</a></li>
					<li><a href="index.php#artigos">Artigos</a></li>
					<li><a href="?pag=quemsomos">Quem Somos</a></li>
					<li><a href="?pag=institucional">Institucional</a></li>
					<li><a href="?pag=contato">Contato</a></li>
				</ul>
			</nav>
			<section class="principal">
				<?php include('switch.php')?>
			</section>
			<footer class="rodape">
				<?php include('rodape.php')?>
			</footer>
			
		</div>
		<div class="copy">
			<p>&copy; Instituto Libertat 2018 - Todos os direitos reservados - Site por URM</p>
		</div>
		<script src="js/jquery.min.js"></script>
		<script>
	   	 function topFunction(){
		      document.body.scrollTop = 0;
    			document.documentElement.scrollTop = 0; 
    		}
		</script>
		<script>
			$(document).ready(function(){
				$(".botao").click(function(){
					$(".lista").toggle();
				});
			});
		</script>	
			<noscript>
				<p> Seu navegador não suporta scripts :( </p>
			</noscript>
	</body>
</html>	





