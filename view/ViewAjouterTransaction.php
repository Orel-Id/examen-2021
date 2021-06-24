<div class="container mt-5">
<form action="validation.php" method="post">
    <label for="destinataire">Destinataire</label>
    <select tabindex="1" name="destinataire" id="destinataire">
        <option value="choix" >Choisissez le destinataire</option>
        <?php foreach ($contacts as $contact): ?>
            <?php if($contact['id'] !== '1'): ?>
                <option value="<?= ($contact['id']-1)?>"><?=$contact['nom']." ".$contact['prenom']?></option>
            <?php endif; ?>
        <?php endforeach; ?>
    </select>
    <label for="montant">Montant</label>
    <input tabindex="2" type="number" name="montant" step="0.01" id="montant"/>
    <label for="date">Date</label>
    <input tabindex="3" type="date" name="date"  id="date" value="<?=$date?>"/>
    <input type="hidden" name="emmetteur" value="1">
    <input tabindex="4" type="submit" value="Envoyer la transaction">

</form>

</div>