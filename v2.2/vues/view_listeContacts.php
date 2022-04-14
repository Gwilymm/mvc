<?php
require("modele.inc.php");
//récupère l'emplacement de la liste de contact issue du param.ini
$cheminListeContact = parse_ini_file("param/param.ini");

$listeContact = $cheminListeContact['chemin'] . $cheminListeContact['fichierContacts'];

getListContacts($listeContact);
echo "<br />";
echo "<br />";