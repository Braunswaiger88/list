<?php
$cols = 10;
$rows = 10;
$cols1 = 1;
$rows1 == 1;
echo '<h1><center>ТАБЛИЦА ПИФАГОРА</center></h1>';
echo '<table style="border:1px solid black; padding:10px; margin-left:300px;">';
while($cols1<$cols){
    $rows1 = 1;
    echo '<tr>';
    while($rows1<$rows){
        $rez = $cols1*$rows1;
        echo '<td style="border:1px solid black; padding:20px;">'.$rez. ' '.' </td>';
        $rows1++;
    }
    echo '<br />';
    echo '</tr>';


    $cols1++;
}
echo '</table>';
?>