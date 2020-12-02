<!DOCTYPE html>
<html lang="ja">

<head>
  <title>portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body>
  <div class="page_loader"></div>
  <div class="wrapper">
    <header>
      <div class="toggle_open">
        <ul>
          <li class="toggle_open-menu"><a href="#">概要</a>
            <ul class="toggle_dropdown">
              <li><?php $args = array('menu' => '概要', 'menu_class' => 'menu', 'container' => false,);
                  wp_nav_menu($args); ?></li>
            </ul>
          </li>
          <li class="toggle_open-menu"><a href="#">詳細</a>
            <ul class="toggle_dropdown">
              <li><?php $args = array('menu' => '詳細', 'menu_class' => 'menu', 'container' => false,);
                  wp_nav_menu($args); ?></li>
            </ul>
          </li>
          <li class="toggle_open-menu"><a href="#">趣味</a>
            <ul class="toggle_dropdown">
              <li><?php $args = array('menu' => '趣味', 'menu_class' => 'menu', 'container' => false,);
                  wp_nav_menu($args); ?></li>
            </ul>
          </li>
          <li class="toggle_open-menu"><a href="#">生息地</a>
            <ul class="toggle_dropdown">
              <li><?php $args = array('menu' => '生息地', 'menu_class' => 'menu', 'container' => false,);
                  wp_nav_menu($args); ?></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="main_header">
        <nav class="navbar">
          <div class="header_logo">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php bloginfo('template_directory'); ?>/img/logo1.jpg" alt="logo">
            </a>
          </div>
          <div class="header_menu">
            <ul>
              <li class="dropdown"><a href="#">概要</a>
                <ul class="dropdown_menu">
                  <li><?php $args = array('menu' => '概要', 'menu_class' => 'menu', 'container' => false,);
                      wp_nav_menu($args); ?></li>
                </ul>
              </li>
            </ul>
            <ul>
              <li class="dropdown"><a href="#">詳細</a>
                <ul class="dropdown_menu">
                  <li><?php $args = array('menu' => '詳細', 'menu_class' => 'menu', 'container' => false,);
                      wp_nav_menu($args); ?></li>
                </ul>
            </ul>
            </li>
            <ul>
              <li class="dropdown"><a href="#">趣味</a>
                <ul class="dropdown_menu">
                  <li><?php $args = array('menu' => '趣味', 'menu_class' => 'menu', 'container' => false,);
                      wp_nav_menu($args); ?></li>
                </ul>
              </li>
            </ul>
            <ul>
              <li class="dropdown"><a href="#">生息地</a>
                <ul class="dropdown_menu">
                  <li><?php $args = array('menu' => '生息地', 'menu_class' => 'menu', 'container' => false,);
                      wp_nav_menu($args); ?></li>
                </ul>
              </li>
            </ul>
          </div>
          <div id="toggle_menu">
            <a href="#"><i class="fas fa-bars"></i></a>
          </div>
        </nav>
      </div>
    </header>
