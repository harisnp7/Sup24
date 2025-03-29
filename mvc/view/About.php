<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f9;
        color: #333;
    }

    .about-container {
        max-width: 900px;
        margin: 40px auto;
        padding: 20px;
        background-color: #0a0f33;
        color: #f4c542;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease;
    }

    .about-container:hover {
        transform: translateY(-5px);
    }

    h1 {
        color: #f4c542;
        font-size: 36px;
        border-bottom: 2px solid #f4c542;
        padding-bottom: 10px;
        text-align: center;
    }

    p {
        font-size: 18px;
        line-height: 1.8;
        margin-bottom: 20px;
        text-align: justify;
    }

    .highlight {
        color: #ffffff;
        font-weight: bold;
    }

    .btn-container {
        text-align: center;
        margin-top: 20px;
    }

    .btn {
        display: inline-block;
        padding: 12px 24px;
        background-color: #f4c542;
        color: #0a0f33;
        font-size: 16px;
        font-weight: bold;
        border: none;
        border-radius: 25px;
        text-decoration: none;
        transition: background-color 0.3s ease;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #ffd700;
        color: #0a0f33;
    }
</style>

<div class="about-container">
    <h1>O nama</h1>
    <p>
        Dobrodošli u našu prodavnicu šivaćih mašina! Naša misija je pružiti <span class="highlight">najkvalitetnije šivaće mašine</span> po pristupačnim cenama, uz izvanrednu korisničku podršku.
    </p>
    <p>
        Sa više od <span class="highlight">30 godina iskustva</span> u industriji, ponosimo se širokim asortimanom proizvoda koji zadovoljavaju potrebe kako početnika, tako i profesionalaca.
    </p>
    <p>
        Naš tim stručnjaka je tu da vam pomogne u odabiru prave mašine i pruži sve potrebne informacije o njenom korišćenju.
    </p>
    <div class="btn-container">
        <a href="index.php?machines" class="btn">Pogledajte našu ponudu</a>
    </div>
</div>