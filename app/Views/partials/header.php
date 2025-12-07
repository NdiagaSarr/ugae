<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title . ' - ' : ''; ?><?php echo SITE_NAME; ?></title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Plus+Jakarta+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/style.css">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header class="main-header">
        <div class="container">
            <div class="logo">
                <a href="<?php echo BASE_URL; ?>">
                    <span class="logo-icon"><i class="fa-solid fa-leaf"></i></span>
                    <span class="logo-text">UGAE</span>
                </a>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="<?php echo BASE_URL; ?>" class="<?php echo ($currentPage == 'home') ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/about" class="<?php echo ($currentPage == 'about') ? 'active' : ''; ?>">About</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/services" class="<?php echo ($currentPage == 'services') ? 'active' : ''; ?>">Services</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/team" class="<?php echo ($currentPage == 'team') ? 'active' : ''; ?>">Team</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/partners" class="<?php echo ($currentPage == 'partners') ? 'active' : ''; ?>">Partners</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/contact" class="<?php echo ($currentPage == 'contact') ? 'active' : ''; ?>">Contact</a></li>
                </ul>
            </nav>
            <div class="header-actions">
                <button class="lang-toggle" onclick="toggleLang()">
                    <span class="current-lang">EN</span>
                    <i class="fa-solid fa-globe"></i>
                </button>
                <a href="<?php echo BASE_URL; ?>/contact" class="btn btn-primary sm-hidden">Get In Touch</a>
            </div>
            <button class="mobile-menu-toggle">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </header>

    <main>
        <?php 
           // View content will be injected here by the specific view files
           // For now, we are including the view content directly in the controller's call, 
           // but traditionally in this simple structure, we might include the layout IN the view, 
           // or include the view IN the layout. 
           // Let's assume the view file includes this layout or we structure it differently.
           // Actually, the simpler way for this project: 
           // The View file (e.g. home.php) will be required. 
           // The View file should look like:
           // include APP . '/Views/partials/header.php';
           // ... content ...
           // include APP . '/Views/partials/footer.php';
        ?>
