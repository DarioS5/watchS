<h3>список сторінок</h3>
<table border="1">
    <tr><th>№</th>
        <th>назва</th>
        <th>редагувати</th>
    </tr>
    {section loop=$page name=i}
        <tr>
            <td>{$namber++}</td>
            <td>{$page[i].title}</td>
            <td><a href="edit_page.php?id={$page[i].id}">редагувати</a></td>
        </tr>
    {/section}
</table>