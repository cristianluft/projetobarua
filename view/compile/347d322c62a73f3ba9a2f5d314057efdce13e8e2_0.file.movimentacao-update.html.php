<?php
/* Smarty version 3.1.36, created on 2020-05-22 05:17:33
  from 'C:\xampp\htdocs\projetobarua\view\movimentacao-update.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ec7444d0123e9_31686064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '347d322c62a73f3ba9a2f5d314057efdce13e8e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetobarua\\view\\movimentacao-update.html',
      1 => 1590117427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec7444d0123e9_31686064 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Movimentação
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Movimentação</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <form role="form" action="/admin/movimentacao/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" method="post">
          <div class="box-body">
            <div class="form-group">
              <label>Observação</label>
              <textarea class="form-control" id="textarea"  name="obs" rows="3" placeholder="Digite aqui a observação"><?php echo $_smarty_tpl->tpl_vars['item']->value['obs'];?>
</textarea>
            </div>
            <div class="form-group">
              <label for="lblvalor">Valor</label>
              <input type="text" class="form-control" id="valor" name="valor" placeholder="Digite o valor" value="<?php echo number_format($_smarty_tpl->tpl_vars['item']->value['valor'],2,",",".");?>
" required>
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
                <input name="data" type="text" id="datemask" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['dataformatada'];?>
" class="form-control" data-inputmask="&#39;alias&#39;: &#39;dd/mm/yyyy&#39;" data-mask="" required>
              </div>
              <!-- /.input group -->
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
><?php }
}
