{literal}
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
{/literal}

{* Добавление заявки *}
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
                    {foreach from=$costumers item='value'}
                        <option value={$value['id']}>
                            {$value['name']}
                        </option>
                    {/foreach}
                </select>
            </td>
            <td>
                <select name="employes">
                {foreach from=$employes item='value'}
                    <option value={$value['id']}>
                        {$value['fio']}
                    </option>
                {/foreach}
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

{* Блок с заявками *}
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
    {foreach from=$orders item='value'}
        <tr>
            <td>
                {$value['name']}
            </td>
            <td>
                {$value['date']}
            </td>
            <td>
                {$value['country']}
            </td>
            <td>
                {$value['notice']}
            </td>
            <td>
                {$value['costumer']}
            </td>
            <td>
                {$value['fio']}
            </td>
            <td>
                <form action="main.php" method="POST">
                    <input type="hidden" name="action" value="delRow">
                    <input type="hidden" name="delete_id" value="{$value['id']}">
                    <input type="submit" value="Удалить">
                </form>
            </td>
        </tr>
    {/foreach}
</table>

<br/>
<br/>

<form action="exit.php">
    <input type="submit" value="Выход">
</form>