<?php
    if ($light_mod_on) {
        echo '<div class="swiper features-sliders">
        <!-- Additional required wrapper -->
        <ul class="swiper-wrapper header-features">
          <!-- Slides -->
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
                <use href="img/sprites.svg#hourglass"></use> 
            </svg>
            <p class="header-features-text">Непрерывная работа c 2017 года</p>
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
        <p class=<?php echo $adventages_title ?>>Контроль качества на всех этапах</p></li>
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
                <svg fill="white" width="36" height="24">
                    <use href="img/sprites.svg#arrow-prev"></use> 
                </svg>
            </div>
            <div class="slider-button-next">
                <svg fill="white" width="36" height="24">
                    <use href="img/sprites.svg#arrow-next"></use> 
                </svg>
            </div>
        </div>
        <!-- /.slider-buttons -->
</div>';
    }
    else {
        echo '<div class="swiper features-sliders">
        <!-- Additional required wrapper -->
        <ul class="swiper-wrapper features-about-list">
          <!-- Slides -->
          <li class="swiper-slide adventages-item">
            <svg width="36" height="36">
                <use href="img/sprites.svg#hourglass"></use> 
            </svg>
            <p class="about-features-text">Непрерывная работа c 2017 года</p>
          </li>
          <li class="swiper-slide adventages-item">
            <svg width="36" height="36">
                <use href="img/sprites.svg#sertificate"></use> 
            </svg>
            <p class="about-features-text">Вся продукция сертифицирована</p>
          </li>
          <li class="swiper-slide adventages-item">                   
            <svg width="36" height="36">
            <use href="img/sprites.svg#person"></use> 
            </svg>
        <p class="about-features-text"">Контроль качества на всех этапах</p></li>
          <li class="swiper-slide adventages-item">
            <svg width="36" height="36">
                <use href="img/sprites.svg#truck"></use> 
            </svg>
                <p class="about-features-text">Возможны поставки по всей России</p>
          </li>
          <li class="swiper-slide adventages-item">                  
            <svg width="36" height="36">
                <use href="img/sprites.svg#speed"></use>
            </svg>
        <p class="about-features-text">Оперативное производство</p></li>
        </ul>
    
        <!-- If we need navigation buttons -->
        <div class="slider-buttons">
            <div class="slider-button-prev features-about-button">
                <svg fill="grey" width="36" height="24">
                    <use href="img/sprites.svg#arrow-prev"></use> 
                </svg>
            </div>
            <div class="slider-button-next features-about-button">
                <svg fill="grey" width="36" height="24">
                    <use href="img/sprites.svg#arrow-next"></use> 
                </svg>
            </div>
        </div>
        <!-- /.slider-buttons -->
    </div>';
    }
?>
