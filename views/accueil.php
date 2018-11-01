<?php

require '../models/requette.php';
$imgs = imgs();
$memes = memes();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Générateur de meme</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
</head>
<body>


<div id="images">
    <?php  while($row1 = $imgs->fetch())
    {?>
        <span><img class="image miniature" src="../<?= $row1["original_pic"]?>" alt="" >
            <input type="hidden" class="champCache" value="<?= $row1["id_O"] ?>"></span>
        <?php
    }
    if(isset($_SESSION['lastIdtele'] )) 
    {
        ?>
        <article class="parentMini">
            <img class="miniaturetele" src="../<?=$_SESSION['cheminTele']?>">;
            <input class="champCache" type="hidden" name="id" value="<?= $_SESSION['lastIdtele'] ?>">;
        </article> <br>
        <?php
    }
    ?>
</div>

<section id="grandeBoite">
        <article id="boiteImg">
            <div id="resultat">
                <img style="width: 550px; height: 400px;" src="../<?= $_SESSION['source'] ?>" alt="">
            </div>
            <div id="divHaut">
                <p class="txt" id="txt1"><?= $_SESSION['text'] ?></p>
            </div>
            <div id="divBas">
                <p class="txt" id="txt2"><?= $_SESSION['textbas'] ?></p>
            </div>
        </article>
    <article id="boite2">
        <form action="../models/upload.php" method="post" enctype="multipart/form-data">
            <div class="input-file-container">
                <input class="input-file" id="my-file" type="file" name="file" accept="image/jpeg, image/png">
                <label tabindex="0" for="my-file" class="input-file-trigger">Nouvelle Image</label>
            </div>
            <p class="file-return"></p>
            <input type="submit" value="Uploader" class="" name="upload" >
        </form>
        <h3>Écrivez votre texte : </h3>
        <form method="post" action="">
            <label for="haut">Texte du haut : </label> <input type="text" name="Votre texte" id="haut" value=""><br><br>
            <label for="bas">Texte du bas : </label> <input type="text" name="Votre texte" id="bas" value=""><br><br>
            <label for="couleurTexte">Couleur : </label> <input type="color" id="couleurTexte" name="color" onchange="changeColor()">
            <br><br><br><br>
            <!--<a href="" class="boutonEnregistrer"> Enregistrer</a> &nbsp;-->
            <input type="submit" class="enregistrer">
            <input type="reset" value="Reset">
        </form>
    </article>
</section>


<div id="images">
    <?php  while($row2 = $memes->fetch())
    {?>
        <span><img class="image" src="../<?= $row2["lien_M"]?>" alt="" >
            <input type="hidden" class="champCache" value="<?= $row2["id_M"] ?>"></span>
        <?php
    }
    ?>
</div>


<script src="../assets/js/main.js"></script>
<script>
    function changeColor() {
        document.querySelector('#txt1').style.color = document.querySelector('#couleurTexte').value;
        document.querySelector('#txt2').style.color = document.querySelector('#couleurTexte').value;
    }
</script>


</body>
</html
    