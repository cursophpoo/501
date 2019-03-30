<?php 
foreach($dados as $usuarios):
    ?>
    <br>
    <b>Id: </b><?=$usuarios['id'] ?><br>
    <b>Nome: </b><?=$usuarios['nome'] ?><br>
    <b>Email: </b><?=$usuarios['email'] ?><br>
    <a href="?rota=usuarios/alterar<?=$usuarios['id']?>">Alterar</a> |
    <a href="?rota=usuarios/excluir<?=$usuarios['id']?>">Excluir</a>
    <?php
endforeach; 
    ?>