<?php

if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mailins)) // On filtre les serveurs qui rencontrent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}

$message_txt = 'Votre mot de passe temporaire est :'.$psw;
$message_txt.= '
Pour le modifier : https://facemood.whaller.com/insmail2.php?id='.$_SESSION['id'];


$boundary = "-----=".md5(rand());

$sujet = "Requête utilisateur";

$header = "From: \"Bienvenue sur Facemood!\"<facemood.whaller@gmail.com>".$passage_ligne;
$header.= "Reply-to: \"facemood\" <facemood.whaller@gmail.com>".$passage_ligne;


$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

mail($mailins,$sujet,$message_txt,$header);

?>