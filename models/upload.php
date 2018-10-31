<?php
//upload
if (isset($_POST['upload'])){
    $fichier = $_FILES['file']['name'];
    $taille_max = 297152;
    $taille = filesize($_FILES['file']['tmp_name']);


    if ($taille > $taille_max){
        $error = '<div class="alert">Fichier trop volumineux ...</div>';
    }
    if (!isset($error)){
        $chemin = "assets/uploads/".$fichier;

        move_uploaded_file($_FILES['file']['tmp_name'], "../".$chemin);

        include('connexion.php');
        global $pdo;
        $req = $pdo->prepare('Insert into original_pic(original_pic) VALUES (:original_pic)');
        $req -> execute([
            'original_pic' => $chemin
        ]);
        header('location: ../');
    } else {
        echo $error;
    }
}
?>
