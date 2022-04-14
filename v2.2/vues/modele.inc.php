<?php


/**
 * Il obtient la liste des contacts à partir d'un fichier.
 * 
 * @param string filename L'emplacement et le nom du fichier à lire.
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

function addContact(string $filename)
{

    if(isset($_GET['prenom'])) {
        $tableauContacts = file_get_contents($filename);
        $tableauContacts .= "\n".$_GET['prenom'] .";". $_GET['nom'] .";" . $_GET['telephone'];
        file_put_contents($filename, $tableauContacts);
    } else {
        echo "rien ajouté";
    }
    
}