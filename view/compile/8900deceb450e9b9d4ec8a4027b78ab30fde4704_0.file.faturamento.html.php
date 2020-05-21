<?php
/* Smarty version 3.1.36, created on 2020-05-18 19:41:33
  from 'C:\xampp\htdocs\projetobarua\view\faturamento.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ec2c8cd12d236_30558582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8900deceb450e9b9d4ec8a4027b78ab30fde4704' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetobarua\\view\\faturamento.html',
      1 => 1589823691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec2c8cd12d236_30558582 (Smarty_Internal_Template $_smarty_tpl) {
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
        <form action="/admin/faturamento" method="post">
        <div class="form-group">
          <div class="row">
          <div class="col-xs-12">
          <label>Período:</label>
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control pull-right" id="reservation" name="date">
          </div>
        </div>
        <div class="col-xs-12">
            <button class="btn btn-block btn-warning" style="width: 100px;">Buscar</button>
          </div>
        </div>
          </form>
          <!-- /.input group -->
        

            <div class="box-body no-padding">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 80px">#</th>
                    <th>Valor (R$)</th>
                    <th>Número de Pratos (un.)</th>
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
                    <td><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['valor'],2,",",".");?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['pratos'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['dataformatada'];?>
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
