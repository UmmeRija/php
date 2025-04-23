<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* style.css */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', sans-serif;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #1a1a1a;
    padding: 10px 20px;
    color: white;
    position: relative;
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 20px;
}

.nav-links li a {
    text-decoration: none;
    color: white;
    transition: 0.3s;
}

.nav-links li a:hover {
    color: #00bcd4;
}

.logo img {
    height: 40px;
}

.menu-toggle {
    display: none;
    font-size: 24px;
    cursor: pointer;
}

/* Responsive */
@media (max-width: 768px) {
    .nav-links {
        position: absolute;
        top: 60px;
        left: 0;
        flex-direction: column;
        background-color: #1a1a1a;
        width: 100%;
        display: none;
    }

    .nav-links.show {
        display: flex;
    }

    .menu-toggle {
        display: block;
    }
}

</style>
<body>
    <!-- navbar.php -->
<link rel="stylesheet" href="style.css">
<nav class="navbar">
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#gallery">Gallery</a></li>
    </ul>
    <div class="logo">
        <img src="logo.png" alt="Logo">
    </div>
    <div class="menu-toggle" onclick="toggleMenu()">☰</div>
</nav>
<script src="script.js"></script>

</body>
<script>
    // script.js
function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('show');
}

</script>
</html>