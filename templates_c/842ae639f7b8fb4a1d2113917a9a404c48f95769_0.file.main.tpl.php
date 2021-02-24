<?php
/* Smarty version 3.1.38, created on 2021-02-23 14:54:42
  from 'C:\programs\xampp\htdocs\mining\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60350922a7b6c1_08365582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '842ae639f7b8fb4a1d2113917a9a404c48f95769' => 
    array (
      0 => 'C:\\programs\\xampp\\htdocs\\mining\\templates\\main.tpl',
      1 => 1613973504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60350922a7b6c1_08365582 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <style>
        .add_form, .add_form td, .add_form th
        {
            border: black solid 1px;
            
        }
        .add_form td, .add_form th
        {
            padding-left: 5px;
            padding-right: 5px;
            {* margin-left: 5px;
            margin-right: 5px; *}
        }
    </style>


<form action="main.php" method="post">
    <input type="hidden" name="action" value="addRow">
    <table class="add_form">
        <caption>
            <b>Добавление заявки</b>
        </caption>
        <tr>
            <th>
                Наименование
            </th>
            <th>
                дата когда нужна
            </th>
            <th>
                куда доставить
            </th>
            <th>
                Примечание
            </th>
            <th>
                Кто заказывает
            </th>
            <th>
                кто обработает заявку
            </th>
        </tr>
        <tr>
            <td>
                <input type="text" name="name" required>
            </td>
            <td>
                <input type="date" name="date" required>
            </td>
            <td>
                <input type="radio" name="country" value="1" checked> Иркутск<br/>
                <input type="radio" name="country" value="2"> Ангарск<br/>
                <input type="radio" name="country" value="3"> Усолье<br/>
            </td>
            <td>
                <input type="text" name="notice">
            </td>
            <td>
                <select name="costumer">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['costumers']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        <option value=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
>
                            <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>

                        </option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </td>
            <td>
                <select name="employes">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employes']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    <option value=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
>
                        <?php echo $_smarty_tpl->tpl_vars['value']->value['fio'];?>

                    </option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
            </td>
        </tr>
        <tr>
            <td colspan="6" align="right">
                <input type="submit" value="добавить">
            </td>
        </tr>
    </table>
</form>

<table class="add_form">
    <caption>
        <b>Созданные заявки</b>
    </caption>
    <tr>
        <th>
            Наименование
        </th>
        <th>
            дата когда нужна
        </th>
        <th>
            куда доставить
        </th>
        <th>
            Примечание
        </th>
        <th>
            Кто заказывает
        </th>
        <th>
            кто обработает заявку
        </th>
        <th>
                Удаление
        </th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
        <tr>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['value']->value['date'];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['value']->value['country'];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['value']->value['notice'];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['value']->value['costumer'];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['value']->value['fio'];?>

            </td>
            <td>
                <form action="main.php" method="POST">
                    <input type="hidden" name="action" value="delRow">
                    <input type="hidden" name="delete_id" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
                    <input type="submit" value="Удалить">
                </form>
            </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<br/>
<br/>

<form action="exit.php">
    <input type="submit" value="Выход">
</form><?php }
}
