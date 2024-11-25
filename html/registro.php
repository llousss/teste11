<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/Icons8-Windows-8-Sports-Football-2.ico" type="image/x-icon">
    <title>Registrar-se - Informa Esportes</title>
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
    <header>
        <div class="header-top">
            <h1 class="titulo">Informa Esportes</h1>
            <p class="subtitulo">As últimas notícias sobre esportes</p>
        </div>
    </header>

    <div class="login-container">
        <div class="login-card">
            <h1>Crie sua conta</h1>
            <p>Preencha os campos abaixo para se registrar.</p>
            <form action="registrado.html" method="POST" class="login-form">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu email" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                </div>
                <div class="form-group">
                    <label for="confirmar-senha">Confirmar Senha</label>
                    <input type="password" id="confirmar-senha" name="confirmar-senha" placeholder="Confirme sua senha" required>
                </div>
                <button type="submit" class="botao">Registrar-se</button>
                <p class="register-link">Já tem uma conta? <a href="login.html">Faça login aqui</a></p>
            </form>
            <a href="index.html" class="botao voltar">Voltar à Página Inicial</a>
        </div>
    </div>
</body>
</html>
