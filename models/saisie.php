<?php
session_start();

if(isset($_POST['text']))
{
$text =$_POST['text'];
?>
<p class="txt"><?= $text ?></p>
<?php
$_SESSION['text']=$text;
}
if(isset($_POST['textbas']))
{
$textbas =$_POST['textbas'];
?>
<p class="txt"><?= $textbas ?></p>
<?php
$_SESSION['textbas']=$textbas;
}




?>