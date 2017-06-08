<?php
/* Smarty version 3.1.29, created on 2017-05-30 10:31:07
  from "C:\xampp\htdocs\sitee\templates\navigator_top.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_592d2dcbbda988_12268422',
  'file_dependency' => 
  array (
    'a2a184bc2580bcb0a7c1a4e9ca0db2678b0c2aef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sitee\\templates\\navigator_top.tpl',
      1 => 1496133064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592d2dcbbda988_12268422 ($_smarty_tpl) {
?>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
     <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Logo</a>

     </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
         <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#prijzen">PRIJZEN</a></li>
        <li><a href="./includes/bestelOverzicht.php">BESTELLINGEN</a></li>
        <li><a href="./includes/reportPdf.php">LIJST WERKNEMERS</a></li>
        <li><a href="./includes/Securelogin.php">SECURE</a></li>
        <li><a href="#PRODUCTS">PRODUCTS</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
     </div>
  </div>
</nav>
<?php }
}
