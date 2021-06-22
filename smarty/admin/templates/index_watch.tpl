<p><a href="add_watch.php">Додати товар</a></p>
<form action="index_watch.php" method="post">
    <label>виберіть категорію товару</label>
    <select name="id_cat">
        <option value="0">переглядати всі</option>
        {section loop=$cat name=i}
            <option value="{$cat[i].id}">{$cat[i].name}</option>
    {/section}
    </select>
    <input type="submit" name="send" value="ок">
</form>
<table border="1">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>НАзва</th>
        <th colspan="2">Управління</th>
    </tr>
    {section loop=$watch name=i}
        <tr>
            <td>{$number++}</td>
            <td><img width="200px" src="../images/{$watch[i].photo}"></td>
            <td>{$watch[i].name}</td>
            <td><a href="edit_watch.php?id={$watch[i].id}">Редагувати</a></td>
            <td><a href="dell_watch.php?id={$watch[i].id}&name={$watch[i].name}">Видалити</a></td>
        </tr>
        {/section}
</table>