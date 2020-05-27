<?php

require_once("class/DB/Sql.php");

class User {

    const SESSION = "User";
    private $id;
    private $nome;
    private $login;
    private $senha;
    private $ativo;

    public static function login($login, $password) {

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM usuarios WHERE login = :LOGIN", array(
            ":LOGIN"=>$login
        ));

        if(count($results) == 0) {
            throw new \Exception("Usuário inexistente ou senha inválida");
            
        }

        $data = $results[0];

        if(password_verify($password, $data["senha"]) === true) {

            $user = new User();
            $user->setId($data["id"]);
            $user->setNome($data["nome"]);
            $user->setLogin($data["login"]);
            $user->setSenha($data["senha"]);
            $user->setAtivo($data["ativo"]);

            $_SESSION[User::SESSION] = $user;

            return $user;

        } else {
            throw new \Exception("Usuário inexistente ou senha inválida");
        }
    }

    public static function verifyLogin($ativo = true) {

        if(
            !isset($_SESSION[User::SESSION])
            ||
            !$_SESSION[User::SESSION]
            ||
            !(int)$_SESSION[User::SESSION]->getId() > 0
            ||
            (bool)$_SESSION[User::SESSION]->getAtivo() !== $ativo
        ) {
            header("Location: /admin/login");
            exit;
        }

    }

    public static function logout() {

        $_SESSION[User::SESSION] = NULL;

    }

    public static function listarUsuarios() {
        $sql = new Sql();

        return $sql->select("SELECT * FROM usuarios");
    }

    public static function listarUsuariosById($id) {
        $sql = new Sql();

        return $sql->select("SELECT * FROM usuarios WHERE id = :id",array(
            ":id"=>$id
        ));
    }

    public function save() {

        $sql = new Sql();

       return  $sql->select("INSERT INTO usuarios(login,nome,senha,ativo) VALUES (:login,:nome,:senha,:ativo); ",array(
            ":login"=>$this->getLogin(),
            ":nome"=>$this->getNome(),
            ":senha"=>$this->getSenha(),
            ":ativo"=>$this->getAtivo()
        ));

    }

    public function update() {

        $sql = new Sql();

        $sql->query("UPDATE usuarios SET login = :login, nome = :nome, ativo = :ativo WHERE id = :id  ",array(
            ":id"=>$this->getId(),
            ":login"=>$this->getLogin(),
            ":nome"=>$this->getNome(),
            ":ativo"=>$this->getAtivo()
        ));

    }

    public function delete() {

        $sql = new Sql();

        $sql->query("DELETE FROM usuarios WHERE id = :id", array(
            ":id"=>$this->getId()
        ));

    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getAtivo() {
        return $this->ativo;
    }

    public function setId($value) {
        $this->id = $value;
    }

    public function setNome($value) {
        $this->nome = $value;
    }
    
    public function setLogin($value) {
        $this->login = $value;
    }

    public function setSenha($value) {
        $this->senha = $value;
    }

    public function setAtivo($value) {
        $this->ativo = $value;
    }


}

?>