<?php

require_once("class/DB/Sql.php");

class Movimentacao {

    private $id;
    private $valor;
    private $data;
    private $idcc;

    public function save() {

        $sql = new Sql();
       return  $sql->select("INSERT INTO movimentacao(valor,data,idcc) VALUES (:valor,:data,:idcc); ",array(
            ":valor"=>$this->getValor(),
            ":idcc"=>$this->getIdcc(),
            ":data"=>$this->getData()
        ));

    }

    public function update() {

        $sql = new Sql();
        $sql->query("UPDATE movimentacao SET idcc = :idcc, valor = :valor, data = :data WHERE id = :id  ",array(
            ":id"=>$this->getId(),
            ":idcc"=>$this->getIdcc(),
            ":valor"=>$this->getValor(),
            ":data"=>$this->getData()
        ));

    }

    public static function getDateForDatabase(string $date): string {
        $timestamp = strtotime($date);
        $date_formated = date('Y-m-d', $timestamp);
        return $date_formated;
    }

    public static function listarMovimentacaoByData($inicio,$fim) {
        $sql = new Sql();

        return $sql->select("SELECT mv.id,cc.nome,mv.valor,cat.descricao,DATE_FORMAT(mv.data,'%d/%m/%Y') AS dataformatada FROM `movimentacao` as mv INNER JOIN conta_caixa as cc ON mv.idcc = cc.id INNER JOIN categoria as cat ON cc.idcategoria = cat.id WHERE data BETWEEN STR_TO_DATE( :inicio, '%d/%m/%Y' ) AND STR_TO_DATE( :fim, '%d/%m/%Y' )",array(
            ":inicio"=>$inicio,
            ":fim"=>$fim
        ));
    }
    
    public static function listarMovimentacaoByDataFiltered($inicio,$fim,$desc,$tipo) {
        
        $sql = new Sql();
        
        if($desc === "Todos" && $tipo !== "Todos") {
            return $sql->select("SELECT mv.id,cc.nome,mv.valor,cat.descricao,DATE_FORMAT(mv.data,'%d/%m/%Y') AS dataformatada FROM `movimentacao` as mv INNER JOIN conta_caixa as cc ON mv.idcc = cc.id INNER JOIN categoria as cat ON cc.idcategoria = cat.id WHERE data BETWEEN STR_TO_DATE( :inicio, '%d/%m/%Y' ) AND STR_TO_DATE( :fim, '%d/%m/%Y' ) AND cc.nome = :nome",array(
                ":inicio"=>$inicio,
                ":fim"=>$fim,
                ":nome"=>$tipo
            ));
        }
        if($tipo === "Todos" && $desc !== "Todos"){
            return $sql->select("SELECT mv.id,cc.nome,mv.valor,cat.descricao,DATE_FORMAT(mv.data,'%d/%m/%Y') AS dataformatada FROM `movimentacao` as mv INNER JOIN conta_caixa as cc ON mv.idcc = cc.id INNER JOIN categoria as cat ON cc.idcategoria = cat.id WHERE data BETWEEN STR_TO_DATE( :inicio, '%d/%m/%Y' ) AND STR_TO_DATE( :fim, '%d/%m/%Y' ) AND cat.descricao = :descricao",array(
                ":inicio"=>$inicio,
                ":fim"=>$fim,
                ":descricao"=>$desc
            ));
        }
        if($tipo === "Todos" && $desc === "Todos"){
            return $sql->select("SELECT mv.id,cc.nome,mv.valor,cat.descricao,DATE_FORMAT(mv.data,'%d/%m/%Y') AS dataformatada FROM `movimentacao` as mv INNER JOIN conta_caixa as cc ON mv.idcc = cc.id INNER JOIN categoria as cat ON cc.idcategoria = cat.id WHERE data BETWEEN STR_TO_DATE( :inicio, '%d/%m/%Y' ) AND STR_TO_DATE( :fim, '%d/%m/%Y' )",array(
                ":inicio"=>$inicio,
                ":fim"=>$fim
            ));
        }
        
    }
    
    public static function totalFaturamentoByData($inicio,$fim,$desc,$tipo) {
        $sql = new Sql();

        $sql = new Sql();
        
        if($desc === "Todos" && $tipo !== "Todos") {
            return $sql->select("SELECT SUM(mv.valor) as total,DATE_FORMAT(mv.data,'%d/%m/%Y') AS dataformatada FROM `movimentacao` as mv INNER JOIN conta_caixa as cc ON mv.idcc = cc.id INNER JOIN categoria as cat ON cc.idcategoria = cat.id WHERE data BETWEEN STR_TO_DATE( :inicio, '%d/%m/%Y' ) AND STR_TO_DATE( :fim, '%d/%m/%Y' ) AND cc.nome = :nome",array(
                ":inicio"=>$inicio,
                ":fim"=>$fim,
                ":nome"=>$tipo
            ));
        }
        if($tipo === "Todos" && $desc !== "Todos"){
            return $sql->select("SELECT SUM(mv.valor) as total,DATE_FORMAT(mv.data,'%d/%m/%Y') AS dataformatada FROM `movimentacao` as mv INNER JOIN conta_caixa as cc ON mv.idcc = cc.id INNER JOIN categoria as cat ON cc.idcategoria = cat.id WHERE data BETWEEN STR_TO_DATE( :inicio, '%d/%m/%Y' ) AND STR_TO_DATE( :fim, '%d/%m/%Y' ) AND cat.descricao = :descricao",array(
                ":inicio"=>$inicio,
                ":fim"=>$fim,
                ":descricao"=>$desc
            ));
        }
        if($tipo === "Todos" && $desc === "Todos"){
            return $sql->select("SELECT SUM(mv.valor) as total,DATE_FORMAT(mv.data,'%d/%m/%Y') AS dataformatada FROM `movimentacao` as mv INNER JOIN conta_caixa as cc ON mv.idcc = cc.id INNER JOIN categoria as cat ON cc.idcategoria = cat.id WHERE data BETWEEN STR_TO_DATE( :inicio, '%d/%m/%Y' ) AND STR_TO_DATE( :fim, '%d/%m/%Y' )",array(
                ":inicio"=>$inicio,
                ":fim"=>$fim
            ));
        }
    }

    public static function listarMovimentacaoById($id) {
        $sql = new Sql();

        return $sql->select("SELECT mv.id as id,cc.nome,mv.valor,DATE_FORMAT(mv.data,'%d/%m/%Y') AS dataformatada FROM `movimentacao` as mv INNER JOIN conta_caixa as cc ON mv.idcc = cc.id INNER JOIN categoria as cat ON cc.idcategoria = cat.id WHERE mv.id = :id",array(
            ":id"=>$id
        ));
    }

    
    
    /*
    
    public static function ticketMedio($dias = 30) {

        $sql = new Sql();

        return $sql->select("SELECT round((SUM(valor)/SUM(pratos)),2) as tktmedio FROM `faturamento` WHERE data BETWEEN DATE_ADD(CURRENT_DATE(), INTERVAL -:dias DAY) AND CURRENT_DATE()",array(
            ":dias"=>$dias
        ));   

    }

    public static function numPratosMes() {

        $sql = new Sql();

        return $sql->select("SELECT SUM(pratos) as pratos FROM faturamento WHERE data  BETWEEN date_add(date_add(LAST_DAY(CURDATE()),interval 1 DAY),interval -1 MONTH) AND LAST_DAY(CURDATE())");   

    }*/

    public function getId() {
        return $this->id;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getIdcc() {
        return $this->idcc;
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
    
    public function setIdcc($value) {
        $this->idcc = $value;
    }

    public function setData($value) {
        $this->data = $value;
    }


}

?>