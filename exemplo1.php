<?php

function soma(){
    $n1 = 57;
    $n2 = 15;
    return $n1 + $n2;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Palestra - Prof. Cristiano</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="./">
            <img src="img/logo.png" width="35" height="35">
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="index.php">
                Home
            </a>

            <a class="navbar-item" href="sobre.php">
                Sobre
            </a>

        </div>
    </div>

    <div class="navbar-end">
        <div class="navbar-item">
            <h2>Professor Especialista <strong>Cristiano José Cecanho</strong></h2>

        </div>
    </div>

    </div>
</nav>

<section class="hero">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Modularização em PHP:
            </h1>
            <h2 class="subtitle">
                Exemplo 1
            </h2>
        </div>
    </div>
</section>

<div class="container">
    <div class="notification">
        <p class="subtitle"><strong>Função Soma:</strong></p>
        <div class="columns">

            <div class="column">
                <code>
                    <p>function soma(){</p>
                    <p>$n1 = 10;</p>
                    <p>$n2 = 15;</p>
                    <p>return n1 + n2;</p>
                    <p>}</p>
                </code>
            </div>

            <div class="column">
                <code>
                    <p>Resultado</p>
                    <p><?php echo soma();?></p>
                </code>
            </div>

        </div>


    </div>
</div>
<br>

<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="index.php">
                Home
            </a>
        </div>
    </div>

    <div class="navbar-end">
        <div class="navbar-item">
            <a class="navbar-item" href="exemplo2.php">
                Exemplo 2
            </a>
        </div>
    </div>

    </div>
</nav>

<br>
<footer class="footer">
    <div class="content has-text-centered">
        <p>
            <strong>X Mostra Científica e Semana do Conhecimento</strong>: <a href="http://www.asser.edu.br/rioclaro/graduacao/sistemas/">Sistemas de Informação</a>.
    </div>
</footer>
</body>
</html>

