<?php
function conectar(){
    $host = 'localhost';
    $banco = 'conserto_celulares';
    $usuario = 'root';
    $senha = '';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);
        // Defina o modo de erro para o modo de exceção
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        return "Conexão não abre: " . $e->getMessage();
    }
}
