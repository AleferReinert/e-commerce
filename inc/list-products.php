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
    </li>
    <?php endfor; ?>
</ul>