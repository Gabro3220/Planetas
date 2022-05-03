<title>Terra</title>
<?php
include_once('./include/header.php');
include_once('../control/descricao.php');
?>
<?php

$terra = new Planeta;
echo "<div id='ali_texto'>";
echo "<h1>";
echo $terra->terra[0][0];
echo "</h1>";
echo "<br>";
echo "<p>";
echo $terra->terra[1][0];
echo "</p>";
echo "<p>";
echo "<h1>";
echo $terra->terra[2][0];
echo "</h1>";
echo "</p>";
echo "<p>";
echo $terra->terra[3][0];
echo "<br>";
echo $terra->terra[3][1];
echo "<br>";
echo $terra->terra[3][2];
echo "<br>";
echo $terra->terra[3][3];
echo "<br>";
echo $terra->terra[3][4];
echo "<br>";
echo $terra->terra[3][5];
echo "<br>";
echo $terra->terra[3][6];
echo "<br>";
echo $terra->terra[3][7];
echo "<br>";
echo $terra->terra[3][8];
echo "</p>";
echo "</div>";
echo "<div id='planetas'>";
echo "<img src=img/terra2.png>" . $terra->terra[4][0];
echo "</div>"





?>


<?php
include_once('./include/footer.php');
?>