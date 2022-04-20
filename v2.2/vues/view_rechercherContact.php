<form action="" method="GET">
    <label for="prenom">Entrez le prénom</label>
    <input type="text" name="prenom" id="prenom" placeholder="un prénom">
    <br />
    <br />
    <label for="nom">Entrez le nom</label>
    <input type="text" name="nom" id="nom" placeholder="un nom">
    <br />
    <br />
    <label for="telephone">Entrez le telephone</label>
    <input type="text" name="telephone" id="telephone" placeholder="un numéro de  telephone">
    <br />
    <br />

    <a href="index.php?action=rechercheContactOK">
        <input type="hidden" name="action" value="rechercheContactOK">
    </a>
    <input type="submit" id="rechercher" value="Rechercher">
    <br />
</form>