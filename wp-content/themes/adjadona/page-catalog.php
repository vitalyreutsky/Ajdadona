<?php get_header(); ?>

<?php
/*
Template Name: Catalog
*/
?>


<main class="main">
   <section class="products">
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
                     <a href="<?php echo home_url('/maison'); ?>" class="breadcrumbs__link breadcrumbs__link--active">Produit</a>
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
                     <a href="<?php echo home_url('/home'); ?>" class="breadcrumbs__link breadcrumbs__link--active">Product</a>
                  </li>
               </ul>
            </div>
         </div>
      <?php endif; ?>

      <div class="products__decor">
         <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/boubles2-44626550f0.png" class="products__boubles image" alt="Decor" />
         <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/pattern2-9daa441ecd.png" class="products__pattern image" alt="Decor" />
      </div>
      <div class="container">
         <div class="titles">
            <h2 class="title"><?php the_field('catalog_title') ?></h2>
            <h4 class="label"><?php the_field('catalog_subtitle') ?></h4>
         </div>
         <div class="products__category-top">
            <h2 class="products__category-title">Fish <span>(13)</span></h2>
            <div class="tabs__nav products__btns">
               <?php if (ICL_LANGUAGE_CODE == 'fr') : ?>
                  <button class="products__btn products__btn-category btn btn-reset" type="button">
                     Catégorie
                     <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite-98721a2dbd.svg#filter"></use>
                     </svg>
                  </button>
                  <a href="<?php echo home_url('/catalogue'); ?>" class="products__btn products__btn-clear btn btn-reset" type="button">
                     Dégager
                     <svg class="clear">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite-98721a2dbd.svg#clear"></use>
                     </svg>
                  </a>
               <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                  <button class="products__btn products__btn-category btn btn-reset" type="button">
                     Category
                     <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite-98721a2dbd.svg#filter"></use>
                     </svg>
                  </button>
                  <a href="<?php echo home_url('/product'); ?>" class="products__btn products__btn-clear btn btn-reset" type="button">
                     Clear
                     <svg class="clear">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite-98721a2dbd.svg#clear"></use>
                     </svg>
                  </a>
               <?php endif; ?>
            </div>
         </div>
         <div class="products__show-menu">
            <div class="products__show-top">
               <?php if (ICL_LANGUAGE_CODE == 'fr') : ?>
                  <h3 class="products__show-title">Catégorie</h3>
               <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                  <h3 class="products__show-title">Category</h3>
               <?php endif; ?>
               <button class="btn-reset products__show-btn--close">
                  <svg>
                     <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite-98721a2dbd.svg#close"></use>
                  </svg>
               </button>
            </div>
         </div>
         <div class="products__inner">
            <div class="tab-header products__header" data-da=".products__show-menu,1200,1" data-simplebar>
               <aside class="tab-header__items products__items">
                  <?php
                  //НАЧАЛО СПИСКА

                  $arg_cat = array(
                     'orderby'      => 'name',
                     'order'        => 'ASC',
                     'hide_empty'   => 1,
                     'exclude'      => '',
                     'include'      => '',
                  );
                  $categories = get_categories($arg_cat);

                  if ($categories) {
                     foreach ($categories as $cat) {
                        $arg_posts =  array(
                           'posts_per_page' => -1,
                           'cat' => $cat->cat_ID,
                        );
                        $query = new WP_Query($arg_posts);




                        if ($query->have_posts()) : ?>
                           <div class="tab-header__item product__item">
                              <h2 class="product__item-title tab-header__item--active"><?php echo $cat->name; ?>
                                 <span>(<?php echo $cat->category_count; ?>)</span>
                                 <svg>
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite-98721a2dbd.svg#bottom"></use>
                                 </svg>
                              </h2>
                              <?php if (ICL_LANGUAGE_CODE == 'fr') : ?>
                                 <ul class="product__item-menu list-reset">
                                    <?php while ($query->have_posts()) : $query->the_post();  ?>
                                       <?php if (in_category('poisson')) { ?>
                                          <li class="product__item-link">
                                             <a href="<?php echo the_permalink(); ?>#0"><?php the_title(); ?></a>
                                          </li>
                                       <?php } elseif (in_category('fruits-de-mer')) { ?>
                                          <li class="product__item-link">
                                             <a href="<?php echo the_permalink(); ?>#1"><?php the_title(); ?></a>
                                          </li>
                                       <?php } else if (in_category('coquillages')) { ?>
                                          <li class="product__item-link">
                                             <a href="<?php echo the_permalink(); ?>#2"><?php the_title(); ?></a>
                                          </li>
                                       <?php } else if (in_category('viande')) { ?>
                                          <li class="product__item-link">
                                             <a href="<?php echo the_permalink(); ?>#3"><?php the_title(); ?></a>
                                          </li>

                                       <?php } else { ?>
                                          <li class="product__item-link">
                                             <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                                          </li>
                                       <?php  } ?>
                                    <?php endwhile;
                                    wp_reset_postdata(); ?>
                                 </ul>
                              <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                                 <ul class="product__item-menu list-reset">
                                    <?php while ($query->have_posts()) : $query->the_post();  ?>
                                       <?php if (in_category('fish')) { ?>
                                          <li class="product__item-link">
                                             <a href="<?php echo the_permalink(); ?>#0"><?php the_title(); ?></a>
                                          </li>
                                       <?php } elseif (in_category('seafood')) { ?>
                                          <li class="product__item-link">
                                             <a href="<?php echo the_permalink(); ?>#1"><?php the_title(); ?></a>
                                          </li>
                                       <?php } else if (in_category('shelfish')) { ?>
                                          <li class="product__item-link">
                                             <a href="<?php echo the_permalink(); ?>#2"><?php the_title(); ?></a>
                                          </li>
                                       <?php } else if (in_category('meat')) { ?>
                                          <li class="product__item-link">
                                             <a href="<?php echo the_permalink(); ?>#3"><?php the_title(); ?></a>
                                          </li>

                                       <?php } else { ?>
                                          <li class="product__item-link">
                                             <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                                          </li>
                                       <?php  } ?>
                                    <?php endwhile;
                                    wp_reset_postdata(); ?>
                                 </ul>
                              <?php endif; ?>
                           </div>
                  <?php endif;
                     }
                  }

                  // КОНЕЦ 
                  ?>

               </aside>
            </div>


            <?php
            //НАЧАЛО СПИСКА

            $arg_cat = array(
               'orderby'      => 'name',
               'order'        => 'ASC',
               'hide_empty'   => 1,
               'exclude'      => '',
               'include'      => '',
            );
            $categories = get_categories($arg_cat);

            if ($categories) {
               foreach ($categories as $cat) {
                  $arg_posts =  array(
                     'posts_per_page' => -1,
                     'cat' => $cat->cat_ID,
                  );
                  $query = new WP_Query($arg_posts);

                  if ($query->have_posts()) : ?>

                     <div class="tab-content products__content">
                        <?php if (ICL_LANGUAGE_CODE == 'fr') : ?>
                           <?php while ($query->have_posts()) : $query->the_post();  ?>
                              <?php if (in_category('poisson')) { ?>
                                 <a href="<?php echo the_permalink(); ?>#0" class="product__card">
                                    <div class="product__card-image">
                                       <?php the_post_thumbnail(); ?>
                                    </div>
                                    <h3 class="product__card-title"><?php the_title(); ?></h3>
                                 </a>
                              <?php } elseif (in_category('fruits-de-mer')) { ?>
                                 <a href="<?php echo the_permalink(); ?>#1" class="product__card">
                                    <div class="product__card-image">
                                       <?php the_post_thumbnail(); ?>
                                    </div>
                                    <h3 class="product__card-title"><?php the_title(); ?></h3>
                                 </a>
                              <?php } else if (in_category('coquillages')) { ?>
                                 <a href="<?php echo the_permalink(); ?>#2" class="product__card">
                                    <div class="product__card-image">
                                       <?php the_post_thumbnail(); ?>
                                    </div>
                                    <h3 class="product__card-title"><?php the_title(); ?></h3>
                                 </a>
                              <?php } else if (in_category('viande')) { ?>
                                 <a href="<?php echo the_permalink(); ?>#3" class="product__card">
                                    <div class="product__card-image">
                                       <?php the_post_thumbnail(); ?>
                                    </div>
                                    <h3 class="product__card-title"><?php the_title(); ?></h3>
                                 </a>

                              <?php } else { ?>
                                 <a href="<?php echo the_permalink(); ?>" class="product__card">
                                    <div class="product__card-image">
                                       <?php the_post_thumbnail(); ?>
                                    </div>
                                    <h3 class="product__card-title"><?php the_title(); ?></h3>
                                 </a>
                              <?php  } ?>
                           <?php endwhile;
                           wp_reset_postdata(); ?>
                        <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                           <?php while ($query->have_posts()) : $query->the_post();  ?>
                              <?php if (in_category('fish')) { ?>
                                 <a href="<?php echo the_permalink(); ?>#0" class="product__card">
                                    <div class="product__card-image">
                                       <?php the_post_thumbnail(); ?>
                                    </div>
                                    <h3 class="product__card-title"><?php the_title(); ?></h3>
                                 </a>
                              <?php } elseif (in_category('seafood')) { ?>
                                 <a href="<?php echo the_permalink(); ?>#1" class="product__card">
                                    <div class="product__card-image">
                                       <?php the_post_thumbnail(); ?>
                                    </div>
                                    <h3 class="product__card-title"><?php the_title(); ?></h3>
                                 </a>
                              <?php } else if (in_category('shelfish')) { ?>
                                 <a href="<?php echo the_permalink(); ?>#2" class="product__card">
                                    <div class="product__card-image">
                                       <?php the_post_thumbnail(); ?>
                                    </div>
                                    <h3 class="product__card-title"><?php the_title(); ?></h3>
                                 </a>
                              <?php } else if (in_category('meat')) { ?>
                                 <a href="<?php echo the_permalink(); ?>#3" class="product__card">
                                    <div class="product__card-image">
                                       <?php the_post_thumbnail(); ?>
                                    </div>
                                    <h3 class="product__card-title"><?php the_title(); ?></h3>
                                 </a>

                              <?php } else { ?>
                                 <a href="<?php echo the_permalink(); ?>" class="product__card">
                                    <div class="product__card-image">
                                       <?php the_post_thumbnail(); ?>
                                    </div>
                                    <h3 class="product__card-title"><?php the_title(); ?></h3>
                                 </a>
                              <?php  } ?>
                           <?php endwhile;
                           wp_reset_postdata(); ?>
                        <?php endif; ?>
                     </div>
            <?php endif;
               }
            }
            // КОНЕЦ 
            ?>
         </div>
      </div>
   </section>
</main>


<?php get_footer(); ?>