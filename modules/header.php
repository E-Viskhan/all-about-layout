<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Universal</title>
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  </head>
  <body>
    <header class="header header--mobile-fixed" id="header">
      <div class="container">
        <div class="header-wrapper">
          <a href="index.php" class="header-link">
            <img src="img/header-logo.svg" alt="logo" id="header-logo" class="header-logo" />
          </a>
          <ul class="header-nav">
            <li class="header-nav__item">
              <a href="#articles" class="header-nav__link">Статьи</a>
            </li>
            <li class="header-nav__item">
              <a href="#news" class="header-nav__link">Новости</a>
            </li>
            <li class="header-nav__item">
              <a href="#hot" class="header-nav__link">Горячее</a>
            </li>
            <li class="header-nav__item">
              <a href="#footer" class="header-nav__link">HTML</a>
            </li>
            <li class="header-nav__item">
              <a href="#footer" class="header-nav__link">CSS</a>
            </li>
            <li class="header-nav__item">
              <a href="#footer" class="header-nav__link">JavaScript</a>
            </li>
            <li class="header-nav__item">
              <a href="#footer" class="header-nav__link">Web Design</a>
            </li>
            <li class="header-nav__item header-nav__item--mobile-visible">
              <button data-toggle="modal" class="header__request-btn header__request-btn--mobile">
                оставить заявку
              </button>
            </li>
          </ul>
          <button data-toggle="modal"
            class="header__request-btn header__request-btn--mobile-visible"
          >
            оставить заявку
          </button>
          <button class="header-burger header-burger--mobile-visible">
            <span class="header-burger__line"></span>
            <span class="header-burger__line"></span>
            <span class="header-burger__line"></span>
          </button>
        </div>
        <!-- /.header-wrapper -->
      </div>
      <!-- /.container -->
    </header>