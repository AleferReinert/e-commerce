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
            <?php include 'product.php'; ?>
        </li>
        
    <?php endfor; ?>
</ul>