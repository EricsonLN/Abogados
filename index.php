<?php include('_head.php'); ?>

<body>
	<?php include('_header.php'); ?>
	<?php include('_menu-responsive.php'); ?>


	<div class="slider-main__whatsapp">
				<a href="https://api.whatsapp.com/send?phone=+51963082509&text=" target="_back" title="whatsapp"><img src="assets/img/Whatsapp.png" alt=""></a>
	</div>
	<section class="slider-main">
		<div class="slider-main__item">
			<figure class="slider-main__img">
				<img src="assets/img/Home.jpg" class="fit-cover" alt="PCVA | Pérez Capurro Vásquez & Alvarado Abogados">
			</figure>
			<div class="container">
				<div class="slider-main__data">
					<p class="slider-main__title">SOMOS LOJA & LUJAN ABOGADOS <span> SOLUCIONES LEGALES</span> <span>EN DEFENSA DE SUS INTERESES</span></p>
					<a class="slider-main__button" href="#">BIENVENIDOS</a>
				</div>
			</div>
			
		</div>
		<div class="slider-main__item">
			<figure class="slider-main__img">
				<img src="assets/img/Home02.jpg" class="fit-cover" alt="PCVA | Pérez Capurro Vásquez & Alvarado Abogados">
			</figure>
			<div class="container">
				<div class="slider-main__data">
					<p class="slider-main__title"><span> TRABAJAMOS PARA PROTEGER</span> <span>SUS DERECHOS</span></p>
					<a class="slider-main__button" href="#">ESPECIALIDADES</a>
				</div>
			</div>
		</div>
		<!-- <div class="slider-main__item">
			<figure class="slider-main__img">
				<img src="assets/img/slider-main/Home01.jpg" class="fit-cover" alt="PCVA | Pérez Capurro Vásquez & Alvarado Abogados">
			</figure>
			<div class="container">
				<div class="slider-main__data">
					<p class="slider-main__title">SOMOS LOJA & LUJAN ABOGADOS <span> SOLUCIONES LEGALES</span> <span>EN DEFENSA DE SUS INTERESES</span></p>
					<a class="slider-main__button" href="#">BIENVENIDOS</a>
				</div>
			</div>
		</div>
		<div class="slider-main__item">
			<figure class="slider-main__img">
				<img src="assets/img/slider-main/Home01.jpg" class="fit-cover" alt="PCVA | Pérez Capurro Vásquez & Alvarado Abogados">
			</figure>
			<div class="container">
				<div class="slider-main__data">
					<p class="slider-main__title">SOMOS LOJA & LUJAN ABOGADOS <span> SOLUCIONES LEGALES</span> <span>EN DEFENSA DE SUS INTERESES</span></p>
					<a class="slider-main__button" href="#">Bienvenidos</a>
				</div>
			</div>
		</div> -->
	</section>
	<!-- contenido -->
	<div class="main-contenido" id="estudio">
		<div class="section-contenido">
			<div class="main-logo--active">
				<img src="assets/img/iconos/Icono_Logo.png" alt="Icono del logo" >
			</div>

			<h1 class="main-contenido__tittle">ESTAMOS COMPROMETIDOS EN
				LA PREVENCIÓN <br>
				Y SOLUCIÓN DE SUS CONFLICTOS LEGALES
			</h1>

			<div class="main-contenido__line"></div>

			<p class="main-contenido__textparra">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quaerat iure, eveniet qui voluptate veritatis vitae, dolor illo dignissimos eius, doloremque doloribus optio. Totam pariatur quia doloribus, commodi fugiat dignissimos!</p>
			<p class="main-contenido__textparra">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, cum accusamus fugiat iste illo at aut cupiditate nostrum pariatur voluptatem esse, aspernatur ea assumenda! Hic aspernatur quae alias pariatur itaque.</p>

		</div>
	</div>


	<?php
	include('especialidades.php');
	?>

	<?php
	include('equipo.php');
	?>
	<?php
	include('novedades.php');
	?>

	<?php
	include('contacto.php');
	?>
<?php
	include('_footer.php');
	?>

<?php
	include('import-script.php');
?>	
</body>