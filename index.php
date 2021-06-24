
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$titre = "Liste Des Transactions";
?>
<?php require 'view/Header_Footer/header.php'; ?>
<?php require 'model/liste_transactions.php'; ?>
<?php require 'model/fonctions.php'; ?>

<?php //usort($transactions, "dateTransaction") ?>

<?php require 'view/Liste_transactions.php';?>


<?php require  'view/Header_Footer/footer.php'; ?>
