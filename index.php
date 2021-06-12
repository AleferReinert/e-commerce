<!DOCTYPE html>
<html>
<head>
	<?php include 'inc/head.php'; ?>
</head>
<body class="page-home">
	<?php include 'inc/header.php'; ?>

	<main>
		<ul class="banner-main owl-carousel">
			<li><a href="#"><img src="assets/img/content/banner-1.jpg" alt="Confira nossas ofertas"></a></li>
			<li><a href="#"><img src="assets/img/content/banner-2.jpg" alt="Roupas infantis"></a></li>
			<li><a href="#"><img src="assets/img/content/banner-3.jpg" alt="Lançamentos"></a></li>
		</ul>

		<section class="products">
			<div class="container">
				<h1 class="title-section">Promoções</h1>
				<ul class="list-products">
					<?php for($i = 1; $i<= 12; $i++) : 

						// Apenas aplica desconto em produtos aleatórios para exemplo de layout 
						if($i == 2 || $i == 8 || $i == 10) {
							$discount = true;
						} else {
							$discount = false;
						}

						// Apenas deixa produtos já favoritados para exemplo de layout 
						if($i == 3 || $i == 7) {
							$favorited = 'false';
						} else {
							$favorited = 'true';
						}
					?>
					<li>
						<a href="" class="product">
							<img class="image" src="assets/img/content/product-1.jpg" alt="">
							<h2 class="name">Camiseta Adidas Trefoil</h2>
							
							<?php if($discount == true) { ?>
								<div class="price-original"><span>R$ 99,90</span></div>
							<?php } ?>

							<div class="price-final"><span>R$ 89,90</span></div>

							<?php if($discount == true) { ?>
								<div class="discount">10% off</div>
							<?php } ?>

							<form action="">
								<input type="hidden" name="favorite" value="<?php echo $favorited; ?>">
								<button type="submit" class="btn-favorites btn-add-favorites" title="Adicionar aos favoritos">
									<span class="far fa-heart"></span>
								</button>
							</form>
						</a>
					</li>
					<?php endfor; ?>
				</ul>
			</div>
		</section>
	</main>
	
	<?php include 'inc/footer.php'; ?>
	<script type="text/javascript" src="assets/js/min/scripts-home.min.js"></script>
</body>
</html>