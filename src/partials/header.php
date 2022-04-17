<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <!-- Базовые мета-теги для поисковиков -->
  <title>Заголовок</title>

  <!-- Иконки для страницы -->
  <link rel="shortcut icon" href="img/favicons/favicon.ico" type="image/x-icon">
  <link rel="icon" sizes="16x16" href="img/favicons/favicon-16x16.png" type="image/png">
  <link rel="icon" sizes="32x32" href="img/favicons/favicon-32x32.png" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="img/favicons/apple-touch-icon-precomposed.png">
  <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="167x167" href="img/favicons/apple-touch-icon-167x167.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
  <link rel="apple-touch-icon" sizes="1024x1024" href="img/favicons/apple-touch-icon-1024x1024.png">

  <!-- Метатеги которые выводят информацию о странице в поисковой запрос -->
  <meta name="description" content="описание не длиннее 155 символов" />
  <meta name="keywords" content="мета-теги, шаблон, html, css, acr0matic" />

  <!-- Метатеги для ссылок в социальных сетях -->
  <meta property="og:locale" content="ru_RU" />
  <meta property="og:type" content="">

  <meta property="og:title" content="">
  <meta property="og:description" content="" />
  <meta property="og:image" content="">
  <meta property="og:url" content="">

  <!-- Контролирует поведение поисковых систем при индексации страницы -->
  <meta name="robots" content="index,follow,noodp" />

  <!-- Покраска адресной строки в мобильных Chrome, Firefox OS и Opera -->
  <meta name="theme-color" content="#4285f4" />

  <!-- Для iOS Safari -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="#4285f4">

  <!-- Yandex.Metrika counter -->

  <!-- /Yandex.Metrika counter -->

  <!-- Шрифты -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- Стили -->
  <!-- build:css -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- endbuild -->
</head>

<body class="page">

  <!-- Шапка -->
  <header id="header">
    <div class="container">
      <div class="header">
        <div class="header__logo">
          <a href="index.php">
            <img src="img/logo.svg" alt="" class="logo">
          </a>
        </div>
        <!-- /.header__logo -->

        <nav class="header__nav nav nav--header">
          <ul class="nav__list">
            <li class="nav__item dropdown">
              <a class="nav__link">Услуги</a>
              <div class="dropdown__wrapper">
                <ul class="nav__list nav__list--vertical">
                  <li class="nav__item mb-3 mb-xl-4 me-0"><a href="laboratory.php" class="nav__link">Зуботехническая лаборатория</a></li>
                  <li class="nav__item mb-3 mb-xl-4 me-0"><a href="milling.php" class="nav__link">Фрезерный центр</a></li>
                  <li class="nav__item mb-3 mb-xl-4 me-0"><a href="pressing.php" class="nav__link">E.maxPress</a></li>
                  <li class="nav__item mb-3 mb-xl-4 me-0"><a href="printing.php" class="nav__link">3D печать</a></li>
                  <li class="nav__item"><a href="coworking.php" class="nav__link">Коворкинг</a></li>
                </ul>
              </div>
              <!-- /.dropdown__wrapper -->
            </li>

            <li class="nav__item dropdown">
              <a class="nav__link">О компании</a>
              <div class="dropdown__wrapper">
                <ul class="nav__list nav__list--vertical">
                <li class="nav__item mb-3 mb-xl-4 me-0"><a href="cifrodent.php" class="nav__link">О нас</a></li>
                  <li class="nav__item mb-3 mb-xl-4 me-0"><a href="equipment.php" class="nav__link">Оборудование</a></li>
                  <li class="nav__item mb-3 mb-xl-4 me-0"><a href="team.php" class="nav__link">Сотрудники</a></li>
                  <li class="nav__item mb-3 mb-xl-4 me-0"><a href="document.php" class="nav__link">Документы</a></li>
                  <li class="nav__item"><a href="vacancy.php" class="nav__link">Вакансии</a></li>
                </ul>
              </div>
              <!-- /.dropdown__wrapper -->
            </li>
            <li class="nav__item"><a href="partnership.php" class="nav__link">Партнерство</a></li>
            <li class="nav__item"><a href="" class="nav__link">Контакты</a></li>
          </ul>
        </nav>
        <!-- /.header__nav -->

        <div class="header__action">
          <button style="display: none;" class="header__button button button--tiny button-secondary me-3">Войти</button>
          <button style="display: none;" class="header__button button button--small button-outline">Регистрация</button>

          <button class="header__button button button--small button-outline" data-micromodal-trigger="modal-callback" data-modal-target="callback">Оставить заявку</button>

          <a class="header__phone" href="tel:+79515166262">8 951 516 62 62</a>
        </div>
        <!-- /.header__action -->

        <div class="header__mobile">
          <button class="hamburger hamburger--minus" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>
        <!-- /.header__mobile -->
      </div>
      <!-- /.header -->
    </div>
    <!-- /.container -->
  </header>

  <div id="mobile-menu" class="mobile-menu">
    <div class="mobile-menu__overlay"></div>

    <div class="mobile-menu__wrapper">
      <div class="mobile-menu__action mb-4">
        <span style="display: none;" class="mb-2">Личный кабинет</span>

        <button style="display: none;" class="header__button button button-outline mb-2 me-2">Регистрация</button>
        <button style="display: none;" class="header__button button button-secondary">Войти</button>

        <button class="header__button button button--small button-outline" data-micromodal-trigger="modal-callback" data-modal-target="callback">Оставить заявку</button>
      </div>
      <!-- /.mobile-menu__action -->

      <nav class="mobile-menu__nav nav nav--mobile">
        <ul class="nav__list">
          <li class="nav__item mb-2"><a href="" class="nav__link nav__link--bold">Услуги</a></li>
          <li class="nav__item mb-2 ms-2"><a href="" class="nav__link">Зуботехническая лаборатория</a></li>
          <li class="nav__item mb-2 ms-2"><a href="" class="nav__link">Фрезерный центр</a></li>
          <li class="nav__item mb-2 ms-2"><a href="" class="nav__link">Лаборатория-коворкинг</a></li>
          <li class="nav__item mb-2 ms-2"><a href="" class="nav__link">E.maxPress</a></li>
          <li class="nav__item mb-4 ms-2"><a href="" class="nav__link">3D печать</a></li>

          <li class="nav__item mb-2"><a href="" class="nav__link nav__link--bold">О компании</a></li>
          <li class="nav__item mb-2 ms-2"><a href="" class="nav__link">О нас</a></li>
          <li class="nav__item mb-2 ms-2"><a href="" class="nav__link">Сотрудники</a></li>
          <li class="nav__item mb-2 ms-2"><a href="" class="nav__link">Партнерство</a></li>
          <li class="nav__item mb-2 ms-2"><a href="" class="nav__link">Вакансии</a></li>
          <li class="nav__item mb-2 ms-2"><a href="" class="nav__link">Оборудование</a></li>
          <li class="nav__item mb-4 ms-2"><a href="" class="nav__link">Документы</a></li>

          <li class="nav__item mb-4"><a href="" class="nav__link nav__link--bold">Контакты</a></li>
        </ul>
      </nav>

      <a href="tel:+79515166262" class="mobile-menu__phone">8 951 516 62 62</a>
    </div>
    <!-- /.mobile-menu__wrapper -->
  </div>
  <!-- /.mobile-menu -->