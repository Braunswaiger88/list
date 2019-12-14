<?php

include 'menu.php';

?>

<br><br>
<?php
$currentPage = $_GET['page'] ? $_GET['page'] : 'main';
$filename = 'contents/' . $currentPage . '.php';
if (file_exists($filename)) {
    include $filename;
} else {
    echo 'Страница не найдена';
}
?>
<br><br>



<?php include "footer.php";
