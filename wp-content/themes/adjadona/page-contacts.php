<?php get_header(); ?>

<?php
/*
Template Name: Contacts
*/
?>

<main class="main">
   <section class="contacts">
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
                     <a href="<?php echo home_url('/maison'); ?>" class="breadcrumbs__link breadcrumbs__link--active">Contacts</a>
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
                     <a href="<?php echo home_url('/home'); ?>" class="breadcrumbs__link breadcrumbs__link--active">Contacts</a>
                  </li>
               </ul>
            </div>
         </div>
      <?php endif; ?>

      <div class="titles">
         <h2 class="title"><?php echo the_field('contacts_title') ?></h2>
         <h4 class="label"><?php echo the_field('contacts_subtitle') ?></h4>
      </div>
      <div class="container">
         <div class="contacts__inner">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts-bg-4552ed2e3e.png" class="contacts__bg image" alt="Contacts bg" />
            <ul class="our-offices__cards list-reset">
               <?php if (have_rows('contacts_card')) : ?>
                  <?php while (have_rows('contacts_card')) : the_row(); ?>
                     <?php $contacts_card_country = get_sub_field('contacts_card_country'); ?>
                     <?php $contacts_card_title = get_sub_field('contacts_card_title'); ?>
                     <?php $contacts_card_adress = get_sub_field('contacts_card_adress'); ?>
                     <?php $contacts_card_phone = get_sub_field('contacts_card_phone'); ?>
                     <?php $contacts_card_mail = get_sub_field('contacts_card_mail'); ?>
                     <?php $contacts_card_img = get_sub_field('contacts_card_img'); ?>
                     <?php $contacts_card_map = get_sub_field('contacts_card_map'); ?>

                     <li class="our-offices__item">
                        <article class="office-card">
                           <div class="office-card__info">
                              <div class="office-card__top">
                                 <span class="office-card__country"><?php echo $contacts_card_country; ?></span>
                                 <h3 class="office-card__title">
                                    <?php echo $contacts_card_title; ?>
                                 </h3>
                                 <adress class="office-card__adress"><?php echo $contacts_card_adress; ?></adress>
                              </div>
                              <div class="office-card__bottom">
                                 <div class="office-card__phone">
                                    <svg>
                                       <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite-98721a2dbd.svg#phone"></use>
                                    </svg>
                                    <span><?php echo $contacts_card_phone; ?></span>
                                 </div>
                                 <div class="office-card__mail">
                                    <svg>
                                       <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite-98721a2dbd.svg#mail"></use>
                                    </svg>
                                    <span><?php echo $contacts_card_mail; ?></span>
                                 </div>
                              </div>
                           </div>
                           <div class="contacts__map">
                              <a href="<?php echo $contacts_card_map; ?>" class="contacts__map-image" target="blank">
                                 <img loading="lazy" src="<?php echo $contacts_card_img; ?>" class="image" alt="Map" />
                              </a>
                              <svg>
                                 <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite-98721a2dbd.svg#icon-fish"></use>
                              </svg>
                           </div>
                        </article>
                     </li>
                  <?php endwhile; ?>
               <?php endif; ?>
            </ul>
         </div>
      </div>
   </section>
</main>



<?php get_footer(); ?>