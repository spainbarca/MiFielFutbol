<?php
$x=0;
if (isset($_GET["liga"]))
    $x=$_GET["liga"];
?>
<script>
function liga(caso)
{
switch(caso)
{
case 1:document.location.replace("Ligas/PremierLeague.php");break;
case 2:document.location.replace("Ligas/Bundesliga.php");break;
case 3:document.location.replace("Ligas/SerieA.php");break;
case 4:document.location.replace("Ligas/Ligue1.php");break;
case 5:document.location.replace("Ligas/PrimeiraLiga.php");break;
}
}
</script>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Mi Fiel Fútbol</title>
	<link rel="stylesheet" href="estilos.css" type="text/css" media="all" />
        <link rel="shortcout icon" href="imagenes/soccer.ico"/>
</head>
<body>
	<!-- Header -->
	<div id="header">
		<div class="shell">
			<!-- Logo -->
			<h1 id="logo" class="notext"><a href="index.php">Sport Zone Sport Portal</a></h1>
			<!-- End Logo -->
		</div>
	</div>
	<!-- End Header -->
	
	<!-- Navigation -->
        <header>
        <nav class="navigation">
           
			<ul class="menu">
			    <li><a href="http://www.neogol.com/category/liga-espanola/">Liga Española</a></li>
			    <li><a >Principales Ligas</a>
                                <ul class="submenu">
                                    <li><a href="Javascript:liga(1)">Premier League</a></li>
                                    <li><a href="Javascript:liga(2)">Bundesliga</a></li>
                                    <li><a href="Javascript:liga(3)">Serie A</a></li>
                                    <li><a href="Javascript:liga(4)">Ligue 1</a></li>
                                    <li><a href="Javascript:liga(5)">Primeira Liga</a></li>
                                </ul>
                            </li>
			    <li><a href="http://www.neogol.com/category/champions-league/">UEFA Champions League</a></li>
                            <li><a href="http://www.neogol.com/category/eliminatorias/">Rumbo a Rusia 2018 </a>
                                <ul class="submenu">
                                    <li><a href="http://www.neogol.com/tag/eliminatorias-mundial-2018/">CONMEBOL</a></li>
                                    <li><a href="http://www.neogol.com/tag/eliminatorias-europeas/">UEFA</a></li>
                                    <li><a href="#">CONCACAF</a></li>
                                    <li><a href="#">AFC</a></li>
                                    <li><a href="#">OFC</a></li>
                                    <li><a href="#">CAF</a></li>
                                </ul>
                            </li>
			    <li><a >Torneos FIFA</a>
                                <ul class="submenu">
                                    <li><a href="#">Copa Confederaciones</a></li>
                                    <li><a href="#">Mundial de Clubes</a></li>
                                    <li><a href="#">Mundial Sub-20</a></li>
                                    <li><a href="#">Mundial Sub-17</a></li>
                                    <li><a href="#">Mundial Beach Soccer</a></li>
                                    <li><a href="#">Mundial de Futsal</a></li>
                                </ul>
                            </li>
                            <li><a href="http://www.neogol.com/category/memes/">Memes</a></li>
			    <li><a href="http://www.neogol.com/category/videos/">Videos</a></li>
			</ul>
			
		
	</nav>
        </header><!-- End Navigation -->
	
	<!-- Heading -->
	<div id="heading">
		<div class="shell">
			<div id="heading-cnt">
				
				<!-- Sub nav -->
				
				<!-- End Sub nav -->
				
				<!-- Widget -->
				<div id="heading-box">
					<div id="heading-box-cnt">
						
						
						<!-- Main Slide Item -->
						<div class="featured-main">
							<a href="http://www.neogol.com/real-madrid-campeon-champions-league-2017/"><img src="images/featured-main.jpg" alt="" /></a>
							<div class="featured-main-details">
								<div class="featured-main-details-cnt">									
									<h4><a href="http://www.neogol.com/real-madrid-campeon-champions-league-2017/">REAL MADRID CAMPEÓN DE LA CHAMPIONS 2017</a></h4>
									<p>Real Madrid Campeón de la Champions League 2016-2017 tras vencer a la Juventus 1-4 en la final.  Bicampeonato histórico de los merengues que levantan la Duodécima.</p>
								</div>
							</div>
						</div>
						<!-- End Main Slide Item -->
						
						<div class="featured-side">
							
							<!-- Slide Item 1 -->
							<div class="featured-side-item">
								<div class="cl">&nbsp;</div>
								<a href="http://www.neogol.com/memes-juventus-real-madrid-chistes-final-champions-2017/" class="left"><img src="images/featured-side-1.jpg" alt="" /></a>
								<h4><a href="http://www.neogol.com/memes-juventus-real-madrid-chistes-final-champions-2017/">Chiste de la Final Champions League 2017</a></h4>
								<p>Los más divertidas bromas, chistes, afiches y carteles de la Final de Champions League 2017.</p>
								<div class="cl">&nbsp;</div>
							</div>
							<!-- End Slide Item 1 -->
							
							<!-- Slide Item 2 -->
							<div class="featured-side-item">
								<div class="cl">&nbsp;</div>
								<a href="http://www.neogol.com/la-fiesta-de-la-duodecima-cibeles-bernabeu/" class="left"><img src="images/featured-side-2.jpg" alt="" /></a>
								<h4><a href="http://www.neogol.com/la-fiesta-de-la-duodecima-cibeles-bernabeu/">La fiesta de la Duodécima | Los festejos en Cibeles y el Bernabéu</a></h4>
								<p>Festejos de la Duodécima Champions League del Real Madrid en Cibeles y el Santiago Bernabéu</p>
								<div class="cl">&nbsp;</div>
							</div>
							<!-- End Slide Item 2 -->
							
							<!-- Slide Item 3 -->
							<div class="featured-side-item">
								<div class="cl">&nbsp;</div>
								<a href="http://www.neogol.com/las-imagenes-del-barcelona-campeon-copa-del-rey-2017/" class="left"><img src="images/featured-side-3.jpg" alt="" /></a>
								<h4><a href="http://www.neogol.com/las-imagenes-del-barcelona-campeon-copa-del-rey-2017/">Las imágenes del Barcelona Campeón Copa del Rey 2017</a></h4>
								<p>Las mejores imágenes del Barcelona Campeón Copa del Rey 2016-2017</p>
								<div class="cl">&nbsp;</div>
							</div>
							<!-- End Slide Item 3 -->
							
							<!-- Slide Item 4 -->
							<div class="featured-side-item">
								<div class="cl">&nbsp;</div>
								<a href="http://www.neogol.com/real-madrid-campeones-liga-2016-2017-la-pelicula/" class="left"><img src="images/featured-side-4.jpg" alt="" /></a>
								<h4><a href="http://www.neogol.com/real-madrid-campeones-liga-2016-2017-la-pelicula/">Real Madrid Campeones 2016-2017 ● 33 Ligas | La película</a></h4>
								<p>El Real Madrid de Zinedine Zidane se consagró Campeón de La Liga Española 2016-2017 con 93 puntos.</p>
								<div class="cl">&nbsp;</div>
							</div>
							<!-- End Slide Item 4 -->
						</div>
						<div class="cl">&nbsp;</div>						
					</div>
				</div>
				<!-- End Widget -->
				
			</div>			
		</div>
	</div>
	<!-- End Heading -->
	
	<!-- Main -->
	<div id="main">
		<div class="shell">		
			<div class="cl">&nbsp;</div>	
			<div id="sidebar">
				<h2>DEPORNOTICIAS</h2>
				<ul>
				    <li>
				    	<small class="date">05.06.17</small>
				    	<p> El portugués Cristiano Ronaldo desbanca a Reus de la portada del popular videojuego.</p>
				    </li>
				    <li>
				    	<small class="date">05.06.17</small>
				    	<p>La fiesta de la Duodécima | Los festejos en Cibeles y el Bernabéu.</p>
				    </li>
				    <li>
				    	<small class="date">05.06.17</small>
				    	<p>Calendario Copa Confederaciones 2017 | Fixture-Almanaque.</p>
				    </li>
				    <li>
				    	<small class="date">05.06.17</small>
				    	<p>Keylor Navas, un portero de Champions | Pura vida en Madrid.</p>
				    </li>
                                    <li>
				    	<small class="date">05.06.17</small>
				    	<p>La fiesta de la Duodécima | Los festejos en Cibeles y el Bernabéu.</p>
				    </li>
				    <li>
				    	<small class="date">04.06.17</small>
				    	<p>Las imágenes del Real Madrid Campeón de la Champions League 2017.</p>
				    </li>
				    <li>
				    	<small class="date">04.06.17</small>
				    	<p>La Duodécima Champions, los de Zidane son los Amos del Universo | Las portadas </p>
				    </li>
				</ul>
				<a href="#" class="archives">News Archives</a>
			</div>
			<div id="content">
				<div class="cl">&nbsp;</div>
				<div class="grey-box">
					<h3><a href="http://www.neogol.com/fifa-18-cristiano-ronaldo-edition/">FIFA 18 Trailer Oficial EA Sports | Cristiano Ronaldo</a></h3>
					<a href="http://www.neogol.com/fifa-18-cristiano-ronaldo-edition/"><img src="images/main-1.jpg" alt="" /></a>
					<p>
						<span>La reconocida empresa de videojuegos EA Sports ha revelado que hay un nuevo rey.</span>
						<a href="http://www.neogol.com/fifa-18-cristiano-ronaldo-edition/" class="button">Read more</a>
					 </p>
				</div>
				<div class="grey-box">
					<h3><a href="http://www.neogol.com/el-barca-vence-al-alaves-y-es-campeon-de-la-copa-del-rey/">Messi invita otra Copa y gana la Copa del Rey </a></h3>
					<a href="http://www.neogol.com/el-barca-vence-al-alaves-y-es-campeon-de-la-copa-del-rey/"><img src="images/main-2.jpg" alt="" /></a>
					<p>
						<span>Este domingo 28 de mayo de 2017, la prensa deportiva destaca las siguientes noticias:</span>
						<a href="http://www.neogol.com/el-barca-vence-al-alaves-y-es-campeon-de-la-copa-del-rey/" class="button">Read more</a>
					 </p>
				</div>
				<div class="grey-box last">
					<h3><a href="http://www.neogol.com/keylor-navas-un-portero-de-champions/">Keylor Navas, un portero de Champions | Pura vida en Madrid</a></h3>
					<a href="http://www.neogol.com/keylor-navas-un-portero-de-champions/"><img src="images/main-3.jpg" alt="" /></a>
					<p>
						<span>Las mejores salvadas del portero Bicampeón de la Champions League</span>
						<a href="http://www.neogol.com/keylor-navas-un-portero-de-champions/" class="button">Read more</a>
					 </p>
				</div>
				<div class="cl">&nbsp;</div>
				<div class="video-box">
					<div class="cl">&nbsp;</div>
					<h2 class="left">video spot</h2>
					<a href="http://www.neogol.com/category/videos/" class="button">All videos</a>
					<div class="cl">&nbsp;</div>
					<div class="video-item-box">
						<a href="http://www.neogol.com/lionel-messi-legendary-skills-goals-hd/" class="left"><img src="images/video-1.jpg" alt="" /></a>
						<p>Lionel Messi Legendary Skills | La leyenda viviente</p>
						<a href="http://www.neogol.com/lionel-messi-legendary-skills-goals-hd/" class="watch-now">Watch now</a>
					</div>
					<div class="video-item-box second">
						<a href="http://www.neogol.com/crazy-football-skills-2017-los-mejores-lujos-de-la-temporada/" class="left"><img src="images/video-2.jpg" alt="" /></a>
						<p>Crazy Football Skills 2017 | Los mejores lujos de la temporada</p>
						<a href="http://www.neogol.com/crazy-football-skills-2017-los-mejores-lujos-de-la-temporada/" class="watch-now">Watch now</a>
					</div>
					<div class="video-item-box">
						<a href="http://www.neogol.com/eliminatorias-sudamericanas-fecha-14-horarios-rusia-2018/" class="left"><img src="images/video-3.jpg" alt="" /></a>
						<p>Video Eliminatorias Sudamericanas Mundial Rusia 2018</p>
						<a href="http://www.neogol.com/eliminatorias-sudamericanas-fecha-14-horarios-rusia-2018/" class="watch-now">Watch now</a>
					</div>
					<div class="video-item-box second">
						<a href="http://www.neogol.com/calendario-eliminatorias-europa-mundial-rusia-2018/" class="left"><img src="images/video-4.jpg" alt="" /></a>
						<p>Video Eliminatorias Mundial Rusia 2018 | Europa</p>
						<a href="http://www.neogol.com/calendario-eliminatorias-europa-mundial-rusia-2018/" class="watch-now">Watch now</a>
					</div>
					<div class="cl">&nbsp;</div>
				</div>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
	</div>
	<!-- End Main -->
	
	<!-- Footer -->
	<div id="footer">
		<div class="shell">
			<div class="cl">&nbsp;</div>
			<a href="#" class="left">TERMS OF USE</a>
			<a href="#" class="left">PRIVACY POLICY</a>
			<p class="right">&copy; Sitename.com. Design by <a href="http://chocotemplates.com">ChocoTemplates.com</a> | downloaded from <a href="http://www.mytemplatez.com">Free Templates</a></p>
			<div class="cl">&nbsp;</div>
		</div>
	</div>
	<!-- End Footer -->
</body>
