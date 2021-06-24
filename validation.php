<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$titre = "Validation des résultats";

require 'view/Header_Footer/header.php';
require 'model/liste_transactions.php';
require 'model/fonctions.php';
    $error = false;

    $messageError = [];

        if(!isValidFloat((float) $_POST["montant"])){
            $error = true;
            $messageError["montant"] = "Le montant n'est pas valide";
        }

        //var_dump(date1IsMoreRecentThanDate2(,));
        $date = explode("-",$_POST["date"]);
    $now = date('m-d-Y');

        if(isset($_POST["date"]) AND (!checkdate($date[1],$date[2],$date[0]) OR !date1IsMoreRecentThanDate2($date[1]."-".$date[2]."-".$date[0],$now))){
            $error = true;
            $messageError["date"] = "La date n'est pas valide";
        }

        if(!isValidInt((int) $_POST["destinataire"]) AND ((int) $_POST["emmetteur"]) > 0 AND ((int) $_POST["emmetteur"]) < count($contacts)){
            $error = true;
            $messageError["destinataire"] = "Le destinataire n'est pas valide";
        }

        if(!isValidInt((int) $_POST["emmetteur"]) AND ((int) $_POST["emmetteur"]) > 0 AND ((int) $_POST["emmetteur"]) < count($contacts)){
            $error = true;
            $messageError["emmetteur"] = "L'emmetteur n'est pas valide";
        }
        $transaction_error = [];

        if($error){
            $transaction_error["montant"] = $_POST["montant"];
            $date = $_POST["date"];
            $transaction_error["destinataire"] = $_POST["destinataire"];
            require 'view/ViewAjouterTransaction.php';

        }else{
            array_push($transactions,array('date'=>$_POST["date"],'emetteur'=>$_POST["emmetteur"],'destinataire'=>$_POST["destinataire"],'montant'=>((float) $_POST["montant"])));
                    require 'view/Liste_transactions.php';
                }
require 'view/Header_Footer/footer.php';

?>