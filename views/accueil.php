<?php

require '../models/requette.php';
$imgs = imgs();
$imgsTele =dernierImgCree();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Générateur de meme</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>


<div id="images">
    <?php  while($row1 = $imgs->fetch())
    {?>
        <span><img class="image miniature" src="<?= $row1["original_pic"]?>" alt="" >
            <input type="hidden" class="champCache" value="<?= $row1["id_O"] ?>"></span>
        <?php
    }
    if(isset($_SESSION['lastIdtele'] )) 
    {
        ?>
        <article class="parentMini">
            <img class="miniaturetele" src="<?=$_SESSION['cheminTele']?>">;
            <input class="champCache" type="hidden" name="id" value="<?= $_SESSION['lastIdtele'] ?>">;
        </article> <br>
        <?php
    }
    ?>
</div>

<section id="grandeBoite">
    <article id="boiteImg">
        <div id="resultat"></div>
        <div id="divHaut"></div>
        <div id="divBas"></div>
    </article>
    <article>

        <div>
            <form action="models/upload.php">
                <div class="input-file-container">
                    <input class="input-file" id="my-file" type="file">
                    <label tabindex="0" for="my-file" class="input-file-trigger">Select a file...</label>
                </div>
                <p class="file-return"></p>
            </form>
            <form action="models/upload.php" method="post" enctype="multipart/form-data">
                <label for="">Images</label>
                <input type="file" name="file" id="file">
                <input type="submit" value="Uploader" class="btn btn-secondary" name="upload" >
            </form>
            <h3>Écrivez votre texte : </h3>
            <form method="post" action="">
                <label for="haut">Texte du haut : </label> <input type="text" name="Votre texte" id="haut" value=""><br><br>
                <label for="bas">Texte du bas : </label> <input type="text" name="Votre texte" id="bas" value=""><br><br>
                <label for="couleurTexte">Couleur : </label> <input type="color" id="couleurTexte" name="color" value="">

                <br>   <br><br>   <br>
                <a href="" class="boutonEnregistrer"> Enregistrer
                </a> &nbsp;
                <input type="reset" value="Reset">
            </form>
        </div>


    </article>
</section>

<script src="assets/js/main.js"></script>

</body>
</html
    