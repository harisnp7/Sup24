<style>
    form {
        max-width: 400px;
        margin: 20px auto;
        padding: 16px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    input[type="text"],
    input[type="password"] {
        width: calc(100% - 22px);
        padding: 10px;
        margin-bottom: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }

    button {
        width: 100%;
        padding: 12px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #45a049;
    }

    .message {
        padding: 10px;
        border-radius: 4px;
        margin-bottom: 16px;
        font-size: 16px;
    }

    .message.success {
        background-color: #dff0d8;
        color: #3c763d;
        border: 1px solid #d6e9c6;
    }

    .message.error {
        background-color: #f2dede;
        color: #a94442;
        border: 1px solid #ebccd1;
    }
</style>

<h2>Registracija</h2>
<form method="POST" action="http://usp2022.epizy.com/sup24/hh/index.php">
    <label for="username">Korisničko ime:</label>
    <input type="text" id="username" name="username" placeholder="Korisničko ime" required minlength="4" maxlength="20" autocomplete="off">

    <label for="password">Lozinka:</label>
    <input type="password" id="password" name="password" placeholder="Lozinka" required minlength="6" maxlength="20" autocomplete="off">

    <?php if (isset($_SESSION['message'])): ?>
        <p class="message <?= strpos($_SESSION['message'], 'Greška') !== false ? 'error' : 'success'; ?>">
            <?= $_SESSION['message']; ?>
        </p>
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>

<button type="submit" name="register" value="submit">Registruj se</button>
</form>