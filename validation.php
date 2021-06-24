<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$titre = "Validation des résultats";

require 'view/Header_Footer/header.php';
require 'model/liste_transactions.php';
require 'model/fonctions.php';
    $error = false;
    var_dump($_POST);
    $messageError = [];

        if(!isValidFloat((float) $_POST["montant"])){
            $error = true;
            $messageError["montant"] = "Le montant n'est pas valide";
        }

        $date = explode("-",$_POST["date"]);
        if(isset($_POST["date"]) AND !checkdate($date[1],$date[2],$date[0])){
            $error = true;
            $messageError["date"] = "La date n'est pas valide";
        }




    var_dump($messageError);

require 'view/Header_Footer/footer.php';

?>