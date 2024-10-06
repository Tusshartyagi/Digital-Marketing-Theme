(function ($) {
	"use strict";

	jQuery(document).ready(function ($) {
        
        var owlCarouselHandler = function(event) {
          var activeDot = $('.method .owl-dots .active');
          var currentActiveSlide = activeDot.index() + 1; // Get active dot index (starts from 1)
          var totalSlides = activeDot.siblings().length + 1; // Total dots including active one
          $(".pagination-info .current-page").text(currentActiveSlide);
          $(".pagination-info .total-pages").text(totalSlides);
        };
		// Check if the carousel is not yet initialized, and set initial step count
        $(document).ready(function() {
            var activeDot = $('.method .owl-dots .active');
          	var currentActiveSlide = activeDot.index() + 1;
            var totalSlides = $('.method .owl-dots').children().length;
            if (totalSlides > 0) {
                $(".pagination-info .current-page").text(currentActiveSlide);
                $(".pagination-info .total-pages").text(totalSlides);
            }
        });

		
		/* Slider Item Slide
		============================*/
		$(".slider").owlCarousel({
			items: 1,
			autoplay: true,
			loop: true,
			nav: false,
			dots: false,
            center: true,
			smartSpeed: 500
		});
		
		/* Testimonials Itesm Slide
		============================*/
		$(".testimonials").owlCarousel({
			slideSpeed: 7000,
            paginationSpeed: 3000,
            autoplay: false,
            autoplayTimeout: 7000,
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            smartSpeed: 3000,
            center: true,
			responsive: {
				0: {
					items: 1,
				},
				600: {
					items: 1,
				},
				1000: {
					items: 3,
				}
			}
		});
       
        $(".method").owlCarousel({
            slideSpeed: 7000,
            paginationSpeed: 3000,
            autoplay: false,
            autoplayTimeout: 7000,
            loop: true,
            margin: 30,
            nav: true,
            dots: true,
            smartSpeed: 3000,
            center: true,
            onChanged: owlCarouselHandler,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 3,
                }
            }
        }).on('initialized.owl.carousel', owlCarouselHandler);
        
        $(".badges").owlCarousel({
			slideSpeed: 7000,
            paginationSpeed: 3000,
            autoplay: false,
            autoplayTimeout: 7000,
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            smartSpeed: 3000,
            center: true,
			responsive: {
				0: {
					items: 1,
				},
				600: {
					items: 1,
				},
				1000: {
					items: 3,
				}
			}
		});
        
        $(".consulting").owlCarousel({
			slideSpeed: 7000,
            paginationSpeed: 3000,
            autoplay: false,
            autoplayTimeout: 7000,
            loop: true,
            margin: 30,
            nav: true,
            dots: true,
            smartSpeed: 3000,
            center: true,
			responsive: {
				0: {
					items: 1,
				},
				600: {
					items: 1,
				},
				1000: {
					items: 1,
				}
			}
		});
        
        $(".process").owlCarousel({
			slideSpeed: 5000,
            paginationSpeed: 4000,
            autoplay: false,
            autoplayTimeout: 7000,
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            smartSpeed: 3000,
            center: true,
			responsive: {
				0: {
					items: 1,
				},
				600: {
					items: 1,
				},
				1000: {
					items: 1,
				}
			}
		});

		/* Testimonials Items Slide
		============================*/
		$(".services").owlCarousel({
			items: 4,
			autoplay: false,
			loop: true,
			margin: 30,
			nav: false,
			dots: true,
			center: false,
			responsive: {
				0: {
					items: 1,
				},
				600: {
					items: 1,
				},
				1000: {
					items: 3,
				}
			}
		});
        
        /* Testimonials Items Slide
		============================*/
		$(".process-slide").owlCarousel({
			slideSpeed: 7000,
            paginationSpeed: 3000,
            autoplay: false,
            autoplayTimeout: 7000,
			loop: true,
			margin: 30,
			nav: true,
			dots: false,
			center: false,
			responsive: {
				0: {
					items: 1,
				},
				600: {
					items: 1,
				},
				1000: {
					items: 1,
				}
			}
		});
        
        /* Testimonials Items Slide
		============================*/
		$(".store-slide").owlCarousel({
			slideSpeed: 7000,
            paginationSpeed: 3000,
            autoplay: false,
            autoplayTimeout: 7000,
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            smartSpeed: 3000,
            center: true,
            slideBy: 1,
			responsive: {
				0: {
					items: 1,
				},
				600: {
					items: 1,
				},
				1000: {
					items: 2,
				}
			}
		});
        
        $(".integration").owlCarousel({
			items: 6,
			autoplay: true,
			loop: true,
			margin: 30,
			nav: false,
			dots: true,
			center: false,
			responsive: {
				0: {
					items: 1,
				},
				600: {
					items: 2,
				},
				1000: {
					items: 6,
				}
			}
		});
        
        $(".interview").owlCarousel({
			items: 4,
			autoplay: false,
			loop: true,
			margin: 30,
			nav: true,
			dots: true,
			center: false,
			responsive: {
				0: {
					items: 1,
				},
				600: {
					items: 1,
				},
				1000: {
					items: 4,
				}
			}
		});


		/* Counter Up Active
		============================*/
		$('.counter').counterUp({
			delay: 10,
			time: 300
		});

		/* Isotope Active
		============================*/
		$(".portfolio-area").imagesLoaded(function () {
			var grid = $(".grid").isotope({
				itemSelector: ".grid-item",
				percentPosition: true,
				masonry: {
					columnWidth: ".grid-item"
				}
			});

			$(".portfolio-menu").on("click", "button", function () {
				var filterValue = $(this).attr("data-filter");
				grid.isotope({
					filter: filterValue
				});
			});

			/* Isotope Menu Active
			============================*/
			$(".portfolio-menu button").on("click", function (event) {
				$(this)
					.siblings(".active")
					.removeClass("active");
				$(this).addClass("active");
				event.preventDefault();
			});
		});


		/* Magnific Image Popup
		============================*/
		$('.gallery').magnificPopup({
			type: 'image',
			gallery: {
				enabled: true
			}
		});
		
		/* Magnific Video Popup
		============================*/
		$('.video-popup').magnificPopup({
			type: 'iframe'
		});


	});

    $(document).ready(function () {
      // Function to check if element is in viewport
      function isElementInViewport(elem) {
        var $elem = $(elem);
        if (!$elem.length) {
          // Handle the case where the element is not found
          return false;
        }
        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();
        var elemTop = $elem.offset().top;
        var elemBottom = elemTop + $elem.outerHeight();

        return (elemBottom >= viewportTop && elemTop <= viewportBottom);
      }

      // Function to trigger animation when section comes into view
      function triggerAnimation() {
        if (isElementInViewport('#services-section')) {
          $('.arrows').each(function (index) {
            var $this = $(this);
            $this.delay(index * 200).queue(function (next) {
              $this.addClass('visible');
              next();
            });
          });
          $(window).off('scroll', triggerAnimation); // Turn off scroll listener once animation is triggered
        }
      }

      // Check for animation trigger on scroll
      $(window).on('scroll', triggerAnimation);
    });


	jQuery(window).load(function () {

		/* Sticky Header
		============================*/
		$(window).on('scroll', function () {
			if ($(this).scrollTop() > 20) {
				$('.header-fixed').addClass("sticky");
			} else {
				$('.header-fixed').removeClass("sticky");
			}
		});
	});
    
    jQuery(document).ready(function($) {
   $('.apply-now').click(function() {
      var jobTitle = $(this).closest('tr').find('.job-title').text().trim();
      $('#job_title').val(jobTitle);
       });
    });

    
    jQuery(document).ready(function($) {
    // Function to handle category item click
    $('.category-item').click(function(e) {
        e.preventDefault(); // Prevent the default behavior of anchor tag
        var category = $(this).data('category');
        
        // Remove active class from all category items
        $('.category-item').removeClass('active');
        // Add active class to the clicked category item
        $(this).addClass('active');
        
        // Update the category name in the dropdown
        $('.category-toggle').text(category);
        
        // Update the category name in the carousel boxes
        $('.carousel-category h2').text(category);
        
        // Get the index of the selected category
        var index = $(this).index();
        // Activate the corresponding carousel slide
        $('#testimonial-carousel').carousel(index);
        
        // Close dropdown
        $('.dropdown-menu').removeClass('show');
    });
});
}(jQuery));