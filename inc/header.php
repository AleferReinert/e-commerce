<?php
    $authenticated = true;
?>

<header id="header">
    <div class="bar-top">
        <div class="container">
            <p>Frete grátis nas compras acima de R$ 150,00</p>

            <nav>
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
            </nav>
        </div>
    </div>
    <div class="bar-middle">
        <div class="container">
            <div class="logo">
                <a href="">E-Commerce</a>  
            </div>
            <a href="" class="favorites" title="Meus favoritos">
                <span class="quantity">3</span>
                <svg class="svg-heart" enable-background="new 0 0 48 48" viewBox="0 0 48 48"><path clip-rule="evenodd" d="M24.804,43.648L24,44l-0.804-0.352C12.862,37.313,2,22.893,2,14.884  C2.035,8.326,7.404,3.002,14,3.002c4.169,0,7.849,2.128,10,5.349c2.151-3.221,5.831-5.349,10-5.349c6.596,0,11.965,5.324,12,11.882  C46,22.893,35.138,37.313,24.804,43.648z M34,4.993c-3.354,0-6.469,1.667-8.335,4.46L24,11.946l-1.665-2.494  C20.469,6.66,17.354,4.993,14,4.993c-5.484,0-9.971,4.442-10,9.891c0,7.064,10.234,20.808,20,26.917  c9.766-6.109,20-19.852,20-26.907C43.971,9.435,39.484,4.993,34,4.993z" fill-rule="evenodd"/></svg>
            </a>
            <a href="" class="cart" class="Meu carrinho de compras">
                <span class="quantity">18</span>
                <svg class="svg-shopping-bag" enable-background="new 0 0 48 48" viewBox="0 0 48 48"><path clip-rule="evenodd" d="M43,46H5c-2.209,0-4-1.791-4-4l4-24c0.678-3.442,2.668-4,4.877-4h2.652  C14.037,7.052,18.602,2,24,2s9.963,5.052,11.471,12h2.652c2.209,0,4.199,0.558,4.877,4l4,24C47,44.209,45.209,46,43,46z M24,4  c-4.352,0-8.045,4.178-9.418,10h18.837C32.045,8.178,28.353,4,24,4z M41,18c-0.308-1.351-0.957-2-2.37-2h-2.828  C35.925,16.976,36,17.975,36,19c0,0.552-0.447,1-1,1s-1-0.448-1-1c0-1.027-0.069-2.031-0.201-3H14.201C14.07,16.969,14,17.973,14,19  c0,0.552-0.447,1-1,1s-1-0.448-1-1c0-1.025,0.075-2.024,0.197-3H9.369C7.957,16,7.309,16.649,7,18L3,42c0,1.104,0.896,2,2,2h38  c1.104,0,2-0.896,2-2L41,18z" fill-rule="evenodd"/></svg>
            </a>
        </div>
    </div>
    <div class="bar-bottom">
        <div class="container">
            <nav class="menu">
                <ul>
                    <li>
                        <a href="">Masculino</a>
                        <div class="submenu-primary">
                            <ul class="container">
                                <li>
                                    <a href="">Camisas</a>
                                    <ul class="submenu-secondary">
                                        <li><a href="">Manga curta</a></li>
                                        <li><a href="">Manga longa</a></li>
                                        <li><a href="">Regatas</a></li>
                                        <li><a href="">Listradas</a></li>
                                        <li><a href="">Personalizadas</a></li>
                                        <li><a href="">Polos</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">Calças</a>
                                    <ul class="submenu-secondary">
                                        <li><a href="">Jeans</a></li>
                                        <li><a href="">Malha</a></li>
                                        <li><a href="">Tactel</a></li>
                                        <li><a href="">Moletom</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">Calçados</a>
                                    <ul class="submenu-secondary">
                                        <li><a href="">Tênis</a></li>
                                        <li><a href="">Coturnos</a></li>
                                        <li><a href="">Chinelos</a></li>
                                        <li><a href="">Pantufas</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">Roupas íntimas</a>
                                    <ul class="submenu-secondary">
                                        <li><a href="">Cuecas</a></li>
                                        <li><a href="">Meias</a></li>
                                        <li><a href="">Pijamas</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="">Feminino</a>
                        <div class="submenu-primary">
                            <ul class="container">
                                <li>
                                    <a href="">Camisas</a>
                                    <ul class="submenu-secondary">
                                        <li><a href="">Manga curta</a></li>
                                        <li><a href="">Manga longa</a></li>
                                        <li><a href="">Regatas</a></li>
                                        <li><a href="">Listradas</a></li>
                                        <li><a href="">Personalizadas</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">Calças</a>
                                    <ul class="submenu-secondary">
                                        <li><a href="">Jeans</a></li>
                                        <li><a href="">Malha</a></li>
                                        <li><a href="">Tactel</a></li>
                                        <li><a href="">Moletom</a></li>
                                        <li><a href="">Legging</a></li>
                                        <li><a href="">Boca de sino</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">Calçados</a>
                                    <ul class="submenu-secondary">
                                        <li><a href="">Botas</a></li>
                                        <li><a href="">Saltos</a></li>
                                        <li><a href="">Sapatilhas</a></li>
                                        <li><a href="">Tênis</a></li>
                                        <li><a href="">Sandálias</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">Acessórios</a>
                                    <ul class="submenu-secondary">
                                        <li><a href="">Bolsas</a></li>
                                        <li><a href="">Carteiras</a></li>
                                        <li><a href="">Óculos</a></li>
                                        <li><a href="">Relógios</a></li>
                                        <li><a href="">Lenços</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Vestidos</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="">Infantil</a></li>
                    <li><a href="">Básico</a></li>
                    <li><a href="">Esportes</a></li>
                    <li><a href="">Novidades</a></li>
                    <li><a href="">Ofertas</a></li>
                    <li>
                        <a href="">Marcas</a>
                        <div class="submenu-primary">
                            <ul class="container">
                                <li><a href="">Adidas</a></li>
                                <li><a href="">Calvin Klein</a></li>
                                <li><a href="">Cavalera</a></li>
                                <li><a href="">Colcci</a></li>
                                <li><a href="">Converse</a></li>
                                <li><a href="">Everlast</a></li>
                                <li><a href="">Lacoste</a></li>
                                <li><a href="">Mizuno</a></li>
                                <li><a href="">Mormaii</a></li>
                                <li><a href="">Nike</a></li>
                                <li><a href="">Oakley</a></li>
                                <li><a href="">Puma</a></li>
                                <li><a href="">Ray Ban</a></li>
                                <li><a href="">Reebok</a></li>
                                <li><a href="">Vans</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="search">
                <form action="">
                    <input type="text" placeholder="Digite sua busca...">
                    <button type="submit" class="btn-submit">
                        <svg class="svg-search" viewBox="0 0 32 32"><g><path d="M29.71,28.29l-10-10a10,10,0,1,0-1.42,1.42l10,10ZM4,12a8,8,0,1,1,8,8A8,8,0,0,1,4,12Z"/></g></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>
