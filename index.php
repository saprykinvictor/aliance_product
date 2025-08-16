<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aliance Production</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body class="front-page">
  <nav class="mobile-menu">
    <ul class="mobile-menu-list">
      <li class="mobile-menu-item">
        <a href="#!" class="mobile-menu-link">О компании</a>
      </li>
      <li class="mobile-menu-item">
        <a href="#!" class="mobile-menu-link">Контрактное производство</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a href="#!">Автомобильная химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a href="#!">Бытовая химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a href="#!">Дезинфицирующие средства</a>
          </li>
          <li class="mobile-submenu-item">
            <a href="#!">Пищевые аэрозоли</a>
          </li>
          <li class="mobile-submenu-item">
            <a href="#!">Косметическая продукция</a>
          </li>
          <li class="mobile-submenu-item">
            <a href="#!">Краски аэрозольные</a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu-item">
        <a href="#!" class="mobile-menu-link">Собственные марки</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item"><a href="#!">Автохимия AG-Tech</a></li>
          <li class="mobile-submenu-item"><a href="#!">Автохимия AP</a></li>
        </ul>
      </li>
      <li class="mobile-menu-item">
        <a href="#!" class="mobile-menu-link">Новости</a>
      </li>
      <li class="mobile-menu-item">
        <a href="#!" class="mobile-menu-link">Контакты</a>
      </li>
    </ul>
    <div class="mobile-info info">
      <div class="mobile-menu__phone info-phone">
        <a href="tel:+74996861014" class="mobile-menu__phone-link info-phone-link">+7 (499) 686-10-14</a>
      </div>
      <address class="mobile-menu__address info-address">
        <svg class="map-svg" width="12" height="17">
          <use href="img/sprite.svg#map"></use>
        </svg>
        <p>г. Мосвка, Холодильный пер. 4к1с8</p>
      </address>
      <div class="mobile-menu__mail info-mail">
        <svg class="mail-svg" width="16" height="12">
          <use href="img/sprite.svg#mail"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru">a.dragunov@tdaliance.ru</a>
      </div>
      <div class="mobile-menu__soc1al info-soc1al">
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
  </nav>
  <header class="header header-image">
    <nav class="navbar">
      <a href="#!" class="mobile-menu-toggle" aria-label="menu toggle button">
        <span class="mobile-menu-line"></span>
        <span class="mobile-menu-line"></span>
        <span class="mobile-menu-line"></span>
      </a>
      <a href="./" class="header__logo" aria-label="Logo of Aliance">
        <svg class="logo-svg logo-light" width="140" height="44">
          <use href="img/sprite.svg#logo-light"></use>
        </svg>

        <svg class="logo-svg logo-dark" width="140" height="44">
          <use href="img/sprite.svg#logo-dark"></use>
        </svg>
      </a>
      <ul class="header__nav-list">
        <li class="header__nav-item">
          <a href="/about.php" class="header__nav-link">О компании</a>
        </li>
        <li class="header__nav-item">
          <a href="#!" class="header__nav-link">Контрактное производство</a>
        </li>
        <li class="header__nav-item">
          <a href="#!" class="header__nav-link">Собственные торговые марки</a>
        </li>
        <li class="header__nav-item">
          <a href="#!" class="header__nav-link">Новости</a>
        </li>
        <li class="header__nav-item">
          <a href="#!" class="header__nav-link">Контакты</a>
        </li>
      </ul>
      <div class="header__phone">
        <svg class="phone-svg" width="16" height="17">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <a href="tel:+74996861014" class="header__phone-link">+7 (499) 686-10-14</a>
      </div>
      <button class="header__button btn" popovertarget="modal">
        <svg class="button-svg" width="16" height="17">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
    </nav>
    <div class="container">
      <div class="header__inner">

        <h1 class="header__title title"><?php echo "Главная страница"; ?></h1>

        <p class="header__text">
          Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта:
          высококачественный прототип будущего проекта напрямую зависит от анализа существующих паттернов поведения.
        </p>
        <a href="#!" class="header-btn btn">Подробнее о компании</a>

        <div class="header__advantages swiper advantages-slider">
          <ul class="header__advantages-list swiper-wrapper">
            <li class="header__advantages-item swiper-slide">
              <a href="#!" class="header__advantages-link">
                <svg class="adv-svg" width="21" height="28">
                  <use href="img/sprite.svg#time"></use>
                </svg>
                <p>
                  Непрерывная работа c 2017 года
                </p>
              </a>
            </li>
            <li class="header__advantages-item swiper-slide">
              <a href="#!" class="header__advantages-link">
                <svg class="adv-svg" width="29" height="29">
                  <use href="img/sprite.svg#file"></use>
                </svg>
                <p>
                  Вся продукция сертифицирована
                </p>
              </a>
            </li>
            <li class="header__advantages-item swiper-slide">
              <a href="#!" class="header__advantages-link">
                <svg class="adv-svg" width="25" height="28">
                  <use href="img/sprite.svg#3"></use>
                </svg>
                <p>
                  Контроль качества на всех этапах
                </p>
              </a>
            </li>
            <li class="header__advantages-item swiper-slide">
              <a href="#!" class="header__advantages-link">
                <svg class="adv-svg" width="35" height="26">
                  <use href="img/sprite.svg#4"></use>
                </svg>
                <p>
                  Возможны поставки по всей России
                </p>
              </a>
            </li>
            <li class="header__advantages-item swiper-slide">
              <a href="#!" class="header__advantages-link">
                <svg class="adv-svg" width="32" height="25">
                  <use href="img/sprite.svg#5"></use>
                </svg>
                <p>
                  Оперативное производство
                </p>
              </a>
            </li>
          </ul>
          <div class="slider-buttons">
            <div class="slider-button-prev">
              <svg class="left-svg" width="36" height="24">
                <use href="img/sprite.svg#left"></use>
              </svg>
            </div>
            <div class="slider-button-next">
              <svg class="right-svg" width="36" height="24">
                <use href="img/sprite.svg#right"></use>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main>

    <section class="steps">
      <div class="container">
        <h2 class="steps__title section-title">схема работы</h2>

        <div class="swiper steps-slider">
          <ol class="swiper-wrapper steps__list">
            <li class="steps__item swiper-slide">
              <div class="steps__item-count">
                <span>01</span>
              </div>
              <h3 class="steps__item-title">Знакомство</h3>
              <p class="steps__item-text">
                Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.
              </p>
              <a class="button-link" href="#!">Оставить заявку</a>
            </li>
            <li class="steps__item swiper-slide">
              <div class="steps__item-count">
                <span>02</span>
              </div>
              <h3 class="steps__item-title">Заключение<br>договора</h3>
              <p class="steps__titem-ext">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </li>
            <li class="steps__item swiper-slide">
              <div class="steps__item-count">
                <span>03</span>
              </div>
              <h3 class="steps__item-title">Производство</h3>
              <p class="steps__item-text">
                А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на
                независимые элементы.
              </p>
            </li>
            <li class="steps__item swiper-slide">
              <div class="steps__item-count">
                <span>04</span>
              </div>
              <h3 class="steps__item-title">Доставка</h3>
              <p class="steps__item-text">
                В частности, экономическая повестка сегодняшнего дня говорит о возможностях приоритизации разума над
                эмоциями.
              </p>
            </li>
          </ol>
          <div class="steps-buttons primary-buttons">
            <div class="steps-button-prev primary-button-prev">
              <svg class="left-svg" width="36" height="24">
                <use href="img/sprite.svg#left"></use>
              </svg>
            </div>
            <div class="steps-button-next primary-button-next">
              <svg class="right-svg" width="36" height="24">
                <use href="img/sprite.svg#right"></use>
              </svg>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="production">
      <div class="container">
        <h2 class="productiun__title section-title">
          Контрактное производство
        </h2>
        <ul class="production__list">
          <li class="production__list-item">
            <a class="production__list-link" href="#!">
              <div class="production__list-heading">
                <h3 class="production__list-title">Автомобильная химия</h3>
                <p class="production__list-text">
                  Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.
                </p>
              </div>
              <img src="./img/production/1.jpg" alt="Автомобильная химия" class="production__list-image">
            </a>
          </li>
          <li class="production__list-item">
            <a class="production__list-link" href="#!">
              <div class="production__list-heading">
                <h3 class="production__list-title">Бытовая химия</h3>
                <p class="production__list-text">
                  А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на
                  независимые элементы.
                </p>
              </div>
              <img src="./img/production/2.jpg" alt="Бытовая химия" class="production__list-image">
            </a>
          </li>
          <li class="production__list-item">
            <a class="production__list-link" href="#!">
              <div class="production__list-heading">
                <h3 class="production__list-title">Дезинфицирующие средства</h3>
                <p class="production__list-text">
                  Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.
                </p>
              </div>
              <img src="./img/production/3.jpg" alt="Дезинфицирующие средства" class="production__list-image">
            </a>
          </li>
          <li class="production__list-item">
            <a class="production__list-link" href="#!">
              <div class="production__list-heading">
                <h3 class="production__list-title">Пищевые аэрозоли</h3>
                <p class="production__list-text">
                  Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.
                </p>
              </div>
              <img src="./img/production/3.jpg" alt="Пищевые аэрозоли" class="production__list-image">
            </a>
          </li>
          <li class="production__list-item">
            <a class="production__list-link" href="#!">
              <div class="production__list-heading">
                <h3 class="production__list-title">Косметическая продукция</h3>
                <p class="production__list-text">
                  Лишь интерактивные прототипы призваны к ответу.
                </p>
              </div>
              <img src="./img/production/1.jpg" alt="Косметическая продукция" class="production__list-image">
            </a>
          </li>
          <li class="production__list-item">
            <a class="production__list-link" href="#!">
              <div class="production__list-heading">
                <h3 class="production__list-title">Краски аэрозольные</h3>
                <p class="production__list-text">
                  А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на
                  независимые элементы.
                </p>
              </div>
              <img src="./img/production/2.jpg" alt="Краски аэрозольные" class="production__list-image">
            </a>
          </li>
        </ul>
      </div>
    </section>

    <section class="trademarks">
      <div class="container">
        <h2 class="trademarks__title section-title">
          собственные марки
        </h2>
        <div class="trademarks-cards">
          <a href="#!" class="trademarks-card">
            <svg class="trademarks-card-logo agtech" width="140" height="140">
              <use href="img/sprite.svg#agtech"></use>
            </svg>
            <h3 class="trademarks-card-title">Автохимия AG-Tech</h3>
            <p class="trademarks-card-text">
              Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для
              поставленных
              обществом задач.
            </p>
          </a>
          <a href="#!" class="trademarks-card">
            <svg class="trademarks-card-logo aliance" width="110" height="140">
              <use href="img/sprite.svg#aliance"></use>
            </svg>
            <h3 class="trademarks-card-title">Автохимия AP</h3>
            <p class="trademarks-card-text">
              Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для
              поставленных
              обществом задач.
            </p>
          </a>
        </div>
      </div>
    </section>

    <section class="founder">
      <div class="founder-photo">
        <img src="./img/founder.jpg" alt="founder">
      </div>
      <div class="container">
        <div class="founder__wrapper">
          <div class="founder__content">
            <div class="founder-heading">
              <h2 class="founder__title section-title">Отношение к делу<br> и к клиентам</h2>
            </div>
            <div class="founder__text">
              <p>
                Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика показывает, что
                укрепление и
                развитие внутренней структуры говорит о возможностях соответствующих условий активизации. Внезапно,
                независимые
                государства, которые представляют собой яркий пример континентально-европейского типа политической
                культуры, будут
                подвергнуты целой серии независимых исследований. С учётом сложившейся международной обстановки,
                синтетическое
                тестирование выявляет срочную потребность системы массового участия.
              </p>
              <p>
                А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в
                равной степени
                предоставлены сами себе. Не следует, однако, забывать, что выбранный нами инновационный путь в
                значительной степени
                обусловливает важность дальнейших направлений развития.
              </p>
            </div>
            <a class="button-link" href="#!">Подробнее о компании</a>
          </div>
        </div>
      </div>
    </section>

    <section class="clients">
      <div class="container">
        <div class="clients__wrapper">
          <div class="clients__descr">
            <h2 class="clients__title section-title">Производим аэрозольную продукцию для разных сфер</h2>
            <div class="clients__products">
              <ul class="clients__products-list">
                <li class="clients__products-item">
                  <svg class="clients__products-icon" width="30" height="30">
                    <use href="img/sprite.svg#prod1"></use>
                  </svg>
                  <p class="clients__products-text">Химические производства</p>
                </li>
                <li class="clients__products-item">
                  <svg class="clients__products-icon" width="30" height="30">
                    <use href="img/sprite.svg#prod2"></use>
                  </svg>
                  <p class="clients__products-text">Автомойки</p>
                </li>
                <li class="clients__products-item">
                  <svg class="clients__products-icon" width="30" height="30">
                    <use href="img/sprite.svg#prod3"></use>
                  </svg>
                  <p class="clients__products-text">Пищевая продукция</p>
                </li>
                <li class="clients__products-item">
                  <svg class="clients__products-icon" width="30" height="30">
                    <use href="img/sprite.svg#prod4"></use>
                  </svg>
                  <p class="clients__products-text">Лаки и краски</p>
                </li>
                <li class="clients__products-item">
                  <svg class="clients__products-icon" width="30" height="30">
                    <use href="img/sprite.svg#prod5"></use>
                  </svg>
                  <p class="clients__products-text">Косметические средства</p>
                </li>
                <li class="clients__products-item">
                  <svg class="clients__products-icon" width="30" height="30">
                    <use href="img/sprite.svg#prod6"></use>
                  </svg>
                  <p class="clients__products-text">Автомобильная косметика</p>
                </li>
                <li class="clients__products-item">
                  <svg class="clients__products-icon" width="30" height="30">
                    <use href="img/sprite.svg#prod7"></use>
                  </svg>
                  <p class="clients__products-text">Косметика по уходу за одеждой</p>
                </li>
                <li class="clients__products-item">
                  <svg class="clients__products-icon" width="30" height="30">
                    <use href="img/sprite.svg#prod8"></use>
                  </svg>
                  <p class="clients__products-text">Косметика по уходу за обувью</p>
                </li>
                <li class="clients__products-item">
                  <svg class="clients__products-icon" width="30" height="30">
                    <use href="img/sprite.svg#prod9"></use>
                  </svg>
                  <p class="clients__products-text">Строительные материалы</p>
                </li>
                <li class="clients__products-item">
                  <svg class="clients__products-icon" width="18" height="3">
                    <use href="img/sprite.svg#prod-etc"></use>
                  </svg>
                  <p class="clients__products-text">И многих других</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="clients__logos">
            <ul class="clients__logos-list">
              <li class="clients__logos-item">
                <a href="#!"><img src="img/client-logo.png" alt="client logo" class="clients__logos-logo"></a>
              </li>
              <li class="clients__logos-item">
                <a href="#!"><img src="img/client-logo.png" alt="client logo" class="clients__logos-logo"></a>
              </li>
              <li class="clients__logos-item">
                <a href="#!"><img src="img/client-logo.png" alt="client logo" class="clients__logos-logo"></a>
              </li>
              <li class="clients__logos-item">
                <a href="#!"><img src="img/client-logo.png" alt="client logo" class="clients__logos-logo"></a>
              </li>
              <li class="clients__logos-item">
                <a href="#!"><img src="img/client-logo.png" alt="client logo" class="clients__logos-logo"></a>
              </li>
              <li class="clients__logos-item">
                <a href="#!"><img src="img/client-logo.png" alt="client logo" class="clients__logos-logo"></a>
              </li>
              <li class="clients__logos-item">
                <a href="#!"><img src="img/client-logo.png" alt="client logo" class="clients__logos-logo"></a>
              </li>
              <li class="clients__logos-item">
                <a href="#!"><img src="img/client-logo.png" alt="client logo" class="clients__logos-logo"></a>
              </li>
              <li class="clients__logos-item">
                <a href="#!"><img src="img/client-logo.png" alt="client logo" class="clients__logos-logo"></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="blog">
      <div class="container">
        <h2 class="blog__title section-title">Блог экспертов в области производства</h2>

        <div class="swiper blog-slider">

          <div class="swiper-wrapper blog-slider-wrapper">

            <a href="#!" class="swiper-slide blog-card">
              <img src="./img/blog/blog1.jpg" alt="" class="blog-card__image">
              <div class="blog-card__descr">
                <h3 class="blog-card__title">Современная методология разработки одухотворила всех причастных</h3>
                <p class="blog-card__text">Действия представителей оппозиции, превозмогая сложившуюся непростую
                  экономическую ситуацию, в равной степени предоставлены...</p>
              </div>
            </a>
            <a href="#!" class="swiper-slide blog-card">
              <img src="./img/blog/blog2.jpg" alt="" class="blog-card__image">
              <div class="blog-card__descr">
                <h3 class="blog-card__title">Сложно сказать, почему жизнь прекрасна</h3>
                <p class="blog-card__text">Сложно сказать, почему элементы политического процесса функционально
                  разнесены на независимые элементы. Безусловно,
                  высокотехнологичная...</p>
              </div>
            </a>
            <a href="#!" class="swiper-slide blog-card">
              <img src="./img/blog/blog1.jpg" alt="" class="blog-card__image">
              <div class="blog-card__descr">
                <h3 class="blog-card__title">Современная методология разработки одухотворила всех причастных</h3>
                <p class="blog-card__text">Действия представителей оппозиции, превозмогая сложившуюся непростую
                  экономическую ситуацию, в равной степени предоставлены...</p>
              </div>
            </a>
            <a href="#!" class="swiper-slide blog-card">
              <img src="./img/blog/blog2.jpg" alt="" class="blog-card__image">
              <div class="blog-card__descr">
                <h3 class="blog-card__title">Сложно сказать, почему жизнь прекрасна</h3>
                <p class="blog-card__text">Сложно сказать, почему элементы политического процесса функционально
                  разнесены на
                  независимые элементы. Безусловно,
                  высокотехнологичная...</p>
              </div>
            </a>
          </div>

          <div class="blog-slider__footer">
            <a href="#!" class="button-link">Весь блог</a>
            <div class="blog-buttons primary-buttons">
              <div class="blog-button-prev primary-button-prev">
                <svg class="left-svg" width="36" height="24">
                  <use href="img/sprite.svg#left"></use>
                </svg>
              </div>
              <div class="blog-button-next primary-button-next">
                <svg class="right-svg" width="36" height="24">
                  <use href="img/sprite.svg#right"></use>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php include_once('footer.php');?>

  <div class="modal" id="modal" popover>
    <div class="modal__heading">
      <h2 class="modal__title">Есть вопросы?</h2>
      <button class="modal__close" popovertarget="modal">
        <svg class="notify-icon" width="50" height="50">
          <use href="img/sprite.svg#close"></use>
        </svg>
      </button>
    </div>
    <p class="modal__text">
      Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и
      поможем даже в
      самых сложных случаях!
    </p>
    <form action="#" class="modal__form">
      <div class="modal__form-inputs">
        <div class="modal__form-input">
          <input id="modal-user-name" type="text" class="modal__input" placeholder="">
          <label class="modal__input-label" for="modal-user-name">Имя</label>
        </div>
        <div class="modal__form-input">
          <input id="modal-user-phone" type="tel" class="modal__input" placeholder="">
          <label class="modal__input-label" for="modal-user-phone">Номер телефона</label>
        </div>
      </div>
      <div class="modal__form-actions">
        <button class="modal__form-btn btn" type="submit">Отправить заявку</button>
        <div class="modal__form-notify">
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

  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
