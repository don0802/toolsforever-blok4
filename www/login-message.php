<main>
    <div class="container">
        <h4>
            <?php echo htmlspecialchars($_GET['message'] == 'wrongpassword' ? 'Wachtwoord is onjuist' : 'Gebruiker niet gevonden') ?>
        </h4>
    </div>
</main>