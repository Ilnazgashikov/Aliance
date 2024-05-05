
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
        $light_mod_on = false;
            include_once('template-parts/adventages.php'); ?>
        </div>
</section>
<section class="section production">
    <div class="container">
            <div class="production-block">
            <div class="production-block-info">
            <div class="separator"></div>
        <h2 class="section-title production-title">Наше производство</h2>
        <p class="production-text">Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.
        <br /> <br />Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.</p>
        <ul class="production-list">
        <li class="production-list-item">
            <svg width="30" height="30">
                <use href="img/sprites.svg#avtomoika"></use> 
            </svg> 
            <span class="production-list-item-text">Автомобильная химия</span>
        </li>
        <li class="production-list-item">
            <svg width="30" height="30">
                <use href="img/sprites.svg#home"></use> 
            </svg> 
            <span class="production-list-item-text">Бытовая химия</span>
        </li>
        <li class="production-list-item">
            <svg width="30" height="30">
                <use href="img/sprites.svg#protect"></use> 
            </svg> 
            <span class="production-list-item-text">Дезинцифирующие средства</span>
        </li>
        <li class="production-list-item">
            <svg width="30" height="30">
                <use href="img/sprites.svg#aerosol"></use> 
            </svg> 
            <span class="production-list-item-text">Пищевые аэрозоли</span>
        </li>
        <li class="production-list-item">
            <svg width="30" height="30">
                <use href="img/sprites.svg#hand-cosmetic"></use> 
            </svg> 
            <span class="production-list-item-text">Косметическая продукция</span>
        </li>
        <li class="production-list-item">
            <svg width="30" height="30">
                <use href="img/sprites.svg#brush"></use> 
            </svg> 
            <span class="production-list-item-text">Краски аэрозольные</span>
        </li>
        </ul>            

        </div>
        <picture>
            <source type="image/webp" srcset="img/women.webp" >
            <source type="image/png" srcset="img/women.png">
            <img src="img/women.png" class="production-women-img" alt="Женщина в костюме">
        </picture>
            </div>
    </div>
</section>
<?php 
    include_once('template-parts/founder.php'); 
?>
<?php include_once('template-parts/research.php'); ?>
<?php 
    include_once('template-parts/clients.php'); 
?>
<?php include_once('template-parts/footer.php'); ?>