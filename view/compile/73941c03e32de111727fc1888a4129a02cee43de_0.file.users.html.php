<?php
/* Smarty version 3.1.36, created on 2020-05-15 23:29:51
  from 'C:\xampp\htdocs\projetobarua\view\users.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ebf09cf9e5c97_77162150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73941c03e32de111727fc1888a4129a02cee43de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetobarua\\view\\users.html',
      1 => 1589578187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebf09cf9e5c97_77162150 (Smarty_Internal_Template $_smarty_tpl) {
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
            
            <div class="box-header">
              <a href="/admin/usuarios/create" class="btn btn-success">Cadastrar Usuário</a>
            </div>

            <div class="box-body no-padding">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nome</th>
                    <th>Login</th>
                    <th>Senha</th>
                    <th style="width: 60px">Ativo</th>
                    <th style="width: 140px">&nbsp;</th>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['login'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['senha'];?>
</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['item']->value['ativo'] == 1) {?>Sim<?php } else { ?>Não<?php }?></td>
                    <td>
                      <a href="/admin/usuarios/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                      <a href="/admin/usuarios/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
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
