<!doctype html>
<html>
<?php include ('head.php');?>
	<body>
		<?php include ('header.php');?>
		<div class="content-wrapper">
			<?php include ('nav.php');?>
			<section>
				<article class="newsdetail">
					<div class="titulo-noticia"><a href="news.php?id=<?php echo $fila["id"];?>"><?php echo $fila["titulonews"];?></a></div>
					<div class="contenido">
						<div class="relleno-noticia">
						<br>
						<span class="fecha-noticia"><?php echo $fila["fecha"];?></span><br><br><br>
						<p class="texto-noticia"><?php echo $fila["contenido"];?></p>
						</div>
					</div>
				</article>
				<div id="disqus_thread"></div>
			</section>
			<article class="right-wrapper">
			<h2 class="titulo-seccion"><span>LO MAS VISTO</span></h2>
			<hr class="hr-titulo">
			<div class="lista-mas-vistos">
			<?php
			//consulta a tabla news
			$consultaMasVistos="SELECT *
								FROM news
								WHERE timestamp > DATE_SUB(curdate(), INTERVAL 3 WEEK)
								ORDER BY count DESC
								LIMIT 4";
			//se selecciona la DB
			$resultMasVistos=$conexion->query($consultaMasVistos);
			//imprimir las filas resultantes de la DB
			while($filaMasVistos=$resultMasVistos->fetch_assoc()){
			?>
			<div class="noticia-mas-vistos">
			<a href="news.php?index=1&id=<?php echo $filaMasVistos["id"]?>"><img src="img/<?php echo $filaMasVistos["imagen"];?>"></a>
			<a href="news.php?index=1&id=<?php echo $filaMasVistos["id"];?>" title="<?php echo $filaMasVistos["titulonews"] ?>"><h3 class="titulo-destacado"><?php echo $filaMasVistos["titulonews"] ?></h3></a>
			</div>
			<hr width="95%">
			<?php } ?>
			</div>
			</article>
		</div>
	<?php include ('footer.php');?>
		<script>

		/**
		*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
		*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

		var disqus_config = function () {
		this.page.url = window.location.href;  // Replace PAGE_URL with your page's canonical URL variable
		this.page.identifier = '<?php echo $_GET["id"] ?>'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
		};

		(function() { // DON'T EDIT BELOW THIS LINE
		var d = document, s = d.createElement('script');
		s.src = 'https://anifighters.disqus.com/embed.js';
		s.setAttribute('data-timestamp', +new Date());
		(d.head || d.body).appendChild(s);
		})();
		</script>
		<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	</body>
</html>
