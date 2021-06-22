<p><a href="add_categories.php">Додати категорії</a></p>
<table border="1">
    <tr><th>№</th>
        <th>Назва категорії</th>
        <th colspan=2>Управління</th>
        </tr>
    {section loop=$cat name=i}
        <tr>
            <td>{$number++}</td>
            <td>{$cat[i].name}</td>
            <td><a href="edit_cat.php?id={$cat[i].id}">редагувати</a></td>
            <td><a href="dell_cat.php?id={$cat[i].id}&name={$cat[i].name}">видалити</a></td>
        </tr>
        {/section}
</table>
