<div style="
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    font-family: Arial, sans-serif;
">

    <h2 style="
        color: #333;
        font-size: 24px;
        margin-bottom: 16px;
        border-bottom: 2px solid #007BFF;
        padding-bottom: 8px;
    ">
        Detalji o šivaćoj mašini
    </h2>

    <p><strong>Naziv:</strong> <?= htmlspecialchars($machine['name']) ?></p>
    <p><strong>Brend:</strong> <?= htmlspecialchars($machine['brand']) ?></p>
    <p><strong>Opis:</strong></p>
    <p style="line-height: 1.6;">
        <?= nl2br(htmlspecialchars($machine['description'])) ?>
    </p>

    <?php if (!empty($machine['image'])): ?>
        <img src="<?= 'images/' . htmlspecialchars($machine['image']) ?>" 
             alt="<?= htmlspecialchars($machine['name']) ?>" 
             style="
                 max-width: 100%; 
                 height: auto; 
                 margin-top: 10px;
                 border-radius: 8px;
                 display: block;
                 box-shadow: 0 2px 6px rgba(0,0,0,0.1);
             ">
    <?php endif; ?>

    <a href="index.php" 
       style="
           display: inline-block;
           margin-top: 20px;
           padding: 10px 20px;
           background-color: #007BFF;
           color: #fff;
           text-decoration: none;
           border-radius: 8px;
           transition: background-color 0.3s ease;
           font-weight: bold;
       "
       onmouseover="this.style.backgroundColor='#0056b3'"
       onmouseout="this.style.backgroundColor='#007BFF'">
        Nazad na listu
    </a>
</div>