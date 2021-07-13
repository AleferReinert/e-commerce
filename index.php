<!DOCTYPE html>
<html>
<head>
	<?php include 'inc/head.php'; ?>
</head>
<body id="page-home">
	<?php include 'inc/header.php'; ?>

	<main>
		<ul class="banner-main owl-carousel">
			<li>
				<a href="#">
					<img srcset="	<?php echo $urlBase; ?>/assets/img/content/banner-1-mobile.jpg 575w,
							 		<?php echo $urlBase; ?>/assets/img/content/banner-1-desktop.jpg 2000w"
						sizes="	(max-width: 575px) 100%,
								(min-width: 576px) 100%"
					alt="Confira nossas ofertas - Produtos com até 80% de desconto">
				</a>
			</li>
			<li>
				<a href="#">
					<img srcset="	<?php echo $urlBase; ?>/assets/img/content/banner-2-mobile.jpg 575w,
							 		<?php echo $urlBase; ?>/assets/img/content/banner-2-desktop.jpg 2000w"
						sizes="	(max-width: 575px) 100%,
								(min-width: 576px) 100%"
					alt="Linha infantil">
				</a>
			</li>
			<li>
				<a href="#">
					<img srcset="	<?php echo $urlBase; ?>/assets/img/content/banner-3-mobile.jpg 575w,
							 		<?php echo $urlBase; ?>/assets/img/content/banner-3-desktop.jpg 2000w"
						sizes="	(max-width: 575px) 100%,
								(min-width: 576px) 100%"
					alt="Lançamentos 2021">
				</a>
			</li>
		</ul>

		<section class="products">
			<div class="container">
				<?php include 'inc/list-products.php'; ?>
			</div>
		</section>
		<div class="bar-newsletter">
			<div class="container">
				<form action="">
					<label for="">Cadastre-se para receber ofertas e descontos exclusivos!</label>
					<input type="text" placeholder="Digite seu e-mail..." class="input">
					<button type="submit" class="btn btn-success">Cadastrar</button>
				</form>
			</div>
		</div>
	</main>
	
	<?php include 'inc/footer.php'; ?>
</body>
</html>