<?php
include_once("include/init_twig.php");
$twig=init_twig();
$tamplates=$twig->load("Contact.twig");
echo $tamplates->render([]);
?>