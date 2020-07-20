<?php get_header(); ?>
<div class="container">
  <main>
    <div class="main_wrapper">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <div class="main_page">
      <?php the_content(); ?>


      </div>

      <?php endwhile;
      endif; ?>

    </div>
  </main>
</div>
<?php get_footer(); ?>
