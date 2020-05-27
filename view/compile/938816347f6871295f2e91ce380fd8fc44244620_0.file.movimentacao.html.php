<?php
/* Smarty version 3.1.36, created on 2020-05-22 04:54:31
  from 'C:\xampp\htdocs\projetobarua\view\movimentacao.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ec73ee7b79bb9_77850172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '938816347f6871295f2e91ce380fd8fc44244620' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetobarua\\view\\movimentacao.html',
      1 => 1590115805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec73ee7b79bb9_77850172 (Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Content Wrapper. Contains page content -->
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
        <div class="box-body">
          <div class="margin">
            <form action="/admin/movimentacao" method="post">
              <div class="input-group-addon">
                <label>Período: </label>
                <i class="fa fa-calendar"></i>
                <input type="text" class="form-control pull-right" id="reservation" name="date">
              </div>
              <div class="input-group-addon">
                <label>Tipo: </label>
                <i class="fa fa-info"></i>
                <select class="form-control" name="cat">
                  <option>Todos</option>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data2']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                  <option><?php echo $_smarty_tpl->tpl_vars['item']->value['descricao'];?>
</option>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
              </div>
              <div class="input-group-addon">
                <label>Descrição: </label>
                <i class="fa fa-info"></i>
                <select class="form-control" name="desc">
                  <option>Todos</option>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data3']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                  <option><?php echo $_smarty_tpl->tpl_vars['item']->value['nome'];?>
</option>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
              </div>
              <div class="col-md-12">
              <div class="mx-3">
                <button class="btn btn-block btn-warning">Buscar</button>
              </div>
            </form>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div> 
  		<div class="box box-primary">

          <!-- /.input group -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 80px">#</th>
                    <th>Observação</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Tipo</th>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['obs'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['nome'];?>
</td>
                    <td><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['valor'],2,",",".");?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['descricao'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['dataformatada'];?>
</td>
                    <td>
                      <a href="/admin/movimentacao/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                    </td>
                  </tr>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
                <tfoot>
                  <tr>
                    <th id="total" >Total :</th>
                    <td><?php echo number_format($_smarty_tpl->tpl_vars['total']->value,2,",",".");?>
</td>
                  </tr>
                 </tfoot>
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
    $('#reservation').daterangepicker({
      locale: {
            format: 'DD/MM/YYYY'
        }
    });
})
<?php echo '</script'; ?>
>

<?php }
}
