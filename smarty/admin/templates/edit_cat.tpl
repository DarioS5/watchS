<form action="edit_cat.php" method="post" enctype="multipart/form-data">
    <label>змініть назву категорії</label>
    <input type="text" name="name" value="{$name}">
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="send" value="редагувати">
</form>