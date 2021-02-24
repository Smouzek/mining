<?php
/* Smarty version 3.1.38, created on 2021-02-23 14:54:42
  from 'C:\programs\xampp\htdocs\mining\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60350922c48582_34087999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '895371fe7e823b2e41c5bedbfa9f9bc688f33032' => 
    array (
      0 => 'C:\\programs\\xampp\\htdocs\\mining\\templates\\index.tpl',
      1 => 1613967133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60350922c48582_34087999 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="login.php" method="POST">
    <input type="text" name="login" placeholder="Введите логин"><br/>
    <input type="password" name="password" placeholder="Введите пароль"><br/>
    <input type="submit" value="Войти">
</form><?php }
}
