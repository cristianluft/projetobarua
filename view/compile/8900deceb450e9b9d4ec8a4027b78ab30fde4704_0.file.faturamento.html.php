<?php
/* Smarty version 3.1.36, created on 2020-05-16 01:43:25
  from 'C:\xampp\htdocs\projetobarua\view\faturamento.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ebf291d524c67_88133633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8900deceb450e9b9d4ec8a4027b78ab30fde4704' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetobarua\\view\\faturamento.html',
      1 => 1589586204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebf291d524c67_88133633 (Smarty_Internal_Template $_smarty_tpl) {
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
            

            <div class="box-body no-padding">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 80px">#</th>
                    <th>Valor</th>
                    <th>Número de Pratos</th>
                    <th>Data</th>
                    <th style="width: 160px">&nbsp;</th>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['valor'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['pratos'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['data'];?>
</td>
                    <td>
                      <a href="/admin/faturamento/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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
<!-- /.content-wrapper --><?php }
}
