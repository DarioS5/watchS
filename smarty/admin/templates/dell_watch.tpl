<form action="dell_watch.php" method="post" enctype="multipart/form-data">
    <h2>ви дійсно хочете видалити {$name}</h2>
    <input type="radio" name="dell" value="yes" checked>yes
    <input type="radio" name="dell" value="no">no
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="send" value="Видалити">
</form>