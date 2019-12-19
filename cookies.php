<?php

if ($_GET['theme'] == 'dark')
{
    setcookie('theme', 'dark');
    $dark_light='dark';
} elseif ($_GET['theme'] == 'light')
{
    setcookie('theme', 'light');
    $dark_light = 'light';
} elseif (!empty($_COOKIE['theme']))
{
    $dark_light=$_COOKIE['theme'];
}
?>

<!DOCTYPE html>

<html>
<head>
    <title>Перход на темную сторону</title>
    <style>
        body.dark
        {
            background-color: #202020;
            color: #ffffff;
        }
        body.light
        {
            background-color: #ffffff;
            color: #202020;
        }
    </style>
</head>
<body class="<?php echo $dark_light ?>">
<h1>Сон во сне</h1>
    <a href="Lessons.php?theme=dark">ТЬМА</a>
    <a href="Lessons.php?theme=light">СВЕТ</a>
<p>
    Вот вам за все – мой поцелуй в чело.
    И расставаясь, я хочу сказать сейчас,
    Хочу сказать вам все и ничего:
    Вы не неправы были прошлый раз.
    Да. Дни мои, конечно, были сном…
    Но если все-таки моя надежда улетела
    Куда-то в ночь… Или пропала днем…
    То я в видении обманчивом, несмелом
    Растратил свою жизнь и растворился в нем?
    Все, что мы видим и все, чем мы кажемся
    Потом лишь сном во сне окажется…
</p>
</body>
</html>