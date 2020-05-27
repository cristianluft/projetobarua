<?php
/* Smarty version 3.1.36, created on 2020-05-21 02:41:49
  from 'C:\xampp\htdocs\projetobarua\view\contacaixa-create.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ec5ce4db35b16_11401300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '648bd8a786746375df64935c02f7ade2f3e76bf5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetobarua\\view\\contacaixa-create.html',
      1 => 1590021707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec5ce4db35b16_11401300 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Content Wrapper. Contains page content -->
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
  		<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Nova Conta Caixa</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/contacaixa/create" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="desperson">Nome</label>
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" required>
            </div>
            
            <div class="form-group">
              <label>Categoria</label>
              
              <select class="form-control" name="idcategoria" required>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <option><?php echo $_smarty_tpl->tpl_vars['item']->value['descricao'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success">Cadastrar</button>
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
