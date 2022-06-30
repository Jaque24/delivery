<?php 

include_once("conexao.php");

$cpf = @$SESSION['cpf_usuario'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];






if($bairro == ''){
    echo 'Escolha um bairro';
    exit();
}

if($rua == @$rua{
    echo 'Preencha rua';
    exit();
}


$res = $pdo->prepare("UPDATE usuarios set nome = :nome, usuario = :usuario, = :senha, senha, telefone = :telefone where cpf = )");

    $res->bindValue(":nome", $nome);
    $res->bindValue(":usuario", $email);
    $res->bindValue(":cpf", $cpf);
    $res->bindValue(":senha", $senha);
    $res->bindValue(":nivel", 'Cliente');
    $res->bindValue(":telefone", $telefone);

    $res->execute();

    echo 'Cadastrado com Sucesso!!';


    $res = $pdo->prepare("INSERT into clientes (nome, cpf, telefone, email) values (:nome, :cpf, :telefone, :usuario)");

    $res->bindValue(":nome", $nome);
    $res->bindValue(":usuario", $email);
    $res->bindValue(":cpf", $cpf);
    $res->bindValue(":telefone", $telefone);

    $res->execute();



 ?>