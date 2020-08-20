<?php get_header(); ?>
<div class="main_wrapper">
  <!-- <div class="category">
    <p>＜ カテゴリー 一覧 ＞</p>
    <ul>
      <?php wp_list_categories('title_li=&orderby=ID&hide_empty=1'); ?>
    </ul>
  </div> -->
  <div class="news">
    <div class="news_title">New articles</div>
    <?php
    // $terms = get_terms('category', array(
    //   'parent' => '',
    //   'hide_empty' => true,
    //   'orderby' => 'term_order',
    // ));
    // foreach ($terms as $term)
    // ?>
    <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
    ?>
        <!-- <div class="paneltop">
          <?php
          $category = get_the_category();
          $cat_id   = $category[0]->cat_ID;
          $cat_name = $category[0]->cat_name;
          ?>
        </div> -->
        <div class="news_container">
          <?php the_time('Y.m.d.'); ?>
          <span class="news_category"><?php echo $cat_name; ?></span>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
      <?php endwhile; ?>
      <?php if( function_exists("the_pagination") ) the_pagination(); ?>
    <?php else : ?>
      記事はありません。
    <?php endif; ?>
    <div class="news_archive">
      <a href="<?php echo get_category_link(1,2); ?>">＜List of articles＞</a>
    </div>
  </div>
  <?php get_footer(); ?>
