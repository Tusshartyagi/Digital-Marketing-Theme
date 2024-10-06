<?php

/**
 * Header file for the Home Page templates.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Korvage
 * @since Korvage
 */
wp_head()
?>
<style>
	.kadence-sticky-header{
    	margin-top: 25px;
		margin-left: 4%;
		margin-right: 4%;
		width: 92%;
		background-color: white;
		border-radius: 50px;
    }
	.item-is-stuck{
    	width: 100%!important;
        margin:0px!important;
        border-radius:0px!important;
    }
</style>
<header id="masthead" class="site-header" role="banner" itemtype="https://schema.org/WPHeader" itemscope="">
    <div id="main-header" class="site-header-wrap" style="height: 90px;">
        <div class="site-header-inner-wrap kadence-sticky-header" data-reveal-scroll-up="false" data-shrink="false" style="" data-start-height="90">
            <div class="site-header-upper-wrap">
                <div class="site-header-upper-inner-wrap">
                    <div class="site-main-header-wrap site-header-row-container site-header-focus-item site-header-row-layout-standard" data-section="kadence_customizer_header_main">
                        <div class="site-header-row-container-inner">
                            <div class="site-container">
                                <div class="site-main-header-inner-wrap site-header-row site-header-row-has-sides site-header-row-no-center">
                                    <div class="site-header-main-section-left site-header-section site-header-section-left">
                                        <div class="site-header-item site-header-focus-item" data-section="title_tagline">
                                            <?php do_action('kadence_site_branding'); ?>
                                        </div><!-- data-section="title_tagline" -->
                                    </div>
                                    <div class="site-header-main-section-right site-header-section site-header-section-right">
                                        <div class="site-header-item site-header-focus-item site-header-item-main-navigation header-navigation-layout-stretch-false header-navigation-layout-fill-stretch-false" data-section="kadence_customizer_primary_navigation">
                                            <?php do_action('kadence_primary_navigation'); ?>
                                        </div><!-- data-section="primary_navigation" -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="mobile-header" class="site-mobile-header-wrap child-is-fixed" style="position: absolute;width: 100%;">
        <div class="site-header-inner-wrap kadence-sticky-header item-is-fixed item-is-stuck" data-shrink="false" data-reveal-scroll-up="false" data-start-height="90">
            <div class="site-header-upper-wrap">
                <div class="site-header-upper-inner-wrap">
                    <?php do_action('kadence_mobile_main_header'); ?>
                </div>
            </div>
        </div>
    </div>
</header>