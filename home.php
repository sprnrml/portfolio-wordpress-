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
          <?php $wpwp_posts = new WP_Query(array('posts_per_page' => 5));
          ?>
          <?php if ($wpwp_posts->have_posts()) :
            while ($wpwp_posts->have_posts()) : $wpwp_posts->the_post();
          ?>
              <div class="news_container">
                <?php the_time('Y.m.d.'); ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php else : ?>
            記事はありません。
          <?php endif; ?>
          <div class="news_archive">
            <a href="<?php get_post_type_archive_link($post_type); ?>">＜List of articles＞</a>
          </div>
        </div>
        <div class="contents">
          <ul class="scroll-fade">
            <li><a href="<?php echo get_permalink(get_page_by_path('gaiyou')->ID); ?>">
                <ul class="contents_box">
                  <li><img src="<?php bloginfo('template_directory'); ?>/img/gaiyou.jpg" alt="image"></li>
                  <li class="contents_box-title">概要</li>
                  <li class="contents_box-text">このサイトについて。</li>
                </ul>
              </a></li>
            <li><a href="<?php echo get_permalink(get_page_by_path('shousai')->ID); ?>">
                <ul class="contents_box">
                  <li><img src="<?php bloginfo('template_directory'); ?>/img/shousai.jpg" alt="image"></li>
                  <li class="contents_box-title">詳細</li>
                  <li class="contents_box-text">サイト制作者のついて</li>
                </ul>
              </a></li>
            <li><a href="<?php echo get_permalink(get_page_by_path('shumi')->ID); ?>">
                <ul class="contents_box">
                  <li><img src="<?php bloginfo('template_directory'); ?>/img/shumi.jpg" alt="image"></li>
                  <li class="contents_box-title">趣味</li>
                  <li class="contents_box-text">最近の趣味</li>
                </ul>
              </a></li>
          </ul>
          <div class="skill scroll-fade">
            <div class="skill_title">My skills</div>
            <ul class="skill_container">
              <li>
                <ul>
                  <li class="skill_contents-title"><i class="devicon-html5-plain-wordmark colored"></i>HTML<i class="devicon-css3-plain-wordmark colored"></i>CSS</li>
                  <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></li>
                  <li class="skill_contents-text">マークアップについては問題なくコーディングができます。Sassを使ったコーディングも可能です。</li>
                </ul>
              </li>
              <li>
                <ul>
                  <li class="skill_contents-title"><i class="devicon-wordpress-plain-wordmark colored"></i>Wordpress</li>
                  <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></li>
                  <li class="skill_contents-text">実務経験としては中規模サイトのオリジナルテーマを作成したことがあります。プラグインは手出せてません・・</li>
                </ul>
              </li>
              <li>
                <ul>
                  <li class="skill_contents-title"><i class="devicon-javascript-plain colored"></i>JavaScript</li>
                  <li><i class="fas fa-star"></i><i class="fas fa-star"></i></li>
                  <li class="skill_contents-text">使用しているのは主に
                    jQueryですが、Domの操作等であれば問題なく描けます。React勉強中です。</li>
                </ul>
              </li>
              <li>
                <ul>
                  <li class="skill_contents-title"><i class="devicon-photoshop-line colored"></i>Photoshop</li>
                  <li><i class="fas fa-star"></i><i class="fas fa-star"></i></li>
                  <li class="skill_contents-text">基本的な操作であれば問題なく使用できます。</li>
                </ul>
              </li>
            </ul>
            <div class="skill_tools">
              <i class="devicon-git-plain-wordmark colored"></i>
              <i class="devicon-visualstudio-plain-wordmark colored"></i>
              <i class="devicon-slack-plain-wordmark colored"></i>
              <i class="devicon-webpack-plain-wordmark colored"></i>
            </div>
          </div>
        </div>
    </main>
    <?php get_footer(); ?>
