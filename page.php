<?php get_header(); ?>
<div class="container">
	<main>
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
		<?php while (have_posts()): the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</main>
</div>
	<?php get_footer(); ?>
