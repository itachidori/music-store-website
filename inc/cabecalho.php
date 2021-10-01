<?php @session_start(); ?>

<header class="header">
    <nav>
        <ul>
            <a href="index.php" class="titulo"><img src="img/logo.png" alt="">Music Store</a>
            <li><a href="index.php">Home</a></li>
            <li><a href="loja.php">Loja</a></li>
            <li><a href="contactos.php">Contactos</a></li>

            <?php
            if (isset($_SESSION["utilizador"])) {

                echo "<li><a href='lista-instrumentos.php'>Lista Instrumentos</a></li>
            <li><a href='inserir-instrumentos.php'>Inserir Instrumento</a></li>";
            }
            ?>

        </ul>
        <div class="login">
            <?php

            if (!isset($_SESSION["utilizador"])) {
                echo "<form method='POST' action='processa-login.php'>
                <!-- Username: rafael -->
                <!-- Password: andrade -->
                <span>Area Reservada:</span>
                <input type='text' placeholder='Utilizador' name='user' required>
                <input type='password' placeholder='Palavra-passe' name='pass' required>
                <button type='submit' name='login' class='loginButton'>Entrar</button>'</form>";
            } else {
                echo "<button class='logout'><a href='terminar-sessao.php'>Terminar Sessão</a></button>";
            }
            ?>
        </div>
    </nav>
</header>


<!-- Imagem de fundo -->
<img id="backGround" src="img/background.jpg" alt="">