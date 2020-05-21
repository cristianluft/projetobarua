<?php
/* Smarty version 3.1.36, created on 2020-05-18 20:27:33
  from 'C:\xampp\htdocs\projetobarua\view\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ec2d395e81121_77583188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6731bd1aa004c8c1e932100aeb3fdb3c21b3f0b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetobarua\\view\\index.html',
      1 => 1589826453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec2d395e81121_77583188 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12">
          <!-- small box -->
          <div class="col-sm-3">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>R$ <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</h3>
              <p>Ticket médio</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $_smarty_tpl->tpl_vars['pratos']->value;?>
</h3>
              <p>Número de Pratos</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --><?php }
}
