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
  console.log(dotNums);
  function removeText(item) {
    item.innerHTML = "";
  }
  dotNums.forEach(removeText);
  // Конец кода слайдера

});