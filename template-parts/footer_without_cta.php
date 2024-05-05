<footer class="footer">
    <hr class="footer-seporator">
        <div class="container">
            <div class="footer-top">
                <svg class="logo-image footer-logo" width="140" height="40">
                    <use href="img/sprites.svg#logo-black"></use>
                </svg>
                <a href="tel:+79996861014" class="footer-phone">+7 (999) 686-10-14</a>
                <div class="footer-info footer-info-first">
                    <svg class="header-phone-icon" width="12" height="17">
                        <use href="img/sprites.svg#adress"></use>
                    </svg>
                    <adress class="footer-info-adress">г. Мосвка, Холодильный пер. 4к1с8</adress>
                </div>
                <div class="footer-info">
                    <svg class="mail-icon" width="16" height="12">
                        <use href="img/sprites.svg#mail"></use>
                    </svg>
                    <a href="mailto:a.dragunov@tdaliance.ru" class="footer-email">a.dragunov@tdaliance.ru</a>
                </div>
                <div class="footer-social">
                    <a href="#" class="footer-social-link">
                        <svg class="footer-socail-icon" width="24" height="24">
                            <use href="img/sprites.svg#vk"></use>
                        </svg>
                    </a>
                    <a href="#" class="footer-social-link">
                        <svg class="footer-socail-icon" width="24" height="24">
                            <use href="img/sprites.svg#inst"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <hr class="footer-seporator">
        <div class="container">
            <div class="footer-bottom">
                <div class="footer-menu-wrapper">
                    <h2 class="footer-menu-title">Контрактное производство</h2>
                    <ul class="footer-menu-list footer-menu-column-2">
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Автомобильная химия</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Бытовая химия</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Косметическая продукция</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Краски аэрозольные</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-menu-wrapper">
                    <h2 class="footer-menu-title">Собственные марки</h2>
                    <ul class="footer-menu-list">
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Автохимия AP</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-menu-wrapper">
                    <ul class="footer-menu-list">
                        <li class="footer-menu-item">
                            <a href="about.php" class="footer-menu-link footer-menu-link-bold">О компании</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link footer-menu-link-bold">Новости</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link footer-menu-link-bold">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="footer-seporator">
        <div class="container">
            <div class="footer-wrapper">
                <div class="footer-legal">
                    <p class="footer-copyright">&copy; <?php echo date('d.m.Y'); ?> «Aliance Production». Все права защищены.</p>
                    <a href="./politica_conf.php" class="footer-policy">Политики конфиденциальности</a>  
                </div>
                <div class="footer-author">
                    <span class="made-in">Сделано в</span>
                    <svg class="ruso-icon" width="52" height="11">
                        <use href="img/sprites.svg#ruso-icon"></use>
                    </svg>
                </div>
            </div>
        </div>

    </footer>
    <div class="modal" id="feedback-modal">
        <div class="modal-dialog">
            <h2 class="modal-title">Есть вопросы?</h2>
            <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
                <svg class="modal-close-icon" width="18" height="18">
                    <use href="img/sprites.svg#close"></use>
                </svg>
            </a>
            <p class="modal-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
            <form action="handler.php" method="POST" class="modal-form">
                <div class="input-group-wrapper input-group-vertical">
                    <div class="input-group modal-input-group">
                        <input 
                        id="user-name-modal" 
                        type="text" 
                        name="user_name"
                        class="input modal-input"
                        placeholder=" "
                        >
                        <label class="input-group-label modal-input-label"  for="user-name-modal">Имя</label>
                    </div>
                    <div class="input-group modal-input-group">
                        <input 
                        id="user-phone-modal" 
                        type="tel" 
                        name="user_phone"
                        class="input modal-input phone-mask"
                        placeholder=" "
                        >
                        <label class="input-group-label modal-input-label" for="user-phone-modal">Номер телефона</label>
                    </div>
                </div>
                <div class="modal-form-footer">
                    <button type="submit" class="button modal-form-button">Оставить заявку</button>
                    <div class="notify">
                        <svg class="notify-icon" width="14" height="14">
                            <use href="img/sprites.svg#shield-notify"></use> 
                        </svg>
                        <p class="notify-text">
                            Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>  
    <div class="modal" id="alert-modal">
        <div class="modal-dialog">         
            <img src="img/thanks_illu.png" alt="" class="alert-img">
            <h2 class="modal-title">Спасибо за заявку!</h2>
            <a href="#" class="modal-close" data-toggle="modal" data-target="#alert-modal">
                <svg class="modal-close-icon" width="18" height="18">
                    <use href="img/sprites.svg#close"></use>
                </svg>
            </a>
            <p class="modal-text">Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
            <a href="index.php" class="return-alert-link">
            <button class="button button-alert-modal">
                <span class="button-text"> Вернуться на главную</span>
            </button>
            </a>
        </div>
    </div>  
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/just-validate.production.min.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>