<?php

class Page {

    private $defaults = [
        "header"=>true,
        "footer"=>true
    ];

    private $options = [];

    public function __construct($opts = array()) {

        $this->options = array_merge($this->defaults,$opts);

        $this->tpl = new Smarty();
        $this->tpl->setTemplateDir('view/');
        $this->tpl->setCompileDir('view/compile');
        $this->tpl->setCacheDir('view-cache');

        if($this->options["header"] === true) {
        $this->tpl->assign('nome',$_SESSION[User::SESSION]->getNome());
        $this->tpl->assign('ativo',$_SESSION[User::SESSION]->getAtivo());
        $this->tpl->display("header.html"); 
        }
        
    }

    public function setTpl($name) {
        $this->tpl->display($name);
    }

    public function assign($param,$var) {
        $this->tpl->assign($param,$var);
    }

    public function assign_by_ref($param,$var) {
        $this->tpl->assign_by_ref($param,$var);
    }

    public function register_object($param,$var) {
        $this->tpl->register_object($param,$var);
    }

    public function __destruct() { 

        if($this->options["footer"] === true) $this->tpl->display("footer.html");

    }

    

}



?>