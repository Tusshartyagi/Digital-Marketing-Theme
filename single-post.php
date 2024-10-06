<?php
/**
 * Template Name: Default Template
 */
get_header();
?>

<!-- Custom Styles -->
<style>
    /* Breadcrumb Section Styles */
    .breadcrumb-section {
        padding: 100px 0;
        background-size: cover;
        background-position: center;
    }
    .breadcrumb-content h1 {
        font-size: 36px;
        color: #fff;
        margin-bottom: 20px;
    }

    /* Single Post Section Styles */
    .single-post-section {
        padding-top: 50px;
        padding-bottom: 50px;
    }
    .single-post-content {
        margin-bottom: 30px;
    }
    .single-post-content .single-post {
        margin-bottom: 30px;
    }
    .single-post-content .single-post .post-content {
        font-size: 16px;
        line-height: 1.6;
    }

    /* Sidebar Styles */
    .sidebar {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
    }
    .sidebar .widget {
        margin-bottom: 20px;
    }
    .sidebar .widget-title {
        font-size: 18px;
        margin-bottom: 15px;
    }
    .sidebar .widget ul {
        list-style: none;
        padding-left: 0;
    }
    .sidebar .widget ul li {
        margin-bottom: 10px;
    }
    .sidebar .widget ul li a {
        color: #333;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    .sidebar .widget ul li a:hover {
        color: #007bff;
    }
@media (min-width: 992px) {
    p {
        font-size: 20px !important;
        font-weight: 400 !important;
        padding: 10px 0px;
    }
    h4{
		font-size: 26px!Important;
	}
    li{
        font-size: 20px!Important;
        font-weight:400;
        font-family:"Outfit", sans-serif;
    }
    .rounded-circle{
    	height:370px!Important;
	}
   .breadcumb p{
   		font-size:22px!Important;
   }
   .owl-dots{
   		display:none!Important;
	}
    .breadcumb h1{
    	font-size:50px!Important;
    }
    .store-card{
	height:270px!important;
}
    .testimonial4_slide h4{
    	font-size:22px!important;
    }
    .search-form .search-submit[type="submit"] {
        top: 0;
        right: 0px;
        bottom: 0;
        position: absolute;
        color: white;
        z-index: 2;
        width: 33%;
        border: 0;
        border-radius: 0;
        box-shadow: none;
        overflow: hidden;
        font-size: 15px;
        height: 45px;
        margin: 3px;
        background: rgba(20, 92, 170, 1);
        padding: 9px 25px !important;
        font-weight: 600;
	}
      .blog-card img {
        border-radius: 10px;
        padding-bottom: 10px;
        width:100%;
        height:200px!Important;
    }
    .card-space{
		display:flex;
        justify-content: center;
	}
} 
@media (max-width: 990px) {
    p {
        font-size: 34px !important;
        font-weight: 400 !important;
        padding: 15px 0px;
    }
    h3{
		font-size: 42px!Important;
	}
    .featured-blog button a{
		font-size:40px!important;
	}
    .search-form input[type="search"], .search-form input.search-field{
		height:80px;
	}
	.search-form .search-submit[type="submit"] {
        right: -11px;
        position: absolute;
        color: white;
        z-index: 2;
        width: 33%;
        border: 0;
        border-radius: 0;
        box-shadow: none;
        overflow: hidden;
        font-size: 31px;
        height: 75px;
        margin: 3px;
        background: rgba(20, 92, 170, 1);
        padding: 9px 25px !important;
        font-weight: 600;
    }
    .blog-card img {
        border-radius: 10px;
        padding-bottom: 10px;
        width:100%;
        height:51%!important;
    }
    .categories .category{
		font-size:30px!Important;
	}
	.blog .row{
		flex-direction:column!important;
	}
    .load-more,
    .view-less{
		margin-top:-20px!Important;
		font-size:30px;
	}
    li{
        font-size: 34px!Important;
        font-weight:400;
        font-family:"Outfit", sans-serif;
    }
}    
    .blog-card {
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 10px;
        margin-bottom: 15px;
    	width:96%;
    }

    .categories {
        margin-bottom: 10px;
    }

    .categories .category {
        display: inline-block;
        margin-right: 5px;
        color: rgba(75, 107, 251, 1);
        background: rgba(75, 107, 251, 0.05);
        padding: 4px 10px;
        border-radius: 5px;
        font-size:14px;
        font-weight:600;
    }

    .author-info {
        display: flex;
        align-items: center;
        margin-top: 10px;
    }

    .author-info p {
        margin: 0 10px 0 0;
    }
	.author-info img {
        border-radius: 50px;
        padding: 10px;
        width:12%;
        height:44px!Important;
    }

    .load-more,
    .view-less {
        display: block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: white;
        border: 1px solid rgba(105, 106, 117, 1);
        color: rgba(105, 106, 117, 1);
        border-radius: 5px;
        cursor: pointer;
    }
	.search-form label{
		width:100%;
	}
	.search-form .kadence-search-icon-wrap {
        position: absolute;
        right: 23%;
        top: -3px;
        height: 100%;
        width: 30px;
        padding: 0;
        text-align: center;
        background: 0 0;
        z-index: 3;
        cursor: pointer;
        pointer-events: none;
        color: white;
        text-shadow: none;
        display: flex;
        align-items: center;
        justify-content: center;
	}
</style>

<!-- Slider Area Start -->
<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
<section class="breadcumb-area desktop-responsive" style="background-image: url('<?php echo esc_url($image[0]); ?>');">
   <div class="container pt-md-5">
      <div class="row pt-md-5" style="align-items:left;">
         <div class="col-xl-12 px-0">
            <div class="breadcumb px-0 mx-auto" style="color:#fff;text-align:center!Important;">
               <h1 class="py-2" style="text-align:center;color:white!important"><?php the_title(); ?></h1>
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
               <h1 class="pb-2" style="text-align:center;color:white!important"><?php the_title(); ?></h1>
               <p class="py-2 mx-auto text-center" style="text-align:center;color:white!important"><?php echo esc_html(get_field('description')); ?></p>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Single Post Section -->
<section class="single-post-section pt-50 pb-50">
    <div class="container-fluid px-lg-5">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="single-post-content">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>
                            <div class="single-post">
                                <div class="post-content">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    else :
                        echo 'No posts found';
                    endif;
                    ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <!-- Sidebar -->
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>