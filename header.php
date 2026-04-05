<?php
if (!isset($page)) {
    $page = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Devine Kuma Leo">
    <title><?php echo isset($title) ? $title : 'Umami Sushi'; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/darkmode.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <script src="javascript/theme.js" defer></script>
    <script src="javascript/hamburgermenu.js" defer></script>
</head>
<body>
    <header>
        <section class="topbar">
            <img src="images/logo_umami_sushi_1 (1).png" alt="Logo" class="logo">
            <img src="images/Scherm_afbeelding_2026-03-06_om_11.42.47-removebg-preview.png" alt="logo1" class="logo1">
            <div class="topbar-actions">
                <button class="hamburger" id="menu-toggle" aria-label="Open navigation menu">☰</button>
                <button id="theme-toggle" title="Switch theme">🌙</button>
            </div>
            <nav class="header-list" id="myLinks">
                <a href="landingspagina.php"<?php echo $page === 'home' ? ' class="active"' : ''; ?>>Home</a>
                <a href="menukaart.php"<?php echo $page === 'menu' ? ' class="active"' : ''; ?>>Menu</a>
                <a href="openingstijden.php"<?php echo $page === 'openingstijden' ? ' class="active"' : ''; ?>>Openingstijden</a>
                <a href="reserveren.php"<?php echo $page === 'reserveren' ? ' class="active"' : ''; ?>>Reserveren</a>
                <a href="vacatures.php"<?php echo $page === 'vacatures' ? ' class="active"' : ''; ?>>Vacatures</a>
            </nav>
        </section>
    </header>
    <main>
