<?php
include_once("include/init_twig.php");
$twig=init_twig();
$tamplates=$twig->load("Accueil.twig");
echo $tamplates->render([]);
?>