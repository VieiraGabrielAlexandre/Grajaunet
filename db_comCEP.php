<?php
/**
 * Created by PhpStorm.
 * User: alceb
 * Date: 17/03/2018
 * Time: 18:51
 */

class db2 {

    //host
    public $host = 'grajaunet.mysql.dbaas.com.br';

    //usuario
    public $usuario = 'grajaunet';

    //senha
    public $senha = 'ana552805';

    //banco de dados
    public $database = 'grajaunet';

    public function conecta_mysql(){

        //cria a conexão
        $con2 = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

        //ajustar charset de comunicação entre aplicação e banco de dados
        mysqli_set_charset($con2, 'utf-8');

        //vericar se houve erro de conexão
        if(mysqli_connect_errno()){
            echo 'Houve um erro ao tentar se conectar ao banco de dados: ' .mysqli_connect_error();
        }

        return $con2;

    }

}