<?php
    include_once "../model/conexaoDB.php";

    function cadastrarUsuario($nome, $senha){
        connect();
        query("INSERT INTO usuario (nomeFunc, senha) VALUES ('$nome', '$senha')");
        close();
    }
    function buscarUsuario($nome){
        connect();
        $query = query("SELECT * FROM usuario WHERE nomeFunc = '$nome'");
        close();
        return $query;
    }
?>