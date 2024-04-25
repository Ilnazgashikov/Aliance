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
    <title>Aliance</title>
</head>
<body class="front-page">
    <div class="mobile-menu">
        <ul class="mobile-menu-nav">
            <li class="mobile-nav-item"><a href="about.php" class="mobile-nav-link">О компании</a></li>
            <li class="mobile-nav-item"><a href="contracts.php" class="mobile-nav-link">Контрактное производтсво</a>
                <ul class="mobile-submenu">
                    <li class="mobile-submenu-item">
                        <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
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
            <svg class="header-phone-icon" width="24" height="24">
                <use href="img/sprites.svg#vk"></use>
            </svg>
            <svg class="header-phone-icon" width="24" height="24">
                <use href="img/sprites.svg#inst"></use>
            </svg>
        </div>
    </div>
    <nav class="nav-bar">
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
    <header class="header header-bg">
        <div class="container">
            <div class="header-content">
                <div class="separator"></div>
                <h1 class="header-title">
                    <?php echo "Комплексное обеспечение товарами и расходными материалами бизнеса"?>
                </h1>
                <p class="header-text">Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высококачественный прототип будущего проекта напрямую зависит от анализа существующих паттернов поведения</p>
                <button class="button content-button" data-toggle="modal">Подробнее о компании</button>
            </div>

            <div class="swiper features-sliders">
                <!-- Additional required wrapper -->
                <ul class="swiper-wrapper header-features">
                  <!-- Slides -->
                  <li class="swiper-slide header-features-item">
                    <svg width="36" height="36">
                        <use href="img/sprites.svg#hourglass"></use> 
                    </svg>
                    <p class="header-features-text">Непрерывная работа c 2017 года</p>
                  </li>
                  <li class="swiper-slide header-features-item">
                    <svg width="36" height="36">
                        <use href="img/sprites.svg#sertificate"></use> 
                    </svg>
                    <p class="header-features-text">Вся продукция сертифицирована</p>
                  </li>
                  <li class="swiper-slide header-features-item">                   
                    <svg width="36" height="36">
                    <use href="img/sprites.svg#person"></use> 
                    </svg>
                <p class="header-features-text">Контроль качества на всех этапах</p></li>
                  <li class="swiper-slide header-features-item">
                    <svg width="36" height="36">
                        <use href="img/sprites.svg#truck"></use> 
                    </svg>
                        <p class="header-features-text">Возможны поставки по всей России</p>
                  </li>
                  <li class="swiper-slide header-features-item">                  
                    <svg width="36" height="36">
                        <use href="img/sprites.svg#speed"></use>
                    </svg>
                <p class="header-features-text">Оперативное производство</p></li>
            </ul>

                <!-- If we need navigation buttons -->
                <div class="slider-buttons">
                    <div class="slider-button-prev">
                        <svg width="36" height="24">
                            <use href="img/sprites.svg#arrow-prev"></use> 
                        </svg>
                    </div>
                    <div class="slider-button-next">
                        <svg width="36" height="24">
                            <use href="img/sprites.svg#arrow-next"></use> 
                        </svg>
                    </div>
                </div>
                <!-- /.slider-buttons -->
        </div>
        </div>
    </header>
    <section class="section section-light">
        <div class="container">
            <div class="separator"></div>
            <h2 class="section-title">схема работы</h2>
            <div class="swiper steps-slider">
                <!-- Additional required wrapper -->
                <ol class="swiper-wrapper steps">
                  <!-- Slides -->
                  <li class="swiper-slide steps-item">
                    <span class="steps-num">01</span>
                    <h3 class="steps-title">Знакомство</h3>
                    <p class="steps-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия</p>
                    <a href="#" class="button-link">Оставить заявку</a>
                  </li>
                  <li class="swiper-slide steps-item">
                    <span class="steps-num">02</span>
                    <h3 class="steps-title">Заключение договора</h3>
                    <p class="steps-text">Лишь интерактивные прототипы призваны к ответу.</p>
                  </li>
                  <li class="swiper-slide steps-item">
                    <span class="steps-num">03</span>
                    <h3 class="steps-title">Производство</h3>
                    <p class="steps-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</p>
                  </li>
                  <li class="swiper-slide steps-item">
                    <span class="steps-num">04</span>
                    <h3 class="steps-title">Доставка</h3>
                    <p class="steps-text">В частности, экономическая повестка сегодняшнего дня говорит о возможностях приоритизации разума над эмоциями.</p>
                  </li>
                </ol>
                <!-- If we need navigation buttons -->
                <div class="steps-button primary-buttons-wrapper">
                    <div class="steps-button-prev primary-button-prev">
                        <svg width="36" height="24">
                            <use href="img/sprites.svg#arrow-prev"></use> 
                        </svg>
                    </div>
                    <div class="steps-button-next primary-button-next">
                        <svg width="36" height="24">
                            <use href="img/sprites.svg#arrow-next"></use> 
                        </svg>
                    </div>
                </div>
              </div>
        </div>
    </section>
    <section class="section production">
            <div class="container">
                    <div class="separator"></div>
                <h2 class="section-title">Контактное производство</h2>
                <div class="cards">
                    <a href="#" class="card">
                        <div class="card-content">
                            <h3 class="card-title">Автомобильная химия</h3>
                            <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.</p>
                        </div>
                        <img src="img/avto-him.png" alt="" class="card-image">
                    </a>
                    <a href="#" class="card">
                        <div class="card-content">
                            <h3 class="card-title">Бытовая химия</h3>
                            <p class="card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</p>
                            <img src="img/bit-him.png" alt="" class="card-image">
                        </div>
                    </a>
                    <a href="#" class="card">
                        <div class="card-content">
                            <h3 class="card-title">Дезинфицирующие средства</h3>
                            <p class="card-text">Лишь интерактивные прототипы призваны к ответу.Пищевые аэрозоли</p>
                            <img src="img/dezinfect.png" alt="" class="card-image">
                        </div>
                    </a>
                    <a href="#" class="card">
                        <div class="card-content">
                            <h3 class="card-title">Пищевые аэрозоли</h3>
                            <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.</p>
                            <img src="img/dezinfect.png" alt="" class="card-image">
                        </div>
                    </a>
                    <a href="#" class="card">
                        <div class="card-content">
                            <h3 class="card-title">Косметическая продукция</h3>
                            <p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p>
                            <img src="img/avto-him.png" alt="" class="card-image">
                        </div>
                    </a>
                    <a href="#" class="card">
                        <div class="card-content">
                        <h3 class="card-title">Краски аэрозольные</h3>
                        <p class="card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</p>
                        <img src="img/bit-him.png" alt="" class="card-image">
                        </div>
                    </a>
                </div>

        </div>
    </section>
    <?php 
    $block_title = "Собственные марки";
    include_once('template-parts/trademarks-section.php'); 
    ?>
    <section class="section founder">
        <img src="img/founder.jpeg" alt="" class="founder-image">
        <div class="container">
            <div class="founder-content-wrapper">
                <div class="founder-content">
                    <div class="separator"></div>
                    <h2 class="section-title">Отношение к делу и к клиентам</h2>
                    <p class="founder-text">Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика показывает, что укрепление и развитие внутренней структуры говорит о возможностях соответствующих условий активизации. Внезапно, независимые государства, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут подвергнуты целой серии независимых исследований. С учётом сложившейся международной обстановки, синтетическое тестирование выявляет срочную потребность системы массового участия.
                        А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены сами себе. Не следует, однако, забывать, что выбранный нами инновационный путь в значительной степени обусловливает важность дальнейших направлений развития.</p>
                    <a href="#" class="button-link">Подробнее о компании</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section clients">
        <div class="container">
            <div class="clients-wrapper">
                <div class="clients-content">
                    <div class="separator"></div>
                    <h2 class="section-title">Производим аэрозольную продукцию для разных сфер</h2>
                    <ul class="clients-list">
                        <li class="clients-list-item">                 
                            <svg width="30" height="30" class="client-icon">
                            <use href="img/sprites.svg#him"></use> 
                            </svg> 
                            <p class="clients-list-text">Химические производства</p>
                        </li>
                        <li class="clients-list-item">                  
                            <svg width="30" height="30" class="client-icon">
                            <use href="img/sprites.svg#auto"></use> 
                            </svg> 
                            <p class="clients-list-text">Автомойки</p>
                        </li>
                        <li class="clients-list-item">                  
                            <svg width="30" height="30" class="client-icon">
                            <use href="img/sprites.svg#eat"></use> 
                            </svg> 
                            <p class="clients-list-text">Пищевая продукция</p>
                        </li>
                        <li class="clients-list-item">                  
                            <svg width="30" height="30" class="client-icon">
                            <use href="img/sprites.svg#brush"></use> 
                            </svg> 
                            <p class="clients-list-text">Лаки и краски</p>
                        </li>
                        <li class="clients-list-item">                  
                            <svg width="30" height="30" class="client-icon">
                            <use href="img/sprites.svg#cosmetic"></use> 
                            </svg> 
                            <p class="clients-list-text">Косметические средства</p>
                        </li>
                        <li class="clients-list-item">                  
                            <svg width="30" height="30" class="client-icon">
                            <use href="img/sprites.svg#auto-cosm"></use> 
                            </svg> 
                            <p class="clients-list-text">Автомобильная косметика</p>
                        </li>
                        <li class="clients-list-item">                  
                            <svg width="30" height="30" class="client-icon">
                            <use href="img/sprites.svg#shirt"></use> 
                            </svg> 
                            <p class="clients-list-text">Косметика по уходу за одеждой</p>
                        </li>
                        <li class="clients-list-item">                  
                            <svg width="30" height="30" class="client-icon">
                            <use href="img/sprites.svg#boots"></use> 
                            </svg> 
                            <p class="clients-list-text">Косметика по уходу за обувью</p>
                        </li>
                        <li class="clients-list-item">                  
                            <svg width="30" height="30" class="client-icon">
                            <use href="img/sprites.svg#briks"></use> 
                            </svg> 
                            <p class="clients-list-text">Строительные материалы</p>
                        </li>
                        <li class="clients-list-item">                  
                            <svg width="30" height="30" class="client-icon">
                            <use href="img/sprites.svg#more"></use> 
                            </svg> 
                            <p class="clients-list-text">И многих других</p>
                        </li>
                    </ul>
                </div>
                <div class="clients-logo-list">
                    <a href="#"class="client-logo-item"><img src="img/client_color.png" alt="" class="clients-logo"></a>
                    <a href="#"class="client-logo-item"><img src="img/client_color.png" alt="" class="clients-logo"></a>
                    <a href="#"class="client-logo-item"><img src="img/client_color.png" alt="" class="clients-logo"></a>
                    <a href="#"class="client-logo-item"><img src="img/client_color.png" alt="" class="clients-logo"></a>
                    <a href="#"class="client-logo-item"><img src="img/client_color.png" alt="" class="clients-logo"></a>
                    <a href="#"class="client-logo-item"><img src="img/client_color.png" alt="" class="clients-logo"></a>
                    <a href="#"class="client-logo-item"><img src="img/client_color.png" alt="" class="clients-logo"></a>
                    <a href="#"class="client-logo-item"><img src="img/client_color.png" alt="" class="clients-logo"></a>
                    <a href="#"class="client-logo-item"><img src="img/client_color.png" alt="" class="clients-logo"></a>
                </div>
            </div>
        </div>
    </section>
    <section class="section blog">
        <div class="container">
            <div class="separator"></div>
            <h2 class="section-title">Блог экспертов в области производства</h2>
            <!-- Slider main container -->
        <div class="swiper blog-slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <a href="#" class="swiper-slide blog-card">
            <img src="img/blog-card-1.jpeg" alt="" class="blog-card-image">
            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...
            </p>
          </a>
          <a href="#" class="swiper-slide blog-card">        
            <img src="img/blog-card-2.jpeg" alt="" class="blog-card-image">
            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...
            </p></a>
          <a href="#" class="swiper-slide blog-card">
            <img src="img/blog-card-1.jpeg" alt="" class="blog-card-image">
            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...
            </p>
          </a>
    
        </div>
      
        <div class="blog-slider-footer">
            <div class="button-link">Весь блог</div>
            <div class="blog-button primary-buttons-wrapper">
                <div class="blog-button-prev primary-button-prev">
                    <svg width="36" height="24">
                        <use href="img/sprites.svg#arrow-prev"></use> 
                    </svg>
                </div>
                <div class="blog-button-next primary-button-next">
                    <svg width="36" height="24">
                        <use href="img/sprites.svg#arrow-next"></use> 
                    </svg>
                </div>
            </div>
        </div>
    
      </div>
    
        </div>
    </section>  
    <?php include_once('footer.php'); ?>