$(function () {
  // Начало кода для табой
  var tabItems = $('.tabs-list__item');
  var contentItems = $('.tabs-content__item');

  tabItems.on('click', function () {
    var activeContent = $(this).attr('data-target')
    tabItems.removeClass('tabs-list__item--active')
    contentItems.removeClass('tabs-content__item--active')
    $(activeContent).toggleClass('tabs-content__item--active')
    $(this).addClass('tabs-list__item--active')
  })
  // Конец кода для табов

  // Код для бургер меню
  var menuButton = $('.header-burger');
  menuButton.on('click', function () {
    $('.header-nav').toggleClass('header-nav--visible')
  })
  // Код для флажка избранное
  var favoriteBtn = $('.broad-article__favorite');
  favoriteBtn.on('click', function () {
    $(this).toggleClass('broad-article__favorite--active')
  })

  // Начало кода слайдера
  // Инициализация слайдера slick
  $('.articles-slider').slick({
    arrows: false,
    dots: true,
    dotsClass: 'slick-dots',
    appendDots: $(".slider-section__slider"),
    // autoplay: true,
    autoplaySpeed: 2000
  });
  // Удаление дефолтных чисел у пагинации, нет, другого способа нет)
  var dotNums = $(".slick-dots button").toArray();
  function removeText(item) {
    item.innerHTML = "";
  }
  dotNums.forEach(removeText);
  // Конец кода слайдера

  // Начало кода модального окна
  var modalOpenBtn = $('[data-toggle=modal]')
  var modalCloseBtn = $('.modal__close')
  modalOpenBtn.on('click', openModal)
  modalCloseBtn.on('click', closeModal)
  function openModal(event) {
    console.log($(this).attr('data-toggle'));
    var modalOverlay = $('.modal__overlay')
    var modalDialog = $('.modal__dialog')
    modalOverlay.addClass('modal__overlay--visible')
    modalDialog.addClass('modal__dialog--visible')
  }
  function closeModal(event) {
    event.preventDefault()
    var modalOverlay = $('.modal__overlay')
    var modalDialog = $('.modal__dialog')
    modalOverlay.removeClass('modal__overlay--visible')
    modalDialog.removeClass('modal__dialog--visible')
  }

  // Конец кода модального окна

  // Плавная прокрутка по якорным ссылка
  // var $page = $('html, body');
  // $('a[href*="#"]').on("click", function () {
  //   $page.animate({
  //     scrollTop: $($.attr(this, 'href')).offset().top
  //   }, 800);
  //   return false;
  // });
  // Конец плавной прокрутки по якорным ссылкам

});