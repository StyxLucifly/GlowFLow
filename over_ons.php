<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over Ons - GlowFlow</title>
    <style>
        /* Algemene stijl */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #004d4d; /* Donkerblauwe achtergrondkleur */
            color: #fff;
        }
        
        /* Container voor de teamleden */
        .team-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            padding: 20px;
        }
        
        /* Kaartstijl voor individuele teamleden */
        .team-card {
            width: 80%;
            max-width: 400px;
            background-color: #ff9800; /* Oranje achtergrond voor de kaart */
            border-radius: 20px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            color: #fff;
        }
        
        /* Stijl voor de teamlidfoto */
        .team-card img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        
        /* Naam en titel */
        .team-card h2 {
            font-size: 1.2em;
            margin: 5px 0;
            color: #fff;
        }
        
        /* Biografie-stijl */
        .team-card p {
            font-size: 0.9em;
            color: #ffffff;
        }
        
        /* Stijl voor social media-iconen */
        .social-icons {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }
        
        .social-icons a {
            text-decoration: none;
            color: #fff;
            font-size: 1.5em;
        }

        /* Responsive navigatieknop */
        .menu-icon {
            display: block;
            font-size: 2em;
            color: #ff9800;
            position: absolute;
            top: 20px;
            left: 20px;
        }
    </style>
</head>
<body>

    <!-- Menu-knop -->
    <div class="menu-icon">☰</div>

    <div class="team-container">
        <!-- Teamkaart voor één lid, herhaal dit blok voor elk lid -->
        <?php
            // Array met teamleden
            $teamleden = [
                [
                    "naam" => "Remco Toonders",
                    "foto" => "team-lid1.jpg", // Plaats hier de naam van de foto voor het lid
                    "beschrijving" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
                    "instagram" => "#", // Plaats hier de Instagram-link
                    "twitter" => "#",   // Plaats hier de Twitter-link
                    "linkedin" => "#"   // Plaats hier de LinkedIn-link
                ],
                // Voeg meer teamleden toe op dezelfde manier
            ];

            // Loop door elk teamlid en maak een kaart
            foreach ($teamleden as $lid) {
                echo '<div class="team-card">';
                echo '<img src="' . $lid["foto"] . '" alt="Foto van ' . $lid["naam"] . '">';
                echo '<h2>' . $lid["naam"] . '</h2>';
                echo '<p>' . $lid["beschrijving"] . '</p>';
                echo '<div class="social-icons">';
                echo '<a href="' . $lid["instagram"] . '"><img src="instagram-icon.png" alt="Instagram"></a>';
                echo '<a href="' . $lid["twitter"] . '"><img src="twitter-icon.png" alt="Twitter"></a>';
                echo '<a href="' . $lid["linkedin"] . '"><img src="linkedin-icon.png" alt="LinkedIn"></a>';
                echo '</div>';
                echo '</div>';
            }
        ?>
    </div>

</body>
</html>
