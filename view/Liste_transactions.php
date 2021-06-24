<div class="container">
    <ul>
        <?php foreach ($transactions as $key => $transaction): ?>
        <li>
            <span class="me-1"><?=$transaction["date"]?></span>
            <span class="me-1 text-uppercase"><?=formatListTransactions($transaction["montant"],$contacts[($transaction["destinataire"]-1)],$contacts[($transaction["emetteur"]-1)])?></span>
            <span class="me-1 <?=($transaction["montant"] > 0)? 'text-success' : 'text-secondary';?>"><?=$transaction["montant"]?>€</span>
        </li>
        <?php endforeach; ?>
    </ul>
</div>