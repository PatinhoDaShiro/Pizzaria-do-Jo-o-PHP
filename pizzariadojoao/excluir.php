<?php
    session_start();
    include "./config.php";
    include "./conexao.php";
    $id = $_POST['idpedido'];

    $result = mysqli_query($conexao, "DELETE FROM pedidos where pedidos_id=$id");
    header('Location:'.URL_BASE.'/carrinho.php');