<?php
    session_start();

    $secao_usuario = $_SESSION['usuario'];
    $nivel_acesso = $_SESSION['nivel_acesso'];

    if(!isset($secao_usuario) || $nivel_acesso != 0){
      header("Location: menu.php");
    }

    echo "Olá $secao_usuario";
?>