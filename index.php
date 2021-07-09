<!DOCTYPE html>
<html>
<head>
	<?php include 'inc/head.php'; ?>
</head>
<body id="page-home">
	<?php include 'inc/header.php'; ?>

	<main>
		<ul class="banner-main owl-carousel">
			<li><a href="#"><img src="assets/img/content/banner-1.jpg" alt="Confira nossas ofertas"></a></li>
			<li><a href="#"><img src="assets/img/content/banner-2.jpg" alt="Roupas infantis"></a></li>
			<li><a href="#"><img src="assets/img/content/banner-3.jpg" alt="Lançamentos"></a></li>
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
					<button type="submit" class="btn btn-primary">Cadastrar</button>
				</form>
			</div>
		</div>
	</main>
	
	<?php include 'inc/footer.php'; ?>
</body>
</html>