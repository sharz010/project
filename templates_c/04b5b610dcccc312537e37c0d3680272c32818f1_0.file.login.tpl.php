<?php
/* Smarty version 3.1.29, created on 2017-03-21 10:10:16
  from "C:\wamp64\www\webshop2017\Webshop_2017_framework\templates\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58d0fc084bc260_39000527',
  'file_dependency' => 
  array (
    '04b5b610dcccc312537e37c0d3680272c32818f1' => 
    array (
      0 => 'C:\\wamp64\\www\\webshop2017\\Webshop_2017_framework\\templates\\login.tpl',
      1 => 1490091011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/header.tpl' => 1,
    'file:../templates/footer.tpl' => 1,
  ),
),false)) {
function content_58d0fc084bc260_39000527 ($_smarty_tpl) {
?>
<html>
<head>
<title>Webshop login </title>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"werknemers",'username'=>'fake pepe'), 0, false);
?>

</head>
    <body>
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">

        <form method="post" action="index.php?action=login">
            <fieldset class="panel-heading">
              Username:<br>
            <input type="text" class="form-control" name="username" required="yes" placeholder="username"><br>
              Password:<br>
            <input type="password" class="form-control" name="password" required="yes" placeholder="wachtwoord"><br>
            <input type="submit" class="btn btn-danger" name="submit" value="Register">
            </fieldset>
        </form>

        <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tekst']->value)===null||$tmp==='' ? '' : $tmp);?>
<p>
        </div>
      </div>
    </div>
  </div>


    </body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html>
<?php }
}
