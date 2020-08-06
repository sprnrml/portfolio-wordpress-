<?php get_header(); ?>

<div class="news">
  <div class="news_title">新着情報</div>
  <?php $wpwp_posts = new WP_Query(array('posts_per_page' => 5,));
  ?>
  <?php if ($wpwp_posts->have_posts()) :
    while ($wpwp_posts->have_posts()) : $wpwp_posts->the_post();
  ?>
      <div class="news_container">
        <?php the_time('Y.m.d.'); ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </div>
    <?php endwhile; ?>
    <?php the_posts_pagination(); ?>
  <?php else : ?>
    記事はありません。
  <?php endif; ?>
  <div class="news_archive">
  <a href="<?php echo get_post_type_archive_link('archive'); ?>">＜List of articles＞</a>
  </div>
</div>

<!-- <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  // ここに表示内容を記述する

<?php endwhile;　?>

  <?php the_posts_pagination(); ?>

<?php else : ?>

  <p>まだ記事がありません</p>

<?php endif; ?> -->



<?php get_footer(); ?>
