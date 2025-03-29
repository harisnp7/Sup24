<h2><?= htmlspecialchars($machine['name']) ?></h2>
<p>Brend: <?= htmlspecialchars($machine['brand']) ?></p>
<p>Opis: <?= htmlspecialchars($machine['description']) ?></p>

<?php if (isset($machine['image']) && !empty($machine['image'])): ?>
    <img src="<?= 'view/img/' . htmlspecialchars($machine['image']) ?>" width="200">
<?php else: ?>
    <img src="view/img/default.jpg" width="200" alt="Nema slike">
<?php endif; ?>