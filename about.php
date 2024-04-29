
<?php 
$page_title = "О компании";
$header_style = "first-header-state";
$img_src = "";
include_once('header-page.php'); ?>
<section class="section main-info-section">
    <div class="container">
        <div class="main-info">
            <picture>
                <source type="image/webp" srcset="img/about-company.webp" >
                <source type="image/png" srcset="img/about-company.png">
                <img src="img/about-company.png" class="about-company-img" alt="О компании">
            </picture>
            <div class="main-info-block">
                <div class="separator"></div>
                <h2 class="section-title main-info-title">
                    Мы - эксперты в области производства химии
                </h2>
                <p class="main-info-text">
                 Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.
                 </p>
            </div>
        </div>
    </div>
</section>
    <section class="section advetages">
        <div class="container">
        <?php
            $adventages_title = "features-text-black-mod"; 
            $adventages_item = 'swiper-slide adventages-item';
            $arrow_color = "arrow-color-black";
            include_once('template-parts/adventages.php'); ?>
        </div>
    </section>
<?php include_once('footer.php'); ?>