<?php

/**
 * Template Name: Home Page */
get_header();
?>
<style>
    .nav-tabs .nav-link.active{
    	font-size:18px!Important;
    }
    .nav-tabs .nav-link{
    	font-size:18px!Important;
    }
</style>
<!-- Slider Area Start -->
<section class="breadcumb-area-services desktop-responsive" style="background-color:#4AABF4!important">
   <div class="container">
      <div class="row" style="align-items:center">
         <div class="col-xl-5">
            <div class="breadcumb" style="text-align:left">
               <h1 class="py-2"><?php echo esc_html(get_field('head_title')); ?></h1>
               <p class="py-2"><?php echo esc_html(get_field('head_description')); ?></p>
               <button class="my-2 py-2"><a href="<?php echo esc_html(get_field('url')); ?>">Consult Our Experts</a></button>
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
               <h1 class="py-2"><?php echo esc_html(get_field('head_title')); ?></h1>
               <p class="py-2"><?php echo esc_html(get_field('head_description')); ?></p>
               <button class="my-2 py-2"><a href="<?php echo esc_html(get_field('url')); ?>">Consult Our Experts</a></button>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Slider Area End -->
<!-- About Area Start -->
<section class="services-area">
   <div class="container py-5">
      <?php
      $home_title = get_field('home_title');
      $home_description = get_field('home_description');
      ?>
      <h2 class="py-3 app-title" style="line-height: 1.3em;color:#202020;"><?php echo esc_html($home_title); ?></h2>
      <p style="color:#202020; font-size:18px"><?php echo esc_html($home_description); ?></p>
   </div>
</section>
<!-- About Area End -->
<hr>
<section class="services-area pt-50 pb-50">
   <div class="container pb-lg-5 pb-3 px-lg-5 text-center mx-auto">
      <?php
      $brand_title = get_field('brand_title');
      ?>
      <h2 class="py-3 w-lg-75 mx-auto text-center px-lg-5" style="line-height: 1.3em;color:#202020;"><?php echo esc_html($brand_title); ?></h2>
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

<section class="services-area">
   <div class="container pt-5">
      <?php
      $service_title = get_field('service_title');
      $service_description = get_field('service_description');
      ?>
      <h2 class="py-3 app-title px-md-0 px-lg-1" style="line-height: 1.3em;color:#202020;"><?php echo esc_html($service_title); ?></h2>
      <p class="app-description" style="color:#202020; font-size:18px"><?php echo esc_html($service_description); ?></p>
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
                        'terms' => 'Home Services' // Term name
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
<hr>
<!-- Services Area End -->
<section class="services-area pt-50 pb-50">
   <div class="container pb-5 px-lg-5 text-center mx-auto">
      <?php
      $platform_title = get_field('platform_title');
      $platform_description = get_field('platform_description');
      ?>
      <h2 class="py-3 w-lg-75 mx-auto px-lg-5 text-center" style="line-height: 1.3em;color:#202020;"><?php echo esc_html($platform_title); ?></h2>
      <p class="w-lg-75 mx-auto text-center" style="color:#202020; font-size:18px"><?php echo esc_html($platform_description); ?></p>
   </div>
   <!--Fixed tab example -->
   <div class="card pmd-card" style="border:none">
      <div class="pmd-tabs mx-lg-5">
         <ul role="tablist" class="nav nav-tabs nav-fill mx-lg-5">
            <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" role="tab" aria-controls="home" href="#Frontend">Frontend</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" role="tab" aria-controls="profile" href="#Backend">Backend</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" role="tab" aria-controls="messages" href="#Mobile">Mobile</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" role="tab" aria-controls="home" href="#database">Database</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" role="tab" aria-controls="profile" href="#cloud">Cloud</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" role="tab" aria-controls="messages" href="#devops">DevOps</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" role="tab" aria-controls="home" href="#Ecommerce">Ecommerce</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" role="tab" aria-controls="profile" href="#cms">CMS</a></li>
         </ul>
      </div>
      <div class="card-body mx-auto">
         <div class="tab-content mx-lg-5">
            <div role="tabpanel" class="tab-pane active mx-auto" id="Frontend">
               <div class="brand-container px-lg-5 mx-auto align-items-end">
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
                           'terms' => 'Frontend', // Term name
                        )
                     )
                  );
                  $industries_query = new WP_Query($args);

                  if ($industries_query->have_posts()) :
                     while ($industries_query->have_posts()) : $industries_query->the_post();
                  ?>
                        <div class="platform">
                           <?php
                           if (has_post_thumbnail()) {
                              the_post_thumbnail('medium', ['class' => 'my-3 px-3 mx-auto']);
                           }
                           ?>
                           <p class="px-4"><?php the_title(); ?> </p>
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
            <div role="tabpanel" class="tab-pane mx-auto" id="Backend">
               <div class="brand-container px-lg-5 mx-auto align-items-end">
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
                           'terms' => 'Backend', // Term name
                        )
                     )
                  );
                  $industries_query = new WP_Query($args);

                  if ($industries_query->have_posts()) :
                     while ($industries_query->have_posts()) : $industries_query->the_post();
                  ?>
                        <div class="platform">
                           <?php
                           if (has_post_thumbnail()) {
                              the_post_thumbnail('medium', ['class' => 'my-3 px-3 mx-auto']);
                           }
                           ?>
                           <p class="px-4"><?php the_title(); ?> </p>
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
            <div role="tabpanel" class="tab-pane mx-auto" id="Mobile">
               <div class="brand-container px-lg-5 mx-auto align-items-end">
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
                           'terms' => 'Mobile', // Term name
                        )
                     )
                  );
                  $industries_query = new WP_Query($args);

                  if ($industries_query->have_posts()) :
                     while ($industries_query->have_posts()) : $industries_query->the_post();
                  ?>
                        <div class="platform">
                           <?php
                           if (has_post_thumbnail()) {
                              the_post_thumbnail('medium', ['class' => 'my-3 px-3 mx-auto']);
                           }
                           ?>
                           <p class="px-4"><?php the_title(); ?> </p>
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
            <div role="tabpanel" class="tab-pane mx-auto" id="database">
               <div class="brand-container px-lg-5 mx-auto align-items-end">
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
                           'terms' => 'Database', // Term name
                        )
                     )
                  );
                  $industries_query = new WP_Query($args);

                  if ($industries_query->have_posts()) :
                     while ($industries_query->have_posts()) : $industries_query->the_post();
                  ?>
                        <div class="platform">
                           <?php
                           if (has_post_thumbnail()) {
                              the_post_thumbnail('medium', ['class' => 'my-3 px-3 mx-auto']);
                           }
                           ?>
                           <p class="px-4"><?php the_title(); ?> </p>
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
            <div role="tabpanel" class="tab-pane mx-auto" id="cloud">
               <div class="brand-container px-lg-5 mx-auto align-items-end">
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
                           'terms' => 'Cloud', // Term name
                        )
                     )
                  );
                  $industries_query = new WP_Query($args);

                  if ($industries_query->have_posts()) :
                     while ($industries_query->have_posts()) : $industries_query->the_post();
                  ?>
                        <div class="platform">
                           <?php
                           if (has_post_thumbnail()) {
                              the_post_thumbnail('medium', ['class' => 'my-3 px-3 mx-auto']);
                           }
                           ?>
                           <p class="px-4"><?php the_title(); ?> </p>
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
            <div role="tabpanel" class="tab-pane mx-auto" id="devops">
               <div class="brand-container px-lg-5 mx-auto align-items-end">
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
                           'terms' => 'Devops', // Term name
                        )
                     )
                  );
                  $industries_query = new WP_Query($args);

                  if ($industries_query->have_posts()) :
                     while ($industries_query->have_posts()) : $industries_query->the_post();
                  ?>
                        <div class="platform">
                           <?php
                           if (has_post_thumbnail()) {
                              the_post_thumbnail('medium', ['class' => 'my-3 px-3 mx-auto']);
                           }
                           ?>
                           <p class="px-4"><?php the_title(); ?> </p>
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
            <div role="tabpanel" class="tab-pane mx-auto" id="Ecommerce">
               <div class="brand-container px-lg-5 mx-auto align-items-end">
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
                           'terms' => 'Ecommerce', // Term name
                        )
                     )
                  );
                  $industries_query = new WP_Query($args);

                  if ($industries_query->have_posts()) :
                     while ($industries_query->have_posts()) : $industries_query->the_post();
                  ?>
                        <div class="platform">
                           <?php
                           if (has_post_thumbnail()) {
                              the_post_thumbnail('medium', ['class' => 'my-3 px-3 mx-auto']);
                           }
                           ?>
                           <p class="px-4"><?php the_title(); ?> </p>
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
            <div role="tabpanel" class="tab-pane mx-auto" id="cms">
               <div class="brand-container px-lg-5 mx-auto align-items-end">
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
                           'terms' => 'CMS', // Term name
                        )
                     )
                  );
                  $industries_query = new WP_Query($args);

                  if ($industries_query->have_posts()) :
                     while ($industries_query->have_posts()) : $industries_query->the_post();
                  ?>
                        <div class="platform">
                           <?php
                           if (has_post_thumbnail()) {
                              the_post_thumbnail('medium', ['class' => 'my-3 px-3']);
                           }
                           ?>
                           <p class="px-4"><?php the_title(); ?> </p>
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
         </div>
      </div>
   </div> <!--Fixed tab example end-->
</section>
<hr>
<section class="services-area pt-50 pb-50">
   <div class="container py-3 px-md-0 px-lg-1">
      <?php
      $choose_us_title = get_field('choose_us_title');
      $choose_us_description = get_field('choose_us_description');
      ?>
      <h2 class="pb-3 app-title" style="line-height: 1.3em;color:#202020"><?php echo esc_html($choose_us_title); ?></h2>
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
                  'terms' => 'Choose Us App', // Term name
               )
            )
         );
         $services_query = new WP_Query($args);

         if ($services_query->have_posts()) :
            $counter = 0;
            while ($services_query->have_posts()) : $services_query->the_post();
               $counter++;
         ?>
               <div class="card-row single-card m-lg-3 m-0 mb-4">
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
      $industry_title = get_field('industry_title');
      $industry_description = get_field('industry_description');
      ?>
      <h2 class="pb-3 w-lg-75 mx-auto px-lg-5" style="line-height: 1.3em;color:#202020;"><?php echo esc_html($industry_title); ?></h2>
      <p class="w-lg-75 mx-auto" style="color:#202020; font-size:18px;text-align:center"><?php echo esc_html($industry_description); ?></p>
   </div>
   <section class="services-area px-lg-2 py-2" id="services">
      <div class="container-fluid px-lg-2 px-0">
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
<!-- Testimonials Area Start -->
<section class="testimonial-area pb-100 pt-100" id="testimonials">
   <div class="container">
      <h3 class="awards">Award and Recognition for Software Development</h3>
   </div>
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="badges owl-carousel" style="align-items:center">
               <?php
               // Query to fetch posts from Services custom post type
               $args = array(
                  'post_type' => 'industries',
                  'posts_per_page' => -1, // Retrieve all posts
                  'tax_query' => array(
                     array(
                        'taxonomy' => 'industries', // Taxonomy name
                        'field' => 'name',
                        'terms' => 'Badge' // Term name
                     )
                  )
               );
               $services_query = new WP_Query($args);

               if ($services_query->have_posts()) :
                  while ($services_query->have_posts()) : $services_query->the_post();
               ?>
                     <div class="single-testimonial mx-auto" style="display:flex;align-items:center">
                        <?php
                        if (has_post_thumbnail()) {
                           the_post_thumbnail('medium', ['class' => 'img badge-img mb-3 mx-auto']);
                        }
                        ?>
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
<!-- Testimonilas Area End -->
<section class="testimonial pb-50 pt-100">
   <div class="container-fluid">
      <div class="px-lg-5 text-center mx-auto">
         <?php
         $testimonial_title = get_field('testimonial_title');
         $testimonial_descriptions = get_field('testimonial_descriptions');
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
                  'terms' => 'Home', // Term name
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
                        <p class="center"><?php the_content(); ?></p>
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
                        'terms' => 'Home Page', // Term name
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