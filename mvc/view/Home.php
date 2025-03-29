<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #f3f4f6, #e5e7eb);
        color: #333;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .home-container {
        text-align: center;
        padding: 40px;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        max-width: 600px;
    }

    h1 {
        font-size: 36px;
        color: #4CAF50;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .highlight {
        color: #45a049;
        font-weight: bold;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    li {
        margin-bottom: 10px;
        font-size: 18px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    li::before {
        content: "✔️";
        color: #4CAF50;
    }

    .cta-button {
        display: inline-block;
        margin-top: 20px;
        padding: 12px 24px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 8px;
        text-decoration: none;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .cta-button:hover {
        background-color: #45a049;
    }
</style>

<?php include(__DIR__ . '/header.php'); ?>

<div class="home-container">
    <h1>Dobrodošli u našu prodavnicu šivaćih mašina!</h1>
    <p>Ovde možete pronaći najbolje šivaće mašine na tržištu.</p>

    <div class="features">
        <div class="feature">
            ✅ Kvalitetne šivaće mašine
        </div>
        <div class="feature">
            ✅ Povoljna cena
        </div>
        <div class="feature">
            ✅ Brza dostava
        </div>
    </div>

    <a href="?machines" class="cta-button">Pogledajte našu ponudu</a>
</div>