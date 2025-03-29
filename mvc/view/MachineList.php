<style>
    .machine-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        padding: 20px;
    }

    .machine-card {
        background-color: #1a1a2e;
        color: #e5c100;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .machine-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.3);
    }

    .machine-image {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }

    .machine-details {
        padding: 15px;
        text-align: center;
    }

    .machine-title {
        font-size: 20px;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .machine-brand {
        font-size: 16px;
        color: #e5c100;
        margin-bottom: 8px;
    }

    .details-button {
        background-color: #e5c100;
        color: #1a1a2e;
        padding: 8px 16px;
        border: none;
        border-radius: 20px;
        font-size: 14px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .details-button:hover {
        background-color: #ffcc00;
    }
</style>

<h1 style="text-align: center; color: #e5c100;">Lista šivaćih mašina</h1>

<div class="machine-list">
    <?php foreach ($machines as $machine) : ?>
        <div class="machine-card">
<img src="<?= 'images/' . htmlspecialchars($machine['image']) ?>" 
     alt="<?= htmlspecialchars($machine['name']) ?>" 
     class="machine-image">
            <div class="machine-details">
                <div class="machine-title"><?= htmlspecialchars($machine['name']) ?></div>
                <div class="machine-brand"><?= htmlspecialchars($machine['brand']) ?></div>
                <a href="?machine=<?= $machine['id'] ?>">
                    <button class="details-button">Detalji</button>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>