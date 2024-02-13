<?php
include_once("include/init_twig.php");
$twig=init_twig();
$tamplates=$twig->load("templates/Accueil.php");
echo $tamplates->render([]);
?>