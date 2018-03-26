<?php
/**
 * Created by PhpStorm.
 * User: alceb
 * Date: 17/03/2018
 * Time: 18:24
 */
    require_once('db_semCEP.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];

    $objDb = new db3();
    $link = $objDb->conecta_mysql();

    $sql = "insert into usuario_sem_cep(nome, email, telefone, celular, rua , bairro, cidade, estado , cep) values
        ('$nome', '$email', '$telefone', '$celular', '$rua', '$bairro', '$cidade', '$estado', '$cep')";

    if (mysqli_query($link, $sql)){
        header('Location: efetuado_com_sucesso.html');
    } else{
        header('Location: efetuado_sem_sucesso.html');
    }
