<ul>
    <?php if($authenticated == true) { ?>

    <li class="dropdown">
        <a href="">
            <span class="fa fa-user"></span>
            Olá, João
        </a>
        <div class="dropdown-account dropdown-target">
            <ul>
                <li><a href=""><span class="fa fa-user"></span>Meus Dados</a></li>
                <li><a href=""><span class="fa fa-shopping-cart"></span>Meus Pedidos</a></li>
                <li><a href=""><span class="fa fa-heart"></span>Meus Favoritos</a></li>
            </ul>
        </div>
    </li>
    <li>
        <a href="">
            <span class="fa fa-sign-out-alt"></span>
            Sair
        </a>
    </li>
    <?php } else { ?>

        <li><a href="">Cadastre-se</a></li>
        <li><a href="">Entrar</li>

    <?php } ?>
</ul>