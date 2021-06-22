<form action="user.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Введіть імя"><br>
    <input type="text" name="email" placeholder="Введіть емейл"><br>
    <input type="text" name="phone" placeholder="Введіть тел"><br>
    <input type="text" name="login" placeholder="Введіть логін"><br>
    <input type="password" name="password" placeholder="Введіть пароль"><br>
    <input type="password" name="password1" placeholder="Повторіть пароль"><br>
    <label>оберіть права</label>
    <select name="role">
        <option value="2">Оператор</option>
        <option value="1">Адмін</option>
    </select>
    <label>Оберіть фото</label><br>
    <input type="file" name="photo"><br>
    <input type="submit" name="send" value="реєстрація">
</form>