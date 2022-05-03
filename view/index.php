<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="shortcut icon" href="img/icone_index.ico" type="image/x-icon" />
<link rel="stylesheet" href="../view/css/style.css">
<title>Planetinhas</title>
<?php
include_once('./include/header.php');
?>
<br>
<br>
<h1>Clique nos planetas para saber mais</h1>
<br>
<br>
<div id="principal">
    <div class="planeta">
        <form action="../view/jupiter.php" method="post">
            <button class="btn btn-outline-dark" type="submit">
                <img src="../view/img/jupiter.png" width="450" title="Júpiter" alt="">
            </button>
        </form>
    </div>
    <div class="planeta">
        <form action="../view/marte.php" method="post">
            <button class="btn btn-outline-dark" type="submit">
                <img src="../view/img/marte.png" width="450" title="Marte" alt="">
            </button>
        </form>
    </div>
    <div class="planeta">
        <form action="../view/terra.php" method="post">
            <button class="btn btn-outline-dark" type="submit">
                <img src="../view/img/terra.png" width="450" title="Terra" alt="">
            </button>
        </form>
    </div>
    <div class="planeta">
        <form action="../view/venus.php" method="post">
            <button class="btn btn-outline-dark" type="submit">
                <img src="../view/img/venus.png" width="450" title="Vênus" alt="">
            </button>
        </form>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
include_once('./include/footer.php');
?>