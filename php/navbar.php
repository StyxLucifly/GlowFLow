<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>
    <div onclick="toggleMenu()"><img src="../img/menus.png" alt="" class="menusImg"></div>

    <div class="menu" id="menu">
        <div class="navTopBar">
            <img src="../img/LogoNoQuote.png" alt="Logo GlowFlow" class="LogoNavbar">
            <div class="menu-close" onclick="toggleMenu()"></div>
        </div>

        <a href="index.php" class="blak <?php echo $activePage == 'Home' ? 'active' : ''; ?>"><div class="navImageContainer"><img src="../img/homeIcon.png" alt=""></div>Home</a>
        
        <a href="aboutus.php" class="blak <?php echo $activePage == 'About' ? 'active' : ''; ?>"><div class="navImageContainer"><img src="../img/infoIcon.png" alt=""></div>About us</a>
        <a href="product.php" class="blak <?php echo $activePage == 'Product' ? 'active' : ''; ?>"><div class="navImageContainer"><img src="../img/sensorIcon.png" alt=""></div>Our product</a>
        <a href="contact.php" class="blak <?php echo $activePage == 'Contact' ? 'active' : ''; ?>"><div class="navImageContainer"><img src="../img/contactIcon.png" alt=""></div>Contact</a>
        <a href="faq.php" class="blak <?php echo $activePage == 'Faq' ? 'active' : ''; ?>"><div class="navImageContainer"><img src="../img/help.png" alt=""></div>FAQ</a>


        <div class="manage-link-container">
            <a href="https://gfmonitor.onrender.com/login" class="blak"><div class="navImageContainer"><img src="../img/userIcon.png" alt=""></div>Login</a>
        </div>
    </div>

    <div class="overlay" id="overlay" onclick="toggleMenu()"></div>

    <a href="index.php"><img src="../img/LogoNoQuote.png" alt="Logo navbar" class="LogoOutsideNav"></a>

    <script>
        function toggleMenu() {
            const menu = document.getElementById("menu");
            const overlay = document.getElementById("overlay");

            menu.classList.toggle("active");
            overlay.classList.toggle("active");
        }

        document.addEventListener('DOMContentLoaded', (event) => {
            const links = document.querySelectorAll('.blak');

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
