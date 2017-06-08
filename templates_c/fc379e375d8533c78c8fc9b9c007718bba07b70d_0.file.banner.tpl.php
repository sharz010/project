<?php
/* Smarty version 3.1.29, created on 2017-05-30 10:31:07
  from "C:\xampp\htdocs\sitee\templates\banner.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_592d2dcbb67cc0_46066810',
  'file_dependency' => 
  array (
    'fc379e375d8533c78c8fc9b9c007718bba07b70d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sitee\\templates\\banner.tpl',
      1 => 1496133005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/templates/login.tpl' => 1,
  ),
),false)) {
function content_592d2dcbb67cc0_46066810 ($_smarty_tpl) {
?>
<div class="jumbotron">
  <h1>weboot</h1>
  <p>We specialize in clothes</p>
  <form class="form-inline">
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Subscribe to get free clothes!</button>
  </form>
    <?php if ($_smarty_tpl->tpl_vars['showLogin']->value) {?>
      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:/templates/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }?>
</div>
<!-- class="form-inline" -->
<?php }
}
