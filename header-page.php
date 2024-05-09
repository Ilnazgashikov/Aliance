<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link href="css/normalize.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="css/style.css">
        <title> <?php echo $page_title ?> - Aliance</title>
    </head>
<body>
    <div class="mobile-menu">
        <ul class="mobile-menu-nav">
            <li class="mobile-nav-item"><a href="about.php" class="mobile-nav-link">О компании</a></li>
            <li class="mobile-nav-item"><a href="contracts.php" class="mobile-nav-link">Контрактное производтсво</a>
                <ul class="mobile-submenu">
                    <li class="mobile-submenu-item">
                        <a class="mobile-submenu-link" href="avtohim.php">Автомобильная химия</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a class="mobile-submenu-link" href="#">Бытовая химия</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a class="mobile-submenu-link" href="#">Дезинцифирующие средства</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a class="mobile-submenu-link" href="#">Косметическая продукция</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
                    </li>
                </ul>
            </li>
            <li class="mobile-nav-item"><a href="trademarks-page.php" class="mobile-nav-link">Собственные торговые марки</a></li>
            <li class="mobile-nav-item"><a href="" class="mobile-nav-link">Новости</a></li>
            <li class="mobile-nav-item"><a href="" class="mobile-nav-link">Контакты</a></li>
        </ul> 
        <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14
        </a>
        <div class="mobile-info">
            <svg class="header-phone-icon" width="12" height="17">
                <use href="img/sprites.svg#adress"></use>
            </svg>
            <adress class="mobile-info-adress">г. Мосвка, Холодильный пер. 4к1с8</adress>
        </div>
        <div class="mobile-info">
            <svg class="header-phone-icon" width="16" height="12">
                <use href="img/sprites.svg#mail"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-email">a.dragunov@tdaliance.ru</a>
        </div>

        <div class="social-network-link">
        <a href="https://www.vk.com/">
                <span>
                    <svg class="header-phone-icon" width="24" height="24">
                        <use href="img/sprites.svg#vk"></use>
                    </svg>
                </span>
            </a>
            <a href="https://instagram.com/">
                <span>
                    <svg class="header-phone-icon" width="24" height="24">
                        <use href="img/sprites.svg#inst"></use>
                    </svg>
                </span>
            </a>
        </div>
    </div>
    <nav class="nav-bar nav-bar-light">
        <a href="" class="nav-bar-toggle mobile-menu-toggle">
            <div class="mobile-menu-line"></div>
            <div class="mobile-menu-line"></div>
            <div class="mobile-menu-line"></div>
        </a>
        <a href="./" class="logo-link ">
            <svg class="logo-light" width="140" height="40">
                <use href="img/sprites.svg#logo"></use>
            </svg>
            <svg class="logo-black" width="140" height="40">
                <use href="img/sprites.svg#logo-black"></use>
            </svg>
        </a>
            <ul class="header-nav">
                <li class="header-nav-item"><a href="about.php" class="header-nav-link">О компании</a></li>
                <li class="header-nav-item"><a href="contracts.php" class="header-nav-link">Контрактное производтсво</a></li>
                <li class="header-nav-item"><a href="trademarks-page.php" class="header-nav-link">Собственные торговые марки</a></li>
                <li class="header-nav-item"><a href="" class="header-nav-link">Новости</a></li>
                <li class="header-nav-item"><a href="" class="header-nav-link">Контакты</a></li>
            </ul> 
            <div class="header-phone">
                <svg class="header-phone-icon" width="24" height="24">
                    <use href="img/sprites.svg#phone"></use>
                </svg>
                <a href="tel:+74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
            </div>
            <button class="header-button button" data-toggle="modal" data-target="#feedback-modal">
                <svg class="button-icon" width="24" height="24">
                    <use href="img/sprites.svg#phone"></use>
                </svg>
                <span class="button-text">Получить консультацию</span>
            </button>
    </nav>
    <header class="header header-bg-color">
        <div class="container">
            <div class= <?php echo $header_style ?>>
                <div class="text-area">
                    <div class="separator"></div>
                    <h1 class="text-area-title">
                    <?php echo $page_title ?>
                    </h1>
                    <div class="text-area-link">
                        <span class="text-area-link-page">
                            Главная
                        </span>  
                                         
                        <span class="text-area-link-page">
                        <?php echo $page_title ?>
                        </span>
                    </div>
                    
                </div>
                <img src="<?php echo $img_src ?>" class="img-area">
            </div>
        </div>
    </header>   