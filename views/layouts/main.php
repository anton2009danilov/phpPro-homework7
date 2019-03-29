<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<a href="/">Главная</a>
<a href="/basket/">Корзина</a> <?=$count?>

<?if ($auth):?>
Добро пожаловать <?=$username?> <a href="/user/logout/"> [Выход]</a>
<?else:?>
<form action="/user/login/" method="post">
    <input type="text" name="login" placeholder="Логин">
    <input type="password" name="pass" placeholder="Пароль">
    <input type="submit" name="submit" placeholder="Войти">
</form>
<?endif;?>

<br>
<?=$content?>
</body>

<script src="/js/ajax.js"></script>

</html>