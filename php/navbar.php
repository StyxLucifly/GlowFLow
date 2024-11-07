<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>
    <div class="menu-toggle" onclick="toggleMenu()"><img src="../img/menus.png" alt="" class="menusImg"></div>

    <div class="menu" id="menu">
        <div class="navTopBar">
            <img src="../img/logoWhite.png" alt="Logo GlowFlow" class="LogoNavbar">
            <div class="menu-close" onclick="toggleMenu()"></div>
        </div>

        <h2><div class="navImageContainer"><img src="../img/homeIcon.png" alt=""></div><a href="index.php" class="hyperlinks <?php echo $activePage == 'Home' ? 'active' : ''; ?>">Home</a></h2>
        <h2><div class="navImageContainer"><img src="../img/infoIcon.png" alt=""></div><a href="aboutus.php" class="hyperlinks <?php echo $activePage == 'About' ? 'active' : ''; ?>">About us</a></h2>
        <h2><div class="navImageContainer"><img src="../img/sensorIcon.png" alt=""></div><a href="product.php" class="hyperlinks <?php echo $activePage == 'Product' ? 'active' : ''; ?>">Our product</a></h2>
        <h2><div class="navImageContainer"><img src="../img/userIcon.png" alt=""></div><a href="inlog.php" class="hyperlinks <?php echo $activePage == 'Login' ? 'active' : ''; ?>">Login</a></h2>
        <h2><div class="navImageContainer"><img src="../img/contactIcon.png" alt=""></div><a href="#" class="hyperlinks <?php echo $activePage == 'Contact' ? 'active' : ''; ?>">Contact</a></h2>
        <div class="manage-link-container">
            <h2><div class="navImageContainer"><img src="../img/graphIcon.png" alt=""></div><a href="#" class="hyperlinks <?php echo $activePage == 'Manage' ? 'active' : ''; ?>">Manage</a></h2>
        </div>
    </div>

    <div class="overlay" id="overlay" onclick="toggleMenu()"></div>

    <a href="index.php"><img src="../img/logoWhite.png" alt="Logo navbar" class="LogoOutsideNav"></a>

    <script>
        function toggleMenu() {
            const menu = document.getElementById("menu");
            const overlay = document.getElementById("overlay");

            menu.classList.toggle("active");
            overlay.classList.toggle("active");
        }

        document.addEventListener('DOMContentLoaded', (event) => {
            const links = document.querySelectorAll('.hyperlinks');

            links.forEach(link => {
                link.addEventListener('mouseover', () => {
                    links.forEach(l => {
                    });
                });

                link.addEventListener('mouseout', () => {

                });
            });
        });
    </script>
</body>
</html>
