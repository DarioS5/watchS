{if isset($status) AND $status==1}
<table border="1">
    <tr>
        <td>№</td>
        <td>Фото</td>
        <td>Назва</td>
        <td>Ціна</td>
    </tr>
    {section loop=$search name=i}
        <tr>
            <th>{$num++}</th>
            <th><img src="images/{$search[i].photo}" width="100px"></th>
            <th>{$search[i].name}</th>
            <th>{$search[i].price}</th>
        </tr>
        {/section}
</table>
{else}
<div>Немає даних</div>
{/if}