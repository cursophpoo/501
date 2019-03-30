<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Entendendo o padrão MVC</title>
</head>
<body>
    <h1> Sistema MVC - Usuarios </h1>
    <a href="?rota=usuarios/cadastrar">NOVO USUARIO</a><br>
    <?php
        //$path = Controller/action;
        require "../app/View/$path.php";
    ?>  
</body>
</html>