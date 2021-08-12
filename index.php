<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include 'inc/head.php'; ?>
</head>
<body id="page-cart">

	<main>
		<div class="title-page">
			<div class="container">
				<h1 class="title">Meu carrinho</h1>
			</div>
		</div>
		<form action="" class="form-cart">
			<div class="container">
				<ul class="list-products"></ul>
			</div>
			<div class="price-total">
				<div class="container">
					<p class="text">Total</p>
					<p class="price"></p>
				</div>
			</div>
			<div class="container">
				<div class="buttons">
					<a href="<?php echo $urlBase; ?>/produtos" class="btn btn-default">Continuar comprando</a>
					<button type="submit" class="btn btn-primary">Finalizar compra</button>
				</div>
			</div>
		</form>
	</main>
	
	<?php include 'inc/footer.php'; ?>
</body>
</html>