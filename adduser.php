<?php


$regions=[
        0=>"Виберіть область",
        1=>"Вінницька область",
        2=>"Волинська область",
        3=>"Дніпропетровська область",
        4=>"Донецька область",
        5=>"Житомирська область",
        6=>"Закарпатська область",
        7=>"Запорізька область",
        8=>"Івано-Франківська область",
        9=>"Київська область",
        10=>"Кіровоградська область",
        11=>"Луганська область",
        12=>"Львівська область",
        13=>"Миколаївська область",
        14=>"Одеська область",
        15=>"Полтавська область",
        16=>"Рівненська область",
        17=>"Сумська область",
        18=>"Тернопільська область",
        19=>"Харківська область",
        20=>"Херсонська область",
        21=>"Хмельницька область",
        22=>"Черкаська область",
        23=>"Чернівецька область",
        24=>"Чернігівська область"];
$err=null;
?>

<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $inputLogin = $_POST['user_name'];
    $inputLastname = $_POST['user_lastname'];
    $inputOblast = $_POST['regions'];
    $inputCity = $_POST['city'];
    $inputAdress = $_POST['adress'];
    $inputDate = $_POST['date'];

    function filterInput($var) {

        return htmlspecialchars(strip_tags(stripslashes(trim($var))));
    }

    function validateString($var, $min=2, $max=32) {
        if (empty($var) || strlen($var) < $min || strlen($var) > $max) {
            return false;
        }
        return true;
    }

    $inputLogin = filterInput($inputLogin);
    $inputLastname = filterInput($inputLastname);
    $inputOblast = filterInput($inputOblast);
    $inputCity = filterInput($inputCity);
    $inputAdress = filterInput($inputAdress);
    $inputDate = filterInput($inputDate);

    if (validateString($inputLogin)==false || validateString($inputLastname)==false || validateString($inputCity)==false){
        echo "Поле не должно быть пустым, меньше 2 и больше 32 символов";
        $err = "err";
    }
    $err = null;

}
?>

<html>
<head>
    <title>Задача add-user</title>
    <style type='text/css'>
        .err {
            border-color: red
        }
    </style>
</head>
<body>
<form method="post" action="">
    <label>Имя пользователя</label>
    <br>
    <input type="text" name="user_name">
    <br>
    <br>
    <label>Фамилия пользователя</label>
    <br>
    <input type="text" name="user_lastname">
    <br>
    <br>
    <label>Область проживания</label>
    <br>
    <select name="regions">
        <?php foreach ($regions as $key=>$value){?>
            <option value="<?php echo $key;?>"><?php echo $value;?></option>
        <?php } ?>
    </select>
    <br>
    <br>
    <label>Город проживания</label>
    <br>
    <input type="text" name="city">
    <br>
    <br>
    <label>Адрес проживания</label>
    <br>
    <textarea style="height: 120px; width: 180px" name="adress"></textarea>
    <br>
    <br>
    <label>Дата рождения</label>
    <br>
    <input type="date" name="date">
    <br>
    <br>
    <br>
    <button type="submit">Отправить</button>

</form>

</body>
</html>