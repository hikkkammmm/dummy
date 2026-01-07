<?php
/**
 * Header & Navigation
 * File untuk header dan navigasi yang reusable
 */
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Portfolio - Saya'; ?></title>
    <link rel="stylesheet" href="/portfolio/css/style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="/portfolio/index.php">
                    <span class="logo-icon">&lt;/&gt;</span>
                    Portfolio Saya
                </a>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="/portfolio/index.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="/portfolio/pages/about.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">Tentang Saya</a>
                </li>
                <li class="nav-item">
                    <a href="/portfolio/pages/portfolio.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'portfolio.php' ? 'active' : ''; ?>">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a href="/portfolio/pages/contact.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Hubungi</a>
                </li>
            </ul>
        </div>
    </nav>
