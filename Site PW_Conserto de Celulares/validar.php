<?php
session_start();
header('Content-type: application/json');
header("Access-Control-Allow-Origin:*");
include 'conexao.php';
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$login = $dados ['login'];
$senha = $dados ['senha'];
$sth = $pdo->prepare('SELECT * FROM usuarios where usu_email = : email and usu_senha = :senha');
$sth->bindValue(':email', $login);
$sth->bindValue(': senha', $senha);
$sth->execute();
if ($sth->rowCount() > 0)  :

    $resultado = $sth->fetch(PDO::FETCH_ASSOC);
    extract($resultado);

    $_SESSION['Login']['email'] = $login;
    $_SESSION['Login']['senha'] = $senha;

    $json['error'] = 'success';
    $json['msg'] = 'Bem Vindo' . $login;
else :
    $json['error'] = 'errlogin';
    $json['msg'] = 'login ou senha inválidos';    
endif;

echo json_encode($json);