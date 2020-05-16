<?php

require_once("class/DB/Sql.php");

class Faturamento {

    private $id;
    private $valor;
    private $pratos;
    private $data;

    public function save() {

        $sql = new Sql();
       return  $sql->select("INSERT INTO faturamento(valor,pratos,data) VALUES (:valor,:pratos,:data); ",array(
            ":valor"=>$this->getValor(),
            ":pratos"=>$this->getPratos(),
            ":data"=>$this->getData()
        ));

    }

    public function update() {

        $sql = new Sql();
        $sql->query("UPDATE faturamento SET pratos = :pratos, valor = :valor, data = :data WHERE id = :id  ",array(
            ":id"=>$this->getId(),
            ":pratos"=>$this->getPratos(),
            ":valor"=>$this->getValor(),
            ":data"=>$this->getData()
        ));

    }

    public static function listarFaturamento() {
        $sql = new Sql();

        return $sql->select("SELECT * FROM faturamento");
    }

    public static function listarFaturamentoById($id) {
        $sql = new Sql();

        return $sql->select("SELECT * FROM faturamento WHERE id = :id",array(
            ":id"=>$id
        ));
    }

    public static function ticketMedio($dias) {

        $sql = new Sql();

        $results = $sql->select("SELECT (SUM(valor)/SUM(pratos)) FROM `faturamento` WHERE data BETWEEN DATE_ADD(CURRENT_DATE(), INTERVAL -:dias DAY) AND CURRENT_DATE()",array(
            ":dias"=>$dias
        ));

        $data = $results[0];

        return $data;
        

    }

    public function getId() {
        return $this->id;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getPratos() {
        return $this->pratos;
    }

    public function getData() {
        return $this->data;
    }

    public function setId($value) {
        $this->id = $value;
    }

    public function setValor($value) {
        $this->valor = $value;
    }
    
    public function setPratos($value) {
        $this->pratos = $value;
    }

    public function setData($value) {
        $this->data = $value;
    }


}

?>