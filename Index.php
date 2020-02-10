<?php
    session_start();
?>
<html>
    <head>
        <title>Login Interface</title>
        <link rel="stylesheet" type="text/css" href="assets/css/estilo.css"/>
    </head>
    
    <body>
        <div id="container">
            <header>
                <figure class="image">
                    <img src="assets/Imagens/Logo.png" class="image-login" alt="Logo">
                </figure>
            </header>
            
            <?php
                    if(isset($_SESSION['usuario_invalido'])){
            ?>
                        <div class="usuario-invalido">
                        <h4>Erro: Usuario ou senha invalidos!</h4>
                    </div>
                  <?php  
                  }
                    unset($_SESSION['usuario_invalido']);
                ?>
            <div class="box-login">
                    <form action="confirma.php" method="POST">         
                        <h1>Login</h1>
                        <br>
                        <input type="text" class="input-text" name="usuario-login" placeholder="Nome" required>
                        <br>
                        <br>
                        <input type="password" class="input-text" name="senha-login" placeholder="Senha" required>
                        <br>
                        <br>
                        <button type="submit" class="input-button"> Entrar </button>
                        <a href="Cadastro.php" class="margin-cadastro">Criar conta</a>
                    </form>
            </div>
        </div>
    </body>
</html>