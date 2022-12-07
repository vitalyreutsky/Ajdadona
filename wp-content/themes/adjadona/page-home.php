<?php

/*
Template Name: Home
 */

get_header();
?>

<main class="main">
   <section class="hero">
      <div class="hero__inner">
         <div class="hero__image hero__image--meet">
            <img loading="lazy" src="<?php the_field('hero_img1') ?>" class="image" alt="Meet bg" />
         </div>
         <div class="hero__image hero__image--fish">
            <img loading="lazy" src="<?php the_field('hero_img2') ?>" class="image" alt="Fish bg" />
         </div>
      </div>
      <div class="hero__content">
         <h1 class="hero__title"><?php the_field('hero_title') ?></h1>
         <div class="hero__text titles">
            <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
               <h2 class="hero__subtitle title"><?php the_field('hero_subtitle1') ?> <span><?php the_field('hero_subtitle2') ?></span> <?php the_field('hero_subtitle3') ?></h2>
            <?php elseif (ICL_LANGUAGE_CODE == 'fr') : ?>
               <h2 class="hero__subtitle title title-mob"><?php the_field('hero_subtitle1') ?> <span><?php the_field('hero_subtitle2') ?></span> <?php the_field('hero_subtitle3') ?></h2>
            <?php endif; ?>
            <h4 class=" hero__label label"><?php the_field('hero_label') ?></h4>
         </div>
      </div>
   </section>

   <section class="our-products" id="our-products">
      <div class="container our-products__container">
         <div class="titles">
            <h2 class="title"><?php the_field('our_products_title') ?></h2>
            <h4 class="label"><?php the_field('our_products_subtitle') ?></h4>
         </div>
         <div class="our-products__decor">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/boubles2-44626550f0.png" class="our-products__boubles image" alt="Decor" />
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/pattern2-9daa441ecd.png" class="our-products__pattern image" alt="Decor" />
         </div>
         <div class="our-products__inner">
            <?php if (have_rows('our_products_item')) : ?>
               <?php while (have_rows('our_products_item')) : the_row(); ?>
                  <?php $our_products_card_title = get_sub_field('our_products_card_title'); ?>
                  <?php $our_products_card_img = get_sub_field('our_products_card_img'); ?>
                  <?php $our_products_card_id = get_sub_field('our_products_card_id'); ?>


                  <div class="our-products__item">
                     <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
                        <a class="our-products__item-link" href="<?php echo home_url('/product'); ?>#<?php echo $our_products_card_id; ?>">
                        <?php elseif (ICL_LANGUAGE_CODE == 'fr') : ?>
                           <a class="our-products__item-link" href="<?php echo home_url('/catalogue'); ?>#<?php echo $our_products_card_id; ?>">
                           <?php endif; ?>

                           <h3 class="our-products__title"><?php echo $our_products_card_title; ?></h3>
                           <div class="our-products__img products-fish">
                              <img loading="lazy" src="<?php echo $our_products_card_img; ?>" class="image" alt="Our products1" />
                           </div>

                           <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
                              <a href="<?php echo home_url('/product'); ?>#<?php echo $our_products_card_id; ?>" class="our-products__link">
                              <?php elseif (ICL_LANGUAGE_CODE == 'fr') : ?>
                                 <a href="<?php echo home_url('/catalogue'); ?>#<?php echo $our_products_card_id; ?>" class="our-products__link">
                                 <?php endif; ?>
                                 <svg>
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite-98721a2dbd.svg#right"></use>
                                 </svg>
                                 </a>
                              </a>
                  </div>
               <?php endwhile; ?>
            <?php endif; ?>
         </div>
      </div>
   </section>

   <section class="about-company">
      <div class="about-company__inner">
         <div class="about-company__item">
            <img loading="lazy" src="<?php echo the_field('about_company_img1') ?>" class="image" alt="About 1" />
         </div>
         <div class="about-company__item about-company__item--titles">
            <div class="titles">
               <h2 class="title"><?php echo the_field('about_company_title') ?></h2>
               <h4 class="label"><?php echo the_field('about_company_subtitle') ?></h4>
            </div>
            <img loading="lazy" src="<?php echo the_field('about_company_img2') ?>" class="image" alt="About 1" />
         </div>
         <div class="about-company__item">
            <img loading="lazy" src="<?php echo the_field('about_company_img3') ?>" class="image" alt="About 1" />
         </div>
         <div class="about-company__item">
            <img loading="lazy" src="<?php echo the_field('about_company_img4') ?>" class="image" alt="About 1" />
         </div>
         <div class="about-company__item about-company__item--descr">
            <p class="about-company__text">
               <?php echo the_field('about_company_text') ?>
            </p>

            <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
               <a href="<?php echo home_url('/about'); ?>" class="about-company__link">Read more</a>
            <?php elseif (ICL_LANGUAGE_CODE == 'fr') : ?>
               <a href="<?php echo home_url('/a-propos-de-nous'); ?>" class="about-company__link">Lire plus</a>
            <?php endif; ?>


         </div>
         <div class="about-company__item">
            <img loading="lazy" src="<?php echo the_field('about_company_img5') ?>" class="image" alt="About 1" />
         </div>
      </div>
   </section>

   <section class="our-offices" id="our-offices">
      <div class="our-offices__sea">
         <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/sea-1c5c7955ce.jpg" class="image" alt="Sea" />
      </div>
      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/subtract-8e4894ef0e.png" class="our-offices__subtract image" alt="Subtract" />
      <div class="container">
         <div class="titles">
            <h2 class="title"><?php echo the_field('our_offices_title') ?></h2>
            <h4 class="label"><?php echo the_field('our_offices_subtitle') ?></h4>
         </div>
         <ul class="our-offices__cards list-reset">
            <?php if (have_rows('our_offices_card')) : ?>
               <?php while (have_rows('our_offices_card')) : the_row(); ?>
                  <?php $our_offices_card_country = get_sub_field('our_offices_card_country'); ?>
                  <?php $our_offices_card_title = get_sub_field('our_offices_card_title'); ?>
                  <?php $our_offices_card_adress = get_sub_field('our_offices_card_adress'); ?>
                  <?php $our_offices_card_phone = get_sub_field('our_offices_card_phone'); ?>
                  <?php $our_offices_card_mail = get_sub_field('our_offices_card_mail'); ?>

                  <li class="our-offices__item">
                     <article class="office-card">
                        <div class="office-card__top">
                           <span class="office-card__country"><?php echo $our_offices_card_country; ?></span>
                           <h3 class="office-card__title"><?php echo $our_offices_card_title; ?></h3>
                           <adress class="office-card__adress"><?php echo $our_offices_card_adress; ?></adress>
                        </div>
                        <div class="office-card__bottom">
                           <div class="office-card__phone">
                              <svg>
                                 <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite-98721a2dbd.svg#phone"></use>
                              </svg>
                              <span><?php echo $our_offices_card_phone; ?></span>
                           </div>
                           <div class="office-card__mail">
                              <svg>
                                 <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite-98721a2dbd.svg#mail"></use>
                              </svg>
                              <span><?php echo $our_offices_card_mail; ?></span>
                           </div>
                        </div>
                     </article>
                  </li>
               <?php endwhile; ?>
            <?php endif; ?>
         </ul>
      </div>
   </section>

   <section class="feedback">
      <div class="titles">
         <h2 class="title"><?php echo the_field('have_a_questions_title') ?></h2>
         <h4 class="label"><?php echo the_field('have_a_questions_subtitle') ?></h4>
      </div>
      <div class="feedback__decor">
         <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/feedback-bg1-253384ca1f.png" class="feedback__fish-start image" alt="Feedback bg" />
         <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/boubles-aa55f48d2a.png" class="feedback__boubles image" alt="Decor" />
         <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/pattern-f86ec16ebf.png" class="feedback__pattern image" alt="Decor" />
         <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/feedback-bg2-621753f0bf.png" class="feedback__fish-end image" alt="Feedback bg" />
      </div>
      <p class="feedback__text"><?php echo the_field('have_a_questions_text') ?></p>
      <div class="feedback__form">
         <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
            <div class="form">
               <?php echo do_shortcode('[contact-form-7 id="138" title="Контактная форма EN"]'); ?>
            </div>
         <?php elseif (ICL_LANGUAGE_CODE == 'fr') : ?>
            <div class="form">
               <?php echo do_shortcode('[contact-form-7 id="214" title="Контактная форма FR"]'); ?>
            </div>
         <?php endif; ?>
      </div>
   </section>

   <section class="certificates" style="background-image: url(<?php echo the_field('certificates_bg'); ?>)" id="certificates">
      <div class="titles">
         <h2 class="title"><?php echo the_field('certificates_title') ?></h2>
         <h4 class="label"><?php echo the_field('certificates_subtitle') ?></h4>
      </div>
      <div class="swiper certificates__swiper">
         <div class="swiper-wrapper certificates__wrapper">
            <?php if (have_rows('certificates_slider')) : ?>
               <?php while (have_rows('certificates_slider')) : the_row(); ?>
                  <?php $certificates_slider_img = get_sub_field('certificates_slider_img'); ?>
                  <div class="swiper-slide certificates__slide">
                     <img loading="lazy" src="<?php echo $certificates_slider_img; ?>" class="image" alt="Certificate" />
                  </div>
               <?php endwhile; ?>
            <?php endif; ?>
         </div>
      </div>
      <div class="swiper__btns">
         <div class="swiper-button-prev"></div>
         <div class="swiper-button-next"></div>
      </div>
   </section>

   <section class="about-our-product">
      <div class="container">
         <div class="titles">
            <h2 class="title"><?php echo the_field('about_our_product_title') ?></h2>
            <h4 class="label"><?php echo the_field('about_our_product_label') ?></h4>
         </div>
         <div class="about-our-product__inner">
            <div class="about-our-product__decor">
               <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/pattern2-9daa441ecd.png" class="about-our-product__pattern image" alt="Decor" />
            </div>

            <div class="about-our-product__item">
               <div class="about-our-product__descr">
                  <h3 class="about-our-product__title"><?php echo the_field('about_our_product_block_title'); ?></h3>
                  <div class="about-our-product__image about-our-product__image--show">
                     <img loading="lazy" src="<?php echo the_field('about_our_product_img'); ?>" class="image" alt="Our product" />
                  </div>
                  <p class="about-our-product__text"><?php echo the_field('about_our_product_text'); ?></p>
                  <?php if (have_rows('about_our_product_block_list')) : ?>
                     <?php while (have_rows('about_our_product_block_list')) : the_row(); ?>
                        <?php $about_our_product_block_title = get_sub_field('about_our_product_block_title'); ?>
                        <?php $about_our_product_block_item = get_sub_field('about_our_product_block_item'); ?>
                        <ul class="about-our-product__list list-reset">
                           <?php
                           if (!empty($about_our_product_block_title)) : ?>
                              <h4 class="about-our-product__text about-our-product__list-title"><?php echo $about_our_product_block_title; ?></h4>
                           <?php endif; ?>
                           <div>
                              <?php if (have_rows('about_our_product_block_items')) : ?>
                                 <?php while (have_rows('about_our_product_block_items')) : the_row(); ?>
                                    <?php $about_our_product_block_item = get_sub_field('about_our_product_block_item'); ?>
                                    <li class="about-our-product__text about-our-product__list-item"><?php echo $about_our_product_block_item; ?></li>
                                 <?php endwhile; ?>
                              <?php endif; ?>

                           </div>
                        </ul>
                     <?php endwhile; ?>
                  <?php endif; ?>



                  <a href="#" class="about-our-product__link">
                     <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
                        <a href="<?php echo home_url('/about'); ?>" class="about-our-product__link">
                           <span>Read more</span>
                        <?php elseif (ICL_LANGUAGE_CODE == 'fr') : ?>
                           <a href="<?php echo home_url('/a-propos-de-nous'); ?>" class="about-our-product__link">
                              <span>Lire plus</span>
                           <?php endif; ?>
                           <svg>
                              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite-98721a2dbd.svg#right"></use>
                           </svg>
                           </a>
               </div>
               <div class="about-our-product__image">
                  <img loading="lazy" src="<?php echo the_field('about_our_product_img'); ?>" class="image" alt="Our product" />
               </div>
            </div>

            <div class="about-our-product__item">
               <div class="about-our-product__descr">
                  <h3 class="about-our-product__title"><?php echo the_field('about_our_product_block_title2'); ?></h3>
                  <div class="about-our-product__image about-our-product__image--show">
                     <img loading="lazy" src="<?php echo the_field('about_our_product_img2'); ?>" class="image" alt="Our product" />
                  </div>


                  <?php if (have_rows('about_our_product_text2')) : ?>
                     <?php while (have_rows('about_our_product_text2')) : the_row(); ?>
                        <?php $about_our_product_texts = get_sub_field('about_our_product_texts'); ?>
                        <p class="about-our-product__text"><?php echo $about_our_product_texts; ?></p>
                     <?php endwhile; ?>
                  <?php endif; ?>


                  <a href="#" class="about-our-product__link">
                     <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
                        <a href="<?php echo home_url('/about'); ?>" class="about-our-product__link">
                           <span>Read more</span>
                        <?php elseif (ICL_LANGUAGE_CODE == 'fr') : ?>
                           <a href="<?php echo home_url('/a-propos-de-nous'); ?>" class="about-our-product__link">
                              <span>Lire plus</span>
                           <?php endif; ?>
                           <svg>
                              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite-98721a2dbd.svg#right"></use>
                           </svg>
                           </a>
               </div>
               <div class="about-our-product__image">
                  <img loading="lazy" src="<?php echo the_field('about_our_product_img2'); ?>" class="image" alt="Our product" />
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="offers">
      <div class="container">
         <div class="titles">
            <h2 class="title"><?php echo the_field('best_offers_title') ?></h2>
            <h4 class="label"><?php echo the_field('best_offers_subtitle') ?></h4>
         </div>
         <div class="offers__decor">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/boubles3-ad7d52b972.png" class="offers__boubles image" alt="Decor" />
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/pattern-f86ec16ebf.png" class="offers__pattern image" alt="Decor" />
         </div>
         <div class="swiper offers__swiper">
            <div class="swiper-wrapper offers__wrapper">

               <?php if (have_rows('best_offers_slider')) : ?>
                  <?php while (have_rows('best_offers_slider')) : the_row(); ?>
                     <?php $best_offers_slider_img = get_sub_field('best_offers_img'); ?>
                     <div class="swiper-slide offers__slide">
                        <img loading="lazy" src="<?php echo $best_offers_slider_img; ?>" class="image" alt="Offer 1" />
                     </div>
                  <?php endwhile; ?>
               <?php endif; ?>

            </div>
            <div class="swiper__btns">
               <div class="swiper-button-prev"></div>
               <div class="swiper-button-next"></div>
            </div>
            <div class="swiper-pagination"></div>
         </div>
      </div>
   </section>
</main>

<?php
get_footer();
