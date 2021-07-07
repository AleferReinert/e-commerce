<!DOCTYPE html>
<html>
<head>
	<?php include 'inc/head.php'; ?>
</head>
<body class="page-category">
	<?php include 'inc/header.php'; ?>

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
            <div class="page-title">
                <h1 class="title">Masculino</h1>
            </div>
            <label class="sorter-by">
                Ordenar por: 
                <select>
                    <option value="">Relevância</option>
                    <option value="">Menor preço</option>
                    <option value="">Maior preço</option>
                    <option value="">Maior desconto</option>
                </select>
            </label>
            
            <aside id="filters">
                <form action="">
                    <div class="fieldset">
                        <fieldset class="inline">
                            <legend>Tamanho</legend>
                            <label><input type="checkbox" name="size" value="p">P</label>
                            <label><input type="checkbox" name="size" value="m">M</label>
                            <label><input type="checkbox" name="size" value="g">G</label>
                            <label><input type="checkbox" name="size" value="gg">GG</label>
                            <label><input type="checkbox" name="size" value="egg">EGG</label>
                            <label><input type="checkbox" name="size" value="22">22</label>
                            <label><input type="checkbox" name="size" value="24">24</label>
                            <label><input type="checkbox" name="size" value="26">26</label>
                            <label><input type="checkbox" name="size" value="28">28</label>
                            <label><input type="checkbox" name="size" value="30">30</label>
                            <label><input type="checkbox" name="size" value="32">32</label>
                            <label><input type="checkbox" name="size" value="34">34</label>
                            <label><input type="checkbox" name="size" value="36">36</label>
                            <label><input type="checkbox" name="size" value="38">38</label>
                            <label><input type="checkbox" name="size" value="40">40</label>
                            <label><input type="checkbox" name="size" value="42">42</label>
                            <label><input type="checkbox" name="size" value="44">44</label>
                        </fieldset>
                    </div>

                    <div class="fieldset fieldset-color">
                        <fieldset class="inline">
                            <legend>Cor</legend>
                            <label><input type="radio" name="size" value="yellow">Amarelo</label>
                            <label><input type="radio" name="size" value="blue">Azul</label>
                            <label><input type="radio" name="size" value="white">Branco</label>
                            <label><input type="radio" name="size" value="gray">Cinza</label>
                            <label><input type="radio" name="size" value="orange">Laranja</label>
                            <label><input type="radio" name="size" value="brown">Marrom</label>
                            <label><input type="radio" name="size" value="black">Preto</label>
                            <label><input type="radio" name="size" value="pink">Rosa</label>
                            <label><input type="radio" name="size" value="purple">Roxo</label>
                            <label><input type="radio" name="size" value="green">Verde</label>
                            <label><input type="radio" name="size" value="red">Vermelho</label>
                        </fieldset>
                    </div>
                </form>
            </aside>
            <?php include 'inc/list-products.php'; ?>
            <?php include 'inc/pagination.php'; ?>
        </div>
	</main>
	
	<?php include 'inc/footer.php'; ?>
</body>
</html>