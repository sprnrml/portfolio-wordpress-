<!DOCTYPE html>
<html lang="ja">

<head>
  <title>portfolio</title>
  <?php wp_head(); ?>
</head>

<body>
  <div class="container">
    <header class="main_header">
      <nav class="navbar">
        <div class="header_logo">
          <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.jpg" alt="logo"></a>
        </div>
        <ul>
          <li class="dropdown"> 概要
            <ul class="dropdown_menu">
              <li><?php $args = array('menu' => '概要', 'menu_class' => 'menu', 'container' => false,);
                  wp_nav_menu($args); ?></li>
            </ul>
          </li>
        </ul>
        <ul>
          <li class="dropdown">詳しく

            <ul class="dropdown_menu">
              <li><?php $args = array('menu' => '趣味', 'menu_class' => 'menu', 'container' => false,);
                  wp_nav_menu($args); ?></li>
            </ul>
        </ul>
        </li>
        <ul>
          <li class="dropdown">アクセス
            <ul class="dropdown_menu">
              <li><?php $args = array('menu' => '趣味', 'menu_class' => 'menu', 'container' => false,);
                  wp_nav_menu($args); ?></li>
            </ul>
          </li>
        </ul>
        <ul>
          <li class="dropdown">趣味

            <ul class="dropdown_menu">
              <li><?php $args = array('menu' => '趣味', 'menu_class' => 'menu', 'container' => false,);
                  wp_nav_menu($args); ?></li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="main_slider">
        <ul class="slider">
          <img src="<?php bloginfo('template_directory'); ?>/img/slide-3.jpg" alt="image">
          <img src="<?php bloginfo('template_directory'); ?>/img/slide-5.jpg" alt="image">
          <img src="<?php bloginfo('template_directory'); ?>/img/slide-6.jpg" alt="image4">
          <img src="<?php bloginfo('template_directory'); ?>/img/slide-7.jpg" alt="image4">
          <img src="<?php bloginfo('template_directory'); ?>/img/slide-8.jpg" alt="image4">
        </ul>
      </div>
    </main>
    <div class="news">新着記事
     <?php $wpwp_posts = new WP_Query(array('posts_per_page' => 3));
      ?>
      <?php if ($wpwp_posts->have_posts()) :
        while ($wpwp_posts->have_posts()) : $wpwp_posts->the_post();
      ?>
          <div class="">
            <dl class="">
              <dt class="">
                <?php the_time('Y年m月d日（D）'); ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </dt>
            </dl>

          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
        記事はありません。
      <?php endif; ?>
      <div class="news_achive">
        <a href="<?php echo get_post_type_archive_link('example'); ?>">＜＜記事一覧＞＞</a>
      </div>
    </div>

  <footer>
    <div class="main_footer">

      <ul class="footer-icon">
        <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
      </ul>
    </div>
  </footer>
  </div>
  <?php wp_footer(); ?>
</body>

</html>
