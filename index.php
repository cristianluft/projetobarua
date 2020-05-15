<?php 

require_once("vendor/autoload.php");
require_once("class/Page.php");
require_once("class/User.php");
require_once("class/Faturamento.php");

session_start();

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() { // Puxa página inicial 
    
    $page = new Page();
    $page->setTpl('users.html');

});

$app->get('/admin', function() {  // Puxa Página inicial após login
    User::verifyLogin();
    $user = new User();
    $page = new Page();
    $page->setTpl('index.html');

});

$app->get('/admin/login', function() { // Puxa Página login
    $page = new Page([
        "header"=>false,
        "footer"=>false
    ]);
    $page->setTpl('login.html');

});

$app->get('/admin/usuarios', function() { // Puxa página usuários
    User::verifyLogin();
    $page = new Page();
    $users = User::listarUsuarios();
    $page->assign('data',$users);
    $page->setTpl('users.html');

});

$app->get('/admin/usuarios/create', function() { // Puxa página criar novo usuario
    User::verifyLogin();
    $page = new Page();
    $page->setTpl('users-create.html');

});

$app->get('/admin/faturamento/update', function() { // Puxa página criar novo usuario
    User::verifyLogin();
    $page = new Page();
    $page->setTpl('faturamento-update.html');

});

$app->get('/admin/usuarios/:id', function($id) { // Puxa página editar usuário
    User::verifyLogin();
    $page = new Page();
    $user = User::listarUsuariosById($id);
    $page->assign('data',$user);
    $page->setTpl('users-update.html');

});

$app->get('/admin/usuarios/:id/delete', function($id) { // Salva dados novo usuario
    
    User::verifyLogin();

    $user = new User();
    
    $user->setId($id);

    $user->delete();

	header("Location: /admin/usuarios");

    exit;
});

$app->get('/admin/faturamento/create', function() { // Puxa página para criar faturamento
    
    User::verifyLogin();

    $page = new Page();
    
    $page->setTpl('faturamento-create.html');

    exit;
});

$app->get('/admin/faturamento', function() { // Puxa página para criar faturamento
    
    User::verifyLogin();

    $page = new Page();
    $fat = Faturamento::listarFaturamento();
    $page->assign('data',$fat);
    $page->setTpl('faturamento.html');

    exit;
});

$app->get('/admin/faturamento/:id', function($id) { // Puxa página editar usuário
    User::verifyLogin();
    $page = new Page();
    $fat = Faturamento::listarFaturamentoById($id);
    $page->assign('data',$fat);
    $page->setTpl('faturamento-update.html');

});

$app->get('/admin/logout', function() { // Sai da aplicação
    
	User::logout();

	header("Location: /admin/login");
	exit;

});

/*************** POST ****************************** */

$app->post('/admin/login', function() { // Analisa login e redireciona
    
    User::login($_POST["login"],$_POST["senha"]);

	header("Location: /admin");

	exit;

});

$app->post('/admin/faturamento/:id', function($id) { // Altera faturamento
    
    User::verifyLogin();

    $fat = new Faturamento();
    
    $fat->setId($id);
    $fat->setValor($_POST["valor"]);
    $fat->setPratos($_POST["pratos"]);
    $fat->setData($_POST["data"]);

	$fat->update();

	header("Location: /admin/faturamento");

	exit;

});

$app->post('/admin/faturamento/create', function() { // Puxa página para criar faturamento
    
    User::verifyLogin();

    $fat = new Faturamento();
    
    $fat->setValor($_POST["valor"]);
    $fat->setPratos($_POST["pratos"]);
    $fat->setData($_POST["data"]);

    $fat->save();

	header("Location: /admin");

    exit;
});


$app->post('/admin/usuarios/create', function() { // Salva dados novo usuario
    
    User::verifyLogin();

    $user = new User();
    
    $user->setNome($_POST["nome"]);
    $user->setLogin($_POST["login"]);
    $user->setSenha(password_hash($_POST["senha"],PASSWORD_DEFAULT));
    if(isset($_POST["ativo"])){
        $user->setAtivo(1);
    }else {
        $user->setAtivo(0);
    }

    $user->save();

	header("Location: /admin/usuarios");

    exit;
});



$app->post('/admin/usuarios/:id', function($id) { // Altera dados usuario
    
    User::verifyLogin();

	$user = new User();

    $user->setId($id);
    $user->setNome($_POST["nome"]);
    $user->setLogin($_POST["login"]);
    if(isset($_POST["ativo"])){
        $user->setAtivo(1);
    }else {
        $user->setAtivo(0);
    }

	$user->update();

	header("Location: /admin/usuarios");

	exit;

});





$app->run();

 ?>