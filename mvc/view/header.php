<style>
    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%; /* Širina preko cele stranice */
        background-color: #4CAF50;
        padding: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: white;
        z-index: 1000; /* Da header bude iznad ostalog sadržaja */
    }

    .nav-links a {
        color: white;
        text-decoration: none;
        padding: 8px 16px;
        transition: background-color 0.3s;
    }

    .nav-links a:hover {
        background-color: #45a049;
        border-radius: 4px;
    }

    .auth-buttons a, .auth-buttons button {
        display: inline-block;
        padding: 6px 12px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        text-decoration: none;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s;
    }

    .auth-buttons a:hover, .auth-buttons button:hover {
        background-color: #45a049;
    }

    body {
        padding-top: 60px;
    }
</style>

<div class="header">
    <div class="nav-links">
        <a href="index.php">Početna</a>
        <a href="index.php?machines">Lista mašina</a>
        <a href="index.php?about">O nama</a>
    </div>
    
    <div class="auth-buttons">
        <?php if (isset($_SESSION['user'])): ?>
            <form method="post" style="display:inline;">
                <button type="submit" name="logout">Odjavi se</button>
            </form>
        <?php else: ?>
            <a href="?login">Prijava</a>
            <a href="?register">Registracija</a>
        <?php endif; ?>
    </div>
</div>