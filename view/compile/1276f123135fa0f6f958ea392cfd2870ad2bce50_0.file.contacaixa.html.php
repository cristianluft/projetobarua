<?php
/* Smarty version 3.1.36, created on 2020-05-20 01:23:24
  from 'C:\xampp\htdocs\projetobarua\view\contacaixa.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ec46a6cf03f72_34042771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1276f123135fa0f6f958ea392cfd2870ad2bce50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetobarua\\view\\contacaixa.html',
      1 => 1589930454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec46a6cf03f72_34042771 (Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Contas Caixa
  </h1>
</section>

<!-- Main content -->
<section class="content">
  
  <div class="row">
    
  	<div class="col-md-12">
      
  		<div class="box box-primary">
          <!-- /.input group -->
          <div class="box-header">
            <a href="/admin/contacaixa/create" class="btn btn-success">Cadastrar Conta Caixa</a>
          </div>

            <div class="box-body no-padding">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 80px">#</th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th style="width: 200px">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['nome'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['descricao'];?>
</td>
                    <td>
                      <a href="/admin/contacaixa/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                    </td>
                  </tr>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
  	</div>
  </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php echo '<script'; ?>
 src="/res/admin/bootstrap/js/moment.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/res/admin/bootstrap/js/daterangepicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/res/admin/bootstrap/js/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
  $(function () {

})
<?php echo '</script'; ?>
>

<?php }
}
