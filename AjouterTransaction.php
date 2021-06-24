
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$titre = "Liste Des Transactions";

 require 'view/Header_Footer/header.php';
 require 'model/liste_transactions.php';
 require 'model/fonctions.php';
 $now = $date = date('d/m/Y');
 require 'view/ViewAjouterTransaction.php';
 require  'view/Header_Footer/footer.php';
 ?>
