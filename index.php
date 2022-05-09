<!DOCTYPE html>
<html>
<head>
	<title>Tema</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>

	<?php get_header(); ?>

<h1>Olá Mundo</h1>

<h2>Meu 1º Tema</h2>

<h3>Autor: Kaik Persike Maiorquino</h3>






<div class="container">
	<div class="row">

		<div class="col-md-3">

	<figure>


		<figcaption>
			Titulo
		</figcaption>

	
	<p><img src="<?php echo get_template_directory_uri() ?>/assets/img/pintadinha.png"  width="136" height="200">Bom ola. Teste de mensagem</p>



	</figure>
			
		</div>
		<div class="col-md-3">
			
	<figure>


		<figcaption>
			Galinha pintadinha
		</figcaption>

	

	<p><img src="<?php echo get_template_directory_uri() ?>/assets/img/pintadinha.png"  width="136" height="200">Bom ola. Teste de mensagem</p>

		

	</figure>

		</div>
		<div class="col-md-3">
			
	<figure>

		<figcaption>
			Titulo
		</figcaption>

	<p><img src="<?php echo get_template_directory_uri() ?>/assets/img/pintadinha.png" width="136" height="200"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/pinto.png" width="136" height="200" > Teste descrição</p>

		


	</figure>

		</div>
		<div class="col-md-3">
<figure>

	<figcaption>
	Titulo
</figcaption>

<p><img src="<?php echo get_template_directory_uri() ?>/assets/img/pintadinha.png" width="136" height="200"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/galo.png" width="136" height="200" > Teste descrição</p>



</figure>

		</div>

	</div>
</div>

	<?php get_footer(); ?>

</body>
</html>