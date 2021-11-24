<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Universal</title>
    <style>
      html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}img{border-style:none}button,input,select,textarea{font-family:inherit;font-size:100%;line-height:1.15;margin:0}button,input{overflow:visible}button,select{text-transform:none}button{-webkit-appearance:button}button::-moz-focus-inner{border-style:none;padding:0}button:-moz-focusring{outline:1px dotted ButtonText}textarea{overflow:auto}[type="checkbox"]{-webkit-box-sizing:border-box;box-sizing:border-box;padding:0}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}[hidden]{display:none}@font-face{font-family:'Lato-Regular';src:url("../fonts/Lato-Regular.woff") format("woff"),url("../fonts/Lato-Regular.woff2") format("woff2");font-weight:normal;font-style:normal;font-display:swap}@font-face{font-family:'Lato-Black';src:url("../fonts/Lato-Black.woff") format("woff"),url("../fonts/Lato-Black.woff2") format("woff2");font-weight:normal;font-style:normal;font-display:swap}@font-face{font-family:'Roboto Slab';font-style:normal;font-weight:400;font-display:swap;src:url("../fonts/roboto-slab-v16-latin_cyrillic-regular.eot");src:local(""),url("../fonts/roboto-slab-v16-latin_cyrillic-regular.eot?#iefix") format("embedded-opentype"),url("../fonts/roboto-slab-v16-latin_cyrillic-regular.woff2") format("woff2"),url("../fonts/roboto-slab-v16-latin_cyrillic-regular.woff") format("woff"),url("../fonts/roboto-slab-v16-latin_cyrillic-regular.ttf") format("truetype"),url("../fonts/roboto-slab-v16-latin_cyrillic-regular.svg#RobotoSlab") format("svg")}*{-webkit-box-sizing:border-box;box-sizing:border-box}body{font-family:"Lato-Regular";background-color:#EDEFF0}a{text-decoration:none}.container{width:1140px;margin:0 auto}.header{padding:15px 0 15px 0}.header-main{background-color:#262D33}.header-wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.header-link{display:-webkit-box;display:-ms-flexbox;display:flex}.header-logo{width:163px;height:40px}.header-nav{margin:0 5px 0 0;padding:0;display:-webkit-box;display:-ms-flexbox;display:flex;list-style:none}.header-nav__item{display:-webkit-box;display:-ms-flexbox;display:flex}.header-nav__item:not(:nth-last-child(2)){margin-right:30px}.header-nav__item--mobile-visible{display:none}.header-nav__link{font-family:'Lato-Black';text-decoration:none;font-style:normal;font-size:14px;line-height:20px;color:#fff}.header-nav__link::after{content:'';display:block;width:0;height:2px;background:#fff}.header__request-btn{width:261px;padding:9px 0 10px 0;font-family:"Lato-Regular",sans-serif;font-size:14px;line-height:20px;color:#fff;text-transform:uppercase;background:#656B70;border-radius:10px;border:none}.header-burger{width:16px;height:14px;margin:0;padding:0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;border:none;background-color:transparent}.header-burger__line{width:100%;height:2px;background-color:#fff}.header-burger--mobile-visible{display:none}.scroll-up{position:fixed;right:30px;bottom:30px;z-index:1000;width:50px;height:50px;color:#dcdcdc;visibility:hidden;border-radius:50px;-webkit-box-shadow:inset 0 0 0 4px #dcdcdc;box-shadow:inset 0 0 0 4px #dcdcdc;opacity:0;-webkit-transform:translateY(25px);transform:translateY(25px)}.scroll-up::before{content:"в†‘";position:absolute;top:0;left:0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;width:100%;height:100%;font-size:20px}.scroll-up__svg-path{width:100%;height:100%;-webkit-box-sizing:border-box;box-sizing:border-box;fill:none;stroke:#4592FF;stroke-width:4px}.modal__overlay{position:fixed;top:0;right:0;bottom:0;left:0;background-color:rgba(40,47,54,0.8);z-index:100;visibility:hidden;opacity:0}.modal__dialog{max-width:360px;max-height:95%;padding:33px 35px 37px;position:fixed;top:50%;left:50%;z-index:101;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);background:#fff;border-radius:10px;visibility:hidden;opacity:0;overflow:auto}.modal__close{position:absolute;top:15px;right:15px;text-decoration:none}.modal-form{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;color:#262D33;font-weight:normal;font-style:normal}.modal__title{-ms-flex-preferred-size:100%;flex-basis:100%;margin:0 0 22px 0;font-family:Roboto Slab;font-size:20px;line-height:25px}.modal-select{width:100%;color:#939699;-webkit-appearance:none;-moz-appearance:none;appearance:none}.modal-select__item{color:#4B5157}.modal__select-wrapper{height:55px;position:relative;-ms-flex-preferred-size:100%;flex-basis:100%}.modal__select-wrapper::after{content:"";width:10px;height:10px;position:absolute;top:15px;right:15px;background-image:url("../img/select-arrow.svg");background-repeat:no-repeat;background-position:center center}.modal__input{padding:9px 11px;height:40px;width:100%;background:#fff;border:1px solid #D9DADB;border-radius:5px;font-style:normal;font-weight:normal;font-size:14px;line-height:20px}.modal__input-title{-ms-flex-preferred-size:100%;flex-basis:100%;margin:0 0 5px 0;font-family:"Lato-Black";font-weight:normal;font-style:normal;font-size:14px;line-height:20px}.modal__checkbox-container{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;height:20px;margin-bottom:33px;-ms-flex-preferred-size:100%;flex-basis:100%}.modal__checkbox-text{-webkit-box-ordinal-group:0;-ms-flex-order:-1;order:-1;font-style:normal;font-weight:normal;font-size:14px;line-height:20px;color:#4B5157;display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.modal__checkbox-text::before{content:'';display:inline-block;width:20px;height:20px;-ms-flex-negative:0;flex-shrink:0;-webkit-box-flex:0;-ms-flex-positive:0;flex-grow:0;border:1px solid #adb5bd;border-radius:0.25em;margin-right:0.5em;background-repeat:no-repeat;background-position:center center;background-size:50% 50%}.modal__message{width:100%;height:120px;resize:none}.modal__message-wrapper{width:100%;height:135px}.modal__email-wrapper{height:55px;-ms-flex-preferred-size:100%;flex-basis:100%}.modal__submit{padding:10px 25px;font-family:"Lato-Black";font-style:normal;font-weight:normal;font-size:14px;line-height:20px;color:#fff;border:none;background:#4592FF;border-radius:20px}.custom-checkbox{position:absolute;z-index:-1;opacity:0}.article-main{position:relative;background-image:-webkit-gradient(linear,left bottom,left top,from(rgba(38,45,51,0.75)),to(rgba(38,45,51,0.75))),url("../img/article-page__main-img.jpg");background-image:linear-gradient(0deg,rgba(38,45,51,0.75),rgba(38,45,51,0.75)),url("../img/article-page__main-img.jpg");background-repeat:no-repeat;background-size:cover}.article-main__wrapper{padding:60px 97px 72px 97px;position:relative}.article-main__favorite{position:absolute;top:151px;left:5px;width:21px;height:27px;opacity:0.4;fill:#fff;-webkit-transform:none;transform:none}@media (max-width:1200px){.container{width:960px}.header-nav__item:not(:last-child){margin-right:20px}.header__request-btn{width:230px}}@media (max-width:992px){.container{max-width:700px}.header-logo{width:100px;height:auto}.header-nav{margin:0}.header-nav__item:not(:last-child){margin-right:15px}.header-nav__link{font-size:11px;line-height:13px}.header-nav__link:after{display:none}.header__request-btn{width:154px;font-size:11px;line-height:13px}.article-main__wrapper{padding-left:60px;padding-right:60px}.article-main__favorite{top:141px}}@media (max-width:768px){.container{width:92%}body{padding-top:62px}.header{min-height:62px}.header-logo{width:115px}.header--mobile-fixed{position:fixed;top:0;right:0;left:0;z-index:9}.header-nav{display:none;padding:20px 0}.header-nav__item:not(:last-child){margin-right:0;margin-bottom:20px}.header-nav__item:not(:nth-last-child(2)){margin-right:0}.header-nav__item--mobile-visible{display:-webkit-box;display:-ms-flexbox;display:flex}.header-nav__link{font-size:16px;line-height:20px}.header__request-btn--mobile{font-size:16px;line-height:20px;width:200px}.header__request-btn--mobile-visible{display:none}.header-burger--mobile-visible{display:-webkit-box;display:-ms-flexbox;display:flex}.modal__dialog{width:75%;max-width:auto}.article-main__wrapper{padding:50px 50px 60px 50px}.article-main__favorite{top:132px}}@media (max-width:576px){.article-main__favorite{top:155px}.scroll-up{width:30px;height:30px}}@media (max-width:480px){.modal__dialog{width:95%}.article-main__wrapper{padding-left:30px;padding-right:30px}.article-main__favorite{top:152px;width:15px}}
    </style>
    <link rel="preload" as="style" href="css/style.css" onload="this.rel='stylesheet'">
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  </head>
  <body>
    <header class="header header-article header--mobile-fixed" id="header">
      <div class="container">
        <div class="header-wrapper">
          <a href="index.php" class="header-link">
            <img src="img/header-logo-other-pages.svg" alt="logo" id="header-logo" class="header-logo" />
          </a>
          <ul class="header-nav">
            <li class="header-nav__item">
              <a href="#articles" class="header-nav__link header-nav__link--grey">Статьи</a>
            </li>
            <li class="header-nav__item">
              <a href="#news" class="header-nav__link header-nav__link--grey">Новости</a>
            </li>
            <li class="header-nav__item">
              <a href="#hot" class="header-nav__link header-nav__link--grey">Горячее</a>
            </li>
            <li class="header-nav__item">
              <a href="#footer" class="header-nav__link header-nav__link--grey">HTML</a>
            </li>
            <li class="header-nav__item">
              <a href="#footer" class="header-nav__link header-nav__link--grey">CSS</a>
            </li>
            <li class="header-nav__item">
              <a href="#footer" class="header-nav__link header-nav__link--grey">JavaScript</a>
            </li>
            <li class="header-nav__item">
              <a href="#footer" class="header-nav__link header-nav__link--grey">Web Design</a>
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
            <span class="header-burger__line header-burger__line--black"></span>
            <span class="header-burger__line header-burger__line--black"></span>
            <span class="header-burger__line header-burger__line--black"></span>
          </button>
        </div>
        <!-- /.header-wrapper -->
      </div>
      <!-- /.container -->
    </header>