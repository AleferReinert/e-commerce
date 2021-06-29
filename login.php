<!DOCTYPE html>
<html>
<head>
	<?php include 'inc/head.php'; ?>
</head>
<body class="page-login">
	<?php include 'inc/header.php'; ?>

	<main>
        <div class="container">
            <nav class="breadcrumb">
                <ul>
                    <li>
                        <a href="">Início</a>
                    </li>
                    <li>
                        Login
                    </li>
                </ul>
            </nav>
            
            <div class="box-login">
                <h1 class="page-title">Já sou cliente</h1>

                <form action="">
                    <div class="form-control">
                        <label for="form-login-email">Seu e-mail</label>
                        <input type="text" id="form-login-email" class="input" placeholder="">
                    </div>
                    <div class="form-control">
                        <label for="form-login-password">Sua senha</label>
                        <a href="">Esqueci minha senha</a>
                        <input type="password" id="form-login-password" class="input" placeholder="Senha">
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>

                <a href="" class="link-register">Ainda não é cadastrado? Clique aqui!</a>
            </div>
            
        </div>
	</main>
	
	<?php include 'inc/footer.php'; ?>
</body>
</html>