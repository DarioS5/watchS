<form action="edit_watch.php" method="post" enctype="multipart/form-data">
    <label>відредагуйте поле заголовка для просунення сайту</label><br>
    <textarea name="meta_title">{$meta_title}</textarea><br>
    <label>відредагуйте опис сайту</label><br>
    <textarea name="meta_description">{$meta_description}</textarea><br>
    <label>відредагуйте ключові слова</label><br>
    <textarea name="meta_keybords">{$meta_keybords}</textarea><br>
    <label>відредагуйте назву</label><br>
    <input type="text" name="name" value="{$name}"><br>
    <label>відредагуйте ціну</label><br>
    <input type="text" name="price" value="{$price}"><br>
    <label>відредагуйте характеристику</label><br>
    <textarea name="full_discription">{$full_discription}</textarea><br>
    <label>відредагуйте к-сть</label><br>
    <input type="text" name="kolvo" value="{$kolvo}"><br>
    <img src="../images/{$photo}" width="200px"><br>
    <input type="hidden" name="oldphoto" value="{$photo}"><br>
    <label>виберіть фото</label><br>
    <input type="file" name="newphoto"><br>
    <label>змініть категорію</label><br>
    <select name="id_cat"><br>
        {section loop=$cat name=i}
            <option {if $cat[i].id==$id_cat} selected{/if}  value="{$cat[i].id}">{$cat[i].name}</option><!-- параметер селектед назначається в категорії яка буде показуватись першою-->
        {/section}

    </select>
    <input type="hidden" name="id" value="{$id}"><br>
    <input type="submit" name="send" value="редагувати">
</form>