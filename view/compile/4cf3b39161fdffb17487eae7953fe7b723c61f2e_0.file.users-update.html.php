<?php
/* Smarty version 3.1.36, created on 2020-05-15 04:28:57
  from 'C:\xampp\htdocs\projetobarua\view\users-update.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ebdfe6993f510_23690663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cf3b39161fdffb17487eae7953fe7b723c61f2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetobarua\\view\\users-update.html',
      1 => 1589509731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebdfe6993f510_23690663 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Usuários
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Usuário</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <form role="form" action="/admin/usuarios/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="desperson">Nome</label>
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['nome'];?>
">
            </div>
            <div class="form-group">
              <label for="deslogin">Login</label>
              <input type="text" class="form-control" id="login" name="login" placeholder="Digite o login"  value="<?php echo $_smarty_tpl->tpl_vars['item']->value['login'];?>
">
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" id="ativo" name="ativo" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ativo'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['ativo'] == '1') {?>checked<?php }?>/> Acesso de Administrador
              </label>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper --><?php }
}
