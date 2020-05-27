<?php

class Categoria{

    private $id;
    private $descricao;

    public function getId() {
        return $this->id;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getIdCategoria() {
        return $this->idcategoria;
    }

    public function setId($value) {
        $this->id = $value;
    }

    public function setDescricao($value) {
        $this->descricao = $value;
    }

    public static function listar() {
        $sql = new Sql();

        return $sql->select("SELECT * FROM `categoria`");
    }

    public static function getIdByDescricao($desc) {
        $sql = new Sql();

        $result =  $sql->select("SELECT id FROM `categoria` WHERE descricao = :descricao",array(
            ":descricao"=>$desc
        ));

        return $result[0];
    }

    public static function getDescricaoById($id) {

        $sql = new Sql();

        $result =  $sql->select("SELECT descricao FROM `categoria` WHERE id = :id",array(
            ":id"=>$id
        ));

        return $result[0];

    }

}

?>