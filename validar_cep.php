<?php
/**
 * Created by PhpStorm.
 * User: alceb
 * Date: 16/03/2018
 * Time: 14:09
 */
    require_once('db_consultaCEP.php');

    $cep = $_POST['cep'];

    //$sql é uma variável
    $sql = " SELECT * FROM CEP WHERE cep = '$cep' ";

    $objDb = new db1();
    $link = $objDb->conecta_mysql();

    $resultado = mysqli_query($link, $sql);

    if($resultado){

        $dados_cep = mysqli_fetch_array($resultado);

        if(isset($dados_cep['cep'])){
            header('Location: pagina_cadastro_com_cep.html');  /**echo 'CEP existe';*/
        } else {
            header('Location: pagina_cadastro_sem_cep.html'); /** header('Location: cadastro_sem_cep.php?erro=1');*/
        }
        /**var_dump($dados_cep);*/

    }else {
        echo 'Erro na execução da consulta!';
    }



    /**$dados_cep = mysqli_fetch_array($resultato);

    var_dump($dados_cep);*/