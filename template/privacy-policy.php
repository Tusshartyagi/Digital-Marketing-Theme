<?php

/**
 * Template Name: Privacy Policy Page
 */
get_header();
?>
<style>
@media (max-width:920px){
	li{
    	font-weight:400px;
        font-size:32px!important;
    }
    p{
    	padding-left:20px;
    }
}
@media (min-width:920px){
	li{
    	font-weight:400px;
        font-size:18px!important;
    }
	p{
    	padding-left:20px!important;
    	font-size:18px!Important;
	}
}
</style>
<!-- Slider Area Start -->
<section class="breadcumb-area-services desktop-responsive" style="background-color:#4AABF4!important">
    <div class="container">
        <div class="row" style="align-items:center">
            <div class="col-xl-5">
                <div class="breadcumb" style="text-align:left">
                    <h1 class="py-2">
                        <?php echo esc_html(get_field('title')); ?>
                    </h1>
                    <p class="py-2 px-0">
                        <?php echo esc_html(get_field('description')); ?>
                    </p>
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
<section class="breadcumb-area-services mobile-responsive"
    style="background-image: url('<?php echo esc_url($image[0]); ?>');">
    <div class="breadcrumb-overlay"></div>
    <div class="container pt-md-5">
        <div class="row pt-md-5" style="align-items:left;">
            <div class="col-xl-12 px-0">
                <div class="breadcumb px-0" style="color:#fff;text-align:left!Important;">
                    <h1 class="pb-2">
                        <?php echo esc_html(get_field('title')); ?>
                    </h1>
                    <p class="pb-2 px-0">
                        <?php echo esc_html(get_field('description')); ?>
                    </p>
                    <button class="my-2 pb-2"><a href="<?php echo esc_html(get_field('url')); ?>">Consult Our
                            Experts</a></button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Slider Area End -->
<section class="services-area">
    <div class="container pb-5 pt-4">
        <?php
      $main_title = get_field('main_title');
      ?>
        <h2 class="mx-auto text-center" style="line-height: 1.3em;color:#202020;font-size:40px;text-align:center">
            <?php echo esc_html($main_title); ?>
        </h2>
    </div>
</section>
<section class="services-area">
    <div class="container pb-5 pt-4">
        <h2 class="mx-auto" style="line-height: 1.3em;color:#202020;font-size:22px;text-align:justify">
            <?php the_field('main_description'); ?>
        </h2>
    </div>
</section>
<?php get_footer(); ?>