<?php
/**
 * Created by PhpStorm.
 * User: alceb
 * Date: 22/03/2018
 * Time: 20:50
 */
require_once('db_login_consulta.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

//$sql é uma variável
$sql = " SELECT * FROM login_consulta WHERE login = '$login' AND senha = '$pass' ";

$objDb = new db_login_consulta();
$link = $objDb->conecta_mysql();

$resultado_id = mysqli_query($link, $sql);

if($resultado_id){

    $dados_id = mysqli_fetch_array($resultado_id);

    if(isset($dados_id['login'])){
        header('Location: consulta_cadastrados_com_cep.php');  /**echo 'CEP existe';*/
    } else {
        header('Location: admin.html'); /** header('Location: cadastro_sem_cep.php?erro=1');*/
    }
    /**var_dump($dados_cep);*/

}else {
    echo 'Erro na execução da consulta!';
}