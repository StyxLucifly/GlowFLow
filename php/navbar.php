<div class="menu-toggle" onclick="toggleMenu()">☰</div>

<div class="menu" id="menu">
    <h2><div class="navImageContainer"><img src="../img/homeIcon.png" alt=""></div><a href="index.php" class="hyperlinks <?php echo $activePage == 'Home' ? 'active' : ''; ?>">Home</a></h2>
    <h2><div class="navImageContainer"><img src="../img/infoIcon.png" alt=""></div><a href="#" class="hyperlinks <?php echo $activePage == 'About us' ? 'active' : ''; ?>">About us</a></h2>
    <h2><div class="navImageContainer"><img src="../img/sensorIcon.png" alt=""></div><a href="#" class="hyperlinks <?php echo $activePage == 'Our product' ? 'active' : ''; ?>">Our product</a></h2>
    <h2><div class="navImageContainer"><img src="../img/userIcon.png" alt=""></div><a href="inlog.php" class="hyperlinks <?php echo $activePage == 'Login' ? 'active' : ''; ?>">login</a></h2>
    <h2><div class="navImageContainer"><img src="../img/contactIcon.png" alt=""></div><a href="#" class="hyperlinks <?php echo $activePage == 'Contact' ? 'active' : ''; ?>">Contact</a></h2>
    <img src="../img/logoWhite.png" alt="Logo GlowFlow" class="LogoNavbar">

    <div class="manage-link-container">
        <h2><div class="navImageContainer"><img src="../img/graphIcon.png" alt=""></div><a href="#" class="hyperlinks <?php echo $activePage == 'Manage' ? 'active' : ''; ?>">Manage</a></h2>
    </div>
    <div class="menu-close" onclick="toggleMenu()"></div>
</div>

<div class="overlay" id="overlay" onclick="toggleMenu()"></div>

<img src="../img/logoWhite.png" alt="Logo navbar" class="LogoOutsideNav">

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