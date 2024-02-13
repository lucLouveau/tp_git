<?php
include_once("include/init_twig.php");
$json = file_get_contents("json/produits.json");
$produits=json_decode($json);
$twig=init_twig();
$tamplates=$twig->load("Accueil.twig");
echo $tamplates->render(['produits' => $produits,]);
?>