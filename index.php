<?php 

require_once("vendor/autoload.php");
require_once("class/Page.php");
require_once("class/User.php");
require_once("class/Movimentacao.php");
require_once("class/Conta_Caixa.php");
require_once("class/Categoria.php");

session_start();

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() { // Redireciona para o admin
    
    header("Location: /admin");

    exit;

});

$app->get('/admin', function() {  // Puxa Página inicial após login
    User::verifyLogin();
    $page = new Page();
    //$fat = Faturamento::ticketMedio(30);
    //$prat = Faturamento::numPratosMes();
    $page->assign('data',0);
    $page->assign('pratos',0);
    //$page->assign('data',$fat[0]["tktmedio"]);
    //$page->assign('pratos',$prat[0]["pratos"]);
    $page->setTpl('index.html');

});

$app->get('/admin/contacaixa/create', function() {  // Puxa Página inicial após login
    
    User::verifyLogin();
    $page = new Page();
    $cat = Categoria::listar();
    $page->assign('data',$cat);
    $page->setTpl('contacaixa-create.html');

});

$app->get('/admin/contacaixa', function() {  // Puxa Página inicial após login
    
    User::verifyLogin();
    $page = new Page();
    $users = Conta_Caixa::listar();
    $page->assign('data',$users);
    $page->setTpl('contacaixa.html');

});

$app->get('/admin/cardapios', function() {  // Puxa Página inicial após login
    
    User::verifyLogin();
    $page = new Page();
    $page->assign('data',Movimentacao::testegrafico());
    $page->setTpl('chartjs.html');

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

$app->get('/admin/movimentacao/update', function() { // Puxa página criar novo usuario
    User::verifyLogin();
    $page = new Page();
    $page->setTpl('movimentacao-update.html');

});

$app->get('/admin/movimentacao/relatorio', function() { // Puxa página faturamento relatorio
    User::verifyLogin();
    $page = new Page();
    $page->setTpl('chartjs.html');

});

$app->get('/admin/usuarios/:id', function($id) { // Puxa página editar usuário
    User::verifyLogin();
    $page = new Page();
    $user = User::listarUsuariosById($id);
    $page->assign('data',$user);
    $page->setTpl('users-update.html');

});

$app->get('/admin/contacaixa/:id', function($id) { // Puxa página editar usuário
    User::verifyLogin();
    $page = new Page();
    $cc = Conta_Caixa::listarContaCaixaById($id);
    $page->assign('data',$cc);
    $page->assign('data2',Categoria::listar());
    $page->setTpl('contacaixa-update.html');

});

$app->get('/admin/usuarios/:id/delete', function($id) { // Salva dados novo usuario
    
    User::verifyLogin();

    $user = new User();
    
    $user->setId($id);

    $user->delete();

	header("Location: /admin/usuarios");

    exit;
});

$app->get('/admin/movimentacao/create', function() { // Puxa página para criar faturamento
    
    User::verifyLogin();

    $page = new Page();
    $tipo = Conta_Caixa::listar();
    $page->assign('data',$tipo);
    $page->setTpl('movimentacao-create.html');

    exit;
});

$app->get('/admin/movimentacao', function() { // Puxa página faturamento
    
    User::verifyLogin();
    $page = new Page();
    $fat = Movimentacao::listarMovimentacaoByData(date('d/m/Y'),date('d/m/Y'),"Todos","Todos");
    $total = Movimentacao::totalFaturamentoByData(date('d/m/Y'),date('d/m/Y'),"Todos","Todos");
    $tipo = Categoria::listar();
    $desc = Conta_Caixa::listar();
    $page->assign('data3',$desc);
    $page->assign('data2',$tipo);
    if(isset($total)) {
        $page->assign('total',$total[0]['total']);
    }
    if(isset($fat)) {
        $page->assign('data',$fat);
    }
    $page->setTpl('movimentacao.html');

    exit;
});



$app->get('/admin/movimentacao/:id', function($id) { // Puxa página editar movimentacao
    User::verifyLogin();
    $page = new Page();
    $fat = Movimentacao::listarMovimentacaoById($id);
    $page->assign('data',$fat);
    $page->setTpl('movimentacao-update.html');

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

$app->post('/admin/contacaixa/create', function() {  // Puxa página para criar conta caixa
    
    User::verifyLogin();
    $cc = new Conta_Caixa();
    $cc->setNome($_POST["nome"]);
    $cc->setIdCategoria(Categoria::getIdByDescricao($_POST["idcategoria"])['id']);
    $cc->save();
    header("Location: /admin/contacaixa");
    exit;

});

$app->post('/admin/movimentacao/create', function() { // Puxa página para criar movimentacao
    
    User::verifyLogin();
    
    $fat = new Movimentacao();
    $valor = str_replace(",",".",str_replace(".","",$_POST["valor"]));
    if(Categoria::getDescricaoById(Conta_Caixa::getDataByNome($_POST["idcc"])[0]['idcategoria'])['descricao'] == "Despesa"){
        $valor = ($valor*-1);
    }
    $fat->setObs($_POST["obs"]);
    $fat->setValor($valor);
    $fat->setIdcc(Conta_Caixa::getDataByNome($_POST["idcc"])[0]['id']);
    $fat->setData(Movimentacao::getDateForDatabase(str_replace("/","-",$_POST["data"])));
    $fat->save();
	header("Location: /admin");

    exit;
});

$app->post('/admin/movimentacao', function() { // Puxa infos da movimentação
    $page = new Page();
    $periodo = $_POST["date"];
    $periodo = explode("-",$periodo);
    $fat = Movimentacao::listarMovimentacaoByDataFiltered($periodo[0],$periodo[1],$_POST["cat"],$_POST["desc"]);
    $total = Movimentacao::totalFaturamentoByData($periodo[0],$periodo[1],$_POST["cat"],$_POST["desc"]);
    $page->assign('data2',Categoria::listar());
    $page->assign('data3',Conta_Caixa::listar());
    $page->assign('total',$total[0]['total']);
    $page->assign('data',$fat);
    $page->setTpl('movimentacao.html');

});

$app->post('/admin/movimentacao/:id', function($id) { // Altera movimentacao
    
    User::verifyLogin();

    $fat = new Movimentacao();
    
    
    $fat->setId($id);
    $fat->setObs($_POST["obs"]);
    $fat->setValor(str_replace(",",".",str_replace(".","",$_POST["valor"])));
    $fat->setIdcc(Conta_Caixa::getDataByNome($_POST["idcc"])[0]['id']);
    $fat->setData(Movimentacao::getDateForDatabase(str_replace("/","-",$_POST["data"])));

	$fat->update();

	header("Location: /admin/movimentacao");

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

$app->post('/admin/contacaixa/:id', function($id) { // Altera dados usuario
    
    User::verifyLogin();

	$cc = new Conta_Caixa();

    $cc->setId($id);
    $cc->setNome($_POST["nome"]);
    $cc->setIdCategoria(Categoria::getIdByDescricao($_POST["idcategoria"])['id']);
	$cc->update();

	header("Location: /admin/contacaixa");

	exit;

});





$app->run();

 ?>