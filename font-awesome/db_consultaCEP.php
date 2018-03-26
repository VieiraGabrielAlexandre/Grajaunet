<?php
/**
 * Created by PhpStorm.
 * User: alceb
 * Date: 16/03/2018
 * Time: 13:44
 */

class db1 {

    //host
    public $host = 'grajaunet.mysql.dbaas.com.br';

    //usuário
    public $usuario = 'grajaunet';

    //senha
    public $senha = 'ana552805';

    //bando de dados
    public $database = 'grajaunet';

    public function conecta_mysql(){
        //cria a conexão
        $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

        //ajustar charset de comunicação entre aplicação e banco de dados
        //mysqli_set_charset($con, 'utf-8');

        //vericar se houve erro de conexão
        if(mysqli_connect_errno()){
            echo 'Houve um erro ao tentar se conectar ao banco de dados: ' .mysqli_connect_error();
        }

        return $con;

    }
}