<?php get_header(); ?>
<main>
  <div class="main_wrapper">
    <div class="main_slider">
      <ul class="slider">
        <img src="<?php bloginfo('template_directory'); ?>/img/slide-11.jpg" alt="image3">
        <img src="<?php bloginfo('template_directory'); ?>/img/slide-5.jpg" alt="image5">
        <img src="<?php bloginfo('template_directory'); ?>/img/slide-12.jpg" alt="image6">
        <img src="<?php bloginfo('template_directory'); ?>/img/slide-7.jpg" alt="image7">
        <img src="<?php bloginfo('template_directory'); ?>/img/slide-9.jpg" alt="image8">
      </ul>
    </div>
    <div class="news scroll-fade">
      <div class="news_title">New articles</div>
      <?php $wpwp_posts = new WP_Query(array('posts_per_page' => 3));
      ?>
      <?php if ($wpwp_posts->have_posts()) :
        while ($wpwp_posts->have_posts()) : $wpwp_posts->the_post();
      ?>
          <a href="<?php the_permalink(); ?>">
            <div class="news_container">
              <?php the_time('Y.m.d.'); ?>
              <?php the_title(); ?>
            </div>
          </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
        記事はありません。
      <?php endif; ?>
      <div class="news_archive">
        <a href="<?php echo get_category_link(12); ?>">＜記事一覧＞</a>
      </div>
    </div>
    <?php get_template_part('contents'); ?>
</main>
<?php get_footer(); ?>
