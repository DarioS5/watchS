<form action="add_watch.php" method="post" enctype="multipart/form-data">
    <input type="text" name="meta_title" placeholder="введіть поле заголовка для просунення сайту в інет"><br>
    <input type="text" name="meta_description" placeholder="введіть опис сайту для просунення в інет"><br>
    <input type="text" name="meta_keybords" placeholder="введіть ключові слова для просунення в інет"><br>
    <input type="text" name="name" placeholder="введіть назву"><br>
    <input type="text" name="price" placeholder="введіть ціну"><br>
    <textarea name="full_discription" placeholder="введіть характеристику товару"></textarea><br>
    <input type="text" name="kolvo" placeholder="введіть кол-во"><br>
    <label>виберіть фото</label>
    <input type="file" name="photo"><br>
    виберіть категорію
    <select name="id_cat">
        {section loop=$cat name=i}
            <option value="{$cat[i].id}">
                {$cat[i].name}
            </option>
            {/section}
    </select><br>
    <input type="submit" name="send" value="додати">
</form>