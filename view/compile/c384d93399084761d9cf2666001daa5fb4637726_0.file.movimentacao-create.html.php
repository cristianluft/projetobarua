<?php
/* Smarty version 3.1.36, created on 2020-05-21 02:20:59
  from 'C:\xampp\htdocs\projetobarua\view\movimentacao-create.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ec5c96bae7075_03437400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c384d93399084761d9cf2666001daa5fb4637726' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetobarua\\view\\movimentacao-create.html',
      1 => 1590020432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec5c96bae7075_03437400 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Movimentação
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
          <h3 class="box-title">Adicionar Movimentação</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/movimentacao/create" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="lblvalor">Valor</label>
              <input type="text" class="form-control" id="valor" name="valor" placeholder="Digite o valor" required>
            </div>
            <div class="form-group">
              <label>Conta Caixa</label>
              <select class="form-control" name="idcc" required>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <option><?php echo $_smarty_tpl->tpl_vars['item']->value['nome'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            </div>
            <div class="form-group">
                <label>Data:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="data" type="text" id="datemask" class="form-control" data-inputmask="&#39;alias&#39;: &#39;dd/mm/yyyy&#39;" data-mask="" required>
                </div>
                <!-- /.input group -->
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
<!-- /.content-wrapper -->

<?php echo '<script'; ?>
 src="/res/admin/bootstrap/js/jquery.inputmask.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/res/admin/bootstrap/js/jquery.inputmask.date.extensions.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/res/admin/bootstrap/js/jquery.inputmask.extensions.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/res/admin/bootstrap/js/jquery.maskMoney.js" type="text/javascript"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
  $(function () {
    //jQuery.noConflict();
    //noConflict();
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });
   // 
    $('#valor').maskMoney({thousands:'.', decimal:',', symbolStay: true});
   // 
    jQuery.noConflict();

  })

  
<?php echo '</script'; ?>
>
<?php }
}
