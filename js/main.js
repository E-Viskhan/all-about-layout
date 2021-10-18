$(function () {
  var tabItems = $('.tabs-list__item');
  var contentItems = $('.tabs-content__item');

  tabItems.on('click', function () {
    var activeContent = $(this).attr('data-target')
    tabItems.removeClass('tabs-list__item--active')
    contentItems.removeClass('tabs-content__item--active')
    $(activeContent).toggleClass('tabs-content__item--active')
    $(this).addClass('tabs-list__item--active')
  })

  var menuButton = $('.header-burger');
  menuButton.on('click', function () {
    $('.header-nav').toggleClass('header-nav--visible')
  })
  var favoriteBtn = $('.broad-article__favorite');
  favoriteBtn.on('click', function () {
    $(this).toggleClass('broad-article__favorite--active')
  })
});