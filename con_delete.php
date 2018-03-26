<?php
/**
 * Created by PhpStorm.
 * User: alceb
 * Date: 17/03/2018
 * Time: 18:24
 */
    require_once('deletarcep.php');
    $cep = $_POST['cep'];

    $objDb = new deletar();
    $link = $objDb->conecta_mysql();

    $sql = "delete from CEP where cep = "$cep"";

    if (mysqli_query($link, $sql)){
        header('Location: efetuado_com_sucesso.html');
    } else{
        header('Location: efetuado_sem_sucesso.html');
    }
