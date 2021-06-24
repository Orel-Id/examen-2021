<?php
    // Fonctions de test des inputs



/**
 * Vérifie si l'id est correcte
 * @param $id - l'id
 * @param $nb - nombre max d'id dans le tableau
 * @return string - retourne l'erreur
 */
function check_id($id, $nb)
{
    $error = "";
    if (!isset($id) or $id === "")
        $error = "Veuillez fournir un id de stagiaire";
    elseif ($id < 0 or $id > $nb)
        $error = "Pas de stagiaire connu avec cet id";
    return $error;
}

/**
 * transfome la date en un array
 * @param $date
 * @return array [key: jour - mois - annee ]
 */
function explodeDDN($date)
{
    $expodeDate = [];
    $date = explode('/', $date);
    $expodeDate["jour"] = $date[0];
    $expodeDate["mois"] = $date[1];
    $expodeDate["annee"] = $date[2];

    return $expodeDate;
}

/**
 * vérifie si le nom est sans chiffre et non vide
 * @param $name Le nom a vérifier
 * @return bool
 */
function isValidName($name)
{
    $test = $name !== "";
    $test = $test && ctype_alpha($name);
    return $test;
}

/**
 * Vérifie si le parametre est un nombre et s'il n'est pas vide
 * @param $number le nombre a vérifier
 * @return bool false si c'est pas un  nombre sinon true
 */
function isValidFloat($number)
{
    $test = !empty($number);
    $test = $test && is_float($number);
    return $test;
}

/**
 * @param $number le nombre a vérifier
 * @return bool false si c'est pas un  nombre sinon true
 */
function isValidInt($number)
{
    $test = !empty($number);
    $test = $test && is_int($number);
    return $test;
}

/**
 * Vérifie si la date est correcte ou non
 * @param $date format européen : jour/mois/année
 * @return bool
 */
function isValidDate($date)
{

    foreach ($date as $num) {
        if ($num == "")
            return false;
    }
    return checkdate($date[2], $date[1], $date[0]);
}

/**
 * @param $date1 -- date a comparée au format Mois/Jour/annee
 * @param $date2 -- date a comparée au format Mois/Jour/annee
 * @return bool true : si la date1 est plus grande que la date2 OU false si date1 est plus petite que la date2
 */
function date1IsMoreRecentThanDate2($date1, $date2){
    return (strtotime($date1) >= strtotime($date2));
}

function formatNumeroCompte($chiffres)
{
    $array_num = str_split($chiffres);
    for($i=5;$i<13;$i++){
        $array_num[$i]= 'X';
    }

    array_splice($array_num, 5, 0, ' ');
    array_splice($array_num, 10, 0, ' ');
    array_splice($array_num, 15, 0, ' ');

    $compte_number = "";
    foreach ($array_num as $num){
        $compte_number = $compte_number.$num;
    }

    return $compte_number;
}
function formatListTransactions($montant,$destinataire,$emmetteur)
{

    $compteEmmetteur = formatNumeroCompte($emmetteur["compte"]);
    $compteDestinateur = formatNumeroCompte($emmetteur["compte"]);
    return ($montant > 0) ? $emmetteur["nom"]." ".$compteEmmetteur: $destinataire["nom"]." ".$compteDestinateur;
}


function dateTransaction($date_a,$date_b) {
    return (strtotime($date_a) - strtotime($date_b));
}


function getTransactionsTriees($arrayToSort)
{
    return ;
}
?>