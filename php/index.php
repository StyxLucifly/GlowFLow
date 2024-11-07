<?php
    $activePage = 'Home';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/BulbIcon.png">
    <title>GlowFlow • Home</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <?php include 'pageup.php'; ?>

    <div class="HomeImageContainer">
        <div class="HomeImage">
            <div class="HomeImageText">
                <h2 class="DiscoverText">Discover</h2>
                <h2 class="GlowFlowText">GlowFlow</h2>
            </div>
            <div class="down-arrow"><img src="../img/ArrowDown.png" alt="" class="ArrowDown"></div>
        </div>
    </div>

    <div class="ImagesContainer">
        <img src="../img/ImageTwo.svg" alt="">
        <img src="../img/image.svg" alt="">
    </div>

    <div class="ProductHomeContainer">
        <img src="../img/SensorImg.png" alt="" class="SensorImage">
        <p>De GlowFlow-lampen zijn uitgerust met geavanceerde tijdsgebonden bewegingssensoren. Deze sensoren detecteren beweging van voetgangers, fietsers en voertuigen binnen een bepaalde radius. Wanneer beweging wordt gedetecteerd, stuurt de sensor een signaal naar de LED-verlichting, die vervolgens inschakelt om de weg veilig te verlichten.</p>
        <a href="product.php" class="MoreInfoButton">Details</a>
    </div>
</body>
</html>
