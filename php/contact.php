<?php
    $activePage = 'Contact';
?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/favicon.png">
    <title>GlowFlow • Contact</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../java/main.js"></script>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <?php include 'pageup.php'; ?>

    <div class="contactPageContainer">
        <div class="contact-form-section">
            <h2>Contactformulier</h2>
            <form action="verzend_formulier.php" method="post" class="contact-form">
                <div class="ContactFormName">
                    <input type="text" id="subject" name="subject" required placeholder="First name" />
                    <input type="text" id="subject" name="subject" required placeholder="Last name" />
                </div>
                
                <input type="email" id="email" name="email" required placeholder="Email" />
                <input type="tel" id="phone" name="phone" required placeholder="Phone number" pattern="[0-9]{10}" title="Voer een geldig telefoonnummer in." />

                <textarea id="message" name="message" rows="4" maxlength="500" placeholder="Message" required></textarea>

                <button type="submit">Send</button>
            </form>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>