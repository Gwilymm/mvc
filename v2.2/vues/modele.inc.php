<?php


/**
 * Il obtient la liste des contacts à partir d'un fichier.
 * 
 * @param string $filename L'emplacement et le nom du fichier à lire.
 */
function getListContacts(string $filename)
{
    if (file_exists($filename)) {
        $tableauContacts = file($filename);
        foreach ($tableauContacts as $key => $info) {
            $tableauInfo = explode(";", $info);
            echo "PRENOM : " . $tableauInfo[0] . " NOM : " . $tableauInfo[1] . " TELEPHONE : " . $tableauInfo[2] . "<br />";
        }
        return $tableauInfo;
    } else {
        echo "pas de fichier contacts";
    }
}

/**
 * Il ajoute un contact au fichier.
 * 
 * @param string $filename Le nom du fichier dans lequel écrire.
 */
function addContact(string $filename)
{
    if (isset($_GET['prenom'])) {
        $tableauContacts = file_get_contents($filename);
        $tableauContacts .= "\n" . $_GET['prenom'] . ";" . $_GET['nom'] . ";" . $_GET['telephone'];
        file_put_contents($filename, $tableauContacts);
    } else {
        echo "rien ajouté";
    }
}

function rechercheContact(string $filename)
{
    echo
    " <table>
                        <tr>
                        <th>Index</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Téléphone</th>
                        </tr>";
    /* Vérifier si le prenom est défini dans le tableau GET. Si c'est le cas, il parcourra le fichier
    et éclatera les lignes par le point-virgule. Ensuite, il vérifiera si le premier élément de la
    ligne éclatée est égal au prenom. Si c'est le cas, il fera écho à la ligne. */
    if (isset($_GET['prenom'])) {
        $tableauContacts = file($filename);

        foreach ($tableauContacts as $key => $info) {
            $tableauInfo = explode(";", $info);
            if (strtoupper($tableauInfo[0]) == strtoupper($_GET['prenom'])) {

                echo "
                            <tr>
                            <td>$key</td>
                            <td>$tableauInfo[0]</td>
                            <td>$tableauInfo[1]</td>
                            <td>$tableauInfo[2]</td>
                            </tr>";
            }
        }

        /* Vérifier si le nom est défini dans le tableau GET. Si c'est le cas, il parcourra le fichier et
   éclatera les lignes par le point-virgule. Ensuite, il vérifiera si le premier élément de la ligne
   éclatée est égal au nom. Si c'est le cas, il fera écho à la ligne. */
        if (isset($_GET['nom'])) {
            $tableauContacts = file($filename);
            foreach ($tableauContacts as $key => $info) {
                $tableauInfo = explode(";", $info);
                if (strtoupper($tableauInfo[1]) == strtoupper($_GET['nom'])) {
                    echo "
                            <tr>
                            <td>$key</td>
                            <td>$tableauInfo[0]</td>
                            <td>$tableauInfo[1]</td>
                            <td>$tableauInfo[2]</td>
                            </tr>";
                }
            }
        }
        /* Vérifier si le téléphone est défini dans le tableau GET. Si c'est le cas, il parcourra le
    fichier et éclatera les lignes par le point-virgule. Ensuite, il vérifiera si le premier élément
    de la ligne éclatée est égal au téléphone. Si c'est le cas, il fera écho à la ligne. */
        if (isset($_GET['telephone'])) {
            $tableauContacts = file($filename);
            foreach ($tableauContacts as $key => $info) {
                $tableauInfo = explode(";", $info);

                if ($tableauInfo[2] == $_GET['telephone']) {
                    echo "
                            <tr>
                            <td>$key</td>
                            <td>$tableauInfo[0]</td>
                            <td>$tableauInfo[1]</td>
                            <td>$tableauInfo[2]</td>
                            </tr>";
                }
            }
        }
    }
    echo "</table>";
}

function supprimerContact(string $filename)
{
    if (isset($_GET['index'])) {
        $tableauContacts = file($filename);
        $tableauContacts[$_GET['index']] = "";
        file_put_contents($filename, "");
        file_put_contents($filename, $tableauContacts);
    }
}
