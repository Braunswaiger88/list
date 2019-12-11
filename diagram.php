<?php
function randColor() {
    $color="";

    $r=rand(0, 255);
    $g=rand(0, 255);
    $b=rand(0, 255);
    $color="rgb(" . $r . ", " . $g . ", " . $b . ")";
    return $color;
}

function randArray() {

    $mas=[];
    $year=rand(2000, 2010);

    for ($year;$year<=2019;$year++){

        $znach=rand(1, 300);
        $mas[$year] = $znach;

    }
    return $mas;


}

function makeDiagram($masiv) {

    echo "<div style='display: flex; align-items: baseline;'>";

    foreach ($masiv as $key => $value ) {

        echo "<div style='margin-right: 40px; background: " . randColor() . "; width: 70px; height: " . $value . "px;'> </div>";

    }
    echo "</div>";

}

?>

<html>
<head>
    <title>Diagram</title>
    <style>

    </style>
</head>
<body>
<div class="diagram">
    <?php
    // Вывод диаграммы
    makeDiagram(randArray());
    ?>
</div>
</body>
</html>