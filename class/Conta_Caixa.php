<?php 

class Conta_Caixa {

    private $id;
    private $nome;
    private $idcategoria;

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdCategoria() {
        return $this->idcategoria;
    }

    public function setId($value) {
        $this->id = $value;
    }

    public function setNome($value) {
        $this->nome = $value;
    }
    
    public function setIdCategoria($value) {
        $this->idcategoria = $value;
    }

    public function save() {

        $sql = new Sql();
       return  $sql->select("INSERT INTO conta_caixa(nome,idcategoria) VALUES (:nome,:idcategoria); ",array(
            ":nome"=>$this->getNome(),
            ":idcategoria"=>$this->getIdCategoria()
        ));

    }

    public function update() {

        $sql = new Sql();
        $sql->query("UPDATE conta_caixa SET nome = :nome, idcategoria = :idcategoria WHERE id = :id  ",array(
            ":id"=>$this->getId(),
            ":nome"=>$this->getNome(),
            ":idcategoria"=>$this->getIdCategoria()
        ));

    }

    public static function listar() {
        $sql = new Sql();

        return $sql->select("SELECT cx.id,cx.nome,cat.descricao FROM `conta_caixa` as cx INNER JOIN categoria as cat ON cx.idcategoria = cat.id ORDER BY cx.id");
    }

    public static function listarContaCaixaById($id) {
        $sql = new Sql();

        return $sql->select("SELECT cx.id,cx.nome FROM `conta_caixa` as cx INNER JOIN categoria as cat ON cx.idcategoria = cat.id WHERE cx.id = :id",array(
            ":id"=>$id
        ));
    }

    public static function getDataByNome($nome) {
        $sql = new Sql();

        return $sql->select("SELECT * FROM `conta_caixa` WHERE nome = :nome",array(
            ":nome"=>$nome
        ));
    }


}


?>