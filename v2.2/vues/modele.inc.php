<?php


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
