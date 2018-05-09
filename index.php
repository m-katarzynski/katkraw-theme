<?php get_header(); ?>


<a name="main"></a>
<div class="parallax" id="main">
	<div class="caption">
		<span id="logo">Kącik Krawiecki</span>
	</div>
</div>

<div class="sticky">
	<div class="navbar">
		<a href="#main" class="link">STRONA GŁÓWNA</a>
		<a href="#news" class="link">AKTUALNOŚCI</a>
		<a href="#gallery" class="link">GALERIA</a>
		<a href="#prices" class="link">CENNIK</a>
		<a href="#contact" class="link">KONTAKT</a>
		<a href="#findUs" class="link">DOJAZD</a>
	</div>
</div>
<!-- SLIDER -->
<a name="slider"></a>
    <div class="sliderContainer">
			<div onclick="prev()" class="prev btn"><p><</p></div>
			    <img id="slider" src="wp-content/themes/katkraw_theme/img/slider/1.jpg" width="800px" height="500px"/>
			<div onclick="next()" class="next btn"><p>></p></div>
    </div>
<!-- PANDAS -->
<!--<div class="pandas">
<img src="img/pandas.jpg">
</div>-->
<!-- AKTUALNOŚCI -->
<div class="news" id="news">

	<div class="newsText">
		<?php 
		
			if( have_posts() ):
				
				while( have_posts() ): the_post(); ?>
				
					<h3><?php the_title(); ?></h3>
						<small>Dodano: <?php the_time('F j, Y'); ?></small>
					<p><?php the_content(); ?></p>
					<hr>
				
				<?php endwhile;
				
			endif;
				
		?>
	</div>
	
</div>
<!-- GALERIA -->
<!--<div id="gallery" class="gallery">

	<div class="main-img">
		<img src="wp-content/themes/katkraw_theme/img/ph/1.jpg" alt="miau kurwa" id="current">
	</div>

	<div class="imgs">
		<img src="wp-content/themes/katkraw_theme/img/ph/1.jpg" alt="miau kurwa">
		<img src="wp-content/themes/katkraw_theme/img/ph/2.jpg" alt="miau kurwa">
		<img src="wp-content/themes/katkraw_theme/img/ph/3.jpg" alt="miau kurwa">
		<img src="wp-content/themes/katkraw_theme/img/ph/4.jpg" alt="miau kurwa">
		<img src="wp-content/themes/katkraw_theme/img/ph/5.jpg" alt="miau kurwa">
		<img src="wp-content/themes/katkraw_theme/img/ph/6.jpg" alt="miau kurwa">
		<img src="wp-content/themes/katkraw_theme/img/ph/7.jpg" alt="miau kurwa">
		<img src="wp-content/themes/katkraw_theme/img/ph/8.jpg" alt="miau kurwa">
	</div>

</div>
-->
<div id="gallery" class="gallery">
	<h2>GALERIA ZDJĘĆ</h2>
	
		<div class="first gall">
		
			<div onclick="begone1()" id="gb1" class="gallBtn"><h3>Pierwsza galeria</h3></div>
			
			<div id="g1" class="gallBox">
				<?php
				if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'galeria-zdjec', 'slug' ); }
				?>
			</div>
		</div>
		
		<div class="second gall">
		
			<div onclick="begone2()" id="gb2" class="gallBtn"><h3>Druga galeria</h3></div>
		
			<div id="g2" class="gallBox">
				<?php
				if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'druga-galeria', 'slug' ); }
				?>
			</div>
		</div>
		
		<div class="third gall">
		
			<div onclick="begone3()" id="gb3" class="gallBtn"><h3>Trzecia galeria</h3></div>
		
			<div id="g3" class="gallBox">
				<?php
					if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'trzecia-galeria', 'slug' ); }
				?>
			</div>
		</div>
		
		<div class="fourth gall">
		
			<div onclick="begone4()" id="gb4" class="gallBtn"><h3>Czwarta galeria</h3></div>
		
			<div id="g4" class="gallBox">
				<?php
					if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'czwarta-galeria', 'slug' ); }
				?>
			</div>
		</div>
	</div>


<!-- CENNIK -->
<div class="prices" id="prices">
	<div class="pricesText">
		<h2>CENNIK</h2>

		<div class="positions">
			<div class="position">
				<p class="service">Usługa</p> <p class="price">63,71zł</p>
			</div>
			<div class="position">
				<p class="service">Usługa</p> <p class="price">63,71zł</p>
			</div>
			<div class="position">
				<p class="service">Usługa</p> <p class="price">63,71zł</p>
			</div>
			<div class="position">
				<p class="service">Usługa</p> <p class="price">63,71zł</p>
			</div>
			<div class="position">
				<p class="service">Usługa</p> <p class="price">63,71zł</p>
			</div>
			<div class="position">
				<p class="service">Usługa</p> <p class="price">63,71zł</p>
			</div>
			<div class="position">
				<p class="service">Usługa</p> <p class="price">63,71zł</p>
			</div>
			<div class="position">
				<p class="service">Usługa</p> <p class="price">63,71zł</p>
			</div>
		</div>
	</div>
</div>
<!-- KONTAKT -->
<div class="contact" id="contact">
	<div class="contactText">
		<h2>SKONTAKTUJ SIĘ</h2>
		<p>Zadzwoń i umów się lub po prostu odwieź nas na miejscu. :)</p>
		<p>Kraków, ul. Chocimska 32</p>
		<p>517 491 204</p>
	</div>
</div>
<!-- DOJAZD -->
<a href="#findUs"></a>
<div class="findUs" id="findUs">
	<div class="box left">
		<div class="mapText">
			<h2>Przystanki MPK w pobliżu:<br>Biprostal<br>Kawiory</h2>
		</div>
	</div>

	<div class="box right">
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.8257105341777!2d19.913332315904295!3d50.07082562252627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165ba562a40fd7%3A0x2674349111576e08!2sChocimska+32%2C+33-332+Krak%C3%B3w!5e0!3m2!1spl!2spl!4v1525274386325" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="mapBigger">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.8658718127754!2d19.913380415904232!3d50.070073522580095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165ba50b1e7879%3A0xae6101106bdca2b7!2sChocimska%2C+Krak%C3%B3w!5e0!3m2!1spl!2spl!4v1525293940168" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>

<?php get_footer(); ?>