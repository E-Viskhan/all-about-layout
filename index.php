<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Universal</title>
    <!-- <link rel="stylesheet" href="css/critical.min.css"> -->
    <style>
      html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}h1{font-size:2em;margin:0.67em 0}a{background-color:transparent}img{border-style:none}button,input,select,textarea{font-family:inherit;font-size:100%;line-height:1.15;margin:0}button,input{overflow:visible}button,select{text-transform:none}button{-webkit-appearance:button}button::-moz-focus-inner{border-style:none;padding:0}button:-moz-focusring{outline:1px dotted ButtonText}textarea{overflow:auto}[type="checkbox"]{-webkit-box-sizing:border-box;box-sizing:border-box;padding:0}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}[hidden]{display:none}@font-face{font-family:'Lato-Regular';src:url("../fonts/Lato-Regular.woff") format("woff"),url("../fonts/Lato-Regular.woff2") format("woff2");font-weight:normal;font-style:normal;font-display:swap}@font-face{font-family:'Lato-Black';src:url("../fonts/Lato-Black.woff") format("woff"),url("../fonts/Lato-Black.woff2") format("woff2");font-weight:normal;font-style:normal;font-display:swap}@font-face{font-family:'Roboto Slab';font-style:normal;font-weight:400;font-display:swap;src:url("../fonts/roboto-slab-v16-latin_cyrillic-regular.eot");src:local(""),url("../fonts/roboto-slab-v16-latin_cyrillic-regular.eot?#iefix") format("embedded-opentype"),url("../fonts/roboto-slab-v16-latin_cyrillic-regular.woff2") format("woff2"),url("../fonts/roboto-slab-v16-latin_cyrillic-regular.woff") format("woff"),url("../fonts/roboto-slab-v16-latin_cyrillic-regular.ttf") format("truetype"),url("../fonts/roboto-slab-v16-latin_cyrillic-regular.svg#RobotoSlab") format("svg")}*{-webkit-box-sizing:border-box;box-sizing:border-box}body{font-family:"Lato-Regular";background-color:#EDEFF0}a{text-decoration:none}.container{width:1140px;margin:0 auto}.header{padding:15px 0 15px 0}.header-main{background-color:#262D33}.header-wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.header-link{display:-webkit-box;display:-ms-flexbox;display:flex}.header-logo{width:163px;height:40px}.header-nav{margin:0 5px 0 0;padding:0;display:-webkit-box;display:-ms-flexbox;display:flex;list-style:none}.header-nav__item{display:-webkit-box;display:-ms-flexbox;display:flex}.header-nav__item:not(:nth-last-child(2)){margin-right:30px}.header-nav__item--mobile-visible{display:none}.header-nav__link{font-family:'Lato-Black';text-decoration:none;font-style:normal;font-size:14px;line-height:20px;color:#fff}.header-nav__link::after{content:'';display:block;width:0;height:2px;background:#fff}.header__request-btn{width:261px;padding:9px 0 10px 0;font-family:"Lato-Regular",sans-serif;font-size:14px;line-height:20px;color:#fff;text-transform:uppercase;background:#656B70;border-radius:10px;border:none}.header-burger{width:16px;height:14px;margin:0;padding:0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;border:none;background-color:transparent}.header-burger__line{width:100%;height:2px;background-color:#fff}.header-burger--mobile-visible{display:none}.tabs{background:-webkit-gradient(linear,left top,left bottom,color-stop(79%,#262D33),color-stop(21%,#EDEFF0));background:linear-gradient(to bottom,#262D33 79%,#EDEFF0 21%);padding-top:30px;margin-bottom:30px}.tabs-wrapper{min-height:570px;display:-webkit-box;display:-ms-flexbox;display:flex;border-radius:10px;overflow:hidden}.tabs-content{width:877px;min-height:100%;list-style-type:none;padding:0;margin:0}.tabs-content__wrapper{padding:55px}.tabs-content__item{display:none;height:100%;width:100%;background-repeat:no-repeat;background-size:cover;background-position:center center}.tabs-content__item--active{display:block}.tabs-content__item-0{background-image:-webkit-gradient(linear,left bottom,left top,from(rgba(64,48,61,0.35)),to(rgba(64,48,61,0.35))),url("../img/tabs-content-img-0.jpg");background-image:linear-gradient(0deg,rgba(64,48,61,0.35),rgba(64,48,61,0.35)),url("../img/tabs-content-img-0.jpg")}.tabs-content__item-1{background-image:-webkit-gradient(linear,left bottom,left top,from(rgba(64,48,61,0.35)),to(rgba(64,48,61,0.35))),url("../img/tabs-content-img-1.png");background-image:linear-gradient(0deg,rgba(64,48,61,0.35),rgba(64,48,61,0.35)),url("../img/tabs-content-img-1.png")}.tabs-content__item-2{background-image:-webkit-gradient(linear,left bottom,left top,from(rgba(64,48,61,0.35)),to(rgba(64,48,61,0.35))),url("../img/tabs-content-img-2.jpg");background-image:linear-gradient(0deg,rgba(64,48,61,0.35),rgba(64,48,61,0.35)),url("../img/tabs-content-img-2.jpg")}.tabs-content__item-3{background-image:-webkit-gradient(linear,left bottom,left top,from(rgba(64,48,61,0.35)),to(rgba(64,48,61,0.35))),url("../img/tabs-content-img-3.jpg");background-image:linear-gradient(0deg,rgba(64,48,61,0.35),rgba(64,48,61,0.35)),url("../img/tabs-content-img-3.jpg")}.tabs-content__item-4{background-image:-webkit-gradient(linear,left bottom,left top,from(rgba(64,48,61,0.35)),to(rgba(64,48,61,0.35))),url("../img/tabs-content-img-4.png");background-image:linear-gradient(0deg,rgba(64,48,61,0.35),rgba(64,48,61,0.35)),url("../img/tabs-content-img-4.png")}.tabs-content__item-5{background-image:-webkit-gradient(linear,left bottom,left top,from(rgba(64,48,61,0.35)),to(rgba(64,48,61,0.35))),url("../img/tabs-content-img-5.jpg");background-image:linear-gradient(0deg,rgba(64,48,61,0.35),rgba(64,48,61,0.35)),url("../img/tabs-content-img-5.jpg")}.tabs-list{width:263px;min-height:100%;padding-top:20px;background-color:#fff}.tabs-list__ul{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin:0;padding:0;list-style-type:none}.tabs-list__title{margin:0;padding:0 25px 19px 25px;font-family:'Lato-Black';font-style:normal;font-size:14px;line-height:20px;text-transform:uppercase;color:#262D33;border-bottom:1px solid #D9DADB}.tabs-list__item{min-height:100px;padding:17px 25px 19px 25px;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-line-pack:start;align-content:start;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-preferred-size:100%;flex-basis:100%;border-bottom:1px solid #D9DADB}.tabs-list__item--last{border-bottom:none;min-height:110px}.tabs-list__topic{margin-bottom:8px;-ms-flex-preferred-size:100%;flex-basis:100%;font-family:"Lato-Black";font-weight:700;font-style:normal;font-size:12px;line-height:15px;text-transform:uppercase}.tabs-list__topic-1{color:#3BBDC4}.tabs-list__topic-2{color:#6E99AE}.tabs-list__topic-3{color:#AC8EE3}.tabs-list__topic-4{color:#FFA34D}.tabs-list__topic-5{color:#3DC47E}.tabs-list__text{font-style:normal;font-weight:normal;font-size:14px;line-height:20px;color:#4B5157}.content-author{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.content-author__info{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.content-author__img{border-radius:50%;margin-right:10px}.content-author__name{margin-bottom:2px;color:#fff;font-style:normal;font-weight:normal;font-size:14px;line-height:20px}.content-author__work{font-style:normal;font-weight:normal;font-size:12px;line-height:15px;color:#fff;opacity:0.4}.content-article{max-width:600px;margin-top:142px}.content-article__title{margin-top:20px;margin-bottom:20px;min-height:130px;color:#fff;font-family:"Roboto Slab",serif;font-style:normal;font-weight:700;font-size:40px;line-height:50px}.content-article__topic{color:#4592FF;font-family:'Lato-Black';font-style:normal;font-size:12px;line-height:15px;text-transform:uppercase;letter-spacing:0.5px}.content-article__arrow{margin-left:8px}.content-article__btn{display:inline-block;padding:10px 22px 10px 20px;color:#fff;font-family:"Lato-Black";font-style:normal;font-size:14px;line-height:20px;background-color:#4592FF;border-radius:20px;border:none}.four-articles__wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:30px 25px 35px 25px;margin-bottom:30px;background-color:#262D33;border-radius:10px}.four-articles__article{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;text-decoration:none;opacity:1}.four-articles__article:not(:last-child){padding-right:25px;border-right:1px solid #4B5157}.four-articles__img{width:65px;height:65px;-o-object-fit:cover;object-fit:cover}.four-articles__title{margin:0 15px 0 0;width:154px;font-family:"Lato-Black";font-style:normal;font-weight:normal;font-size:14px;line-height:20px;color:#fff}.grid-articles{margin-bottom:60px}.grid-articles__wrapper{display:-ms-grid;display:grid;-ms-grid-columns:(1fr)[4];grid-template-columns:repeat(4,1fr);-ms-grid-rows:(minmax(170px,auto))[4];grid-template-rows:repeat(4,minmax(170px,auto));grid-gap:30px;-webkit-box-align:start;-ms-flex-align:start;align-items:start}.grid-articles__main{-ms-grid-column:1;-ms-grid-column-span:2;grid-column:1 / 3;-ms-grid-row:1;-ms-grid-row-span:2;grid-row:1 / 3}.grid-main{background-color:#fff;border-radius:10px}.grid-main__wrapper{padding-top:15px}.grid-main__top{display:-webkit-box;display:-ms-flexbox;display:flex;padding-left:35px}.grid-main__left{padding-top:16px;max-width:228px}.grid-main__topic{font-family:"Lato-Black";font-style:normal;font-size:12px;line-height:15px;letter-spacing:0.5px;text-transform:uppercase;color:#6E99AE}.grid-main__link{text-decoration:none;margin-bottom:25px}.grid-main__title{margin-bottom:0;padding-bottom:25px;font-family:Roboto Slab;font-style:normal;font-weight:bold;font-size:25px;line-height:30px;color:#262D33}.grid-main__text{margin:0;font-style:normal;font-size:14px;line-height:20px;color:#4B5157}.grid-main__img{width:292px;height:299px;-o-object-fit:cover;object-fit:cover}.grid-popular{grid-column:span 1;grid-row:span 2;background:-webkit-gradient(linear,left bottom,left top,from(rgba(64,48,61,0.35)),to(rgba(64,48,61,0.35))),url("../img/popular.jpeg");background:linear-gradient(0deg,rgba(64,48,61,0.35),rgba(64,48,61,0.35)),url("../img/popular.jpeg");background-position:center;background-size:cover;border-radius:10px;overflow:hidden}.grid-popular__wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;padding:19px 26px 25px 25px}.grid-popular__link{position:relative;z-index:2;display:block;text-decoration:none;color:#fff}.grid-popular__btn{margin-bottom:116px;width:92px;min-height:25px;background-color:#3DC47E;border:none;border-radius:5px;font-style:normal;font-weight:normal;font-size:12px;line-height:15px;color:#fff;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.grid-popular__topic{margin-bottom:23px;font-family:"Lato-Black";font-style:normal;font-size:12px;line-height:15px;letter-spacing:0.5px;text-transform:uppercase;color:#E7D9FF}.grid-popular__title{margin:0 0 2px 0;min-height:100px;font-family:Roboto Slab;font-style:normal;font-weight:bold;font-size:16px;line-height:25px;letter-spacing:0.5px;text-transform:uppercase;color:#fff}.grid-checklist{grid-column:span 1;grid-row:span 1;border-radius:10px;overflow:hidden;background:#3BBDC4;position:relative}.grid-checklist__link{width:100%;height:100%;display:block;position:relative;z-index:2;text-decoration:none}.grid-checklist__wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.grid-checklist::after{content:"";display:block;width:80px;height:80px;position:absolute;top:20px;right:10px;background-image:url("../img/icon-file.svg");background-repeat:no-repeat}.grid-checklist__wrapper{padding:24px 25px 0 25px}.grid-checklist__title{margin:0;font-family:Roboto Slab;font-style:normal;font-weight:bold;font-size:16px;line-height:25px;color:#fff;margin-bottom:10px}.grid-checklist__text{font-style:normal;font-weight:normal;font-size:14px;line-height:20px;color:#C1F4F5;margin-bottom:19px}.grid-checklist__bottom{padding:12px 10px 13px 10px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;border-top:1px solid #96E2E3}.grid-checklist__icon{margin-right:10px}.grid-checklist__download{font-family:"Lato-Black";font-style:normal;font-weight:normal;font-size:14px;line-height:20px;color:#fff}.scroll-up{position:fixed;right:30px;bottom:30px;z-index:1000;width:50px;height:50px;color:#dcdcdc;visibility:hidden;border-radius:50px;-webkit-box-shadow:inset 0 0 0 4px #dcdcdc;box-shadow:inset 0 0 0 4px #dcdcdc;opacity:0;-webkit-transform:translateY(25px);transform:translateY(25px)}.scroll-up::before{content:"↑";position:absolute;top:0;left:0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;width:100%;height:100%;font-size:20px}.scroll-up__svg-path{width:100%;height:100%;-webkit-box-sizing:border-box;box-sizing:border-box;fill:none;stroke:#4592FF;stroke-width:4px}.modal__overlay{position:fixed;top:0;right:0;bottom:0;left:0;background-color:rgba(40,47,54,0.8);z-index:100;visibility:hidden;opacity:0}.modal__dialog{max-width:360px;max-height:95%;padding:33px 35px 37px;position:fixed;top:50%;left:50%;z-index:101;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);background:#fff;border-radius:10px;visibility:hidden;opacity:0;overflow:auto}.modal__close{position:absolute;top:15px;right:15px;text-decoration:none}.modal-form{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;color:#262D33;font-weight:normal;font-style:normal}.modal__title{-ms-flex-preferred-size:100%;flex-basis:100%;margin:0 0 22px 0;font-family:Roboto Slab;font-size:20px;line-height:25px}.modal-select{width:100%;color:#939699;-webkit-appearance:none;-moz-appearance:none;appearance:none}.modal-select__item{color:#4B5157}.modal__select-wrapper{height:55px;position:relative;-ms-flex-preferred-size:100%;flex-basis:100%}.modal__select-wrapper::after{content:"";width:10px;height:10px;position:absolute;top:15px;right:15px;background-image:url("../img/select-arrow.svg");background-repeat:no-repeat;background-position:center center}.modal__input{padding:9px 11px;height:40px;width:100%;background:#fff;border:1px solid #D9DADB;border-radius:5px;font-style:normal;font-weight:normal;font-size:14px;line-height:20px}.modal__input-title{-ms-flex-preferred-size:100%;flex-basis:100%;margin:0 0 5px 0;font-family:"Lato-Black";font-weight:normal;font-style:normal;font-size:14px;line-height:20px}.modal__checkbox-container{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;height:20px;margin-bottom:33px;-ms-flex-preferred-size:100%;flex-basis:100%}.modal__checkbox-text{-webkit-box-ordinal-group:0;-ms-flex-order:-1;order:-1;font-style:normal;font-weight:normal;font-size:14px;line-height:20px;color:#4B5157;display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.modal__checkbox-text::before{content:'';display:inline-block;width:20px;height:20px;-ms-flex-negative:0;flex-shrink:0;-webkit-box-flex:0;-ms-flex-positive:0;flex-grow:0;border:1px solid #adb5bd;border-radius:0.25em;margin-right:0.5em;background-repeat:no-repeat;background-position:center center;background-size:50% 50%}.modal__message{width:100%;height:120px;resize:none}.modal__message-wrapper{width:100%;height:135px}.modal__email-wrapper{height:55px;-ms-flex-preferred-size:100%;flex-basis:100%}.modal__submit{padding:10px 25px;font-family:"Lato-Black";font-style:normal;font-weight:normal;font-size:14px;line-height:20px;color:#fff;border:none;background:#4592FF;border-radius:20px}.custom-checkbox{position:absolute;z-index:-1;opacity:0}@media (max-width:1200px){.container{width:960px}.header-nav__item:not(:last-child){margin-right:20px}.header__request-btn{width:230px}.tabs{background:-webkit-gradient(linear,left top,left bottom,color-stop(75%,#262D33),color-stop(21%,#EDEFF0));background:linear-gradient(to bottom,#262D33 75%,#EDEFF0 21%);padding-top:20px}.tabs-wrapper{min-height:540px}.tabs-content{width:700px}.tabs-content__wrapper{padding:22px}.tabs-list{width:260px}.content-article__title{min-height:140px}.four-articles__wrapper{padding:25px 20px 30px 20px}.four-articles__article:not(:last-child){padding-right:15px}.four-articles__title{width:130px}.grid-main__wrapper{padding-top:23px}.grid-main__title{font-size:23px;line-height:28px}.grid-main__img{width:202px;height:206px}.grid-main__top{-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding-left:25px;padding-bottom:25px}.grid-main__left{padding-top:0;margin-right:10px}.grid-popular__wrapper{padding-right:20px}.grid-popular__btn{margin-bottom:90px}.grid-popular__title{margin-bottom:18px}.grid-checklist__wrapper{padding:19px 25px 0 25px}.grid-checklist__bottom{padding:10px 10px 10px 10px}.grid-checklist__text{margin-bottom:10px}}@media (max-width:992px){.container{max-width:700px}.header-logo{width:100px;height:auto}.header-nav{margin:0}.header-nav__item:not(:last-child){margin-right:15px}.header-nav__link{font-size:11px;line-height:13px}.header-nav__link:after{display:none}.header__request-btn{width:154px;font-size:11px;line-height:13px}.tabs{background:-webkit-gradient(linear,left top,left bottom,color-stop(67%,#262D33),color-stop(33%,#EDEFF0));background:linear-gradient(to bottom,#262D33 67%,#EDEFF0 33%);margin-bottom:20px}.tabs-wrapper{min-height:500px;-ms-flex-wrap:wrap;flex-wrap:wrap}.tabs-content{min-height:400px}.tabs-list{padding-top:0;width:100%}.tabs-list__title{display:none}.tabs-list__item{border-bottom:none;min-height:100px;padding:17px 12px 18px 12px;-ms-flex-preferred-size:33%;flex-basis:33%}.tabs-list__item:nth-child(3){-ms-flex-preferred-size:34%;flex-basis:34%}.tabs-list__item:last-child,.tabs-list__item:nth-last-child(2){display:none}.tabs-list__text{font-size:13px}.content-article{max-width:100%;margin-top:105px}.content-article__title{min-height:80px;font-size:30px;line-height:36px}.four-articles__wrapper{-ms-flex-wrap:wrap;flex-wrap:wrap;padding:25px}.four-articles__article{-ms-flex-preferred-size:47%;flex-basis:47%}.four-articles__article:first-child,.four-articles__article:nth-child(2){margin-bottom:30px}.four-articles__article:not(:last-child){padding-right:28px}.four-articles__article:nth-child(2),.four-articles__article:nth-child(4){padding-right:0;border-right:none}.four-articles__title{width:190px;margin-right:20px}.four-articles__img{width:80px;height:65px;border-radius:5px}.grid-articles{margin-bottom:40px}.grid-articles__wrapper{-ms-grid-columns:(1fr)[3];grid-template-columns:repeat(3,1fr);-ms-grid-rows:(minmax(175px,auto))[4];grid-template-rows:repeat(4,minmax(175px,auto));grid-gap:20px}.grid-main__wrapper{padding-top:25px}.grid-main__title{font-size:22px;line-height:26px}.grid-main__top{padding-bottom:30px}.grid-checklist__wrapper{padding:15px 25px 0 25px}}@media (max-width:768px){.container{width:92%}body{padding-top:62px}.header{min-height:62px}.header-logo{width:115px}.header--mobile-fixed{position:fixed;top:0;right:0;left:0;z-index:9}.header-nav{display:none;padding:20px 0}.header-nav__item:not(:last-child){margin-right:0;margin-bottom:20px}.header-nav__item:not(:nth-last-child(2)){margin-right:0}.header-nav__item--mobile-visible{display:-webkit-box;display:-ms-flexbox;display:flex}.header-nav__link{font-size:16px;line-height:20px}.header__request-btn--mobile{font-size:16px;line-height:20px;width:200px}.header__request-btn--mobile-visible{display:none}.header-burger--mobile-visible{display:-webkit-box;display:-ms-flexbox;display:flex}.tabs{background:-webkit-gradient(linear,left top,left bottom,color-stop(59%,#262D33),color-stop(41%,#EDEFF0));background:linear-gradient(to bottom,#262D33 59%,#EDEFF0 41%)}.tabs-content{min-height:auto}.tabs-list__item{-ms-flex-preferred-size:50%;flex-basis:50%}.tabs-list__item:nth-child(3){-ms-flex-preferred-size:50%;flex-basis:50%}.tabs-list__item:nth-last-child(2){display:-webkit-box;display:-ms-flexbox;display:flex}.content-article{margin-top:100px}.content-article__title{min-height:95px;font-size:24px;line-height:30px}.four-articles__wrapper{padding:35px}.four-articles__article{-ms-flex-preferred-size:100%;flex-basis:100%;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.four-articles__article:not(:last-child){margin-bottom:10px;padding-right:0;border-right:0}.four-articles__title{width:auto;margin-right:20px;font-size:16px}.grid-articles__wrapper{-ms-grid-columns:(1fr)[2];grid-template-columns:repeat(2,1fr);-ms-grid-rows:(minmax(175px,auto))[5];grid-template-rows:repeat(5,minmax(175px,auto));-webkit-box-align:stretch;-ms-flex-align:stretch;align-items:stretch}.grid-main__title{font-size:25px;line-height:30px}.grid-main__top{-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding-bottom:30px}.grid-main__img{width:250px;height:auto}.grid-popular{-ms-grid-row:3;-ms-grid-row-span:2;grid-row:3 / 5;-ms-grid-column:1;-ms-grid-column-span:1;grid-column:1 / 2}.grid-popular__wrapper{padding-right:20px;padding-left:20px}.grid-checklist{-ms-grid-row:7;-ms-grid-row-span:1;grid-row:7 / 8;-ms-grid-column:1;-ms-grid-column-span:1;grid-column:1 / 2}.grid-checklist__wrapper{padding:24px 25px 0 25px}.grid-checklist__text{margin-bottom:19px}.grid-checklist__bottom{padding-top:12px;padding-bottom:13px}.modal__dialog{width:75%;max-width:auto}}@media (max-width:576px){.content-article{margin-top:40px}.tabs{background:-webkit-gradient(linear,left top,left bottom,color-stop(55%,#262D33),color-stop(45%,#EDEFF0));background:linear-gradient(to bottom,#262D33 55%,#EDEFF0 45%)}.four-articles__title{width:60%;font-size:14px;margin-right:0}.four-articles__img{width:75px}.grid-articles__wrapper{-ms-grid-columns:1fr;grid-template-columns:1fr;-ms-grid-rows:minmax(min-content,auto);grid-template-rows:minmax(-webkit-min-content,auto);grid-template-rows:minmax(min-content,auto);grid-auto-rows:minmax(-webkit-min-content,auto);grid-auto-rows:minmax(min-content,auto)}.grid-main{-ms-grid-row:1;-ms-grid-row-span:1;grid-row:1 / 2;-ms-grid-column:1;-ms-grid-column-span:1;grid-column:1 / 2}.grid-main__wrapper{padding-top:20px}.grid-main__top{padding-bottom:20px;padding-left:20px}.grid-main__left{width:49%}.grid-main__title{font-size:22px;line-height:26px}.grid-main__img{width:49%}.grid-popular{-ms-grid-row:2;-ms-grid-row-span:1;grid-row:2 / 3;-ms-grid-column:1;-ms-grid-column-span:1;grid-column:1 / 2}.grid-checklist{-ms-grid-row:8;-ms-grid-row-span:1;grid-row:8 / 9;-ms-grid-column:1;-ms-grid-column-span:1;grid-column:1 / 2}.scroll-up{width:30px;height:30px}}@media (max-width:480px){.tabs{background:-webkit-gradient(linear,left top,left bottom,color-stop(52%,#262D33),color-stop(48%,#EDEFF0));background:linear-gradient(to bottom,#262D33 52%,#EDEFF0 48%)}.tabs-list__item{-ms-flex-preferred-size:100%;flex-basis:100%}.tabs-list__item:nth-child(3){-ms-flex-preferred-size:100%;flex-basis:100%}.grid-main__img{display:none}.grid-main__left{width:100%;max-width:100%}.modal__dialog{width:95%}}@media (max-width:320px){.tabs{background:-webkit-gradient(linear,left top,left bottom,color-stop(40%,#262D33),color-stop(60%,#EDEFF0));background:linear-gradient(to bottom,#262D33 40%,#EDEFF0 60%)}}
    </style>
    <link rel="preload" as="style" href="css/style.css" onload="this.rel='stylesheet'">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  </head>
  <body>
    <header class="header header-main header--mobile-fixed" id="header">
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
    <section class="tabs">
      <div class="container">
        <div class="tabs-wrapper">
          <ul class="tabs-content">
            <li id="article-0"
              class="
                tabs-content__item
                tabs-content__item-0
                tabs-content__item--active
                b-lazy
              "
              data-src="img/tabs-content-img-0.jpg"
            >
              <div class="tabs-content__wrapper">
                <div class="tabs-content__author content-author">
                  <img
                    src="img/tabs-author-img.png"
                    alt="Фото автора статьи"
                    class="content-author__img"
                  />
                  <div class="content-author__info">
                    <span class="content-author__name">Давид Гуров</span>
                    <span class="content-author__work">Разработчик</span>
                  </div>
                  <!-- /.content-author__info -->
                </div>
                <!-- /.tabs-content__author -->
                <div class="tabs-content__article content-article">
                  <span class="content-article__topic">Javascript</span>
                  <h1 class="content-article__title">
                    Расширение Chrome защищает от атак
                  </h1>

                  <a
                    class="content-article__btn read-more-link"
                    href="article.php"
                  >
                    Читать далее
                    <img
                      src="img/article-more-arrow.svg"
                      alt="Стрелка читать далее"
                      class="content-article__arrow"
                    />
                  </a>
                </div>
                <!-- /.tabs-content__article -->
              </div>
              <!-- /.tabs-content__wrapper -->
            </li>
            <li id="article-1" class="tabs-content__item tabs-content__item-1">
              <div class="tabs-content__wrapper">
                <div class="tabs-content__author content-author">
                  <img
                    src="img/tabs-author-img.png"
                    alt="Фото автора статьи"
                    class="content-author__img"
                  />
                  <div class="content-author__info">
                    <span class="content-author__name">Давид Гуров</span>
                    <span class="content-author__work">Разработчик</span>
                  </div>
                  <!-- /.content-author__info -->
                </div>
                <!-- /.tabs-content__author -->
                <div class="tabs-content__article content-article">
                  <span class="content-article__topic">Css</span>
                  <h1 class="content-article__title">
                    Как использовать CSS float после Flexbox
                  </h1>
                  <a
                    class="content-article__btn read-more-link"
                    href="article.php"
                  >
                    Читать далее
                    <img
                      src="img/article-more-arrow.svg"
                      alt="Стрелка читать далее"
                      class="content-article__arrow"
                  /></a>
                </div>
                <!-- /.tabs-content__article -->
              </div>
              <!-- /.tabs-content__wrapper -->
            </li>
            <li id="article-2" class="tabs-content__item tabs-content__item-2">
              <div class="tabs-content__wrapper">
                <div class="tabs-content__author content-author">
                  <img
                    src="img/tabs-author-img.png"
                    alt="Фото автора статьи"
                    class="content-author__img"
                  />
                  <div class="content-author__info">
                    <span class="content-author__name">Давид Гуров</span>
                    <span class="content-author__work">Разработчик</span>
                  </div>
                  <!-- /.content-author__info -->
                </div>
                <!-- /.tabs-content__author -->
                <div class="tabs-content__article content-article">
                  <span class="content-article__topic">Javascript</span>
                  <h1 class="content-article__title">
                    На каком стандарте писать скрипты, если я фрилансер
                  </h1>
                  <a
                    class="content-article__btn read-more-link"
                    href="article.php"
                  >
                    Читать далее
                    <img
                      src="img/article-more-arrow.svg"
                      alt="Стрелка читать далее"
                      class="content-article__arrow"
                  /></a>
                </div>
                <!-- /.tabs-content__article -->
              </div>
              <!-- /.tabs-content__wrapper -->
            </li>
            <li id="article-3" class="tabs-content__item tabs-content__item-3">
              <div class="tabs-content__wrapper">
                <div class="tabs-content__author content-author">
                  <img
                    src="img/tabs-author-img.png"
                    alt="Фото автора статьи"
                    class="content-author__img"
                  />
                  <div class="content-author__info">
                    <span class="content-author__name">Давид Гуров</span>
                    <span class="content-author__work">Разработчик</span>
                  </div>
                  <!-- /.content-author__info -->
                </div>
                <!-- /.tabs-content__author -->
                <div class="tabs-content__article content-article">
                  <span class="content-article__topic">Html</span>
                  <h1 class="content-article__title">
                    Правильно вставляем картинку на сайт для Retina дисплея
                  </h1>
                  <a
                    class="content-article__btn read-more-link"
                    href="article.php"
                  >
                    Читать далее
                    <img
                      src="img/article-more-arrow.svg"
                      alt="Стрелка читать далее"
                      class="content-article__arrow"
                  /></a>
                </div>
                <!-- /.tabs-content__article -->
              </div>
              <!-- /.tabs-content__wrapper -->
            </li>
            <li id="article-4" class="tabs-content__item tabs-content__item-4">
              <div class="tabs-content__wrapper">
                <div class="tabs-content__author content-author">
                  <img
                    src="img/tabs-author-img.png"
                    alt="Фото автора статьи"
                    class="content-author__img"
                  />
                  <div class="content-author__info">
                    <span class="content-author__name">Давид Гуров</span>
                    <span class="content-author__work">Разработчик</span>
                  </div>
                  <!-- /.content-author__info -->
                </div>
                <!-- /.tabs-content__author -->
                <div class="tabs-content__article content-article">
                  <span class="content-article__topic">Web design</span>
                  <h1 class="content-article__title">
                    ТОП-10 плагинов для Figma
                  </h1>
                  <a
                    class="content-article__btn read-more-link"
                    href="article.php"
                  >
                    Читать далее
                    <img
                      src="img/article-more-arrow.svg"
                      alt="Стрелка читать далее"
                      class="content-article__arrow"
                  /></a>
                </div>
                <!-- /.tabs-content__article -->
              </div>
              <!-- /.tabs-content__wrapper -->
            </li>
            <li id="article-5" class="tabs-content__item tabs-content__item-5">
              <div class="tabs-content__wrapper">
                <div class="tabs-content__author content-author">
                  <img
                    src="img/tabs-author-img.png"
                    alt="Фото автора статьи"
                    class="content-author__img"
                  />
                  <div class="content-author__info">
                    <span class="content-author__name">Давид Гуров</span>
                    <span class="content-author__work">Разработчик</span>
                  </div>
                  <!-- /.content-author__info -->
                </div>
                <!-- /.tabs-content__author -->
                <div class="tabs-content__article content-article">
                  <span class="content-article__topic">css</span>
                  <h1 class="content-article__title">
                    Возможности CSS Grid Layout , которые уже можно применять
                  </h1>
                  <a
                    class="content-article__btn read-more-link"
                    href="article.php"
                  >
                    Читать далее
                    <img
                      src="img/article-more-arrow.svg"
                      alt="Стрелка читать далее"
                      class="content-article__arrow"
                  /></a>
                </div>
                <!-- /.tabs-content__article -->
              </div>
              <!-- /.tabs-content__wrapper -->
            </li>
          </ul>
          <div class="tabs-list">
            <h2 class="tabs-list__title">Рекомендуем</h2>
            <ul class="tabs-list__ul">
              <li data-target="#article-1" class="tabs-list__item">
                <span class="tabs-list__topic tabs-list__topic-1">css</span>
                <span class="tabs-list__text"
                  >Как использовать CSS float после того, как вышел
                  Flexbox</span
                >
              </li>
              <li data-target="#article-2" class="tabs-list__item">
                <span class="tabs-list__topic tabs-list__topic-2"
                  >javascript</span
                >
                <span class="tabs-list__text"
                  >На каком стандарте писать скрипты, если я фрилансер</span
                >
              </li>
              <li data-target="#article-3" class="tabs-list__item">
                <span class="tabs-list__topic tabs-list__topic-3">html</span>
                <span class="tabs-list__text"
                  >Правильно вставляем картинку на сайт для Retina дисплея</span
                >
              </li>
              <li data-target="#article-4" class="tabs-list__item">
                <span class="tabs-list__topic tabs-list__topic-4"
                  >Web design</span
                >
                <span class="tabs-list__text">ТОП-10 плагинов для Figma</span>
              </li>
              <li
                data-target="#article-5"
                class="tabs-list__item tabs-list__item--last"
              >
                <span class="tabs-list__topic tabs-list__topic-5">CSS</span>
                <span class="tabs-list__text"
                  >Возможности CSS Grid Layout , которые уже можно применять
                </span>
              </li>
            </ul>
          </div>
          <!-- /.tabs-list__wrapper -->
        </div>
        <!-- /.tabs-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.tabs -->
    <section class="four-articles" id="hot">
      <div class="container">
        <div class="four-articles__wrapper">
          <a class="four-articles__article" href="article.php">
            <h2 class="four-articles__title">
              25 способов настроить&nbsp;слайдер
            </h2>
            <img
              src="img/four-articles__img-1.jpg"
              alt="Картинка из блока с 4-мя статьями"
              class="four-articles__img"
            />
          </a>
          <a class="four-articles__article" href="article.php">
            <h2 class="four-articles__title">Главные фишки фрилансера</h2>
            <img
              src="img/four-articles__img-2.jpg"
              alt="Картинка из блока с 4-мя статьями"
              class="four-articles__img"
            />
          </a>
          <a class="four-articles__article" href="article.php">
            <h2 class="four-articles__title">
              Техника управлеия временем “Помодоро”
            </h2>
            <img
              src="img/four-articles__img-3.jpg"
              alt="Картинка из блока с 4-мя статьями"
              class="four-articles__img"
            />
          </a>
          <a class="four-articles__article" href="article.php">
            <h2 class="four-articles__title">Что нужно знать о Git и GitHub</h2>
            <img
              src="img/four-articles__img-4.jpg"
              alt="Картинка из блока с 4-мя статьями"
              class="four-articles__img"
            />
          </a>
        </div>
        <!-- /.four-articles__wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.four-articles -->
    <section class="grid-articles" id="articles">
      <div class="container">
        <div class="grid-articles__wrapper">
          <div class="grid-articles__main grid-main">
            <div class="grid-main__wrapper">
              <div class="grid-main__top">
                <div class="grid-main__left">
                  <span class="grid-main__topic">Статьи</span>
                  <a href="article.php" class="grid-main__link">
                    <h2 class="grid-main__title">
                      Вам предложили работу мечты, но вы не можете...
                    </h2>
                  </a>
                  <p class="grid-main__text">
                    Как поступить, если хочется пойти на работу мечты, но она
                    находится в другом городе. У вас семья и переезжать вы не
                    готовы.
                  </p>
                </div>
                <!-- /.grid-main__left -->
                <img
                  data-src="img/grid-main__img.jpg"
                  alt="Фото: Машина"
                  class="grid-main__img b-lazy"
                />
              </div>
              <!-- /.grid-main__top -->
              <div class="grid-main__bottom">
                <img
                  data-src="img/grid-main__author-img.png"
                  alt="Фото: Автор"
                  class="grid-main__author-img b-lazy"
                />
                <span class="grid-main__author-name">Инна Квашова:</span>
                <div class="grid-main__bottom-desc">
                  <span class="grid-main__author-text"
                    >Каждый разработчик мечтает переехать&nbsp;в...</span
                  >
                  <img
                    src="img/icon-comments.svg"
                    alt="Иконка: Комментарий"
                    class="grid-main__icon"
                  />
                  <span class="grid-main__number">342</span>
                </div>
                <!-- /.grid-main__bottom-mobile -->
              </div>
              <!-- /.grid-main__bottom -->
            </div>
            <!-- /.grid-main__wrapper -->
          </div>
          <!-- /.grid-articles__main -->
          <div class="grid-articles__popular grid-popular">
            <a href="article.php" class="grid-popular__link">
              <div class="grid-popular__wrapper">
                <span class="grid-popular__btn">Популярное</span>
                <span class="grid-popular__topic">Web design</span>
                <h2 class="grid-popular__title">
                  Где взять реальные проекты для портфолио
                </h2>
                <div class="grid-popular__author">
                  <img
                    data-src="img/grid-main__author-img.png"
                    alt="Фото: Автор"
                    class="grid-popular__author-img b-lazy"
                  />
                  <div class="grid-popular__author-wrapper">
                    <span class="grid-popular__author-name"
                      >Сара Женникова</span
                    >
                    <div class="grid-popular__desc">
                      <span class="grid-popular__date"> 25 сентября</span>
                      <span class="grid-popular__comments">16</span>
                      <span class="grid-popular__likes">832</span>
                    </div>
                    <!-- /.grid-popular__desc -->
                  </div>
                  <!-- /.grid-popular__author-wrapper -->
                </div>
                <!-- /.grid-popular__author -->
              </div>
              <!-- /.grid-popular__wrapper -->
            </a>
          </div>
          <!-- /.grid-articles__popular -->
          <div class="grid-articles__checklist grid-checklist">
            <a
              href="files/checklist-universal.pdf"
              class="grid-checklist__link"
              download
            >
              <div class="grid-checklist__wrapper">
                <h2 class="grid-checklist__title">
                  Чек-лист сдачи верстки вашему заказчику
                </h2>
                <span class="grid-checklist__text">PDF, 125 Мб</span>
                <!-- /.grid-checklist__bottom -->
              </div>
              <div class="grid-checklist__bottom">
                <img
                  src="img/icon-download.svg"
                  alt="Иконка: Загрузка"
                  class="grid-checklist__icon"
                />
                <span class="grid-checklist__download">Скачать</span>
              </div>
              <!-- /.grid-checklist__wrapper -->
            </a>
          </div>
          <!-- /.grid-articles__checklist -->
          <div class="grid-articles__tags grid-tags">
            <h2 class="grid-tags__title">теги</h2>
            <div class="grid-tags__wrapper">
              <a href="#" class="grid-tags__tag">Forest</a>
              <a href="#" class="grid-tags__tag">Hover tag</a>
              <a href="#" class="grid-tags__tag">Nature</a
              ><a href="#" class="grid-tags__tag">Recreation</a
              ><a href="#" class="grid-tags__tag">Tent</a
              ><a href="#" class="grid-tags__tag">Fresh air</a
              ><a href="#" class="grid-tags__tag">Summer</a
              ><a href="#" class="grid-tags__tag">Mountains</a
              ><a href="#" class="grid-tags__tag">Wood</a
              ><a href="#" class="grid-tags__tag">Map</a
              ><a href="#" class="grid-tags__tag">Sun</a
              ><a href="#" class="grid-tags__tag">Wild animals</a
              ><a href="#" class="grid-tags__tag">Night</a>
            </div>
            <!-- /.grid-tags__wrapper -->
          </div>
          <!-- /.grid-articles__tags grid-tags -->
          <div class="grid-articles__tools grid-tools">
            <a href="article.php" class="grid-tools__link">
              <div class="grid-tools__wrapper">
                <img
                  data-src="img/notebook.jpg"
                  alt="Фото: Ноутбук"
                  class="grid-tools__img b-lazy"
                />
                <h2 class="grid-tools__title">
                  20+ инструментов <br />для js-разработчика
                </h2>
              </div>
              <!-- /.grid-tools__wrapper -->
            </a>
          </div>
          <!-- /.grid-articles__tools grid-tools -->
          <div class="grid-articles__source grid-source">
            <a href="article.php" class="grid-source__link">
              <div class="grid-source__wrapper">
                <h2 class="grid-source__title">Удачные референсы</h2>
                <p class="grid-source__text">
                  Как выбрать подходящие исходники, если вы ищите идею для
                  интерфейса
                </p>
                <span class="grid-source__date">15 октября</span>
              </div>
              <!-- /.grid-source__wrapper -->
            </a>
          </div>
          <!-- /.grid-articles__source grid-source -->
          <div class="grid-articles__customers grid-customers">
            <a href="article.php" class="grid-customers__link">
              <div class="grid-customers__wrapper">
                <h2 class="grid-customers__title">Заказчики — мудаки?</h2>
                <p class="grid-customers__text">
                  Как защититься от бесконечных правок на этапе сдачи проекта
                </p>
                <span class="grid-customers__date">20 октября</span>
              </div>
              <!-- /.grid-customers__wrapper -->
            </a>
          </div>
          <!-- /.grid-articles__customers grid-customers -->
          <div class="grid-articles__stress grid-stress">
            <a href="article.php" class="grid-stress__link">
              <div class="grid-stress__wrapper">
                <h2 class="grid-stress__title">Работа без стресса — это...</h2>
                <p class="grid-stress__text">
                  Обустройте свое рабочее место так, чтобы не испытывать
                  раздражение от скрипучего...
                </p>
                <span class="grid-stress__date">16 октября</span>
              </div>
              <!-- /.grid-stress__wrapper -->
            </a>
          </div>
          <!-- /.grid-articles__stress grid-stress -->
          <div class="grid-articles__methods grid-methods">
            <a href="article.php" class="grid-methods__link">
              <div class="grid-methods__wrapper">
                <h2 class="grid-methods__title">Бесплатные методы...</h2>
                <p class="grid-methods__text">
                  Как не платить за софт, если у вас есть студенческий билет
                  высшего учебного заведения
                </p>
                <span class="grid-methods__date">13 октября</span>
              </div>
              <!-- /.grid-methods__wrapper -->
            </a>
          </div>
          <!-- /.grid-articles__methods grid-methods -->
          <div class="grid-articles__social grid-social">
            <h2 class="grid-social__title">Наши соцсети</h2>
            <div class="grid-social__wrapper">
              <a
                href="https://www.facebook.com/elikhanov.viskhan"
                class="grid-social__link"
                target="_blank"
                ><img
                  src="img/fb.svg"
                  alt="Иконка: Facebook"
                  class="grid-social__img"
              /></a>
              <a
                href="https://twitter.com/95_viskhan"
                class="grid-social__link"
                target="_blank"
                ><img
                  src="img/tw.svg"
                  alt="Иконка: Twitter"
                  class="grid-social__img"
              /></a>
              <a
                href="https://www.youtube.com/channel/UCxB31phUnFwnAJ1iole6BgQ"
                class="grid-social__link"
                target="_blank"
                ><img
                  src="img/yt.svg"
                  alt="Иконка: Youtube"
                  class="grid-social__img"
              /></a>
            </div>
            <!-- /.grid-social__wrapper -->
          </div>
          <!-- /.grid-articles__social grid-social -->
        </div>
        <!-- /.grid-articles__wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.grid-articles -->
    <section class="full-width full-width--mb">
      <div class="container">
        <div class="full-width__wrapper">
          <h1 class="full-width__title">
            Расследование недели: сколько
            <br class="full-width__br" />
            зарабатывает веб разработчик в&nbsp;Москве
          </h1>
          <a class="full-width__btn read-more-link" href="article.php">
            Читать статью
            <img
              src="img/article-more-arrow.svg"
              alt="Стрелка читать далее"
              class="full-width__arrow"
          /></a>
        </div>
        <!-- /.full-width__wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.full-width -->
    <div class="broad-recently-container container" id="news">
      <section class="broad-articles">
        <div class="broad-articles__article broad-article">
          <div class="broad-article__wrapper">
            <img
              data-src="img/broad-article-img-1.jpg"
              alt="Фото рабочего места"
              class="broad-article__img b-lazy"
            />
            <div class="broad-article__info">
              <svg
                class="broad-article__favorite"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M2 0H12C13.1046 0 14 0.89543 14 2V18L7.09495 13L0 18V2C0 0.89543 0.89543 0 2 0Z"
                />
              </svg>
              <span class="broad-article__topic broad-article__topic-1"
                >Новости</span
              >
              <h2 class="broad-article__title">
                <a href="article.php" class="broad-article__link"
                  >Новый налоговый режим для фрилансеров — налог на проф.
                  доход</a
                >
              </h2>
              <p class="broad-article__text">
                Руководитель налоговой заявил, что этот режим “поможет выйти из
                тени” тем, кто работает неофициально. Разобрались, как работает
                режим и кому он подходит, а кому нет.
              </p>
              <div class="broad-article__bottom">
                <span class="broad-article__date">6 августа</span>
                <span class="broad-article__comments">342</span>
                <span class="broad-article__likes">830</span>
              </div>
              <!-- /.broad-article__bottom -->
            </div>
            <!-- /.broad-article__info -->
          </div>
          <!-- /.broad-article__wrapper -->
        </div>
        <!-- /.broad-articles__article broad-article -->
        <div class="broad-articles__article broad-article">
          <div class="broad-article__wrapper">
            <img
              data-src="img/broad-article-img-2.jpg"
              alt="Фото: Парень работает за компьютером"
              class="broad-article__img b-lazy"
            />
            <div class="broad-article__info">
              <svg
                class="broad-article__favorite"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M2 0H12C13.1046 0 14 0.89543 14 2V18L7.09495 13L0 18V2C0 0.89543 0.89543 0 2 0Z"
                />
              </svg>
              <span class="broad-article__topic broad-article__topic-2"
                >Мнения</span
              >
              <h2 class="broad-article__title">
                <a href="article.php" class="broad-article__link"
                  >Платные курсы — это не быстрый способ выйти на нужный
                  уровень</a
                >
              </h2>
              <p class="broad-article__text">
                Среди новичков распространено мнение, что если пройти
                <br class="broad-article__br" />
                какой-то крутой онлайн-курс, то это решит все проблемы. Но они
                не берут в расчет, что лучшее обучение — это практика.
              </p>
              <div class="broad-article__bottom">
                <span class="broad-article__date">7 октября</span>
                <span class="broad-article__comments">27</span>
                <span class="broad-article__likes">129</span>
              </div>
              <!-- /.broad-article__bottom -->
            </div>
            <!-- /.broad-article__info -->
          </div>
          <!-- /.broad-article__wrapper -->
        </div>
        <!-- /.broad-articles__article broad-article -->
        <div class="broad-articles__article broad-article">
          <div class="broad-article__wrapper">
            <img
              data-src="img/broad-article-img-3.jpg"
              alt="Фото: Рабочее место"
              class="broad-article__img b-lazy"
            />
            <div class="broad-article__info">
              <svg
                class="broad-article__favorite"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M2 0H12C13.1046 0 14 0.89543 14 2V18L7.09495 13L0 18V2C0 0.89543 0.89543 0 2 0Z"
                />
              </svg>
              <span class="broad-article__topic broad-article__topic-3"
                >Горячее</span
              >
              <h2 class="broad-article__title">
                <a href="article.php" class="broad-article__link"
                  >Из-за ограничений стали недоступны серверы Telegram. К чему
                  это может...</a
                >
              </h2>
              <p class="broad-article__text">
                Сегодня мы узнали, что серверы Telegram не доступны на
                территории России. Разобрались, чем это грозит вам, если ваш
                бизнес зависит от этого мессенджера.
              </p>
              <div class="broad-article__bottom">
                <span class="broad-article__date">12 декабря</span>
                <span class="broad-article__comments">30</span>
                <span class="broad-article__likes">284</span>
              </div>
              <!-- /.broad-article__bottom -->
            </div>
            <!-- /.broad-article__info -->
          </div>
          <!-- /.broad-article__wrapper -->
        </div>
        <!-- /.broad-articles__article broad-article -->
        <div class="broad-articles__article broad-article">
          <div class="broad-article__wrapper">
            <img
              data-src="img/broad-article-img-4.jpg"
              alt="Фото: Ноутбук и книги на столе"
              class="broad-article__img b-lazy"
            />
            <div class="broad-article__info">
              <svg
                class="broad-article__favorite"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M2 0H12C13.1046 0 14 0.89543 14 2V18L7.09495 13L0 18V2C0 0.89543 0.89543 0 2 0Z"
                />
              </svg>
              <span class="broad-article__topic broad-article__topic-4"
                >Мнения</span
              >
              <h2 class="broad-article__title">
                <a href="article.php" class="broad-article__link"
                  >В вашем портфолио могут быть фейковые проекты, если вы
                  сделали...</a
                >
              </h2>
              <p class="broad-article__text">
                Один из читателей предположил, что если в портфолио положить
                несуществующий проект, то ничего страшного не произойдет. Он
                провел эксперимент и потенциальные заказчики...
              </p>
              <div class="broad-article__bottom">
                <span class="broad-article__date">20 июля</span>
                <span class="broad-article__comments">102</span>
                <span class="broad-article__likes">1,293</span>
              </div>
              <!-- /.broad-article__bottom -->
            </div>
            <!-- /.broad-article__info -->
          </div>
          <!-- /.broad-article__wrapper -->
        </div>
        <!-- /.broad-articles__article broad-article -->
        <div class="broad-articles__article broad-article">
          <div class="broad-article__wrapper">
            <img
              data-src="img/broad-article-img-5.jpg"
              alt="Фото: Водопад"
              class="broad-article__img b-lazy"
            />
            <div class="broad-article__info">
              <svg
                class="broad-article__favorite"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M2 0H12C13.1046 0 14 0.89543 14 2V18L7.09495 13L0 18V2C0 0.89543 0.89543 0 2 0Z"
                />
              </svg>
              <span class="broad-article__topic broad-article__topic-5"
                >Горячее</span
              >
              <h2 class="broad-article__title">
                <a href="article.php" class="broad-article__link"
                  >Список стран, куда можно улететь</a
                >
              </h2>
              <p class="broad-article__text">
                Если вы приняли решение переехать в другую страну, чтобы найти
                там работу, сначала посмотрите на список стран, который мы
                подготовили для вас. Внутри важная информация про...
              </p>
              <div class="broad-article__bottom">
                <span class="broad-article__date">22 октября</span>
                <span class="broad-article__comments">5</span>
                <span class="broad-article__likes">82</span>
              </div>
              <!-- /.broad-article__bottom -->
            </div>
            <!-- /.broad-article__info -->
          </div>
          <!-- /.broad-article__wrapper -->
        </div>
        <!-- /.broad-articles__article broad-article -->
        <div class="broad-articles__article broad-article">
          <div class="broad-article__wrapper">
            <img
              data-src="img/broad-article-img-6.jpg"
              alt="Фото: Вкладка с открытым ютубом"
              class="broad-article__img b-lazy"
            />
            <div class="broad-article__info">
              <svg
                class="broad-article__favorite"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M2 0H12C13.1046 0 14 0.89543 14 2V18L7.09495 13L0 18V2C0 0.89543 0.89543 0 2 0Z"
                />
              </svg>
              <span class="broad-article__topic broad-article__topic-6"
                >Подборки</span
              >
              <h2 class="broad-article__title">
                <a href="article.php" class="broad-article__link"
                  >Список Youtube каналов для тех, кто только начинает изучать
                  разработку</a
                >
              </h2>
              <p class="broad-article__text">
                Мы собрали на одной странице кучу ссылок на полезные
                русскоязычные каналы, посвященные айти. Тут можно найти
                видеоуроки, лекции и бесплатные курсы.
              </p>
              <div class="broad-article__bottom">
                <span class="broad-article__date">26 октября</span>
                <span class="broad-article__comments">101</span>
                <span class="broad-article__likes">432</span>
              </div>
              <!-- /.broad-article__bottom -->
            </div>
            <!-- /.broad-article__info -->
          </div>
          <!-- /.broad-article__wrapper -->
        </div>
        <!-- /.broad-articles__article broad-article -->
      </section>
      <!-- /.broad-articles -->
      <section class="recently-published">
        <h2 class="recently-published__title">Недавно опубликовано</h2>
        <div class="recently-published__wrapper">
          <div
            class="
              recently-published__article
              recently-article recently-article-1
            "
          >
            <img
              data-src="img/recently-article__img-1.jpg"
              alt="Фото: Работа за ноутом"
              class="recently-article__img b-lazy"
            />
            <div class="recently-article__wrapper">
              <h3 class="recently-article__title">
                <a href="article.php" class="recently-article__link"
                  >Работа на удаленке, как это теперь</a
                >
              </h3>
              <span class="recently-article__time">15 минут назад</span>
            </div>

            <!-- /.recently-article__wrapper -->
          </div>
          <!-- /.recently-published__article recently-article recently-article-1 -->
          <div
            class="
              recently-published__article
              recently-article recently-article-2
            "
          >
            <img
              data-src="img/broad-article-img-1.jpg"
              alt="Фото: Рабочее место"
              class="recently-article__img b-lazy"
            />
            <div class="recently-article__wrapper">
              <h3 class="recently-article__title">
                <a href="article.php" class="recently-article__link"
                  >Для чего нужен Node.js и с чем...</a
                >
              </h3>
              <span class="recently-article__time">32 минуты назад</span>
            </div>
            <!-- /.recently-article__wrapper -->
          </div>
          <!-- /.recently-published__article recently-article recently-article-2 -->
          <div
            class="
              recently-published__article
              recently-article recently-article-3
            "
          >
            <img
              data-src="img/recently-article__img-3.jpg"
              alt="Фото: Работа в гугл"
              class="recently-article__img b-lazy"
            />
            <div class="recently-article__wrapper">
              <h3 class="recently-article__title">
                <a href="article.php" class="recently-article__link"
                  >Работа в Google: собеседования и...</a
                >
              </h3>
              <span class="recently-article__time">38 минут назад</span>
            </div>
            <!-- /.recently-article__wrapper -->
          </div>
          <!-- /.recently-published__article recently-article recently-article-3 -->
          <div
            class="
              recently-published__article
              recently-article recently-article-4
            "
          >
            <img
              data-src="img/recently-article__img-4.jpg"
              alt="Фото: Нью-йорк"
              class="recently-article__img b-lazy"
            />
            <div class="recently-article__wrapper">
              <h3 class="recently-article__title">
                <a href="article.php" class="recently-article__link"
                  >Переезд в Нью Йорк для работы по...</a
                >
              </h3>
              <span class="recently-article__time">53 минуты назад</span>
            </div>
            <!-- /.recently-article__wrapper -->
          </div>
          <!-- /.recently-published__article recently-article recently-article-4 -->
          <div
            class="
              recently-published__article
              recently-article recently-article-5
            "
          >
            <img
              data-src="img/recently-article__img-5.jpg"
              alt="Фото: Ноутбук"
              class="recently-article__img b-lazy"
            />
            <div class="recently-article__wrapper">
              <h3 class="recently-article__title">
                <a href="article.php" class="recently-article__link"
                  >Почему родители против того, чтобы...</a
                >
              </h3>
              <span class="recently-article__time">1 час назад</span>
            </div>
            <!-- /.recently-article__wrapper -->
          </div>
          <!-- /.recently-published__article recently-article recently-article-5 -->
          <div
            class="
              recently-published__article
              recently-article recently-article-6
            "
          >
            <img
              data-src="img/recently-article__img-6.jpg"
              alt="Фото: Аккуратное рабочее место"
              class="recently-article__img b-lazy"
            />
            <div class="recently-article__wrapper">
              <h3 class="recently-article__title">
                <a href="article.php" class="recently-article__link"
                  >Прокрастинация: побороть отклады...</a
                >
              </h3>
              <span class="recently-article__time">1 час назад</span>
            </div>
            <!-- /.recently-article__wrapper -->
          </div>
          <!-- /.recently-published__article recently-article recently-article-6 -->
          <div
            class="
              recently-published__article
              recently-article recently-article-7
            "
          >
            <img
              data-src="img/recently-article__img-7.jpg"
              alt="Фото: Аккуратное рабочее место"
              class="recently-article__img b-lazy"
            />
            <div class="recently-article__wrapper">
              <h3 class="recently-article__title">
                <a href="article.php" class="recently-article__link"
                  >Правки от заказчика могут быть...</a
                >
              </h3>
              <span class="recently-article__time">2 часа назад</span>
            </div>
            <!-- /.recently-article__wrapper -->
          </div>
          <!-- /.recently-published__article recently-article recently-article-7 -->
        </div>
        <!-- /.recently-published__wrapper -->
        <a href="article.php" class="recently-published__link">Read more</a>
      </section>
      <!-- /.recently-published -->
    </div>
    <!-- /.broad-recently-container container -->
    <section class="slider-section">
      <div class="container">
        <div class="slider-section__wrapper">
          <div class="slider-section__slider articles-slider">
            <div class="articles-slider__slide">
              <button class="articles-slider__tag">Горячее</button>
              <!-- /.articles-slider__btn -->
              <div class="articles-slider__wrapper">
                <div class="articles-slider__author">
                  <img
                    data-src="img/articles-slider__author-img-1.png"
                    alt="Фото: Автор статьи"
                    class="articles-slider__author-img b-lazy"
                  /><span class="articles-slider__author-name"
                    >Оксана Пушкина</span
                  >
                  <!-- /.articles-slider__author-name --><span
                    class="articles-slider__author-work"
                    >Фотограф</span
                  >
                  <!-- /.articles-slider__author-work -->
                </div>
                <!-- /.articles-slider__author -->
                <h1 class="articles-slider__title">
                  Выбор читателей: где удобнее работать фрилансеру
                </h1>
                <!-- /.articles-slider__title -->
                <a href="article.php" class="articles-slider__btn">
                  <img
                    src="img/icon-image.svg"
                    alt="Иконка: Изображение"
                    class="articles-slider__icon"
                  /><span class="articles-slider__more">Смотреть фото</span>
                  <!-- /.articles-slider__more --><span
                    class="articles-slider__number"
                    >26</span
                  >
                  <!-- /.articles-slider__number -->
                </a>
                <!-- /.articles-slider__btn -->
              </div>
              <!-- /.articles-slider__wrapper -->
            </div>
            <!-- /.articles-slider__slide -->
            <div class="articles-slider__slide">
              <button class="articles-slider__tag">Горячее</button>
              <!-- /.articles-slider__btn -->
              <div class="articles-slider__wrapper">
                <div class="articles-slider__author">
                  <img
                    data-src="img/articles-slider__author-img-1.png"
                    alt="Фото: Автор статьи"
                    class="articles-slider__author-img b-lazy"
                  /><span class="articles-slider__author-name"
                    >Оксана Пушкина</span
                  >
                  <!-- /.articles-slider__author-name --><span
                    class="articles-slider__author-work"
                    >Фотограф</span
                  >
                  <!-- /.articles-slider__author-work -->
                </div>
                <!-- /.articles-slider__author -->
                <h1 class="articles-slider__title">
                  Выбор читателей: где удобнее работать фрилансеру
                </h1>
                <!-- /.articles-slider__title -->
                <a href="article.php" class="articles-slider__btn">
                  <img
                    src="img/icon-image.svg"
                    alt="Иконка: Изображение"
                    class="articles-slider__icon"
                  /><span class="articles-slider__more">Смотреть фото</span>
                  <!-- /.articles-slider__more --><span
                    class="articles-slider__number"
                    >26</span
                  >
                  <!-- /.articles-slider__number -->
                </a>
                <!-- /.articles-slider__btn -->
              </div>
              <!-- /.articles-slider__wrapper -->
            </div>
            <!-- /.articles-slider__slide -->
            <div class="articles-slider__slide">
              <button class="articles-slider__tag">Горячее</button>
              <!-- /.articles-slider__btn -->
              <div class="articles-slider__wrapper">
                <div class="articles-slider__author">
                  <img
                    data-src="img/articles-slider__author-img-1.png"
                    alt="Фото: Автор статьи"
                    class="articles-slider__author-img b-lazy"
                  /><span class="articles-slider__author-name"
                    >Оксана Пушкина</span
                  >
                  <!-- /.articles-slider__author-name --><span
                    class="articles-slider__author-work"
                    >Фотограф</span
                  >
                  <!-- /.articles-slider__author-work -->
                </div>
                <!-- /.articles-slider__author -->
                <h1 class="articles-slider__title">
                  Выбор читателей: где удобнее работать фрилансеру
                </h1>
                <!-- /.articles-slider__title -->
                <a href="article.php" class="articles-slider__btn">
                  <img
                    src="img/icon-image.svg"
                    alt="Иконка: Изображение"
                    class="articles-slider__icon"
                  /><span class="articles-slider__more">Смотреть фото</span>
                  <!-- /.articles-slider__more --><span
                    class="articles-slider__number"
                    >26</span
                  >
                  <!-- /.articles-slider__number -->
                </a>
                <!-- /.articles-slider__btn -->
              </div>
              <!-- /.articles-slider__wrapper -->
            </div>
            <!-- /.articles-slider__slide -->
            <div class="articles-slider__slide">
              <button class="articles-slider__tag">Горячее</button>
              <!-- /.articles-slider__btn -->
              <div class="articles-slider__wrapper">
                <div class="articles-slider__author">
                  <img
                    data-src="img/articles-slider__author-img-1.png"
                    alt="Фото: Автор статьи"
                    class="articles-slider__author-img b-lazy"
                  /><span class="articles-slider__author-name"
                    >Оксана Пушкина</span
                  >
                  <!-- /.articles-slider__author-name --><span
                    class="articles-slider__author-work"
                    >Фотограф</span
                  >
                  <!-- /.articles-slider__author-work -->
                </div>
                <!-- /.articles-slider__author -->
                <h1 class="articles-slider__title">
                  Выбор читателей: где удобнее работать фрилансеру
                </h1>
                <!-- /.articles-slider__title -->
                <a href="article.php" class="articles-slider__btn">
                  <img
                    src="img/icon-image.svg"
                    alt="Иконка: Изображение"
                    class="articles-slider__icon"
                  /><span class="articles-slider__more">Смотреть фото</span>
                  <!-- /.articles-slider__more --><span
                    class="articles-slider__number"
                    >26</span
                  >
                  <!-- /.articles-slider__number -->
                </a>
                <!-- /.articles-slider__btn -->
              </div>
              <!-- /.articles-slider__wrapper -->
            </div>
            <!-- /.articles-slider__slide -->
            <div class="articles-slider__slide">
              <button class="articles-slider__tag">Горячее</button>
              <!-- /.articles-slider__btn -->
              <div class="articles-slider__wrapper">
                <div class="articles-slider__author">
                  <img
                    data-src="img/articles-slider__author-img-1.png"
                    alt="Фото: Автор статьи"
                    class="articles-slider__author-img b-lazy"
                  /><span class="articles-slider__author-name"
                    >Оксана Пушкина</span
                  >
                  <!-- /.articles-slider__author-name --><span
                    class="articles-slider__author-work"
                    >Фотограф</span
                  >
                  <!-- /.articles-slider__author-work -->
                </div>
                <!-- /.articles-slider__author -->
                <h1 class="articles-slider__title">
                  Выбор читателей: где удобнее работать фрилансеру
                </h1>
                <!-- /.articles-slider__title -->
                <a href="article.php" class="articles-slider__btn">
                  <img
                    src="img/icon-image.svg"
                    alt="Иконка: Изображение"
                    class="articles-slider__icon"
                  /><span class="articles-slider__more">Смотреть фото</span>
                  <!-- /.articles-slider__more --><span
                    class="articles-slider__number"
                    >26</span
                  >
                  <!-- /.articles-slider__number -->
                </a>
                <!-- /.articles-slider__btn -->
              </div>
              <!-- /.articles-slider__wrapper -->
            </div>
            <!-- /.articles-slider__slide -->
          </div>
          <!-- /.slider-section__slider articles-slider -->
          <div class="slider-section__main-card interview-questions">
            <div class="interview-questions__wrapper">
              <span class="interview-questions__topic">Карьера</span>
              <h2 class="interview-questions__title">
                Вопросы на собеседовании для джуна
              </h2>
              <p class="interview-questions__text">
                Каверзные и не очень вопросы, которых боятся новички, когда
                <br class="interview-questions__br" />
                идут на собеседование
              </p>
              <a
                class="interview-questions__btn read-more-link"
                href="article.php"
              >
                Читать далее
                <img
                  class="interview-questions__arrow"
                  src="img/article-more-arrow.svg"
                  alt="Иконка: Читать далее"
              /></a>
            </div>
            <!-- /.interview-questions__wrapper -->
          </div>
          <!-- /.slider-section__main-card -->
          <div class="slider-section__eyes charging-eyes">
            <a href="article.php" class="charging-eyes__link">
              <div class="charging-eyes__wrapper">
                <h3 class="charging-eyes__title">Зарядка для глаз</h3>
                <p class="charging-eyes__text">
                  Эти несколько упражнений помогут сохранить зрение. Можно
                  делать их даже если...
                </p>
                <span class="charging-eyes__date">15 октября</span>
              </div>
              <!-- /.charging-eyes__wrapper -->
            </a>
          </div>
          <!-- /.slider-section__eyes charging-eyes -->
          <div class="slider-section__plugins jquery-plagins">
            <a href="article.php" class="jquery-plagins__link">
              <div class="jquery-plagins__wrapper">
                <h3 class="jquery-plagins__title">Топ плагинов jQuery</h3>
                <p class="jquery-plagins__text">
                  Какие плагины помогут быстро создать галерею, выпадающие
                  списки или окна
                </p>
                <span class="jquery-plagins__date">14 октября</span>
              </div>
              <!-- /.jquery-plagins__wrapper -->
            </a>
          </div>
          <!-- /.slider-section__plugins jquery-plagins -->
        </div>
        <!-- /.slider-section__wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.slider-section -->
    <section class="footer" id="footer">
      <div class="container">
        <div class="footer__wrapper">
          <div class="footer__top footer-top">
            <h1 class="footer__title">Подпишитесь на нашу рассылку</h1>
            <form action="send.php" class="footer__form footer-form">
              <input
                type="email"
                name="email"
                class="footer-form__input"
                placeholder="Email"
                required
              />
              <button type="submit" class="footer-form__btn">
                Подписаться
              </button>
            </form>
          </div>
          <!-- /.footer__top footer-top -->
          <div class="footer-nav footer__nav">
            <ul class="footer-nav__list footer-nav__news">
              <li class="footer-nav__title">Новости</li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Обновления</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Экспресс</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Politics</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Solar Eclipse</a>
              </li>
            </ul>
            <!-- /.footer-nav__news -->
            <ul class="footer-nav__list footer-nav__articles">
              <li class="footer-nav__title">Статьи</li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">HTML</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">CSS</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">JavaScript</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Web Design</a>
              </li>
            </ul>
            <!-- /.footer-nav__articles -->
            <ul class="footer-nav__list footer-nav__videolessons">
              <li class="footer-nav__title">Видеоуроки</li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Скринкасты</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Уроки</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Вебинары</a>
              </li>
            </ul>
            <!-- /.footer-nav__videolessons -->
            <ul class="footer-nav__list footer-nav__courses">
              <li class="footer-nav__title">Курсы</li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Платные интенсивы</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Бесплатные стримы</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Мастер-классы</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Менторство</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Буткемпы</a>
              </li>
            </ul>
            <!-- /.footer-nav__courses -->
            <ul class="footer-nav__list footer-nav__information">
              <li class="footer-nav__title">Информация</li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Политика данных</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Оферта сайта</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Реквизиты</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Контакты</a>
              </li>
            </ul>
            <!-- /.footer-nav__information -->
            <ul class="footer-nav__list footer-nav__categories">
              <li class="footer-nav__title">Категории</li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Популярное</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Горячее</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Подборки</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Мнения</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Карьера</a>
              </li>
            </ul>
            <!-- /.footer-nav__categories -->
          </div>
          <!-- /.footer-nav footer__nav -->
          <div class="footer-bottom">
            <div class="footer-bottom__main-nav footer-main-nav">
              <div class="footer-bottom__wrapper">
                <a href="index.php" class="footer-main-nav__logo-link"
                  ><img
                    src="img/footer-logo.svg"
                    alt="Фото: Логотип компании"
                    class="footer-main-nav__logo"
                /></a>
                <ul class="footer-main-nav__ul">
                  <li class="footer-main-nav__item">
                    <a href="#" class="footer-main-nav__link">Контакты</a>
                  </li>
                  <li class="footer-main-nav__item">
                    <a href="#" class="footer-main-nav__link">Работа у нас</a>
                  </li>
                  <li class="footer-main-nav__item">
                    <a href="#" class="footer-main-nav__link">Реклама</a>
                  </li>
                  <li class="footer-main-nav__item">
                    <a href="#" class="footer-main-nav__link" data-toggle=modal data-link=change>Обратная связь</a>
                  </li>
                </ul>
              </div>
              <!-- /.footer-bottom__wrapper -->
              <div class="footer-main-nav__social footer-social">
                <a
                  href="https://www.facebook.com/elikhanov.viskhan"
                  target="_blank"
                  class="footer-social__link"
                  ><img
                    src="img/fb.svg"
                    alt="Иконка: Facebook"
                    class="footer-social__img" /></a
                ><a
                  href="https://twitter.com/95_viskhan"
                  target="_blank"
                  class="footer-social__link"
                  ><img
                    src="img/tw.svg"
                    alt="Иконка: twitter"
                    class="footer-social__img" /></a
                ><a
                  href="https://www.youtube.com/channel/UCxB31phUnFwnAJ1iole6BgQ"
                  target="_blank"
                  class="footer-social__link"
                  ><img
                    src="img/yt.svg"
                    alt="Иконка: Youtube"
                    class="footer-social__img" /></a
                ><a
                  href="https://www.instagram.com/e_viskhan/"
                  target="_blank"
                  class="footer-social__link"
                  ><img
                    src="img/inst.svg"
                    alt="Иконка: Instagram"
                    class="footer-social__img"
                /></a>
              </div>
              <!-- /.footer-main-nav__social -->
            </div>
            <!-- /.footer-bottom__main-nav -->
            <div class="footer__copyright footer-copyright">
              <p class="footer-copyright__text">
                Universal — это онлайн издание, в котором мы публикуем полезные
                материалы о веб разработке: статьи, новости, видеоуроки,
                подборки, ссылки и курсы. Материалы на сайте бесплатны, но при
                копировании, указывайте ссылку.
              </p>
              <span class="footer-copyright__date"
                >© 2020 Universal Magazine</span
              >
            </div>
            <!-- /.footer__copyright footer-copyright -->
          </div>
          <!-- /.footer-bottom -->
        </div>
        <!-- /.footer__wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.footer -->
    <div class="modal">
      <div class="modal__overlay"></div>
      <!-- /.modal__overlay -->
      <div class="modal__dialog">
        <a href="#" class="modal__close">
          <img src="img/close.svg" alt="Кнопка закрытия">
        </a>
        <form id="modal-form" class="modal-form modal__form" action="send.php" method="POST">
            <h2 class="modal__title">Обратная связь</h2>
            <h3 class="modal__input-title">Тема</h3>
            <div class="modal__select-wrapper">
              <select class="modal__input modal__select modal-select"  name="topic" required>
                <option class="modal-select__item modal-select__placeholder" value="" hidden>Выберите тему</option>
                <option class="modal-select__item" value="html">HTML</option>
                <option class="modal-select__item" value="css">CSS</option>
                <option class="modal-select__item" value="javascript">JavaScript</option>
                <option class="modal-select__item" value="jquery">JQuery</option>
              </select>
            </div>
            <!-- /.modal__select-wrapper -->
            <h3 class="modal__input-title">Сообщение</h3>
            <div class="modal__message-wrapper">
              <textarea class="modal__input modal__message" name="message" required></textarea>
            </div>
            <!-- /.modal__message-wrapper -->
            <h3 class="modal__input-title">Email</h3>
            <div class="modal__email-wrapper">
              <input class="modal__input" type="email" name="email" required>
            </div>
            <!-- /.modal__email-wrapper -->
            <div class="modal__checkbox-container">
              <input class="modal__checkbox-check custom-checkbox" type="checkbox" name="checkbox" id="modal__checkbox" value="agree" required>
              <label class="modal__checkbox-text" for="modal__checkbox">Согласен с обработкой данных</label>
            </div>
            <!-- /.form__checkbox-container -->
            <button class="modal__submit">Отправить</button>
          </form>
      </div>
      <!-- /.modal__dialog -->
    </div>
    <!-- /.modal -->
    <div class="scroll-up">
      <svg class="scroll-up__svg" viewBox="-2 -2 52 52">
        <path
          class="scroll-up__svg-path"
          d="
            M24,0
            a24,24 0 0,1 0,48
            a24,24 0 0,1 0,-48
          "
        />
      </svg>
    </div>
    <!-- /.scroll-up -->
    <script src="js/blazy.min.js"></script>
    <script>
      ;(function() {
        var bLazy = new Blazy();})();
    </script>
    <script defer src="https://polyfill.io/v3/polyfill.min.js?features=smoothscroll"></script>
    <script defer src="js/jquery-3.6.0.min.js"></script>
    <script defer src="js/jquery.validate.min.js"></script>
    <script defer src="js/slick.min.js"></script>
    <script defer src="js/main.js"></script>
  </body>
</html>
