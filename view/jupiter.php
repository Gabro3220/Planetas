<title>Júpiter</title>
<?php
include_once('./include/header.php');
include_once('../control/descricao.php');
?>


<?php

$jupiter = new Planeta;
echo "<div id='ali_texto'>";
echo "<h1>";
echo $jupiter->jupiter[0][0];
echo "</h1>";
echo "<br>";
echo "<p>";
echo $jupiter->jupiter[1][0];
echo "</p>";
echo "<p>";
echo "<h1>";
echo $jupiter->jupiter[2][0];
echo "</h1>";
echo "</p>";
echo "<p>";
echo $jupiter->jupiter[3][0];
echo "<br>";
echo $jupiter->jupiter[3][1];
echo "<br>";
echo $jupiter->jupiter[3][2];
echo "<br>";
echo $jupiter->jupiter[3][3];
echo "<br>";
echo $jupiter->jupiter[3][4];
echo "<br>";
echo $jupiter->jupiter[3][5];
echo "<br>";
echo $jupiter->jupiter[3][6];
echo "<br>";
echo $jupiter->jupiter[3][7];
echo "<br>";
echo $jupiter->jupiter[3][8];
echo "</p>";
echo "</div>";
echo "<div id='planetas'>";
echo "<img src=img/jupiter2.jpg>" . $jupiter->jupiter[4][0];
echo "</div>"





?>

<?php
include_once('./include/footer.php');
?>