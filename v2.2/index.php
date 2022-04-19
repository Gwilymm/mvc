<?php
require("vues/modele.inc.php");

$titre = "Bienvenue sur la page d'accès aux contacts";
$titrePage = "ACCEUIL";

$action = 'accueil';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

//récupère l'emplacement de la liste de contact issue du param.ini
$cheminListeContact = parse_ini_file("param/param.ini");

$listeContact = $cheminListeContact['chemin'] . $cheminListeContact['fichierContacts'];

switch ($action) {
    case 'accueil':
        /* Définition du titre de la page. */
        $titre = "Bienvenue sur la page d'accès aux contacts";
        $titrePage = "ACCEUIL";
        require("vues/view_header.php");
        require("vues/view_accueil.php");
        break;
    case 'liste':
        $titre = "Liste des contacts";
        $titrePage = "LISTE";
        require("vues/view_header.php");
        require("vues/view_listeContacts.php");
        require("vues/view_footer.html");
        break;
    case 'ajouter':
        var_dump($_GET);
        $titre = "Ajouter un nouveau contact";
        $titrePage = "AJOUT";
        require("vues/view_header.php");
        require("vues/view_formulaire.php");
        require("vues/view_footer.html");
        break;
    case 'ajoutNouveauContactOK':
        var_dump($_GET);
        $titre = "Bienvenue sur la page d'accès aux contacts";
        $titrePage = "ACCEUIL";
        addContact($listeContact);
        echo "nouveau contact ajouté";
        echo "\n" . $_GET['prenom'] . ";" . $_GET['nom'] . ";" . $_GET['telephone'];
        require("vues/view_header.php");
        require("vues/view_accueil.php");
        break;
    case 'rechercherContact':
        $titre = "Rechercher un contact";
        $titrePage = "RECHERCHE";
        require("vues/view_header.php");
        require("vues/view_rechercherContact.php");
        require("vues/view_footer.html");
        break;
    case 'rechercheContactOK':
        $titre = "Rechercher un contact";
        $titrePage = "RECHERCHE";
        require("vues/view_header.php");
        rechercheContact($listeContact);
        require("vues/view_supprimerContact.php");
        require("vues/view_footer.html");
        break;
    case 'supprimerContact':
        $titre = "Supprimer un contact";
        $titrePage = "Suppression";
        require("vues/view_header.php");
        supprimerContact($listeContact);
        require("vues/view_supprimerContact.php");
        require("vues/view_footer.html");
        break;
}
