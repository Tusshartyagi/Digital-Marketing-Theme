<?php

/**
 * Template Name:  Management Outsourcing Page
 */
get_header();
?>
<style>
   /* Styles for the vertical tabs */
   .vertical-tabs {
      width: 80%;
      color: white;
      position: relative;
      z-index: 1;
   }

   .vertical-tabs .tab {
      padding: 10px;
      cursor: pointer;
      border: 2px solid #000000;
      background-color: #145CAA;
      border-radius: 15px;
      margin: 15px 0px;
   }

   /* Styles for the arrow icon */
   .arrow-icon {
      float: right;
      transition: transform 0.3s ease;
      display: none;
   }

   .active .arrow-icon {
      display: block;
      font-size: 18px;
   }

   /* Styles for the tab content */
   .tab-content {
      padding: 10px;
      border: 2px solid #000000;
      margin-top: 10px;
      position: relative;
      left: 0;
      /* Set initial left position */
      width: 90%;
      border-radius: 20px;
      transition: left 1s ease;
      /* Add transition property */
   }

   .card-body {
      font-size: 24px;
      font-weight: 500;
      font-family: 'Outfit';
   }

   .toggle-content-container {
      display: flex;
   }

   .tab-content.active {
      display: block;
      left: 0;
      /* Adjust left position for active tab content */
   }

   .tab-content p {
      font-size: 18px !important;
      text-align: center !important;
      font-weight: 400 !important;
   }

   /* Styles for the nav dots */
   .nav-dots {
      text-align: center;
      margin-top: 20px;
      position: relative;
      z-index: 1;
      width: 90%;
   }

   .nav-dot {
      display: inline-block;
      width: 9%;
      height: 14px;
      background-color: white;
      border-radius: 20px;
      margin: 0 5px;
      pointer-events: none;
      border: 1px solid;
   }

   .active-dot {
      background-color: #145CAA;
      width: 15%;
   }

   .toggle-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 50%;
      height: 60px;
      border: 2px solid #ccc;
      border-radius: 50px;
      overflow: hidden;
      padding: 5px;
   }

   .toggle-option {
      width: 50%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      transition: all 0.3s ease;
      background-color: white;
      border-radius: 50px;
      box-shadow: 0px 0px 8px 0px rgb(255 205 205);
      font-weight: 500;
      margin: 5px;
   }

   .toggle-option.active {
      width: 60%;
   }

   .toggle-content {
      display: flex;
      width: 100%;
      flex-direction: row;
      justify-content: space-around;
      border-radius: 20px;
   }

   .toggle-content.active {
      display: flex !Important;
   }

   @media screen and (max-width:912px) {
      .card-body {
         font-size: 20px!important;
         font-weight: 500;
         font-family: 'Outfit';
      }
   }
</style>
<!-- Slider Area Start -->
<section class="breadcumb-area-services desktop-responsive" style="background-color:#4AABF4!important">
   <div class="container">
      <div class="row" style="align-items:center">
         <div class="col-xl-5">
            <div class="breadcumb" style="text-align:left">
               <h1 class="py-2"><?php echo esc_html(get_field('title')); ?></h1>
               <p class="py-2"><?php echo esc_html(get_field('description')); ?></p>
               <button class="my-2 py-2"><a href="<?php echo esc_html(get_field('url')); ?>">Consult Our Experts</a></button>
            </div>
         </div>
         <div class="col-xl-7 pl-lg-5">
            <div class="breadcumb px-lg-5">
               <?php
               $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
               ?>
               <img src="<?php echo esc_url($image[0]); ?>" />
            </div>
         </div>
      </div>
   </div>
</section>
<section class="breadcumb-area-services mobile-responsive" style="background-image: url('<?php echo esc_url($image[0]); ?>');">
   <div class="breadcrumb-overlay"></div>
   <div class="container pt-md-5">
      <div class="row pt-md-5" style="align-items:left;">
         <div class="col-xl-12 px-0">
            <div class="breadcumb px-0" style="color:#fff;text-align:left!Important;">
               <h1 class="pb-2"><?php echo esc_html(get_field('title')); ?></h1>
               <p class="pb-2"><?php echo esc_html(get_field('description')); ?></p>
               <button class="my-2 pb-2"><a href="<?php echo esc_html(get_field('url')); ?>">Consult Our Experts</a></button>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Slider Area End -->
<section class="services-area">
   <div class="container pb-lg-5 pt-4">
      <?php
      $main_title = get_field('main_title');
      ?>
      <h2 class="mx-auto" style="line-height: 1.3em;color:#202020;font-size:40px;text-align:center"><?php echo esc_html($main_title); ?></h2>
   </div>
</section>

<section class="services-area pt-50 pb-50">
   <div class="container pb-5">
      <?php
      $web_title = get_field('web_title');
      $web_description = get_field('web_description');
      ?>
      <h2 class="pb-3 app-title" style="line-height: 1.3em;color:#202020;font-size:36px"><?php echo esc_html($web_title); ?></h2>
      <p style="color:#202020; font-size:18px" class="app-description"><?php echo esc_html($web_description); ?></p>
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
                        'terms' => 'Management Outsourcing' // Term name
                     )
                  )
               );
               $services_query = new WP_Query($args);

               if ($services_query->have_posts()) :
                  while ($services_query->have_posts()) : $services_query->the_post();
               ?>
                     <div class="single-service mb-1">
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
<hr>
<section class="services-area pt-50 pb-50">
   <div class="container pb-5 px-lg-1 text-center">
      <?php
      $process_title = get_field('business_title');
      ?>
      <h2 class="py-3 mx-auto w-lg-75" style="line-height: 1.3em;color:#202020;font-size:36px;text-align:center"><?php echo esc_html($process_title); ?></h2>
   </div>
   <div class="container">
      <div class="row management-area pb-100 pt-100">
         <div class="col-md-12">
            <div class="container" style="z-index: 1;position: relative;">
               <div class="row mobile-view" style="column-gap:20px; row-gap:50px;flex-wrap:nowrap">
                  <div class="col-lg-4 col-md-12 d-flex pb-3" style="text-align:center;background: #ffffff5e;justify-content: center;align-items: center;border-radius: 25px;border: 1px solid rgba(255, 255, 255, 1);">
                     <div class="data mx-2 p-5" style="color:white;">
                        <h2 style="color:white;font-size: 49px!Important;text-align: center!Important;"><span class="counter"><?php echo esc_html(get_field('process_box_1')['percentage']); ?></span>-<span class="counter"><?php echo esc_html(get_field('process_box_1')['percentage_1']); ?></span>%</h2>
                        <h4 style="color:white;"><?php echo esc_html(get_field('process_box_1')['title']); ?></h4>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-12 d-flex pb-3" style="text-align:center;height: 290px;width: 100%;background: #ffffff5e;justify-content: center;align-items: center;border-radius: 25px;border: 1px solid rgba(255, 255, 255, 1);">
                     <div class="data mx-2 p-5" style="color:white;">
                        <h2 style="color:white;font-size: 49px!Important;text-align: center!Important;"><span class="counter"><?php echo esc_html(get_field('process_box_2')['percentage']); ?></span>%</h2>
                        <h4 style="color:white;"><?php echo esc_html(get_field('process_box_2')['title']); ?></h4>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-12 d-flex pb-3" style="text-align:center;height: 290px;width: 100%;background: #ffffff5e;justify-content: center;align-items: center;border-radius: 25px;border: 1px solid rgba(255, 255, 255, 1);">
                     <div class="data mx-2 p-5" style="color:white;">
                        <h2 style="color:white;font-size: 49px!Important;text-align: center!Important;"><span class="counter"><?php echo esc_html(get_field('process_box_3')['percentage']); ?></span>%</h2>
                        <h4 style="color:white;"><?php echo esc_html(get_field('process_box_3')['title']); ?></h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<hr>
<section class="services-area pt-50 pb-50">
   <div class="container pb-5 px-lg-1">
      <?php
      $process_title = get_field('dev_process_title');
      ?>
      <h2 class="py-3 w-lg-75 mx-auto" style="line-height: 1.3em;color:#202020;font-size:36px;text-align:center">
         <?php echo esc_html($process_title); ?>
      </h2>
   </div>
   <div class="toggle-container mx-auto" style="background-color: rgb(255, 32, 32);">
      <div class="toggle-option active" id="software-based">
         Before Management Outsourcing
      </div>
      <div class="toggle-option" id="solution-based">
         After Management Outsourcing
      </div>
   </div>
   <div class="toggle-content-container container">
      <div class="toggle-content mx-auto active mt-lg-5" id="software-content">
         <div class="card-container row my-3" style="justify-content: space-evenly;">
            <div class="card-row single-card m-1" style="background-color: rgb(255, 32, 32);width: 100%;border-radius: 20px;justify-content: space-around;display: flex;">
               <div class="border-0 text-left mb-2" style="background: white;width:550px;padding: 10px;border-radius: 20px!Important;">
                  <div class="card-body choose-card">
                     <?php the_field('before_management_outsourcing'); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="toggle-content mx-auto mt-lg-5" id="solution-content">
         <div class="card-container row my-3" style="justify-content: space-evenly;">
            <div class="card-row single-card m-1" style="background-color: rgba(211, 211, 211, 1);width: 100%;border-radius: 20px;justify-content: space-around;display: flex;">
               <div class="border-0 text-left mb-2" style="background: white;padding: 10px;border-radius: 20px!Important;">
                  <div class="card-body choose-card">
                     <?php the_field('after_management_outsourcing'); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<hr>
<section class="services-area">
   <div class="container pb-5 pt-50">
      <?php
      $choose_title_1 = get_field('choose_title_1');
      ?>
      <h2 class="mx-auto w-lg-75 text-center" style="line-height: 1.4em;color:#202020;font-size:32px;text-align:center"><?php echo esc_html($choose_title_1); ?></h2>
   </div>
</section>
<section class="services-area pb-50">
   <div class="container pb-3 px-3">
      <?php
      $choose_us_title = get_field('choose_us_title');
      $choose_us_description = get_field('choose_us_description');
      ?>
      <h2 class="pb-3 app-title" style="line-height: 1.3em;color:#202020;font-size:32px"><?php echo esc_html($choose_us_title); ?></h2>
      <p class="app-description" style="color:#202020; font-size:18px"><?php echo esc_html($choose_us_description); ?></p>
   </div>
   <div class="container-fluid pb-0 px-lg-5 px-0">
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
                  'terms' => 'Management Choose Us', // Term name
               )
            )
         );
         $services_query = new WP_Query($args);

         if ($services_query->have_posts()) :
            $counter = 0;
            while ($services_query->have_posts()) : $services_query->the_post();
               $counter++;
         ?>
               <div class="card-row process-card m-3">
                  <div class="border-0 text-left mb-2">
                     <div class="card-body choose-card">
                        <div class="d-flex align-items-center">
                           <?php
                           if (has_post_thumbnail()) {
                              the_post_thumbnail('medium', ['class' => 'img mb-1 pr-2']);
                           }
                           ?>
                           <h5 class="mb-1"><?php the_title(); ?></h5>
                        </div>
                        <div class="content">
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
<section class="services-area pt-50 pb-50">
   <div class="container pb-5 px-lg-5 text-center mx-auto">
      <?php
      $business_title = get_field('brand_title');
      ?>
      <h2 class="py-3 w-lg-75 mx-auto px-lg-5" style="line-height: 1.3em;color:#202020;font-size:36px"><?php echo esc_html($business_title); ?></h2>
   </div>
   <section class="services-area px-lg-2 py-2 px-0 px-lg-2" id="services">
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
<section class="testimonial pt-50 pb-50">
   <div class="container-fluid">
      <div class="px-lg-5 text-center mx-auto">
         <?php
         $testimonial_title = get_field('testimonial_title');
         $testimonial_descriptions = get_field('testimonial_description');
         ?>
         <h2 class="pb-3 w-lg-75 mx-auto px-lg-5 text-center" style="line-height: 1.3em;color:#202020;"><?php echo esc_html($testimonial_title); ?></h2>
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
                     'terms' => 'Management Outsourcing', // Term name
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
                        'terms' => 'Management Outsourcing', // Term name
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
   const softwareOption = document.getElementById('software-based');
   const solutionOption = document.getElementById('solution-based');
   const softwareContent = document.getElementById('software-content');
   const solutionContent = document.getElementById('solution-content');
   const toggleContainer = document.querySelector('.toggle-container');

   softwareOption.addEventListener('click', () => {
      softwareOption.classList.add('active');
      solutionOption.classList.remove('active');
      softwareContent.classList.add('active');
      solutionContent.classList.remove('active');
      // Set background colors based on clicked option
      softwareContent.querySelectorAll('.card-row').forEach(cardRow => {
         cardRow.style.backgroundColor = 'rgb(255 32 32)';
      });
      solutionContent.querySelectorAll('.card-row').forEach(cardRow => {
         cardRow.style.backgroundColor = 'rgba(211, 211, 211, 1)';
      });

      toggleContainer.style.backgroundColor = 'rgb(255 32 32)';
   });

   solutionOption.addEventListener('click', () => {
      solutionOption.classList.add('active');
      softwareOption.classList.remove('active');
      solutionContent.classList.add('active');
      softwareContent.classList.remove('active');
      // Set background colors based on clicked option
      softwareContent.querySelectorAll('.card-row').forEach(cardRow => {
         cardRow.style.backgroundColor = 'rgba(211, 211, 211, 1)';
      });
      solutionContent.querySelectorAll('.card-row').forEach(cardRow => {
         cardRow.style.backgroundColor = 'rgba(180, 238, 122, 1)';
      });

      toggleContainer.style.backgroundColor = 'rgba(180, 238, 122, 1)';
   });
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