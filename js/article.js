$(function () {

  // Код для бургер меню
  var menuButton = $('.header-burger');
  menuButton.on('click', function () {
    $('.header-nav').toggleClass('header-nav--visible')
  })

  // Начало кода модального окна
  var modalOpenBtn = $('[data-toggle=modal]')
  var modalCloseBtn = $('.modal__close')
  modalOpenBtn.on('click', openModal)
  modalCloseBtn.on('click', closeModal)
  function openModal(event) {
    if (event)
      event.preventDefault()
    var scrollXNow = window.scrollX
    var scrollYNow = window.scrollY
    var modalOverlay = $('.modal__overlay')
    var modalDialog = $('.modal__dialog')
    modalOverlay.addClass('modal__overlay--visible')
    modalDialog.addClass('modal__dialog--visible')
    $(document).on('keydown', function (event) {
      if (event.code === 'Escape') {
        closeModal()
      }
    })
    $(document).on('click', function (event) {
      if ($(event.target).is('.modal__overlay')) {
        closeModal()
      }
    })
    $(window).on('scroll', () => {
      window.scrollTo(scrollXNow, scrollYNow);
    });
  }
  function closeModal(event) {
    if (event)
      event.preventDefault()
    var modalOverlay = $('.modal__overlay')
    var modalDialog = $('.modal__dialog')
    modalOverlay.removeClass('modal__overlay--visible')
    modalDialog.removeClass('modal__dialog--visible')
    $(window).off('scroll')
  }

  $('#modal-form').validate({
    "messages": {
      "topic": {
        required: "Пожалуйста, выберите тему",

      },
      "message": {
        required: "Пожалуйста, введите сообщение",
      },
      "email": {
        required: "Пожалуйста, введите email",
        email: "Email должен быть в формате name@domain.com"
      },
      "checkbox": {
        required: "Пожалуйста, нажмите на галочку"
      },
    },
  });

  // Конец кода модального окна

  // Начало кода для валидации формы подписки в футере
  $(".footer__form").validate({
    "messages": {
      "email": {
        required: "Пожалуйста, введите email",
        email: "Email должен быть в формате name@domain.com"
      },
    },
  });
  // Конец кода для валидации формы подписки в футере

  // Начало кода для стрелки вверх
  const offset = 100;
  const scrollUp = document.querySelector('.scroll-up');
  const scrollUpSvgPath = document.querySelector('.scroll-up__svg-path');
  const pathLength = scrollUpSvgPath.getTotalLength();

  scrollUpSvgPath.style.strokeDasharray = `${pathLength} ${pathLength}`
  scrollUpSvgPath.style.transition = 'stroke-dashoffset 20ms'

  const getTop = () => window.pageYOffset || document.documentElement.scrollTop;

  // updateDashOffset
  const updateDashOffset = () => {
    const height = document.documentElement.scrollHeight - window.innerHeight
    const dashoffset = pathLength - (getTop() * pathLength / height);

    scrollUpSvgPath.style.strokeDashoffset = dashoffset;
  };
  // onScroll
  window.addEventListener('scroll', () => {
    updateDashOffset();
    if (getTop() > offset) {
      scrollUp.classList.add('scroll-up-active')
    } else {
      scrollUp.classList.remove('scroll-up-active')
    }
  });
  // click
  scrollUp.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });
  // Конец кода для стрелки вверх

  // Код для флажка избранное на странице статьи
  var favoriteBtn = $('.article-main__favorite');
  favoriteBtn.on('click', function () {
    $(this).toggleClass('article-main__favorite--active')
  });

  // Код для слайдера на странице статьи
  const swiper = new Swiper('.swiper', {
    loop: true,
    slidesPerView: 'auto',
    keyboard: {
      enabled: true,
      onlyInViewport: false,
    },
    // Стрелки навигации
    navigation: {
      nextEl: '.article-slider__next',
      prevEl: '.article-slider__prev',
    },
  });

  // Загрузка дополнительных комментов по нажатию
  var loadMore = $('#load-more');
  loadMore.on('click', () => {
    var hiddenComments = $('.comment--hidden').toArray();
    hiddenComments.forEach(function (item) {
      item.classList.remove('comment--hidden');
    });
  });
  // Валидация формы добавления комментария
  $('#addComment').validate({
    "messages": {
      "comment": {
        required: "Пожалуйста, введите комментарий",
        minlength: "Пожалуйста, введите не менее 100 символов"
      },
    },
    rules: {
      "comment": {
        minlength: 100
      },
    },
  });

  // Плавная прокрутка по якорным ссылкам
  var $page = $('html, body');
  $('a[href*="#"]').on("click", function () {
    $page.animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 800);
    return false;
  });
  // Конец плавной прокрутки по якорным ссылкам

});