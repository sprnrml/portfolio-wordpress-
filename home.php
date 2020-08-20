<?php get_header(); ?>
<main>
  <div class="main_wrapper">
    <div class="main_slider">
      <ul class="slider">
        <img src="<?php bloginfo('template_directory'); ?>/img/slide-10.jpg" alt="image3">
        <img src="<?php bloginfo('template_directory'); ?>/img/slide-5.jpg" alt="image5">
        <img src="<?php bloginfo('template_directory'); ?>/img/slide-6.jpg" alt="image6">
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
          <div class="paneltop">
            <?php
            $category = get_the_category();
            $cat_id   = $category[0]->cat_ID;
            $cat_name = $category[0]->cat_name;
            $cat_slug = $category[0]->category_nicename;
            ?>
          </div>
          <div class="news_container">
            <?php the_time('Y.m.d.'); ?>
            <span class="news_category"><?php echo $cat_name; ?></span>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
        記事はありません。
      <?php endif; ?>
      <div class="news_archive">
        <a href="<?php echo get_category_link(1); ?>">＜List of articles＞</a>
      </div>
    </div>
    <?php get_template_part('contents'); ?>
</main>
<?php get_footer(); ?>
