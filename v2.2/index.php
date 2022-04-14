<?php
require("vues/view_header.php");

$titre = "";
$titrePage = "";

if (isset($_GET['liste'])){
    $action = 'liste';
} else {
    $action = 'accueil';
}

switch($action){
    case 'accueil':
        $titre = "Bienvenue sur la page d'accès aux contacts";
        $titrePage = "ACCEUIL";
        require("vues/view_accueil.php");
        //require("vues/view_footer.html");
        break;
    case 'liste':
        require("vues/view_listeContacts.php");
        require("vues/view_footer.html");
        break;
}

