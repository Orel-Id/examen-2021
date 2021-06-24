<div class="container mt-5">
<form action="validation.php" method="post">
    <label for="destinataire">Destinataire</label>
    <select tabindex="1" name="destinataire" id="destinataire">
        <option value="choix" >Choisissez le destinataire</option>
        <?php foreach ($contacts as $contact): ?>
            <?php if($contact['id'] !== '1'): ?>
                <option value="<?= ($contact['id']-1)?>" <?= (isset($transaction_error["destinataire"]) AND $transaction_error["destinataire"] == ($contact['id']-1)) ? "selected" : '' ?>><?=$contact['nom']." ".$contact['prenom']?></option>
            <?php endif; ?>
        <?php endforeach; ?>
    </select>
    <?php if(isset($messageError["destinataire"])): ?>
     <p class="text-danger"><?=$messageError["destinataire"]?></p>
    <?php endif; ?>
    <label for="montant">Montant</label>
    <input tabindex="2" type="number" name="montant" step="0.01" id="montant" value="<?=$transaction_error["montant"]?>"/>
    <?php if(isset($messageError["montant"])): ?>
        <p class="text-danger"><?=$messageError["montant"]?></p>
    <?php endif; ?>
    <label for="date">Date</label>
    <input tabindex="3" type="date" name="date"  id="date" value="<?=$date?>"/>
    <?php if(isset($messageError["date"])): ?>
        <p class="text-danger"><?=$messageError["date"]?></p>
    <?php endif; ?>
    <input type="hidden" name="emmetteur" value="1">
    <input tabindex="4" type="submit" value="Envoyer la transaction">
    <?php if(isset($messageError["emmetteur"])): ?>
        <p class="text-danger"><?=$messageError["emmetteur"]?></p>
    <?php endif; ?>
</form>

</div>