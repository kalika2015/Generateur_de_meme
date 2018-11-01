<?php
session_start();
 

function imgs()
{
include('connexion.php');
$req1= $pdo->query("SELECT * FROM original_pic ORDER BY id_O DESC ");
return $req1;
}

function memes()
{
    include('connexion.php');
    $req1= $pdo->query("SELECT * FROM memes ORDER BY id_M DESC ");
    return $req1;
}

function dernierImgCree() 
{
//include('connexion.php');
//$req2= $connexion->query("SELECT * FROM img_generee ORDER BY id_gen DESC LIMIT 0, 6  ");
//return $req2;
}
   

?>