<?php
/* Smarty version 3.1.36, created on 2020-05-16 01:34:23
  from 'C:\xampp\htdocs\projetobarua\view\faturamento-update.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ebf26ff369621_91870441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7cd8dcab1c0fe438320e9b2e97363723e748ff0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetobarua\\view\\faturamento-update.html',
      1 => 1589585556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebf26ff369621_91870441 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Faturamento
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Faturamento</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <form role="form" action="/admin/faturamento/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="lblvalor">Valor</label>
              <input type="text" class="form-control" id="valor" name="valor" placeholder="Digite o valor" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['valor'];?>
">
            </div>
            <div class="form-group">
              <label for="lblpratos">Pratos</label>
              <input type="text" class="form-control" id="pratos" name="pratos" placeholder="Digite o número de pratos"  value="<?php echo $_smarty_tpl->tpl_vars['item']->value['pratos'];?>
">
            </div>
            <div class="form-group">
              <label for="lbldata">Data</label>
              <input type="date" class="form-control" id="data" name="data" placeholder="Digite a data"  value="<?php echo $_smarty_tpl->tpl_vars['item']->value['data'];?>
">
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
