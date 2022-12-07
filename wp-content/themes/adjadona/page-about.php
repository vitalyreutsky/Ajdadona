<?php get_header(); ?>

<?php
/*
Template Name: About
*/
?>

<main class="main">
   <section class="about-hero">
      <?php if (ICL_LANGUAGE_CODE == 'fr') : ?>
         <div class="breadcrumbs">
            <div class="container">
               <ul class="breadcrumbs__list list-reset">
                  <li class="breadcrumbs__item-back">
                     <a href="<?php echo home_url('/maison'); ?>" class="breadcrumbs__link breadcrumbs__link-back"><svg>
                           <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite-98721a2dbd.svg#back"></use>
                        </svg>
                        Retour</a>
                  </li>
                  <li class="breadcrumbs__item breadcrumbs__item-main">
                     <a href="<?php echo home_url('/maison'); ?>" class="breadcrumbs__link">Maison</a>
                  </li>
                  <li class="breadcrumbs__item breadcrumbs__item-main">
                     <a href="<?php echo home_url('/maison'); ?>" class="breadcrumbs__link breadcrumbs__link--active">À propos de</a>
                  </li>
               </ul>
            </div>
         </div>
      <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
         <div class="breadcrumbs">
            <div class="container">
               <ul class="breadcrumbs__list list-reset">
                  <li class="breadcrumbs__item-back">
                     <a href="<?php echo home_url('/home'); ?>" class="breadcrumbs__link breadcrumbs__link-back"><svg>
                           <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite-98721a2dbd.svg#back"></use>
                        </svg>
                        Back</a>
                  </li>
                  <li class="breadcrumbs__item breadcrumbs__item-main">
                     <a href="<?php echo home_url('/home'); ?>" class="breadcrumbs__link">Home</a>
                  </li>
                  <li class="breadcrumbs__item breadcrumbs__item-main">
                     <a href="<?php echo home_url('/home'); ?>" class="breadcrumbs__link breadcrumbs__link--active">About us</a>
                  </li>
               </ul>
            </div>
         </div>
      <?php endif; ?>
      <div class="about-hero__inner">
         <img loading="lazy" src="<?php the_field('about_bg') ?>" class="about-hero__image--sea image" alt="About bg" />
      </div>
      <div class="hero__content">
         <h1 class="hero__title"><?php the_field('about_title') ?></h1>
         <div class="hero__text titles">
            <h2 class="hero__subtitle title"><?php the_field('about_subtitle1') ?></h2>
            <h4 class="hero__label label"><?php the_field('about_subtitle2') ?></h4>
         </div>
      </div>
   </section>

   <section class="why-us">
      <div class="container">
         <div class="titles">
            <h2 class="title"><?php the_field('why_us_title') ?></h2>
            <h4 class="label"><?php the_field('why_us_subtitle') ?></h4>
         </div>
         <h2 class="why-us__title"><?php the_field('why_us_block_title') ?></h2>
         <div class="why-us__text">
            <?php the_field('why_us_text') ?>
         </div>
      </div>
      <div class="why-us__images">
         <img loading="lazy" src="<?php the_field('why_us_img1') ?>" class="why-us__img image" alt="" />
         <img loading="lazy" src="<?php the_field('why_us_img2') ?>" class="why-us__img image" alt="" />
         <img loading="lazy" src="<?php the_field('why_us_img3') ?>" class="why-us__img image" alt="" />
         <img loading="lazy" src="<?php the_field('why_us_img4') ?>" class="why-us__img image" alt="" />
         <img loading="lazy" src="<?php the_field('why_us_img5') ?>" class="why-us__img image" alt="" />
         <img loading="lazy" src="<?php the_field('why_us_img6') ?>" class="why-us__img image" alt="" />
         <img loading="lazy" src="<?php the_field('why_us_img7') ?>" class="why-us__img image" alt="" />
      </div>
      <div class="why-us__provide">
         <h3 class="why-us__provide-title"><?php the_field('why_us_label') ?></h3>
         <div class="why-us__decor">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/boubles2-44626550f0.png" class="why-us__boubles image" alt="Decor" />
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/pattern2-9daa441ecd.png" class="why-us__pattern image" alt="Decor" />
         </div>
      </div>
   </section>

   <section class="our-results">
      <div class="container">
         <div class="titles">
            <h2 class="title"><?php the_field('our_results_title') ?></h2>
            <h4 class="label"><?php the_field('our_results_subtitle') ?></h4>
         </div>
         <div class="our-results__content count-results">
            <div class="count-results__item">
               <span class="count-results__num count-results--one" data-count-one="<?php the_field('our_results_item-num1') ?>"><?php the_field('our_results_item-num1') ?></span>
               <h5 class="count-results__title"><?php the_field('our_results_item-title1') ?></h5>
            </div>
            <div class="count-results__item">
               <span class="count-results__num count-results--second" data-count-second="<?php the_field('our_results_item-num2') ?>"><?php the_field('our_results_item-num2') ?></span>
               <h5 class="count-results__title"><?php the_field('our_results_item-title2') ?></h5>
            </div>
            <div class="count-results__item">
               <span class="count-results__num count-results--third" data-count-third="<?php the_field('our_results_item-num3') ?>"><?php the_field('our_results_item-num3') ?></span>
               <h5 class="count-results__title"><?php the_field('our_results_item-title3') ?></h5>
            </div>
         </div>
         <p class="our-results__text"><?php the_field('our_results_text') ?></p>
      </div>
   </section>

   <section class="feedback">
      <div class="titles">
         <h2 class="title"><?php echo the_field('about_have_a_questions_title') ?></h2>
         <h4 class="label"><?php echo the_field('about_have_a_questions_subtitle') ?></h4>
      </div>
      <div class="feedback__decor">
         <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/feedback-bg1-253384ca1f.png" class="feedback__fish-start image" alt="Feedback bg" />
         <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/boubles-aa55f48d2a.png" class="feedback__boubles image" alt="Decor" />
         <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/pattern-f86ec16ebf.png" class="feedback__pattern image" alt="Decor" />
         <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/feedback-bg2-621753f0bf.png" class="feedback__fish-end image" alt="Feedback bg" />
      </div>
      <p class="feedback__text"><?php echo the_field('about_have_a_questions_text') ?></p>
      <div class="feedback__form">
         <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
            <div class="form">
               <?php echo do_shortcode('[contact-form-7 id="138" title="Контактная форма"]'); ?>
            </div>
         <?php elseif (ICL_LANGUAGE_CODE == 'fr') : ?>
            <div class="form">
               <?php echo do_shortcode('[contact-form-7 id="214" title="Контактная форма FR"]'); ?>
            </div>
         <?php endif; ?>
      </div>
   </section>
</main>

<?php get_footer(); ?>