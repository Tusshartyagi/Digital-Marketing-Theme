<?php

/**
 * Template Name: Career Page
 */
get_header();
?>
<style>
    .modal-content {
   border-radius: 10px;
}

.modal-header {
   border-top-left-radius: 10px;
   border-top-right-radius: 10px;
}
   .better-card img {
      width: 100%;
      border-radius: 20px;
   }

   .content p {
      text-align: center !Important;
   }

   @media (min-width: 992px) {
      h4 {
         font-size: 26px !Important;
      }

      li {
         font-size: 15px !Important;
         font-weight: 400;
         font-family: "Outfit", sans-serif;
      }

      .table-bordered td,
      .table-bordered th {
         font-family: 'Outfit';
         font-size: 18px;
      }

      .rounded-circle {
         height: 370px !Important;
      }

      .breadcumb p {
         font-size: 22px !Important;
      }

      .owl-dots {
         display: none !Important;
      }

      .breadcumb h1 {
         font-size: 50px !Important;
      }

      .store-card {
         height: 270px !important;
      }

      .testimonial4_slide h4 {
         font-size: 22px !important;
      }
   }

   @media (max-width: 990px) {
      h4 {
         padding-bottom: 50px !Important;
      }

      .store-card {
         padding: 50px 25px !important;
      }

      .reverse {
         flex-direction: column-reverse;
      }
   }
</style>
<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['your-name'], $_POST['your-email'], $_POST['tel-200'], $_FILES['resume_file'], $_POST['job_title'])) {
   global $wpdb;

   $job_title = sanitize_text_field($_POST['job_title']);
   $name = sanitize_text_field($_POST['your-name']);
   $email = sanitize_email($_POST['your-email']);
   $phone_number = sanitize_text_field($_POST['tel-200']);

   // File handling
   $upload_dir = wp_upload_dir(); // Get WordPress upload directory
   $upload_path = $upload_dir['basedir'] . '/resumes/'; // Example: /path/to/wordpress/wp-content/uploads/resumes/

   // Create directory if it doesn't exist
   if (!file_exists($upload_path)) {
      mkdir($upload_path, 0755, true);
   }

   $file_name = sanitize_file_name($_FILES['resume_file']['name']);
   $target_file = $upload_path . $file_name;
   $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

   // Move uploaded file to target directory
   if (move_uploaded_file($_FILES['resume_file']['tmp_name'], $target_file)) {
       $file_name = sanitize_file_name($_FILES['resume_file']['name']);
      // Insert into database with only the file name
      $wpdb->insert(
            'apply',
            array(
                'job_title' => $job_title,
                'name' => $name,
                'phone_number' => $phone_number,
                'email' => $email,
                'resume_link' => $file_name
            ),
            array(
                '%s',
                '%s',
                '%s',
                '%s',
                '%s'
            )
        );

      // Send email notification with attachment
      $to = 'tusshar.tyagi@korvage.com'; // Replace with your email address
      $subject = 'New Job Application';
      $message = "Job Title: $job_title<br>";
      $message .= "Applicant Name: $name<br>";
      $message .= "Email: $email<br>";
      $message .= "Phone Number: $phone_number<br>";
      $message .= "Attached Resume: <a href='" . esc_url($upload_dir['baseurl']) . "/resumes/$file_name'></a><br>"; // Link to the file

      // Prepare attachment
      $attachments = array($target_file);

      $headers = array('Content-Type: text/html; charset=UTF-8');
      $mail_sent = wp_mail($to, $subject, $message, $headers, $attachments);

      // Optionally, handle the response to the user here
      if ($mail_sent) {
      } else {
         echo '<p>Failed to submit application. Please try again.</p>';
      }
      exit();
   } else {
      echo '<p>Failed to upload resume file. Please try again.</p>';
   }
}
?>
<!-- Slider Area Start -->
<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
<section class="breadcumb-area desktop-responsive" style="background-image: url('<?php echo esc_url($image[0]); ?>');">
   <div class="container pt-md-5">
      <div class="row pt-md-5" style="align-items:left;">
         <div class="col-xl-12 px-0">
            <div class="breadcumb px-0 mx-auto" style="color:#fff;text-align:center!Important;">
               <h1 class="py-2" style="text-align:center;color:white!important"><?php echo esc_html(get_field('title')); ?></h1>
               <p class="py-3 px-lg-3 mx-auto text-center" style="color:white!important"><?php echo esc_html(get_field('description')); ?></p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="breadcumb-area mobile-responsive" style="background-image: url('<?php echo esc_url($image[0]); ?>');margin-top:0px;padding:100px 0px">
   <div class="container pt-md-5">
      <div class="row pt-md-5" style="align-items:left;">
         <div class="col-xl-12 px-0">
            <div class="breadcumb px-0" style="color:#fff;text-align:center!Important;">
               <h1 class="pb-2" style="text-align:center;color:white!important"><?php echo esc_html(get_field('title')); ?></h1>
               <p class="py-2 mx-auto text-center" style="text-align:center;color:white!important"><?php echo esc_html(get_field('description')); ?></p>
            </div>
         </div>
      </div>
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
   <div class="container">
      <div class="row my-4">
         <div class="col-lg-8 col-md-12 about px-lg-2 px-0">
            <img src="<?php echo esc_url(get_field('image_box')['image']); ?>" class="img pr-lg-5 pl-0" alt="" />
         </div>
         <div class="col-lg-4 col-md-12 px-lg-5">
            <h4 class="py-2" style="color: #145CAA;"><?php echo esc_html(get_field('image_box')['secondary_title']); ?> </h4>
            <h2 class="w-lg-50" style="font-size:32px;font-weight:600"><?php echo esc_html(get_field('image_box')['title']); ?></h2>
            <hr class="my-3" style="height:4px;background-color:#202020">
            <p class="py-2" style="text-align:justify;font-weight:400;font-size:18px"><?php echo esc_html(get_field('image_box')['description']); ?></p>
            <button class="py-2 px-3 my-3" style="box-shadow: 0px 0px 3px 2px rgba(0, 0, 0, 0.25);border-radius:20px"><a href="<?php echo esc_html(get_field('url')); ?>" style="color:white">Click Here to Apply</a></button>
         </div>
      </div>
   </div>
</section>
<section class="services-area pt-50 pb-50">
   <div class="container">
      <div class="row career-area pb-100 pt-100">
         <div class="col-md-12">
            <div class="container-fluid" style="z-index: 1;position: relative;">
               <div class="row mobile-view" style="flex-wrap:nowrap">
                  <div class="col-lg-3 col-md-12 d-flex pb-3" style="text-align:center;justify-content: center;align-items: center;">
                     <div class="data mx-4" style="color:white;">
                        <h2 style="font-weight:500;color:white;font-size: 30px!Important;text-align: center!Important;"><span class="counter"><?php echo esc_html(get_field('process_box')['percentage']); ?></span>+</h2>
                        <h4 style="color:white;font-weight:500"><?php echo esc_html(get_field('process_box')['title']); ?></h4>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-12 d-flex pb-3" style="text-align:center;justify-content: center;align-items: center;">
                     <div class="data mx-2" style="color:white;">
                        <h2 style="font-weight:500;color:white;font-size: 30px!Important;text-align: center!Important;"><span class="counter"><?php echo esc_html(get_field('process_box_1')['percentage']); ?></span>+</h2>
                        <h4 style="color:white;font-weight:500;"><?php echo esc_html(get_field('process_box_1')['title']); ?></h4>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-12 d-flex pb-3" style="text-align:center;justify-content: center;align-items: center;">
                     <div class="data mx-2" style="color:white;">
                        <h2 style="font-weight:500;color:white;font-size: 30px!Important;text-align: center!Important;"><span class="counter"><?php echo esc_html(get_field('process_box_2')['percentage']); ?></span>+</h2>
                        <h4 style="color:white;font-weight:500;"><?php echo esc_html(get_field('process_box_2')['title']); ?></h4>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-12 d-flex pb-3" style="text-align:center;justify-content: center;align-items: center;">
                     <div class="data mx-2" style="color:white;">
                        <h2 style="font-weight:500;color:white;font-size: 30px!Important;text-align: center!Important;"><span class="counter"><?php echo esc_html(get_field('process_box_3')['percentage']); ?></span>+</h2>
                        <h4 style="color:white;font-weight:500;"><?php echo esc_html(get_field('process_box_3')['title']); ?></h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="services-area pt-50">
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
                  'terms' => 'Career with us', // Term name
               )
            )
         );
         $services_query = new WP_Query($args);

         if ($services_query->have_posts()) :
            $counter = 0;
            while ($services_query->have_posts()) : $services_query->the_post();
               $counter++;
         ?>
               <div class="card-row m-3 px-0 pt-0" style="background-color:white">
                  <h5 class="mb-1 text-center py-2"><?php the_title(); ?></h5>
                  <div class="single-card text-center mb-2" style="border-radius:20px;background-color:white;border: 1px solid rgba(0, 0, 0, 1);height:88%">
                     <div class="better-card">
                        <div class="d-flex align-items-center">
                           <?php
                           if (has_post_thumbnail()) {
                              the_post_thumbnail('medium', ['class' => 'img mb-1']);
                           }
                           ?>
                        </div>
                        <div class="content p-4">
                           <p class="text-center"><?php the_content(); ?></p>
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
<section class="services-area pt-50">
   <div class="container pb-4 px-3">
      <?php
      $interview_title = get_field('interview_title');
      $interview_description = get_field('interview_description');
      ?>
      <h2 class="pb-3 app-title" style="line-height: 1.3em;color:#202020;font-size:32px"><?php echo esc_html($interview_title); ?></h2>
      <p class="app-description" style="color:#202020; font-size:18px"><?php echo esc_html($interview_description); ?></p>
   </div>
   <div class="container px-lg-0 px-3 py-2">
      <div class="row">
         <div class="col-md-12 px-0">
            <div class="interview owl-carousel">
               <?php
               // Query to fetch posts from Services custom post type
               $args = array(
                  'post_type' => 'services',
                  'posts_per_page' => -1, // Retrieve all posts
                  'tax_query' => array(
                     array(
                        'taxonomy' => 'services-box', // Taxonomy name
                        'field' => 'name',
                        'terms' => 'Interview' // Term name
                     )
                  )
               );
               $services_query = new WP_Query($args);

               if ($services_query->have_posts()) :
                  $counter = 0;
                  while ($services_query->have_posts()) : $services_query->the_post();
                     $counter++;
               ?>
                     <div class="store-card py-lg-4 py-5 px-md-3" style="background-image:url('<?php if (has_post_thumbnail()) {
                                                                                                   echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium'));
                                                                                                } ?>')" style="width: 25%; max-width: 25%; overflow: hidden;">
                        <div class="overlay"></div>
                        <div class="border-0 text-left mb-2">
                           <div class="card-body choose-card">
                              <div class="content" style="color:white; position:relative; z-index:1;font-size:20px">
                                 <h5 class="text-center" style="color:white"><?php the_title(); ?></h5>
                                 <div><?php the_content(); ?></div>
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
      </div>
   </div>
   <p class="w-lg-50 mx-auto py-4 text-center" style="color:#202020; font-size:18px"><?php echo esc_html(get_field('interview')); ?></p>
</section>
<section class="services-area pt-50">
   <div class="container pb-3 px-lg-0 px-3">
      <?php
      $career_title = get_field('career_title');
      $career_description = get_field('career_description');
      ?>
      <h2 class="pb-3 app-title" style="line-height: 1.3em;color:#202020;font-size:32px"><?php echo esc_html($career_title); ?></h2>
      <p class="app-description" style="color:#202020; font-size:18px"><?php echo esc_html($career_description); ?></p>
   </div>
   <div class="container px-0">
      <div class="row">
         <div class="col-12 px-0">
            <div class="table-responsive">
               <table class="table table-striped table-bordered">
                  <thead class="thead">
                     <tr>
                        <th scope="col">Job Title</th>
                        <th class="px-lg-2 px-0" scope="col">Job Type</th>
                        <th scope="col">Location</th>
                        <th scope="col">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     // Query to fetch job listings
                     $args = array(
                        'post_type' => 'jobs',
                        'posts_per_page' => -1, // Retrieve all jobs
                        'order' => 'ASC',
                     );
                     $jobs_query = new WP_Query($args);

                     if ($jobs_query->have_posts()) :
                        while ($jobs_query->have_posts()) : $jobs_query->the_post();
                     ?>
                           <tr>
                              <td><?php the_title(); ?></td>
                              <td><?php echo get_field('job_type'); ?></td>
                              <td><?php echo get_field('location'); ?></td>
                              <td>
                                 <button class="btn btn-primary apply-now" data-toggle="modal" data-target="#applicationModal" data-job-id="<?php the_ID(); ?>" data-job-title="<?php the_title(); ?>" data-job-content="<?php the_content(); ?>">Apply Now</button>
                              </td>
                           </tr>
                     <?php
                        endwhile;
                        wp_reset_postdata();
                     else :
                        echo '<tr><td colspan="4">No jobs found.</td></tr>';
                     endif;
                     ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>

   <!-- Multi-step Popup for Application -->
   <div class="modal fade" id="applicationModal" tabindex="-1" role="dialog" aria-labelledby="applicationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="applicationModalLabel">Apply for <span id="jobTitleModal"></span></h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <!-- Step 1: Description -->
               <div id="step1">
                  <div id="jobDescriptionModal"></div>
                  <button class="btn btn-secondary prev-step">Previous</button>
                  <button class="btn btn-primary next-step">Next</button>
               </div>
               <!-- Step 2: CF7 Form -->
               <div id="step2" style="display: none;">
                  <div role="form" class="wpcf7" id="wpcf7-f123-o1" lang="en-US" dir="ltr">
                     <div class="screen-reader-response"></div>
                     <form method="post" class="wpcf7-form" novalidate="novalidate" enctype="multipart/form-data">
                        <div style="display: none;">
                           <input type="hidden" name="_wpcf7" value="123" />
                           <input type="hidden" name="_wpcf7_version" value="5.6" />
                           <input type="hidden" name="_wpcf7_locale" value="en_US" />
                           <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f123-o1" />
                           <input type="hidden" name="_wpcf7_container_post" value="0" />
                           <input type="hidden" name="job_title" id="jobTitleModal" value="" />
                        </div>
                        <p>
                           <label>Full Name<br />
                              <span class="wpcf7-form-control-wrap your-name">
                                 <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" />
                              </span>
                           </label>
                        </p>
                        <p>
                           <label>Email Address<br />
                              <span class="wpcf7-form-control-wrap your-email">
                                 <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" />
                              </span>
                           </label>
                        </p>
                        <p>
                           <label>Phone Number<br />
                              <span class="wpcf7-form-control-wrap tel-200">
                                 <input type="tel" name="tel-200" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" />
                              </span>
                           </label>
                        </p>
                        <p>
                           <label>Resume Upload<br />
                              <span class="wpcf7-form-control-wrap file-555">
                                 <input type="file" name="resume_file" size="40" class="wpcf7-form-control wpcf7-file" aria-invalid="false" />
                              </span>
                           </label>
                        </p>
                        <p>
                           <input type="submit" id="confirmBtn" value="Apply Now" class="wpcf7-form-control wpcf7-submit" />
                        </p>
                     </form>
                  </div>
               </div>
               <div id="successMessages" class="p-4 text-center" style="display: none; border: 1px solid #ccc; border-radius: 10px;">
                    <h2 class="text-center mt-4 fs-3">Good Luck with Your Application!</h2>
                    <div class="w-75 border-bottom border-primary mx-auto mt-2"></div>
                    <h4 class="text-center text-zinc-600 dark-text-zinc-400 mt-2">We have received your details. </h4>
					<p class="pb-2">You will receive a reply via email from our HR team shortly.</p>
                    <div class="h-4"></div>
                    <div class="border-top border-primary mx-auto w-75 mb-5"></div>
                  </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="services-area pt-50 pb-50">
   <div class="container px-0">
      <div class="row job-area pb-4 pt-5">
         <div class="col-md-12">
            <div class="container-fluid" style="z-index: 1;position: relative;">
               <div class="row mobile-view" style="flex-wrap:nowrap">
                  <div class="col-lg-9 col-12 d-flex pb-3" style="text-align:center;justify-content: center;align-items: center;">
                     <div class="data mx-4" style="color:white;">
                        <h4 style="color:white;font-weight:500;text-align:left">We have No current openings as of now. Please upload your CV to be considered for future job openings.</h4>
                     </div>
                  </div>
                  <div class="col-lg-3 col-12 d-flex pb-3" style="text-align:center;justify-content: center;align-items: center;">
                     <div class="mx-2">
                        <button class="my-2 py-2 btn btn-primary career-now" data-toggle="modal" data-target="#CareerModal" style="color:white;border-radius:25px;background-color:#145CAA">Send Your CV</a></button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Multi-step Popup for Application -->
<div class="modal fade" id="CareerModal" tabindex="-1" role="dialog" aria-labelledby="CareerModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="applicationModalLabel">Apply for Latest Job</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <!-- Step 1: CF7 Form -->
            <div id="step3">
               <div class="wpcf7">
                  <div class="screen-reader-response"></div>
                  <form method="post" class="wpcf7-form" novalidate="novalidate" enctype="multipart/form-data">
                     <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="123" />
                        <input type="hidden" name="_wpcf7_version" value="5.6" />
                        <input type="hidden" name="_wpcf7_locale" value="en_US" />
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f123-o1" />
                        <input type="hidden" name="_wpcf7_container_post" value="0" />
                     </div>
                     <p>
                        <label>Full Name<br />
                           <span class="wpcf7-form-control-wrap your-name">
                              <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" />
                           </span>
                        </label>
                     </p>
                     <p>
                        <label>Email Address<br />
                           <span class="wpcf7-form-control-wrap your-email">
                              <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" />
                           </span>
                        </label>
                     </p>
                     <p>
                        <label>Phone Number<br />
                           <span class="wpcf7-form-control-wrap tel-200">
                              <input type="tel" name="tel-200" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" />
                           </span>
                        </label>
                     </p>
                     <p>
                        <label>Job Title<br />
                           <span class="wpcf7-form-control-wrap your-name">
                              <input type="text" name="job_title" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" />
                           </span>
                        </label>
                     </p>
                     <p>
                        <label>Resume Upload<br />
                           <span class="wpcf7-form-control-wrap file-555">
                              <input type="file" name="resume_file" size="40" class="wpcf7-form-control wpcf7-file" aria-invalid="false" />
                           </span>
                        </label>
                     </p>
                     <p>
                        <input type="submit" id="confirmButton" value="Apply Now" class="wpcf7-form-control wpcf7-submit" />
                     </p>
                  </form>
               </div>
            </div>
            <!-- Success Message -->
            <div id="successMessage" class="p-4 text-center" style="display: none; border: 1px solid #ccc; border-radius: 10px;">
                    <h2 class="text-center mt-4 fs-3">Good Luck with Your Application!</h2>
                    <div class="w-75 border-bottom border-primary mx-auto mt-2"></div>
                    <h4 class="text-center text-zinc-600 dark-text-zinc-400 mt-2">We have received your details. </h4>
					<p class="pb-2">You will receive a reply via email from our HR team shortly.</p>
                    <div class="h-4"></div>
                    <div class="border-top border-primary mx-auto w-75 mb-5"></div>
             </div>
         </div>
      </div>
   </div>
</div>
</section>
<hr>
<section class="testimonial pt-50 pb-50">
   <div class="container-fluid">
      <div class="px-5 text-center mx-auto">
         <?php
         $testimonial_title = get_field('testimonial_title');
         ?>
         <h2 class="pb-3 w-lg-75 mx-auto px-lg-5" style="line-height: 1.3em;color:#202020;"><?php echo esc_html($testimonial_title); ?></h2>
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
                        <p><?php the_content(); ?></p>
                        <div class="row img">
                           <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="img-circle img-responsive p-1" />
                           <span class="px-3">
                              <h4><?php the_title(); ?></h4>
                              <h4 style="font-size:12px!important"><?php the_field('position'); ?></h4>
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

   jQuery(document).ready(function($) {
      $('.apply-now').click(function() {
         var jobTitle = $(this).data('job-title');
         var jobContent = $(this).data('job-content');
         var jobId = $(this).data('job-id');

         // Update modal content
         $('#jobTitleModal').text(jobTitle);
         $('#jobDescriptionModal').html(jobContent);

         // Update CF7 hidden job_title field (if using CF7 hidden field method)
         $('[name="job_title"]').val(jobTitle);

         // Show modal
         $('#applicationModal').modal('show');
      });

      $('.next-step').click(function() {
         $('#step1').hide();
         $('#step2').show();
      });

      $('.prev-step').click(function() {
         $('#step2').hide();
         $('#step1').show();
      });

      // CF7 Submission Success Handler
      $('#confirmBtn').on('click', function() {
         $('#step2').hide();
         $('#successMessages').show();
      });
   });

   jQuery(document).ready(function($) {
      $('.career-now').click(function() {
         // Show modal
         $('#CareerModal').modal('show');
      });
       $('#confirmButton').on('click', function() {
            $('#step3').hide();
            $('#successMessage').modal('show');
       });
   });
</script>
<?php get_footer(); ?>