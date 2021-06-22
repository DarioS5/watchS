<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color:#82C6E0">
<H1 style="text-align: center">Авторизація</H1>
<div style="text-align: center">
    <form action="login.php" method="post" enctype="multipart/form-data">
        <input type="text" name="login" placeholder="Введіть логін"><br>
        <input type="password" name="password" placeholder="Введіть пароль"><br>
        <input type="submit" name="send" value="Вхід">
    </form>
    </div>
<H4 style="color: darkred;">{if isset($content)&&!empty($content)}{$content}{/if}</H4><!-- перевіряємо якщо підставляються дані в контент то ми їх показуємо-->

</body>
</html>