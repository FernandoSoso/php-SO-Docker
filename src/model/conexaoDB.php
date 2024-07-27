<?php
    function connect(){
        global $conexao;
        $servidor='db';
        $nomeUsuario='php_docker';
        $senhaUsuario='root';
        $base='farmaciap';
        $conexao=mysqli_connect($servidor,$nomeUsuario,$senhaUsuario, $base) or die(mysqli_connect_error());
    }
    function query($sql){
        global $conexao;
        mysqli_query($conexao, "SET CHARACTER SET utf8");
        $query =  mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        return $query;
    }
    function close(){
        global $conexao;
        mysqli_close($conexao);
    }
?>