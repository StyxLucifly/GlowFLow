<div class="menu-toggle" onclick="toggleMenu()">☰</div>
    
    <div class="menu" id="menu">
        <a href="index.php">Home</a>
        <a href="#">About us</a>
        <a href="#">Our product</a>
        <a href="#">Register</a>
        <a href="#">Contact</a>
        <a href="#">Manage</a>
        <div onclick="toggleMenu()">X</div>
    </div>

    <div class="overlay" id="overlay" onclick="toggleMenu()"></div>

    <script>
        function toggleMenu() {
            const menu = document.getElementById("menu");
            const overlay = document.getElementById("overlay");

            menu.classList.toggle("active");
            overlay.classList.toggle("active");
        }
    </script>