<form method="post" action="edit_page.php" enctype="multipart/form-data"><!-- з гет працюють тільки посилки і як виключення працює форма пошуку
з пост працюють в основному форми тим більше коли форма передає файл або коли є поле пароля-->
    <label>відредагуйте поле заголовка для просування сайту в інтернет</label><br>
    <textarea name="meta_title">{$meta_title}</textarea><br>
    <label>відредагуйте опис сайту для просунення в інет</label><br>
    <textarea name="meta_description">{$meta_description}</textarea><br>
    <label>відредагуйте ключові слова для просунення сайту в інет</label><br>
    <textarea name="meta_keyborbs">{$meta_keybords}</textarea><br>
    <label>відредагуйте назву сторінки</label><br>
    <input type="text" name="title" value="{$title}"><br>
    <label>відредагуйте зміст сторінки</label><br>
    <textarea name="full_content">{$full_content}</textarea><br>
    <input type="hidden" name="id" value="{$id}"><br>
    <input type="submit" name="send" value="відредагуйте">
</form>