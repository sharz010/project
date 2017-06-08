<?php
/* Smarty version 3.1.29, created on 2017-05-30 10:27:57
  from "C:\xampp\htdocs\sitee\templates\footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_592d2d0dd14af6_21917803',
  'file_dependency' => 
  array (
    '94f548cc1085f8b88dd527c159d3f2038679a46d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sitee\\templates\\footer.tpl',
      1 => 1459804246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592d2d0dd14af6_21917803 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\sitee\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
    User Information:

Name: Zadkine <br>
Addr: ROC Hogeschool <br>
Date: <?php echo smarty_modifier_date_format(time(),"%b %e, %Y");?>
 <br>
  <p>Roc Zadkine <a href="https://www.deheldenvantechniek.nl/" title="Helden van techniek">https://www.deheldenvantechniek.nl/</a></p> 
</footer>

<?php }
}
