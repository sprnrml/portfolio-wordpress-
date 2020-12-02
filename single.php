<?php get_header(); ?>
<main>
  <div class="main_wrapper">
    <div class="news">
      <div class="news_title">New articles</div>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="news_container">
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
            <p><?php the_category(', '); ?></p>
            <p class="news_text"><?php the_content('Read more'); ?></p>
          </div>
      <?php endwhile;
      endif; ?>
      <div class="news_archive">
        <a href="<?php echo get_post_type_archive_link('example'); ?>">＜カテゴリー　一覧＞</a>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
