<!DOCTYPE html>
<html lang="ja">

<head>
  <title>portfolio</title>
  <?php wp_head(); ?>
</head>

<body>
  <div class="container">
    <header class="main_header">
      <nav class="navbar">
        <div class="header_logo">
          <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.jpg" alt="logo"></a>
        </div>
        <ul>
          <li class="dropdown"> 概要
            <ul class="dropdown_menu">
              <li><?php $args = array('menu' => '概要', 'menu_class' => 'menu', 'container' => false,);
                  wp_nav_menu($args); ?></li>
            </ul>
          </li>
        </ul>
        <ul>
          <li class="dropdown">詳しく

            <ul class="dropdown_menu">
              <li><?php $args = array('menu' => '趣味', 'menu_class' => 'menu', 'container' => false,);
                  wp_nav_menu($args); ?></li>
            </ul>
        </ul>
        </li>
        <ul>
          <li class="dropdown">アクセス
            <ul class="dropdown_menu">
              <li><?php $args = array('menu' => '趣味', 'menu_class' => 'menu', 'container' => false,);
                  wp_nav_menu($args); ?></li>
            </ul>
          </li>
        </ul>
        <ul>
          <li class="dropdown">趣味

            <ul class="dropdown_menu">
              <li><?php $args = array('menu' => '趣味', 'menu_class' => 'menu', 'container' => false,);
                  wp_nav_menu($args); ?></li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>
