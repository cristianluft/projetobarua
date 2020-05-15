<?php
/* Smarty version 3.1.36, created on 2020-05-16 00:57:46
  from 'C:\xampp\htdocs\projetobarua\view\faturamento-create.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ebf1e6a33aca7_07434153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bbf396a2ecd199648da8598339db92181a935a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetobarua\\view\\faturamento-create.html',
      1 => 1589583465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebf1e6a33aca7_07434153 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Faturamento
  </h1>
  <!--<ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin/users">Usuários</a></li>
    <li class="active"><a href="/admin/users/create">Cadastrar</a></li>
  </ol>-->
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Adicionar Faturamento</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/faturamento/create" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="lblvalor">Valor</label>
              <input type="text" class="form-control" id="valor" name="valor" placeholder="Digite o valor">
            </div>
            <div class="form-group">
              <label for="lblpratos">Número de Pratos</label>
              <input type="text" class="form-control" id="pratos" name="pratos" placeholder="Digite o número de pratos">
            </div>
            <div class="form-group">
              <label for="lbldata">Data</label>
              <input type="date" class="form-control" id="data" name="data" placeholder="Digite a data">
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success">Adicionar</button>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper --><?php }
}
