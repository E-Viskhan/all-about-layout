<?php @include('modules/header.php') ?>
<section class="article-main article__main">  
  <div class="container">
    <div class="article-main__wrapper">
      <svg
      class="article-main__favorite"
      xmlns="http://www.w3.org/2000/svg"
      preserveAspectRatio="xMinYMin meet"
      viewBox="0 0 21 27"
      >
        <path
          class="article-main__favorite-path"
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M3.5 0.5H18.5C20.1569 0.5 21.5 1.84315 21.5 3.5V27.5L11.1424 20L0.5 27.5V3.5C0.5 1.84315 1.84315 0.5 3.5 0.5Z"
        />
      </svg>
      <div class="article-main__top article-top">
        <span class="article-main__topic">Новости</span>
        <ul class="article-main__nav article-nav">
          <li class="article-nav__item">
            <a href="index.php" class="article-nav__link article-nav__index">На главную</a>
          </li>
          <li class="article-nav__item">
            <a href="#" class="article-nav__link article-nav__back">Назад</a>
          </li>
          <li class="article-nav__item">
            <a href="#" class="article-nav__link article-nav__forward">Вперед</a>
          </li>
        </ul>
      </div>
      <!-- /.article-main__top -->
      <h1 class="article-top__title">Новый налоговый режим<br class="article-main__br"> для фрилансеров — налог<br class="article-main__br"> на проф. доход</h1>
      <p class="article-top__text">Руководитель налоговой заявил, что этот режим “поможет выйти из тени” тем, кто работает неофициально. Разобрались, как работает режим и кому он подходит, а кому нет.</p>
      <div class="article-main__info">
        <span class="article-main__date">6 августа, 10:30</span>
        <span class="article-main__likes">830</span>
        <span class="article-main__comments">19</span>
      </div>
      <!-- /.article-main__info -->
    </div>
    <!-- /.article-main__wrapper -->
  </div>
  <!-- /.container -->
</section>
<!-- /.article-main -->
<?php @include('modules/footer.php') ?>
