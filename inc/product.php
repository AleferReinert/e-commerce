<a href="<?php echo $urlBase; ?>/produto" class="product">
    <img class="image" width="330" height="330" src="<?php echo $urlBase; ?>/assets/img/content/min/product-1-img-1.webp" alt="">
    <h2 class="title">Camiseta Adidas Trefoil</h2>
    
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