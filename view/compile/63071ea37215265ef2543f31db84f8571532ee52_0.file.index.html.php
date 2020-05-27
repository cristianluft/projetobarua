<?php
/* Smarty version 3.1.36, created on 2020-05-27 13:55:38
  from '/var/www/html/projetobarua/view/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ece9b8a0d5773_03517471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63071ea37215265ef2543f31db84f8571532ee52' => 
    array (
      0 => '/var/www/html/projetobarua/view/index.html',
      1 => 1590598362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ece9b8a0d5773_03517471 (Smarty_Internal_Template $_smarty_tpl) {
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
