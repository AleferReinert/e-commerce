<!DOCTYPE html>
<html>
<head>
	<?php include '../inc/head.php'; ?>
</head>
<body id="page-product">
	<?php include '../inc/header.php'; ?>

	<main>
        <div class="container">
            <nav class="breadcrumb">
                <ul>
                    <li>
                        <a href="">Início</a>
                    </li>
                    <li>
                        Masculino
                    </li>
                </ul>
            </nav>
        </div>
        <div class="container page-content">
            <div class="product-images">
                <ul class="carousel-product owl-carousel">
                    <?php for($i=1; $i<=5;$i++): ?>
                        <li><a href=""><img src="<?php echo $urlBase; ?>/assets/img/content/product-1-img-<?php echo $i; ?>.jpg" alt=""></a></li>
                    <?php endfor; ?>
                </ul>
            </div>
            <div class="product-infos">
                <h1 class="title">Camiseta Adidas Trefoil</h1>
                <p class="price-original">De <span>R$ 99,90</span></p>
                <p class="price-final">
                    Por 
                    <span class="price">R$ 89,90</span>
                    <span class="discount">(10% off)</span>
                </p>

                <form action="">
                    <div class="fieldset fieldset-size">
                        <fieldset>
                            <legend>
                                Selecione um tamanho:
                            </legend>
                            <div>
                                <label><input type="radio" name="size" value="p" required>P</label>
                                <label><input type="radio" name="size" value="m">M</label>
                                <label><input type="radio" name="size" value="g">G</label>
                                <label><input type="radio" name="size" value="gg">GG</label>
                                <label><input type="radio" name="size" value="egg">EGG</label>
                            </div>
                        </fieldset>
                    </div>

                    <div class="fieldset fieldset-color">
                        <fieldset>
                            <legend>
                                Selecione uma cor:
                            </legend>
                            <div>
                                <label>
                                    <input type="radio" name="color" value="blue">
                                    <span class="fa fa-check"></span>
                                    Azul
                                </label>
                                <label>
                                    <input type="radio" name="color" value="white">
                                    <span class="fa fa-check"></span>
                                    Branco
                                </label>
                                <label>
                                    <input type="radio" name="color" value="gray">
                                    <span class="fa fa-check"></span>
                                    Cinza
                                </label>
                                <label>
                                    <input type="radio" name="color" value="black">
                                    <span class="fa fa-check"></span>
                                    Preto
                                </label>
                                <label>
                                    <input type="radio" name="color" value="red">
                                    <span class="fa fa-check"></span>
                                    Vermelho
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <button type="submit" class="btn btn-success btn-buy">
                        <span class="fa fa-shopping-cart"></span>
                        Adicionar ao carrinho
                    </button>
                </form>
                <form action="">
                    <input type="hidden" name="favorite" value="false">
                    <button type="submit" class="btn btn-default btn-favorites btn-add-favorites" title="Adicionar aos favoritos">
                        <span class="far fa-heart"></span>
                        Adicionar a lista de desejos
                    </button>
                </form>
            </div>

            <section id="more-information">
                <div data-toggle="collapse" class="collapsed" data-target="#product-description" data-parent="#more-information">
                    <h2 class="title">Descrição</h2>
                    <span class="fa fa-plus icon-collapsed"></span>
                    <span class="fa fa-minus icon-show"></span>
                </div>
                <div id="product-description" class="collapse">
                    <p>Volte às origens do estilo clássico. Esta camiseta adidas oferece o destaque que ele merece. O algodão macio faz dela uma peça irresistível, que você vai escolher várias e várias vezes.</p>
                    <p>Nossas peças em algodão apoiam a plantação sustentável dessa matéria-prima. Isso faz parte da nossa ambição de eliminar o lixo plástico.</p>
                </div>
                <div data-toggle="collapse" class="collapsed" data-target="#product-technical-information" data-parent="#more-information">
                    <h2 class="title">Informações Técnicas</h2>
                    <span class="fa fa-plus icon-collapsed"></span>
                    <span class="fa fa-minus icon-show"></span>
                </div>
                <div id="product-technical-information" class="collapse">
                    <ul>
                        <li>
                            <span>SKU:</span>
                            <span>AD464SRF62KFD</span>
                        </li>
                        <li>
                            <span>Modelo:</span>
                            <span>Adidas Originals GN2899</span>
                        </li>
                        <li>
                            <span>Composição:</span>
                            <span>92% Algodão e 8% Elastano</span>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
	</main>
	
	<?php include '../inc/footer.php'; ?>
</body>
</html>