<!DOCTYPE html>
<html lang="ja">

<head>
  <title>portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body>
  <div class="wrapper">
    <header>
      <div class="toggle_open">
        <ul>
          <li><a href="#">概要</a></li>
          <li><a href="#">詳しく</a></li>
          <li><a href="#">趣味</a></li>
          <li><a href="#">アクセス</a></li>
        </ul>
      </div>
      <div class="main_header">
        <nav class="navbar">
          <div class="header_logo">
            <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo1.jpg" alt="logo"></a>
          </div>
          <div class="header_menu">
            <ul>
              <li class="dropdown"><a href="#">概要</a>
                <ul class="dropdown_menu">
                  <li><?php $args = array('menu' => '概要', 'menu_class' => 'menu', 'container' => false,);
                      wp_nav_menu($args); ?></li>
                </ul>
              </li>
            </ul>
            <ul>
              <li class="dropdown"><a href="#">詳しく</a>
                <ul class="dropdown_menu">
                  <li><?php $args = array('menu' => '詳しく', 'menu_class' => 'menu', 'container' => false,);
                      wp_nav_menu($args); ?></li>
                </ul>
            </ul>
            </li>
            <ul>
              <li class="dropdown"><a href="#">趣味</a>
                <ul class="dropdown_menu">
                  <li><?php $args = array('menu' => '趣味', 'menu_class' => 'menu', 'container' => false,);
                      wp_nav_menu($args); ?></li>
                </ul>
              </li>
            </ul>
            <ul>
              <li class="dropdown"><a href="#">アクセス</a>
                <ul class="dropdown_menu">
                  <li><?php $args = array('menu' => 'アクセス', 'menu_class' => 'menu', 'container' => false,);
                      wp_nav_menu($args); ?></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="toggle_menu">
            <a href="#"><i class="fas fa-bars"></i></a>
          </div>
        </nav>
      </div>
    </header>
    <div class="main_wrapper">
      <main>

        <div class="main_slider">
          <ul class="slider">
            <img src="<?php bloginfo('template_directory'); ?>/img/slide-3.jpg" alt="image3">
            <img src="<?php bloginfo('template_directory'); ?>/img/slide-5.jpg" alt="image5">
            <img src="<?php bloginfo('template_directory'); ?>/img/slide-6.jpg" alt="image6">
            <img src="<?php bloginfo('template_directory'); ?>/img/slide-7.jpg" alt="image7">
            <img src="<?php bloginfo('template_directory'); ?>/img/slide-8.jpg" alt="image8">
          </ul>
        </div>
      </main>
      <div class="news">
        <div class="news_title">新着情報</div>
        <?php $wpwp_posts = new WP_Query(array('posts_per_page' => 5));
        ?>
        <?php if ($wpwp_posts->have_posts()) :
          while ($wpwp_posts->have_posts()) : $wpwp_posts->the_post();
        ?>
            <dl class="news_container">
              <dt class="news_container-">
              <dd class="">
                <?php the_time('Y年m月d日（D）'); ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </dd>
              </dt>
            </dl>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php else : ?>
          記事はありません。
        <?php endif; ?>
        <div class="news_archive">
          <a href="<?php echo get_post_type_archive_link('example'); ?>">＜記事一覧＞</a>
        </div>
      </div>

      <footer>
        <div class="main_footer">

          <ul class="footer_icon">
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>

      </footer>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>

</html>
