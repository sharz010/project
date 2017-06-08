<?php
/* Smarty version 3.1.29, created on 2017-03-22 13:59:58
  from "C:\wamp64\www\webshop2017\Webshop_2017_framework\templates\navigator_top.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58d2835e518351_45372528',
  'file_dependency' => 
  array (
    '98c8781efbac1484b9cf7f8dd66224ecca2671a4' => 
    array (
      0 => 'C:\\wamp64\\www\\webshop2017\\Webshop_2017_framework\\templates\\navigator_top.tpl',
      1 => 1490176427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d2835e518351_45372528 ($_smarty_tpl) {
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
        <li><a href="./includes/Securelogin.php">derp</a></li>
        <li><a href="#PRODUCTS">PRODUCTS</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
     </div>
  </div>
</nav>
<?php }
}
