<?php get_header(); ?>
<main>
  <div class="main_wrapper">
    <div class="breadcrumb-area">
      <ul>
        <li><a href="<?php echo get_option('home'); ?>">ホーム</a> <span class="dainari"> &nbsp;>&nbsp;</span></li>
        <li class="active"> <?php foreach (array_reverse(get_post_ancestors($post->ID)) as $parid) { ?>
            <a href="<?php echo get_page_link($parid); ?>">
              <?php echo get_page($parid)->post_title; ?></a>&nbsp;>&nbsp;
          <?php } ?>
          <?php the_title(''); ?></li>
      </ul>
    </div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="main_page">
          <div class="main_page-text">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </div>
          <div class="main_page-sidebar">
            <?php dynamic_sidebar('main-sidebar'); ?>
          </div>
        </div>
    <?php endwhile;
    endif; ?>
  </div>
</main>

<div class='footer-margin'></div>
<?php get_footer(); ?>
