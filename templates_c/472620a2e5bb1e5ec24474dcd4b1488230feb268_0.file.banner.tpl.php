<?php
/* Smarty version 3.1.29, created on 2017-03-22 08:45:52
  from "C:\wamp64\www\webshop2017\Webshop_2017_framework\templates\banner.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58d239c05af543_09160100',
  'file_dependency' => 
  array (
    '472620a2e5bb1e5ec24474dcd4b1488230feb268' => 
    array (
      0 => 'C:\\wamp64\\www\\webshop2017\\Webshop_2017_framework\\templates\\banner.tpl',
      1 => 1490172345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/templates/login.tpl' => 1,
  ),
),false)) {
function content_58d239c05af543_09160100 ($_smarty_tpl) {
?>
<div class="jumbotron">
  <h1>MoMo</h1>
  <p>We specialize in Dank Memes</p>
  <form class="form-inline">
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Subscribe to get free stuff xd</button>
  </form>
    <?php if ($_smarty_tpl->tpl_vars['showLogin']->value) {?>
      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:/templates/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }?>
</div>
<!-- class="form-inline" -->
<?php }
}
