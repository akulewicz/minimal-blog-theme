<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Poruszeni.pl</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="search-box">
    <button class="search-box__close"><i class="fas fa-times"></i></button>
    <form class="search-form" action="/" method="get">
    <input class="search-form__input" type="text" name="s" id="search" placeholder="Wpisz szukaną frazę" />
    <button class="search-form__button"><i class="fas fa-search search-form__icon"></i></button>
</form>
    </div>
    <header class="header">
      <button class="hamburger hamburger--js"><i class="fas fa-bars"></i></button>
      <button class="search-button"><i class="fas fa-search"></i></button>
      <nav class="top-navigation top-navigation--js">
        
        <?php wp_nav_menu(array(
          'theme_location' => 'header-menu',
          'container' => 'ul',
          'menu_class' => 'top-navigation__list'
          )); ?>
          <!-- <li class="top-navigation__item">
            <a class="top-navigation__link" href="#">Strona główna</a>
          </li>
          <li class="top-navigation__item">
            <a class="top-navigation__link" href="#">Rowery</a>
          </li>
          <li class="top-navigation__item">
            <a class="top-navigation__link" href="#">O mnie</a>
          </li>
          <li class="top-navigation__item">
            <a class="top-navigation__link" href="#">Kontakt</a>
          </li> -->
         
        <!-- </ul>    -->
      </nav>
      <h1 class="header__title"><a class="header__home-link" href="<?php echo site_url('');?>"><?php bloginfo('name'); ?></a></h1>
    </header>