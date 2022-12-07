<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Adjadona
 */

?>

<footer class="footer">
   <div class="container footer__container">
      <div class="footer__inner">
         <div class="footer__left social">

            <a href="<?php echo home_url('/'); ?>" class="social__logo">
               <?php $footer_logo = get_theme_mod('footer_logo'); ?>
               <img loading="lazy" src="<?php echo $footer_logo; ?>" class="image" alt="Logo" />
            </a>

            <?php $text_footer_en = get_theme_mod('text_en'); ?>
            <?php $text_footer_fr = get_theme_mod('text_fr'); ?>
            <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
               <p class="footer__text"><?php echo $text_footer_en; ?></p>
            <?php elseif (ICL_LANGUAGE_CODE == 'fr') : ?>
               <p class="footer__text"><?php echo $text_footer_fr; ?></p>
            <?php endif; ?>

            <?php $text_phone = get_theme_mod('text_phone'); ?>
            <?php $link_phone = get_theme_mod('link_phone'); ?>
            <a href="tel:<?php echo $link_phone; ?>" class="social__link social__link--phone">
               <svg>
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite-98721a2dbd.svg#phone"></use>
               </svg>
               <?php echo $text_phone; ?>
            </a>

            <?php $text_mail = get_theme_mod('text_mail'); ?>

            <a href="mailto:<?php echo $text_mail; ?>" class="social__link social__link--mail">
               <svg>
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite-98721a2dbd.svg#mail"></use>
               </svg>
               <?php echo $text_mail; ?>
            </a>
         </div>
         <div class="footer__center">
            <nav class="footer-nav">
               <ul class="footer-nav__list list-reset">
                  <?php
                  wp_nav_menu(
                     array(
                        'theme_location' => 'footer_menu',
                        'menu_id'        => 'footer-menu',
                        'container' => true,
                        'items_wrap' => '%3$s',
                     )
                  );
                  ?>


               </ul>
            </nav>
         </div>
         <div class="footer__right map">
            <?php $map_link = get_theme_mod('map_link'); ?>
            <?php $map_img = get_theme_mod('map_img'); ?>

            <a href="<?php echo $map_link; ?>" target="blank" class="map__image">
               <img loading="lazy" src="<?php echo $map_img; ?>" class="image" alt="Map" /> <svg>
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite-98721a2dbd.svg#icon-fish"></use>
               </svg>
            </a>
         </div>
      </div>
   </div>
   <div class="footer__copyright copyright">
      <?php $copyright = get_theme_mod('copyright'); ?>
      <h3 class="copyright__title"><?php echo $copyright; ?></h3>
   </div>
</footer>
<section class="development visually-hidden">
   <a href="https://webmedia.ge/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/webmedia-logo-cedbe8bd35.svg" alt="Webmedia Georgia" />
      <span>Development WebMedia</span></a>
</section>
</div>


<?php wp_footer(); ?>

</body>

</html>