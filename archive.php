<?php get_header(); ?>
<div class="main_wrapper">
  <div class="category">
    <p>＜ カテゴリー 一覧 ＞</p>
    <ul>
      <?php wp_list_categories('title_li=&orderby=ID&child_of=12'); ?>
    </ul>
  </div>
  <div class="news">
    <div class="news_title">New articles</div>
    <?php
    $terms = get_terms('category', array(
      'parent' => '',
    ));
    foreach ($terms as $term)
    ?>
    <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
    ?>
        <?php
        $category = get_the_category();
        $cat_id   = $category[0]->cat_ID;
        $cat_name = $category[0]->cat_name;
        $cat_slug = $category[0]->category_nicename;
        ?>
        <div class="news_container">
          <?php the_time('Y.m.d.'); ?>
          <span class="news_category"><?php echo $cat_name; ?></span>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>

      <?php endwhile; ?>

    <?php else : ?>
      記事はありません。
    <?php endif; ?>
    <?php if (function_exists("the_pagination")) the_pagination(); ?>
    <div class="archive_bottom">
    <a href="<?php echo get_category_link(12); ?>">＜List of articles＞</a>
    <a href="<?php echo home_url(); ?>">＜home＞</a>
    </div>
  </div>
</div>
<?php get_footer(); ?>



