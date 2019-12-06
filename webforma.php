<?php
    print_r($_GET)
    ?>
<html>
<head>
    <title></title>
</head>
<body>
        <div>
            Привет, <?php echo $_POST['login'] ?>
            <br>

        </div>
<form>
    <label>Логин:</label>
    <input type=”text” name=”login”>
    <br>
    <label>Пароль:</label>
    <input type=”password” name=”password”>
    <br>
    <label>Телефон:</label>
    <input type=”telephone” name=”Telephone”>
    <br>
    <label>Телефон:</label>
    <select name=”gender”
            <option value="male">Мужчина</option>
            <option value="male">Мужчина</option>
    </select>
    <br>
    <br><br>
    <div class=”buttons”>
        <button type=”submit”>Войти</button>
        <button class=”close”>Отмена</button>
    </div>
</form>


</body>
</html>
</form>