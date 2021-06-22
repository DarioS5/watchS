<form action="order.php" method="post">

<table border="1">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Назва</th>
        <th>Ціна</th>
        <th>К-сть</th>
        <th>Вартість</th>
        <th>X</th>
    </tr>
    {section loop=$order name=i}
        <tr>
            <th>{$num++}</th>
            <th><img src="images/{$order[i].photo}" width="100px"></th>
            <th>{$order[i].name}</th>
            <th>{$order[i].price}</th>
            <th><input type="number" name="amount" min="1" max="{$order[i].max}" value="{$order[i].amount}"></th>
            <th>{$order[i].cost}</th>
            <th><a href="basket.php?id={$order[i].id}&mode=dell&srcipt=order">X</a></th>
        </tr>
    {/section}
    <tr>
        <th colspan="5">всього до сплати</th>
        <th colspan="2">{$total_sum}</th>
    </tr>
    <tr>
        <th colspan="3"><a href="basket.php?mode=clear">очистить</a></th>
        <th colspan="4"><a href="order.php">замовити</a></th>
    </tr>
    <tr>
        <th colspan="7"><input type="submit" name="send" value="перерахувати"></th>
    </tr>
</table>
</form>