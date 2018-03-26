<?php
/**
 * Created by PhpStorm.
 * User: alceb
 * Date: 17/03/2018
 * Time: 18:24
 */
    require_once('db_con_cep.php');

    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $estado = $_POST['estado'];

    $objDb = new cep1();
    $link = $objDb->conecta_mysql1();

    $sql = "insert into CEP(cep, rua, bairro, estado) values
    ('$cep', '$rua', '$bairro', '$estado')";

    if (mysqli_query($link, $sql)){
        header('Location: efetuado_com_sucesso.html');
    } else{
        header('Location: efetuado_sem_sucesso.html');
    }
