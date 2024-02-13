<?php
include_once("include/init_twig.php");
$json = file_get_contents("json/employes.json");
$employes=json_decode($json);
$twig=init_twig();
$tamplates=$twig->load("Contact.twig");
echo $tamplates->render(['employes' => $employes,]);
?>