<?php

/*
  The header for our theme
*/

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="profile" href="https://gmpg.org/xfn/11">
   <?php wp_head(); ?>
   <script type="text/javascript">
      window.addEventListener('DOMContentLoaded', (event) => {
         const langParent = document.querySelector('.menu-switcher-container');
         const lang = document.querySelector('.nav__item-lang');
         const langSubMenu = document.querySelector('.sub-menu');

         lang.addEventListener('click', () => {
            langSubMenu.classList.toggle('show-lang');
            langParent.classList.toggle('langEl');
         })


         const langItemFirst = document.querySelector('.pll-parent-menu-item > a');
         langItemFirst.style.cssText = `
            pointer-events: none;
         `;
      });
   </script>
</head>

<body <?php body_class(); ?>>
   <?php wp_body_open(); ?>

   <button class="btn-reset scroll-btn">
      <svg class="icon-scroll">
         <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite-98721a2dbd.svg#top"></use>
      </svg>
   </button>
   <div class="site-container">
      <header class="header" data-scroll-header>
         <button class="burger" aria-label="Открыть меню" aria-expanded="false" data-burger>
            <span class="burger__line"></span>
         </button>
         <nav class="nav">
            <ul class="nav__list list-reset" data-menu>
               <?php
               wp_nav_menu(
                  array(
                     'theme_location' => 'header_menu_left',
                     'menu_id'        => 'header-menu-left',
                     'container' => true,
                     'items_wrap' => '%3$s',
                  )
               );
               ?>

               <li class="nav__item-logo">
                  <?php $header_logo = get_theme_mod('header_logo'); ?>
                  <a href="<?php echo esc_url(home_url('/')); ?>" class="nav__link nav__link-logo" data-da=".header,1200,1">
                     <img loading="lazy" src="<?php echo $header_logo; ?>" class="image" alt="Logo">
                  </a>
               </li>
               <li class="nav__item nav__item-phone">
                  <?php $text_phone = get_theme_mod('text_phone'); ?>
                  <?php $link_phone = get_theme_mod('link_phone'); ?>
                  <a href="tel:<?php echo $link_phone; ?>" class="nav__link nav__link-phone" data-menu-item data-da=".header,1200,last">
                     <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite-98721a2dbd.svg#phone"></use>
                     </svg>
                     <?php echo $text_phone; ?>
                  </a>

                  <a href="tel:<?php echo $link_phone; ?>" class="nav__link nav__link-phone nav__link-phone--show" data-menu-item data-da=".header,1200,last">
                     <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite-98721a2dbd.svg#phone"></use>
                     </svg></a>
               </li>

               <?php
               wp_nav_menu(
                  array(
                     'theme_location' => 'header_menu_right',
                     'menu_id'        => 'header-menu-right',
                     'container' => true,
                     'items_wrap' => '%3$s',
                  )
               );
               ?>

               <li class="nav__item nav__item-lang">
                  <?php if (is_active_sidebar('lang-sw')) : ?>
                     <?php dynamic_sidebar('lang-sw'); ?>
                  <?php endif; ?>
               </li>

               <div class="header__feedback">
                  <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
                     <div class="header__form form">
                        <?php echo do_shortcode('[contact-form-7 id="138" title="Контактная форма"]'); ?>
                     </div>
                  <?php elseif (ICL_LANGUAGE_CODE == 'fr') : ?>
                     <div class="header__form form">
                        <?php echo do_shortcode('[contact-form-7 id="214" title="Контактная форма FR"]'); ?>
                     </div>
                  <?php endif; ?>
               </div>
            </ul>
         </nav>


      </header>