<!DOCTYPE html>
<html lang="ja">

<head>
  <title>美容院テンプレート2/NEWS</title>
  <?php get_header(); ?>
</head>

<body>
  <div class="superwrapper animsition">

    <!-- .header -->
    <header id="header" class="header">
      <div class="logo-container">
        <a class="animsition-link" href="/">
          <div class="logo__img">
            <div class="logo"></div>
          </div>
        </a>
      </div>
      <!-- .logo__img -->
      <div class="mobile-button">
        <button class="mobile-menu__btn">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
      <!-- /.mobile-button -->
      <nav class="sp-navbtn">
        <ul class="sp-navbtn__container">
          <li><a class="tel" href="tel:092-686-7954">電話予約<i class="icon-tel"></i></a></li>
          <li><a class="net" target="_blank" href="https://beauty.hotpepper.jp/">オンライン予約<i class="icon-net"></i></a>
          </li>
        </ul>
      </nav>
      <!-- /.nav-btn -->
      <div class="pc-container">
        <div class="logo__img">
          <a class="animsition-link" href="/">
            <div class="logo"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="/"><span>Top</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>"><span>Staff</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>"><span>Recruit</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/news')); ?>"><span>News</span></a>
            </li>
            <li class="pc-nav-item">
              <a target="_blank" class="pc-nav-link reserve-btn"
                href="https://beauty.hotpepper.jp/"><span>Reserve</span></a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.pc-container -->
    </header>

    <section class="c-news">
      <div class="c-container">
        <h3 class="c-news__title">
          <span class="c-txt-lr">News</span>
        </h3>
        <ul class="c-news__list">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <li class="c-news__item">
            <a href="<?php the_permalink(); ?>" class="c-news__link animsition-link">
              <span class="c-txt-sm"><?php echo get_the_date('Y.m.d'); ?></span>
              <p class="c-txt-sm"><?php the_title(); ?></p>
            </a>
          </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <!-- pagination -->
        <?php if( function_exists ("the_pagination")) the_pagination(); ?>
      </div>
    </section>
    <!-- /.news-top -->

    <footer id="footer" class="p-footer">
      <div class="c-container">
        <div class="p-footer__sns">
          <div class="sns-insta">
            <a class="sns-link" href="#"><i></i></a>
          </div>
          <div class="sns-fb">
            <a class="sns-link" href="#"><i></i></a>
          </div>
        </div>
        <div class="p-footer__logo">
          <div class="p-footer__logo-img"></div>
        </div>
        <div class="p-footer__copyright">&copy;RivRound.inc</div>
      </div>
    </footer>
    <!-- .p-footer -->
    <div class="mobile-menu">
      <nav class="mobile-menu__nav">
        <ul class="mobile-menu__list">
          <li class="mobile-menu__item">
            <a class="animsition-link" href="/">Top</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>">Staff</a>
          </li>
		  <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">News</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>">Recruit</a>
          </li>

        </ul>
        <div class="reserve-btn-wrap">
          <div class="reserve-btn-tel">
            <h4>電話予約はこちら</h4>
            <div class="reserve-btn">
              <a href="tel:092-686-7954"><span>092-686-7954</span></a>
            </div>
          </div>
          <div class="reserve-btn-net">
            <h4>ネット予約はこちら</h4>
            <div class="reserve-btn">
              <a href="https://beauty.hotpepper.jp/" target="_blank"><span>ONLINE RESERVE</span></a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!------ /.mobile-menu ----->

  </div>
  <!-- .superwrapper -->

  <?php get_template_part('includes/c-footer'); ?>
</body>

</html>