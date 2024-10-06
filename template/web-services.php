<?php

/**
 * Template Name: Web Service Page
 */
get_header();
?>
<style>
   .package-box {
      background-color: #145CAA;
      /* Light gray background */
      padding: 30px 0px;
      color: white;
      border-radius: 20px 20px 0px 0px;
      /* Soft shadow */
   }
   button:hover{
      box-shadow: none!important;
   }
   .package .fa-chevron-down {
    color: #fff;
    font-size: 14px!important;
    background-color: #00000059;
    border-radius: 50px;
    float: right;
    transition: transform .3s ease;
}
   button{
      box-shadow: none!important;
   }
   .packages {
      box-shadow: 0px 2px 4px 0px #00000040 inset;
      box-shadow: 0px 4px 4px 0px #00000040;
      border-radius: 10px;
   }

   .package {
      background-color: white !Important;
      border-bottom: 0px solid #145caa!Important;
      border-radius: 0px !important;
      color: black;
   }

   .package-name {
      font-size: 28px;
      font-weight: bold;
      font-weight: 500;
   }

   .package-amount {
      font-size: 24px;
      color: white;
      /* Blue color for price */
      font-weight: bold;
   }

   .card {
      border: none;
      /* Remove border from card */
      margin-bottom: 20px;
   }

   .card-body {
      padding: 20px;
   }

   .feature-list {
      list-style-type: none;
      padding: 0;
      margin:5px;
   }

   .feature-item {
      margin-bottom: 10px;
      font-size:16px;
   }

   .feature-label {
      float: right;
      color: #6c757d;
      /* Gray color for label */
   }
</style>
<!-- Slider Area Start -->
<section class="breadcumb-area-services desktop-responsive" style="background-color:#4AABF4!important">
   <div class="container">
      <div class="row" style="align-items:center">
         <div class="col-xl-5">
            <div class="breadcumb" style="text-align:left">
               <h1 class="pb-2"><?php echo esc_html(get_field('title')); ?></h1>
               <p class="pb-2"><?php echo esc_html(get_field('description')); ?></p>
               <button class="my-2 pb-2"><a href="<?php echo esc_html(get_field('url')); ?>">Consult Our Experts</a></button>
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
<section class="breadcumb-area-services mobile-responsive pb-md-5" style="background-image: url('<?php echo esc_url($image[0]); ?>');">
   <div class="breadcrumb-overlay"></div>
   <div class="container pt-md-5">
      <div class="row pt-md-5" style="align-items:left">
         <div class="col-xl-12 px-0">
            <div class="breadcumb px-0" style="color:#fff;text-align:left!Important">
               <h1 class="pb-2"><?php echo esc_html(get_field('title')); ?></h1>
               <p class="pb-2"><?php echo esc_html(get_field('description')); ?></p>
               <button class="my-2 pb-2"><a href="<?php echo esc_html(get_field('url')); ?>">Consult Our Experts</a></button>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Slider Area End -->


<section class="services-area pt-50 pb-50">
   <div class="container pb-5">
      <?php
      $web_title = get_field('web_title');
      $web_description = get_field('web_description');
      ?>
      <h2 class="pb-3 app-title" style="line-height: 1.3em;color:#202020;font-size:36px"><?php echo esc_html($web_title); ?></h2>
      <p class="app-description" style="color:#202020; font-size:18px"><?php echo esc_html($web_description); ?></p>
   </div>
   <div class="container px-0 pt-5">
      <div class="row">
         <div class="col-md-12">
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
                        'terms' => 'Web Development' // Term name
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
      $process_title = get_field('dev_process_title');
      $process_description = get_field('dev_process_description');
      ?>
      <h2 class="pb-3 w-lg-100 mx-auto px-lg-5" style="line-height: 1.3em;color:#202020;font-size:36px"><?php echo esc_html($process_title); ?></h2>
      <p class="w-md-100 w-lg-75 mx-auto" style="color:#202020; font-size:18px; text-align:center"><?php echo esc_html($process_description); ?></p>
   </div>
   <!-- HTML -->
   <div class="row container-fluid chart-pie mx-lg-auto mx-md-0" style="position: relative;">
      <div class="col-lg-2 p-0 desktop-responsive">
         <div class="para-1" style="width: 450px;margin-top: 26%;margin-left: 10%;">
            <p style="font-size: 14px;"><?php echo esc_html(get_field('process_5')['description']); ?></p>
         </div>
         <div class="para-2" style="width: 400px;margin-top: 30%;margin-left: 5%;">
            <p style="font-size: 14px;"><?php echo esc_html(get_field('process_4')['description']); ?></p>
         </div>
         <div class="para-3" style="width: 400px;margin-top: 50%;margin-left: 8%;">
            <p style="font-size: 14px;"><?php echo esc_html(get_field('process_3')['description']); ?></p>
         </div>
      </div>
      <div class="col-lg-1 p-0 desktop-responsive">
         <p><img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/Vector-73.png" alt="" style="margin-left: 212%;margin-top: 70%;padding: 10px;"></p>
         <p><img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/Vector-74.png" alt="" style="margin-top: 90%;margin-left: 162%;padding: 10px;"></p>
         <p><img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/Vector-75.png" alt="" style="margin-top: 70%;margin-left: 145%;padding: 10px;"></p>
      </div>
      <div class="col-lg-6 p-0 col-md-12">
         <div class="circle">
            <div class="container pl-3 pr-0 mx-0 w-25" style="padding-top: 29%;">
               <img src="<?php echo esc_url(get_field('process_4')['image']); ?>" class="px-3 pl-4">
               <p id="number1" class="number"><?php echo esc_html(get_field('process_4')['title']); ?></p>
            </div>
            <div class="container px-0 mx-auto w-25" style="padding-top: 21%;display: flex;flex-direction: column;align-items: center;">
               <img src="<?php echo esc_url(get_field('process_2')['image']); ?>" class="px-3 pl-4">
               <p id="number1" class="number"><?php echo esc_html(get_field('process_2')['title']); ?></p>
            </div>
         </div>
         <div class="circle">
            <div class="container px-3 ml-auto w-25" style="padding-top: 22%;display: flex;flex-direction: column;align-items: center;margin-right: 18%;">
               <img src="<?php echo esc_url(get_field('process')['image']); ?>" class="px-3 pl-4">
               <p id="number1" class="number"><?php echo esc_html(get_field('process')['title']); ?></p>
            </div>
         </div>
         <div class="circle">
            <div class="container pl-3 pr-0 mx-0 w-25" style="padding-top: 53%;padding-right: 0px;">
               <img src="<?php echo esc_url(get_field('process_3')['image']); ?>" class="px-3 pl-4">
               <p id="number1" class="number"><?php echo esc_html(get_field('process_3')['title']); ?></p>
            </div>
            <div class="container px-0 ml-auto" style="display: flex;flex-direction: column;align-items: center;margin-top: -13%;margin-left: 35%!important;">
               <img src="<?php echo esc_url(get_field('process_1')['image']); ?>" class="px-3 pl-4">
               <p id="number1" class="number"><?php echo esc_html(get_field('process_1')['title']); ?></p>
            </div>
            <div class="container pl-3 mx-0 w-25 mx-auto" style="margin-top: -62%;margin-left: 26%!Important;">
               <img src="<?php echo esc_url(get_field('process_5')['image']); ?>" class="px-3">
               <p id="number1" class="number"><?php echo esc_html(get_field('process_5')['title']); ?></p>
            </div>
         </div>
      </div>
      <div class="col-lg-3 desktop-responsive">
         <p style="margin-left: -60%;display: flex;align-items: center;flex-wrap: nowrap;flex-direction: row;z-index: -1;position: relative;width: 500px;margin-top: 16%;"><img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/Vector-70.png" alt=""><span class="para-4" style="font-size: 14px;"><?php echo esc_html(get_field('process')['description']); ?></span></p>
         <p style="margin-left: -55%;display: flex;align-items: baseline;flex-wrap: nowrap;flex-direction: row;z-index: -1;position: relative;width: 491px;margin-top: 50%;"><img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/Vector-71.png" alt=""><span class="para-4" style="font-size: 14px;"><?php echo esc_html(get_field('process_1')['description']); ?></span></p>
         <p style="margin-left: -110%;display: flex;align-items: baseline;flex-wrap: nowrap;flex-direction: row;z-index: -1;position: relative;width: 500px;margin-top: 0%;"><img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/Vector-72.png" alt=""><span class="para-4" style="font-size: 14px;"><?php echo esc_html(get_field('process_2')['description']); ?></span></p>
      </div>
   </div>
   <div class="container content mobile-responsive">
      <p class="pb-3" style="font-size: 26px;"><strong id="number1" class="number" style="font-weight:700">1. <?php echo esc_html(get_field('process')['title']); ?></strong>: <?php echo esc_html(get_field('process')['description']); ?></p>
      <p class="pb-3" style="font-size: 26px;"><strong id="number1" class="number" style="font-weight:700">2. <?php echo esc_html(get_field('process_1')['title']); ?></strong>: <?php echo esc_html(get_field('process_1')['description']); ?></p>
      <p class="pb-3" style="font-size: 26px;"><strong id="number1" class="number" style="font-weight:700">3. <?php echo esc_html(get_field('process_2')['title']); ?></strong>: <?php echo esc_html(get_field('process_2')['description']); ?></p>
      <p class="pb-3" style="font-size: 24px;"><strong id="number1" class="number" style="font-weight:700">4. <?php echo esc_html(get_field('process_3')['title']); ?></strong>: <?php echo esc_html(get_field('process_3')['description']); ?></p>
      <p style="font-size: 24px;"><strong id="number1" class="number" style="font-weight:700">5. <?php echo esc_html(get_field('process_4')['title']); ?></strong>: <?php echo esc_html(get_field('process_4')['description']); ?></p>
      <p class="pb-3" style="font-size: 24px;"><strong id="number1" class="number" style="font-weight:700">6. <?php echo esc_html(get_field('process_5')['title']); ?></strong>: <?php echo esc_html(get_field('process_5')['description']); ?></p>
   </div>
</section>
<hr>
<section class="services-area pt-50 pb-50">
   <div class="container pb-5 px-lg-5 text-center mx-auto">
      <?php
      $business_title = get_field('business_title');
      ?>
      <h2 class="pb-3 w-lg-75 mx-auto px-lg-5" style="line-height: 1.3em;color:#202020;font-size:36px"><?php echo esc_html($business_title); ?></h2>
   </div>
   <section class="services-area px-lg-2 px-0 pb-2" id="services">
      <div class="container-fluid px-0 px-lg-2">
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
   <div class="container pb-3 px-lg-0 px-3">
      <?php
      $choose_us_title = get_field('choose_us_title');
      $choose_us_description = get_field('choose_us_description');
      ?>
      <h2 class="pb-3 app-title" style="line-height: 1.3em;color:#202020;font-size:32px"><?php echo esc_html($choose_us_title); ?></h2>
      <p class="app-description" style="color:#202020; font-size:18px"><?php echo esc_html($choose_us_description); ?></p>
   </div>
   <div class="container-fluid pb-0 px-lg-5 px-0">
      <div class="card-container row px-lg-4">
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
                  'terms' => 'Web Dev Choose Us', // Term name
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
<section class="services-area pt-50 pb-50">
   <div class="container pb-5 px-lg-5 text-center mx-auto">
      <?php
      $package_title = get_field('package_title');
      $package_description = get_field('package_description');
      ?>
      <h2 class="py-3 w-lg-100 mx-auto px-lg-5 text-center" style="line-height: 1.3em;color:#202020;font-size:36px"><?php echo esc_html($package_title); ?></h2>
      <p class="w-md-100 w-lg-75 mx-auto text-center" style="color:#202020; font-size:18px"><?php echo esc_html($package_description); ?></p>
   </div>
   <div class="container">
      <div class="mobile-responsive packages pb-4 mb-4"> <!-- Package Box -->
         <div class="package-box">
            <div class="row">
               <div class="col">
                  <div class="row">
                     <div class="col">
                        <div class="package-name">Basic</div>
                     </div>
                     <div class="col">
                        <div class="package-amount text-right">$199</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Accordion for Features -->
         <div id="accordion">
            <div class="card">
               <div class="card-header package" id="headingOne">
                  <h5 class="mb-0">
                     <button class="btn btn-link feature-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color:black;text-align:left">
                        Features <span class="fas fa-chevron-down float-right"></span>
                     </button>
                  </h5>
               </div>

               <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                     <ul class="feature-list">
                        <?php
                        // Query testimonial posts
                        $args = array(
                           'post_type' => 'packages',
                           'posts_per_page' => -1, // Show all testimonials
                           'order' => 'ASC',
                           'tax_query' => array(
                              array(
                                 'taxonomy' => 'package-name', // Taxonomy name
                                 'field' => 'name',
                                 'terms' => 'Web Packages', // Term name
                              )
                           )
                        );
                        $packages = new WP_Query($args);

                        if ($packages->have_posts()) :
                           $count = 0;
                           while ($packages->have_posts()) :
                              $packages->the_post();
                        ?>
                              <li class="feature-item">
                                 <?php the_title(); ?>
                                 <span class="feature-label text-muted" style="float:right"><?php the_field('basic'); ?></span>
                              </li>
                        <?php
                              $count++;
                           endwhile;
                           wp_reset_postdata();
                        endif;
                        ?>
                        <!-- Add more features as needed -->
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="button-package mx-4" style="text-align: center;">
            <a href="<?php echo esc_html(get_field('url_1')); ?>" class="btn btn-large btn-transparent border text-primary border-primary px-4 py-3 w-100 mx-auto" style="border-radius: 36px;">Get Started</a>
         </div>
      </div>
      <div class="mobile-responsive packages pb-4 mb-4"> <!-- Package Box -->
         <div class="package-box">
            <div class="row">
               <div class="col">
                  <div class="row">
                     <div class="col">
                        <div class="package-name">Starter</div>
                     </div>
                     <div class="col">
                        <div class="package-amount text-right">$499</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Accordion for Features -->
         <div id="accordion">
            <div class="card">
               <div class="card-header package" id="headingOne">
                  <h5 class="mb-0">
                     <button class="btn btn-link feature-title" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" style="color:black;text-align:left">
                        Features <span class="fas fa-chevron-down float-right"></span>
                     </button>
                  </h5>
               </div>

               <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                     <ul class="feature-list">
                        <?php
                        // Query testimonial posts
                        $args = array(
                           'post_type' => 'packages',
                           'posts_per_page' => -1, // Show all testimonials
                           'order' => 'ASC',
                           'tax_query' => array(
                              array(
                                 'taxonomy' => 'package-name', // Taxonomy name
                                 'field' => 'name',
                                 'terms' => 'Web Packages', // Term name
                              )
                           )
                        );
                        $packages = new WP_Query($args);

                        if ($packages->have_posts()) :
                           $count = 0;
                           while ($packages->have_posts()) :
                              $packages->the_post();
                        ?>
                              <li class="feature-item">
                                 <?php the_title(); ?>
                                 <span class="feature-label text-muted" style="float:right"><?php the_field('starter'); ?></span>
                              </li>
                        <?php
                              $count++;
                           endwhile;
                           wp_reset_postdata();
                        endif;
                        ?>
                        <!-- Add more features as needed -->
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="button-package mx-4" style="text-align: center;">
            <a href="<?php echo esc_html(get_field('url_2')); ?>" class="btn btn-large btn-transparent border text-primary border-primary px-4 py-3 w-100 mx-auto" style="border-radius: 36px;">Get Started</a>
         </div>
      </div>
      <div class="mobile-responsive packages pb-4 mb-4"> <!-- Package Box -->
         <div class="package-box">
            <div class="row">
               <div class="col">
                  <div class="row">
                     <div class="col">
                        <div class="package-name">Advance</div>
                     </div>
                     <div class="col">
                        <div class="package-amount text-right">$799</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Accordion for Features -->
         <div id="accordion">
            <div class="card">
               <div class="card-header package" id="headingOne">
                  <h5 class="mb-0">
                     <button class="btn btn-link feature-title" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="color:black;text-align:left">
                        Features <span class="fas fa-chevron-down float-right"></span>
                     </button>
                  </h5>
               </div>

               <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                     <ul class="feature-list">
                        <?php
                        // Query testimonial posts
                        $args = array(
                           'post_type' => 'packages',
                           'posts_per_page' => -1, // Show all testimonials
                           'order' => 'ASC',
                           'tax_query' => array(
                              array(
                                 'taxonomy' => 'package-name', // Taxonomy name
                                 'field' => 'name',
                                 'terms' => 'Web Packages', // Term name
                              )
                           )
                        );
                        $packages = new WP_Query($args);

                        if ($packages->have_posts()) :
                           $count = 0;
                           while ($packages->have_posts()) :
                              $packages->the_post();
                        ?>
                              <li class="feature-item">
                                 <?php the_title(); ?>
                                 <span class="feature-label text-muted" style="float:right"><?php the_field('corporate'); ?></span>
                              </li>
                        <?php
                              $count++;
                           endwhile;
                           wp_reset_postdata();
                        endif;
                        ?>
                        <!-- Add more features as needed -->
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="button-package mx-4" style="text-align: center;">
            <a href="<?php echo esc_html(get_field('url_3')); ?>" class="btn btn-large btn-transparent border text-primary border-primary px-4 py-3 w-100 mx-auto" style="border-radius: 36px;">Get Started</a>
         </div>
      </div>
      <div class="mobile-responsive packages pb-4"> <!-- Package Box -->
         <div class="package-box">
            <div class="row">
               <div class="col">
                  <div class="row">
                     <div class="col">
                        <div class="package-name">Premium</div>
                     </div>
                     <div class="col">
                        <div class="package-amount text-right">$1499</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Accordion for Features -->
         <div id="accordion">
            <div class="card">
               <div class="card-header package" id="headingOne">
                  <h5 class="mb-0">
                     <button class="btn btn-link feature-title" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="color:black;text-align:left">
                        Features <span class="fas fa-chevron-down float-right"></span>
                     </button>
                  </h5>
               </div>

               <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                     <ul class="feature-list">
                        <?php
                        // Query testimonial posts
                        $args = array(
                           'post_type' => 'packages',
                           'posts_per_page' => -1, // Show all testimonials
                           'order' => 'ASC',
                           'tax_query' => array(
                              array(
                                 'taxonomy' => 'package-name', // Taxonomy name
                                 'field' => 'name',
                                 'terms' => 'Web Packages', // Term name
                              )
                           )
                        );
                        $packages = new WP_Query($args);

                        if ($packages->have_posts()) :
                           $count = 0;
                           while ($packages->have_posts()) :
                              $packages->the_post();
                        ?>
                              <li class="feature-item">
                                 <?php the_title(); ?>
                                 <span class="feature-label text-muted" style="float:right"><?php the_field('professional'); ?></span>
                              </li>
                        <?php
                              $count++;
                           endwhile;
                           wp_reset_postdata();
                        endif;
                        ?>
                        <!-- Add more features as needed -->
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="button-package mx-4" style="text-align: center;">
            <a href="<?php echo esc_html(get_field('url_4')); ?>" class="btn btn-large btn-transparent border text-primary border-primary px-4 py-3 w-100 mx-auto" style="border-radius: 36px;">Get Started</a>
         </div>
      </div>
      <div class="bg-background text-foreground p-4 rounded-lg desktop-responsive">
         <table class="w-full">
            <thead>
               <tr>
                  <th class="px-4 py-5 border-bottom">
                     <h2>Features</h2>
                  </th>
                  <th class="px-4 py-5 border-bottom text-center">
                     <h4>Basic</h4><a href="<?php echo esc_html(get_field('url_1')); ?>" class="mx-2 btn btn-transparent border text-primary border-primary px-4 py-1">Get Started</a>
                  </th>
                  <th class="px-4 py-5 border-bottom text-center">
                     <h4>Starter</h4><a href="<?php echo esc_html(get_field('url_2')); ?>" class="mx-2 btn btn-transparent border text-primary border-primary px-4 py-1">Get Started</a>
                  </th>
                  <th class="px-4 py-5 border-bottom text-center">
                     <h4>Advance</h4><a href="<?php echo esc_html(get_field('url_3')); ?>" class="mx-2 btn btn-transparent border text-primary border-primary px-4 py-1">Get Started</a>
                  </th>
                  <th class="px-4 py-5 border-bottom text-center">
                     <h4>Premium</h4><a href="<?php echo esc_html(get_field('url_4')); ?>" class="mx-2 btn btn-transparent border text-primary border-primary px-4 py-1">Get Started</a>
                  </th>
               </tr>
            </thead>
            <tbody>
               <?php
               // Query testimonial posts
               $args = array(
                  'post_type' => 'packages',
                  'posts_per_page' => -1, // Show all testimonials
                  'order' => 'ASC',
                  'tax_query' => array(
                     array(
                        'taxonomy' => 'package-name', // Taxonomy name
                        'field' => 'name',
                        'terms' => 'Web Packages', // Term name
                     )
                  )
               );
               $packages = new WP_Query($args);

               if ($packages->have_posts()) :
                  $count = 0;
                  while ($packages->have_posts()) :
                     $packages->the_post();
               ?>
                     <tr>
                        <td class="px-4 py-3 border-top border-right"><?php the_title(); ?></td>
                        <td class="px-4 py-3 border-top border-right text-center"><?php the_field('basic'); ?></td>
                        <td class="px-4 py-3 border-top border-right text-center"><?php the_field('starter'); ?></td>
                        <td class="px-4 py-3 border-top border-right text-center"><?php the_field('corporate'); ?></td>
                        <td class="px-4 py-3 border-top text-center"><?php the_field('professional'); ?></td>
                     </tr>
               <?php
                     $count++;
                  endwhile;
                  wp_reset_postdata();
               endif;
               ?>
            </tbody>
         </table>
      </div>
   </div>
</section>
<hr>
<section class="services-area pt-50 pb-50">
   <div class="container">
      <div class="row" style="align-items:center">
         <div class="col-xl-6 px-lg-5 px-0">
            <div class="container px-0 py-4 py-lg-0">
               <div class="row py-sm-5">
                  <div class="col-6 d-flex align-items-center justify-content-center px-lg-3 px-2">
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
                              <h6 id="number1" class="number"><?php echo esc_html(get_field('counter_2')['title']); ?></h6>
                              <h2><span class="counter"><?php echo number_format(get_field('counter_2')['name']); ?></span>+</h2>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-6 d-flex align-items-center justify-content-center px-lg-3 px-1">
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
         <div class="col-xl-6 pl-lg-5 px-2">
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
<section class="testimonial pt-50 pb-50">
   <div class="container-fluid">
      <div class="px-lg-5 px-2 text-center mx-auto">
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
                     'terms' => 'Web Design and Development', // Term name
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
<section class="testimonial text-center pt-50 pb-50">
   <div class="container p-0">
      <div class="container pb-3 px-lg-5 text-center mx-auto">
         <h2 class="py-3 w-lg-75 mx-auto px-lg-5" style="line-height: 1.3em;color:#202020;text-align:center">Frequently Asked Questions</h2>
      </div>
      <div class="row">
         <div class="col-md-6">
            <div class="row flex-wrap">
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
                        'terms' => 'Web Services', // Term name
                     )
                  )
               );
               $faq_posts = new WP_Query($args);

               // Check if there are FAQ posts
               if ($faq_posts->have_posts()) :
                  $count = 0;
                  while ($faq_posts->have_posts()) : $faq_posts->the_post();
                     $count++;
                     if ($count % 2 != 0) { // Odd numbered FAQs
               ?>
                        <div class="col-12">
                           <div class="card accordian-card mb-4">
                              <div class="card-header" id="faqHeading<?php the_ID(); ?>">
                                 <button class="mb-0 row d-flex align-items-center flex-wrap p-0">
                                    <div class="col-1 px-0 px-lg-3">
                                       <div class="icon-circle">
                                          <i class="far fa-user"></i> <!-- User icon -->
                                       </div>
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
                  <?php
                     }
                  endwhile;
                  wp_reset_postdata(); // Reset the query
               else :
                  ?>
                  <p>No FAQs found.</p>
               <?php endif; ?>
            </div>
         </div>
         <div class="col-md-6">
            <div class="row flex-wrap">
               <?php
               // Query to retrieve FAQ posts
               $faq_posts = new WP_Query($args); // Resetting the WP_Query to reuse

               // Check if there are FAQ posts
               if ($faq_posts->have_posts()) :
                  $count = 0;
                  while ($faq_posts->have_posts()) : $faq_posts->the_post();
                     $count++;
                     if ($count % 2 == 0) { // Even numbered FAQs
               ?>
                        <div class="col-12">
                           <div class="card accordian-card mb-4">
                              <div class="card-header" id="faqHeading<?php the_ID(); ?>">
                                 <button class="mb-0 row d-flex align-items-center flex-wrap p-0">
                                    <div class="col-1 px-0 px-lg-3">
                                       <div class="icon-circle">
                                          <i class="far fa-user"></i> <!-- User icon -->
                                       </div>
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
                  <?php
                     }
                  endwhile;
                  wp_reset_postdata(); // Reset the query
               else :
                  ?>
                  <p>No FAQs found.</p>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</section>
<script>
   document.addEventListener('DOMContentLoaded', function() {
      var carousel = document.querySelector('#testimonial4');
      var prevControl = carousel.querySelector('.carousel-control-prev');
      var nextControl = carousel.querySelector('.carousel-control-next');
      var carouselItems = carousel.querySelectorAll('.carousel-item');

      prevControl.addEventListener('click', function(event) {
         event.preventDefault();
         var current = carousel.querySelector('.carousel-item.active');
         var prev = current.previousElementSibling || carouselItems[carouselItems.length - 1];
         current.classList.remove('active');
         prev.classList.add('active');
      });

      nextControl.addEventListener('click', function(event) {
         event.preventDefault();
         var current = carousel.querySelector('.carousel-item.active');
         var next = current.nextElementSibling || carouselItems[0];
         current.classList.remove('active');
         next.classList.add('active');
      });
   });
</script>
<?php get_footer(); ?>