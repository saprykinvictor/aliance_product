  <section class="cta">
    <div class="bg-gray">
      <img src="./img/cta.png" alt="аэрозольный баллон со смазкой" class="cta-image">
      <div class="cta__form-wrapper container">
        <form action="handler.php" method="POST" class="cta__form">
          <h2 class="cta__form-title">Хотите сотрудничать?</h2>
          <p class="cta__form-text">
            Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и
            поможем даже в
            самых сложных случаях!
          </p>
          <div class="cta__form-inputs">
            <div class="cta__form-input">
              <input id="user-name" type="text" class="input" name="username" placeholder="">
              <label class="input-label" for="user-name">Имя</label>
            </div>
            <div class="cta__form-input">
              <input id="user-phone" type="tel" class="input" name="userphone" placeholder="">
              <label class="input-label" for="user-phone">Номер телефона</label>
            </div>
          </div>
          <div class="cta__form-actions">
            <button class="cta__form-btn btn" type="submit">Отправить заявку</button>
            <div class="cta__form-notify">
              <svg class="notify-icon" width="14" height="14">
                <use href="img/sprite.svg#shield"></use>
              </svg>
              <p>
                Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность
                информации!
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>


  <footer class="footer">
    <div class="container">
      <div class="footer__top">
        <a href="./" class="footer__logo" aria-label="Logo of Aliance">
          <svg class="footer__logo-svg" width="200" height="62">
            <use href="img/sprite.svg#logo-dark"></use>
          </svg>
        </a>

        <div class="footer-info info">
          <div class="footer-menu__phone info-phone">
            <a href="tel:+74996861014" class="footer-menu__phone-link info-phone-link">+7 (499) 686-10-14</a>
          </div>
          <address class="footer-menu__address info-address">
            <svg class="map-svg" width="12" height="17">
              <use href="img/sprite.svg#map"></use>
            </svg>
            <p>г. Мосвка, Холодильный пер. 4к1с8</p>
          </address>
          <div class="footer-menu__mail info-mail">
            <svg class="mail-svg" width="16" height="12">
              <use href="img/sprite.svg#mail"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru">a.dragunov@tdaliance.ru</a>
          </div>
          <div class="footer-menu__soc1al info-soc1al">
            <a href="#!">
              <svg class="vk-svg" width="24" height="24">
                <use href="img/sprite.svg#vk"></use>
              </svg>
            </a>
            <a href="#!">
              <svg class="inst-svg" width="24" height="24">
                <use href="img/sprite.svg#inst"></use>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="footer__main">
        <nav class="footer__menu">
          <ul class="footer__menu-list">

            <li class="footer__menu-item">
              <a href="#!" class="footer__menu-link">Контрактное производство</a>
              <ul class="footer__submenu">
                <li class="footer__submenu-item">
                  <a href="#!">Автомобильная химия</a>
                </li>
                <li class="footer__submenu-item">
                  <a href="#!">Бытовая химия</a>
                </li>
                <li class="footer__submenu-item">
                  <a href="#!">Дезинфицирующие средства</a>
                </li>
                <li class="footer__submenu-item">
                  <a href="#!">Пищевые аэрозоли</a>
                </li>
                <li class="footer__submenu-item">
                  <a href="#!">Косметическая продукция</a>
                </li>
                <li class="footer__submenu-item">
                  <a href="#!">Краски аэрозольные</a>
                </li>
              </ul>
            </li>
            <li class="footer__menu-item">
              <a href="#!" class="footer__menu-link">Собственные марки</a>
              <ul class="footer__submenu">
                <li class="footer__submenu-item"><a href="#!">Автохимия AG-Tech</a></li>
                <li class="footer__submenu-item"><a href="#!">Автохимия AP</a></li>
              </ul>
            </li>
            <ul class="footer__menu-pages">
              <li class="footer__menu-item">
                <a href="#!" class="footer__menu-link">О компании</a>
              </li>
              <li class="footer__menu-item">
                <a href="#!" class="footer__menu-link">Новости</a>
              </li>
              <li class="footer__menu-item">
                <a href="#!" class="footer__menu-link">Контакты</a>
              </li>
            </ul>
          </ul>
        </nav>
      </div>
      <div class="footer__bottom">
        <p class="footer__copyright">&copy; <?php echo date('y') ?> «Aliance Production». Все права защищены.</p>
        <a href="#!" class="footer__policy">Политики конфиденциальности</a>
        <a href="#!" class="footer__developer">Сделано в
          <img src="./img/ruso.png" alt="">
        </a>
      </div>
    </div>
  </footer>
