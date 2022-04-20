<br>
<form action="" method="GET">
    <label for="index">Entrez l'index à supprimer ou a modifier</label>
    <input type="text" name="index" id="index" placeholder="un index">
    <br />
    <br />
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

        <a href="index.php?action=supprimerContact">
            <input type="hidden" name="action" value="supprimerContact">
        </a>
        <input type="submit" value="Suprimer">

        <a href="index.php?action=modifierContact">
            <input type="hidden" name="action" value="modifierContact">

        </a>
        <input type="submit" value="Modifier">
    </form>
    <br />