<?php

/**
 * Template Name: Service Page
 */
get_header();
?>

<section class="breadcumb-area-services desktop-responsive" style="background-color:#4AABF4!important">
   <div class="container">
      <div class="row" style="align-items:center">
         <div class="col-xl-5">
            <div class="breadcumb" style="text-align:left">
				<h1 class="py-2"><?php echo esc_html(get_field('breadcrumb_title')); ?></h1>
               <p class="py-2"><?php echo esc_html(get_field('breacrumb_description')); ?></p>
               <button class="my-2"><a href="<?php echo esc_html(get_field('url')); ?>">Consult Our Experts</a></button>
            </div>
         </div>
         <div class="col-xl-7 pl-lg-5">
            <div class="breadcumb">
               <?php
               $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
               ?>
               <img src="<?php echo esc_url($image[0]); ?>" />
            </div>
         </div>
      </div>
   </div>
</section>
<section class="breadcumb-area-services mobile-responsive py-md-5" style="background-image: url('<?php echo esc_url($image[0]); ?>');">
   <div class="breadcrumb-overlay"></div>
   <div class="container pt-md-5">
      <div class="row pt-md-5" style="align-items:left">
         <div class="col-xl-12 px-0">
            <div class="breadcumb px-0" style="color:#fff;text-align:left!Important">
               <h1 class="py-2"><?php echo esc_html(get_field('breadcrumb_title')); ?></h1>
               <p class="py-2"><?php echo esc_html(get_field('breacrumb_description')); ?></p>
               <button class="my-2"><a href="<?php echo esc_html(get_field('url')); ?>">Consult Our Experts</a></button>
            </div>
         </div>
      </div>
   </div>
</section>


<section class="services-area">
   <div class="container pt-5">
      <?php
      $app_title = get_field('app_development_title');
      $app_description = get_field('app_development_description');
      ?>
      <h2 class="py-3 app-title" style="line-height: 1.3em;color:#202020;font-size:36px"><?php echo esc_html($app_title); ?></h2>
      <p class="app-description" style="color:#202020; font-size:18px"><?php echo esc_html($app_description); ?></p>
   </div>
</section>

<!-- Services Area Start -->
<section class="services-area pt-5 pb-50 mt-4" id="services">
   <div class="container pt-3">
      <div class="row">
         <div class="col-md-12 px-0">
            <div class="testimonials owl-carousel">
               <?php
               // Query to fetch posts from Services custom post type
               $args = array(
                  'post_type' => 'services',
                  'posts_per_page' => -1, // Retrieve all posts
                  'tax_query' => array(
                     array(
                        'taxonomy' => 'services-box', // Taxonomy name
                        'field' => 'name',
                        'terms' => 'Mobile App Development' // Term name
                     )
                  )
               );
               $services_query = new WP_Query($args);

               if ($services_query->have_posts()) :
                  while ($services_query->have_posts()) : $services_query->the_post();
               ?>
                     <div class="single-service">
                        <?php
                        if (has_post_thumbnail()) {
                           the_post_thumbnail('medium', ['class' => 'img-fluid mb-3']);
                        }
                        ?>
                        <div class="single-service-content">
                           <h5><?php the_title(); ?></h5>
                           <?php the_content(); ?>
                        </div>
                     </div>
               <?php
                  endwhile;
                  wp_reset_postdata(); // Reset the query
               else :
                  // If no posts found
                  echo '<p>No services found.</p>';
               endif;
               ?>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Services Area End -->
<hr>
<section class="services-area pt-50 pb-50">
   <div class="container pb-5 px-lg-5 text-center mx-auto">
      <?php
      $industry_title = get_field('industry_title');
      $industry_description = get_field('industry_description');
      ?>
      <h2 class="py-3 w-lg-75 mx-auto px-lg-5" style="line-height: 1.3em;color:#202020;font-size:36px"><?php echo esc_html($industry_title); ?></h2>
      <p class="w-lg-75 mx-auto" style="color:#202020; font-size:16px;text-align:center"><?php echo esc_html($industry_description); ?></p>
   </div>
   <section class="services-area px-2 py-2" id="services">
      <div class="container-fluid">
         <div class="industry-container w-lg-75 px-lg-5 mx-auto">
            <?php
            $args = array(
               'post_type' => 'industries',
               'posts_per_page' => -1,
               'order' => 'ASC',
               'tax_query' => array(
                  array(
                     'taxonomy' => 'industries', // Taxonomy name
                     'field' => 'name',
                     'terms' => 'Mobile App Development', // Term name
                  )
               )
            );
            $industries_query = new WP_Query($args);

            if ($industries_query->have_posts()) :
               while ($industries_query->have_posts()) : $industries_query->the_post();
            ?>
                  <div class="industry">
                     <?php
                     if (has_post_thumbnail()) {
                        the_post_thumbnail('medium', ['class' => 'img-fluid mb-3 mx-auto']);
                     }
                     ?>
                     <h6><?php the_title(); ?></h6>
                  </div>
            <?php
               endwhile;
               wp_reset_postdata(); // Reset the query
            else :
               // If no posts found
               echo '<p>No industries found.</p>';
            endif;
            ?>
         </div>
      </div>
   </section>
</section>
<hr>
<section class="services-area pt-50 pb-50">
   <div class="container p-0">
      <div class="row" style="align-items:center">
         <div class="col-xl-6 px-lg-5">
            <div class="container">
               <div class="row py-sm-5">
                  <div class="col-md-6 d-flex align-items-center justify-content-center">
                     <div class="box-wrapper">
                        <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
                           <div class="content-wrapper">
                              <img src="<?php echo esc_url(get_field('counter')['image']); ?>">
                              <h6 id="number1" class="number"><?php echo esc_html(get_field('counter')['title']); ?></h6>
                              <h2><span class="counter"><?php echo number_format(get_field('counter')['name']); ?></span>+</h2>
                           </div>
                        </div>
                        <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible; margin-top: -20px; border-radius: 8px;">
                           <div class="content-wrapper">
                              <img src="<?php echo esc_url(get_field('counter_2')['image']); ?>">
                              <h6 id="number1" class="number" ><?php echo esc_html(get_field('counter_2')['title']); ?></h6>
                              <h2><span class="counter"><?php echo number_format(get_field('counter_2')['name']); ?></span>+</h2>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 d-flex align-items-center justify-content-center">
                     <div class="box-wrapper-1">
                        <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
                           <div class="content-wrapper">
                              <img src="<?php echo esc_url(get_field('counter_1')['image']); ?>">
                              <h6 id="number1" class="number"><?php echo esc_html(get_field('counter_1')['title']); ?></h6>
                              <h2><span class="counter"><?php echo number_format(get_field('counter_1')['name']); ?></span>+</h2>
                           </div>
                        </div>
                        <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible; margin-top: -20px; border-radius: 8px;">
                           <div class="content-wrapper">
                              <img src="<?php echo esc_url(get_field('counter_3')['image']); ?>">
                              <h6 id="number1" class="number"><?php echo esc_html(get_field('counter_3')['title']); ?></h6>
                              <h2><span class="counter"><?php echo number_format(get_field('counter_3')['name']); ?></span>+</h2>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-6 pl-lg-5">
            <div class="form container-fluid">
               <?php
               echo do_shortcode(
                  '[contact-form-7 id="9b8714e" title="Contact form 1"]'
               );
               ?>
            </div>
         </div>
      </div>
   </div>
</section>
<hr>
<section class="services-area pt-50 pb-50">
   <div class="container pb-4 px-sm-0">
      <?php
      $technology_title = get_field('technology_title');
      $technology_description = get_field('technology_description');
      ?>
      <h2 class="pb-3 app-title" style="line-height: 1.3em;color:#202020;font-size:32px"><?php echo esc_html($technology_title); ?></h2>
      <p class="app-description" style="color:#202020; font-size:18px"><?php echo esc_html($technology_description); ?></p>
   </div>
   <div class="container-fluid px-lg-5">
   <div class="card-container row px-lg-5">
      <?php
      // Query to fetch posts from Services custom post type
      $args = array(
         'post_type' => 'services',
         'posts_per_page' => -1, // Retrieve all posts
         'order' => 'ASC',
         'tax_query' => array(
            array(
               'taxonomy' => 'services-box', // Taxonomy name
               'field' => 'name',
               'terms' => 'Latest Technology - App', // Term name
            )
         )
      );
      $services_query = new WP_Query($args);

      if ($services_query->have_posts()) :
         $counter = 0;
         while ($services_query->have_posts()) : $services_query->the_post();
            $counter++;
      ?>
            <div class="card-row single-card m-3">
               <div class="technology-card border-light text-left p-1 mb-2">
                  <div class="card-body">
                     <div class="d-flex align-items-center">
                        <?php
                        if (has_post_thumbnail()) {
                           the_post_thumbnail('medium', ['class' => 'img mb-1 pr-2']);
                        }
                        ?>
                        <h5><?php the_title(); ?></h5>
                     </div>
                     <div>
                        <p><?php the_content(); ?></p>
                     </div>
                  </div>
               </div>
            </div>
      <?php
         endwhile;
         wp_reset_postdata();
      else :
         // If no posts found
         echo '<p>No services found.</p>';
      endif;
      ?>
   </div>
</div>
</section>
<hr>
<section class="services-area pt-50 pb-50">
   <div class="container pb-5 px-lg-5 text-center mx-auto">
      <?php
      $process_title = get_field('dev_process_title');
      $process_description = get_field('dev_process_description');
      ?>
      <h2 class="pb-3 w-lg-75 mx-auto px-lg-5" style="line-height: 1.3em;color:#202020;font-size:36px"><?php echo esc_html($process_title); ?></h2>
      <p class="w-100 mx-auto" style="color:#202020; font-size:16px; text-align:center"><?php echo esc_html($process_description); ?></p>
   </div>
   <div class="container-fluid py-0 px-lg-5 desktop-responsive">
      <div class="row align-items-center">
         <div class="col-4 p-0">
            <p class="text-justify">
            <?php echo esc_html(get_field('process')['description']); ?>
            </p>
         </div>
         <div class="col-1">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/Arrow.png" alt="" />
         </div>
         <div class="col-2 boxes mx-auto" style="border-radius:30px 30px 5px 5px;">
            <p><?php echo esc_html(get_field('process')['title']); ?></p>
         </div>
         <div class="col-1">
         </div>
         <div class="col-4 p-0">
         </div>
      </div>
      <div class="row align-items-center">
         <div class="col-4 p-0">
         </div>
         <div class="col-1">
         </div>
         <div class="col-2 boxes-2 mx-auto" style="background-color:#FFC7C2;">
            <p style="color: #F24822;"><?php echo esc_html(get_field('process')['title_1']); ?></p>
         </div>
         <div class="col-1">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/Arrow 16.png" alt="" />
         </div>
         <div class="col-4 p-0">
            <p class="text-justify">
               <?php echo esc_html(get_field('process')['description_1']); ?>
            </p>
         </div>
      </div>
      <div class="row align-items-center">
         <div class="col-4 p-0">
            <p class="text-justify">
            <?php echo esc_html(get_field('process')['description_2']); ?>
            </p>
         </div>
         <div class="col-1">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/Arrow.png" alt="" />
         </div>
         <div class="col-2 boxes-2 mx-auto p-0" style="background-color:#FCD19C;">
            <p style="color: #F8970F;"><?php echo esc_html(get_field('process')['title_2']); ?></p>
         </div>
         <div class="col-1">
         </div>
         <div class="col-4 p-0">
         </div>
      </div>
      <div class="row align-items-center">
         <div class="col-4 p-0">
         </div>
         <div class="col-1">
         </div>
         <div class="col-2 boxes-2 mx-auto" style="background-color:#AFF4C6;">
            <p style="color: #14AE5C;"><?php echo esc_html(get_field('process')['title_3']); ?></p>
         </div>
         <div class="col-1">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/Arrow 16.png" alt="" />
         </div>
         <div class="col-4 p-0">
            <p class="text-justify">
            <?php echo esc_html(get_field('process')['description_3']); ?>
            </p>
         </div>
      </div>
      <div class="row align-items-center">
         <div class="col-4 p-0">
            <p class="text-justify">
            <?php echo esc_html(get_field('process')['description_4']); ?>
            </p>
         </div>
         <div class="col-1">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/Arrow.png" alt="" />
         </div>
         <div class="col-2 boxes mx-auto" style="border-radius:5px 5px 30px 30px;">
            <p><?php echo esc_html(get_field('process')['title_4']); ?></p>
         </div>
         <div class="col-1">
         </div>
         <div class="col-4 p-0">
         </div>
      </div>
   </div>
   <div class="container-fluid py-5 px-lg-5 mobile-responsive">
      <div class="row my-4">
         <div class="w-75 boxes mx-auto pb-4 px-3 py-2" style="border-radius:30px 30px 5px 5px;flex-direction:column;height:230px">
            <p><?php echo esc_html(get_field('process')['title']); ?></p>
            <div style="color:black"><?php echo esc_html(get_field('process')['description']); ?></div>
         </div>
      </div>
      <div class="row my-4">
         <div class="w-75 boxes-2 mx-auto pb-4 px-3 py-2" style="background-color:#FFC7C2;flex-direction:column;height:230px">
            <p style="color: #F24822;"><?php echo esc_html(get_field('process')['title_1']); ?></p>
            <div style="color:black"><?php echo esc_html(get_field('process')['description_1']); ?></div>
         </div>
      </div>
      <div class="row my-4">
         <div class="w-75 boxes-2 mx-auto pb-4 px-3 py-2" style="background-color:#FCD19C;flex-direction:column;height:230px">
            <p style="color: #F8970F;"><?php echo esc_html(get_field('process')['title_2']); ?></p>
            <div style="color:black"><?php echo esc_html(get_field('process')['description_2']); ?></div>
         </div>
      </div>
      <div class="row my-4">
         <div class="w-75 boxes-2 mx-auto pb-4 px-3 py-2" style="background-color:#AFF4C6;flex-direction:column;height:230px">
            <p style="color: #14AE5C;"><?php echo esc_html(get_field('process')['title_3']); ?></p>
            <div style="color:black"><?php echo esc_html(get_field('process')['description_3']); ?></div>
         </div>
      </div>
      <div class="row my-4">
         <div class="w-75 boxes mx-auto pb-4 px-3 py-2" style="border-radius:5px 5px 30px 30px;flex-direction:column;height:230px">
            <p><?php echo esc_html(get_field('process')['title_4']); ?></p>
            <div style="color:black"><?php echo esc_html(get_field('process')['description_4']); ?></div>
         </div>
      </div>
   </div>
</section>
<hr>
<section class="services-area pt-50 pb-50">
   <div class="container pb-3 px-lg-5 text-center mx-auto">
      <?php
      $brand_title = get_field('brand_title');
      ?>
      <h2 class="pb-3 w-lg-75 mx-auto px-lg-5" style="line-height: 1.3em;color:#202020;font-size:36px"><?php echo esc_html($brand_title); ?></h2>
   </div>
   <section class="services-area px-2 py-2" id="services">
      <div class="container-fluid">
         <div class="brand-container px-lg-5 mx-auto">
            <?php
            // Query to fetch posts from Industries custom post type
            $args = array(
               'post_type' => 'industries',
               'posts_per_page' => -1,
               'order' => 'ASC',
               'tax_query' => array(
                  array(
                     'taxonomy' => 'industries', // Taxonomy name
                     'field' => 'name',
                     'terms' => 'Global Brands', // Term name
                  )
               )
            );
            $industries_query = new WP_Query($args);

            if ($industries_query->have_posts()) :
               while ($industries_query->have_posts()) : $industries_query->the_post();
            ?>
                  <div class="global-brand">
                     <?php
                     if (has_post_thumbnail()) {
                        the_post_thumbnail('medium', ['class' => 'mb-3 px-4']);
                     }
                     ?>
                  </div>
            <?php
               endwhile;
               wp_reset_postdata(); // Reset the query
            else :
               // If no posts found
               echo '<p>No industries found.</p>';
            endif;
            ?>
         </div>
      </div>
   </section>
</section>
<hr>
<section class="services-area pt-50 pb-50">
   <div class="container pb-3 px-0">
      <?php
      $choose_us_title = get_field('choose_us_title');
      $choose_us_description = get_field('choose_us_description');
      ?>
      <h2 class="pb-3 app-title" style="line-height: 1.3em;color:#202020;font-size:32px"><?php echo esc_html($choose_us_title); ?></h2>
      <p class="app-description" style="color:#202020; font-size:18px"><?php echo esc_html($choose_us_description); ?></p>
   </div>
   <div class="container-fluid py-0 px-lg-5">
      <div class="card-container row px-lg-5">
         <?php
         // Query to fetch posts from Services custom post type
         $args = array(
            'post_type' => 'services',
            'posts_per_page' => -1, // Retrieve all posts
            'order' => 'ASC',
            'tax_query' => array(
               array(
                  'taxonomy' => 'services-box', // Taxonomy name
                  'field' => 'name',
                  'terms' => 'App Dev Choose Us', // Term name
               )
            )
         );
         $services_query = new WP_Query($args);

         if ($services_query->have_posts()) :
            $counter = 0;
            while ($services_query->have_posts()) : $services_query->the_post();
               $counter++;
         ?>
               <div class="card-row single-card m-3">
                  <div class="border-0 text-left mb-2">
                     <div class="card-body choose-card">
                        <div class="d-flex align-items-center">
                           <?php
                           if (has_post_thumbnail()) {
                              the_post_thumbnail('medium', ['class' => 'img mb-1 pr-2']);
                           }
                           ?>
                        </div>
                        <div class="content">
                           <h5 class="mb-1"><?php the_title(); ?></h5>
                           <p><?php the_content(); ?></p>
                        </div>
                     </div>
                  </div>
               </div>
         <?php
            endwhile;
            wp_reset_postdata();
         else :
            // If no posts found
            echo '<p>No services found.</p>';
         endif;
         ?>
      </div>
   </div>
</section>
<hr>
<section class="testimonial pt-50 pb-50">
   <div class="container-fluid">
   <div class="px-5 text-center mx-auto">
         <?php
         $testimonial_title = get_field('testimonial_title');
         $testimonial_descriptions = get_field('testimonial_description');
         ?>
         <h2 class="pb-3 w-lg-75 mx-auto px-lg-5" style="line-height: 1.3em;color:#202020;"><?php echo esc_html($testimonial_title); ?></h2>
         <p class="w-lg-50 mx-auto px-lg-5" style="line-height: 1.3em;color:#202020;font-size:18px;text-align:center"><?php echo esc_html($testimonial_descriptions); ?></p>
      </div>
      <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="false" data-duration="2000">
         <div class="carousel-inner" role="listbox">
            <?php
            // Query testimonial posts
            $args = array(
               'post_type' => 'testimonials',
               'posts_per_page' => -1, // Show all testimonials
               'order' => 'ASC',
                'tax_query' => array(
               array(
                  'taxonomy' => 'testimonial-page', // Taxonomy name
                  'field' => 'name',
                  'terms' => 'Mobile App Development', // Term name
               )
            )
            );
            $testimonials = new WP_Query($args);

            if ($testimonials->have_posts()) :
               $count = 0;
               while ($testimonials->have_posts()) :
                  $testimonials->the_post();
            ?>
                  <div class="carousel-item <?php echo ($count === 0) ? 'active' : ''; ?>">
                     <p class="comma text-center" style="text-align:center">❝</p>
                     <div class="testimonial4_slide">
                        <p><?php the_content(); ?></p>
                        <div class="row img">
                           <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="img-circle img-responsive p-1" />
                           <span class="px-3">
                              <h4><?php the_title(); ?></h4>
                              <h4 style="font-size:12px"><?php the_field('position'); ?></h4>
                           </span>
                        </div>
                     </div>
                  </div>
            <?php
                  $count++;
               endwhile;
               wp_reset_postdata();
            endif;
            ?>
         </div>
         <a class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
         </a>
         <a class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
         </a>
      </div>
   </div>
</section>
<hr>
<section class="testimonial pt-50 pb-50">
   <div class="container p-0">
      <div class="container pb-5 px-lg-5 text-center mx-auto">
         <h2 class="pb-3 w-lg-75 mx-auto px-lg-5" style="line-height: 1.3em;color:#202020;font-size:36px">Frequently Asked Questions</h2>
      </div>
      <div id="accordion" class="accordion">
         <div class="row flex-wrap"> <!-- Added flex-wrap class -->
            <?php
            // Query to retrieve FAQ posts
            $args = array(
               'post_type' => 'faq',
               'posts_per_page' => -1,
               'order' => 'ASC',
               'tax_query' => array(
                  array(
                     'taxonomy' => 'faq-category', // Taxonomy name
                     'field' => 'name',
                     'terms' => 'Mobile App Development', // Term name
                  )
            ));
            $faq_posts = new WP_Query($args);

            // Check if there are FAQ posts
            if ($faq_posts->have_posts()) :
               while ($faq_posts->have_posts()) : $faq_posts->the_post();
            ?>
                  <div class="col-lg-6">
                     <div class="card accordian-card mb-4">
                        <div class="card-header" id="faqHeading<?php the_ID(); ?>">
                           <button class="mb-0 row d-flex align-items-center flex-wrap p-0">
                              <div class="col-1">
                                 <div class="icon-circle">
                                    <i class="far fa-user"></i> <!-- User icon -->
                                 </div> <!-- User icon -->
                              </div>
                              <div class="col-10">
                                 <p class="faq-item" type="button" data-toggle="collapse" data-target="#faqCollapse<?php the_ID(); ?>" aria-expanded="true" aria-controls="faqCollapse<?php the_ID(); ?>">
                                    <?php the_title(); ?>
                                 </p>
                              </div>
                              <div class="col-1 text-right p-0" data-toggle="collapse" data-target="#faqCollapse<?php the_ID(); ?>">
                                 <i class="fa fa-chevron-down"></i> <!-- Arrow icon -->
                              </div>
                           </button>
                        </div>
                        <div id="faqCollapse<?php the_ID(); ?>" class="collapse" aria-labelledby="faqHeading<?php the_ID(); ?>" data-parent="#accordion">
                           <div class="card-body faq-body">
                              <?php the_content(); ?>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php endwhile;
               wp_reset_postdata(); // Reset the query
            else :
               ?>
               <p>No FAQs found.</p>
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
        var carousel = document.querySelector('#testimonial4');
        var prevControl = carousel.querySelector('.carousel-control-prev');
        var nextControl = carousel.querySelector('.carousel-control-next');
        var carouselItems = carousel.querySelectorAll('.carousel-item');

        prevControl.addEventListener('click', function (event) {
            event.preventDefault();
            var current = carousel.querySelector('.carousel-item.active');
            var prev = current.previousElementSibling || carouselItems[carouselItems.length - 1];
            current.classList.remove('active');
            prev.classList.add('active');
        });

        nextControl.addEventListener('click', function (event) {
            event.preventDefault();
            var current = carousel.querySelector('.carousel-item.active');
            var next = current.nextElementSibling || carouselItems[0];
            current.classList.remove('active');
            next.classList.add('active');
        });
    });
</script>
<?php get_footer(); ?>