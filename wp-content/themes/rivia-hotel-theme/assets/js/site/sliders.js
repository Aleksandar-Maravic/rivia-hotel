"use strict";

require('slick-carousel');

// const Global = require('./global');

// let	_this;

let _this = module.exports = {

	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		homeHeroSlider: $('.js-gallery'),
    },

    vars: {
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		if( _this ){
			$('.js-show-slider').on('click', function() {
				$('body').addClass('overflow-hidden');
				$('.home-gallery-wrapper').addClass('active');
			});

			$('.js-gallery-close').on('click', function() {
				$('body').removeClass('overflow-hidden');
				$('.home-gallery-wrapper').removeClass('active');
			});

			$('.js-gallery').on('init', function(event, slick, direction){				
				var firstSlideText = $('.js-gallery .slick-slide').first().find('.js-fake-caption').text();
				$('.js-gallery-caption').text(firstSlideText);
			});

			$(window).on("load resize orientationchange", function() {
				if (window.matchMedia("(orientation: portrait)").matches) {
					$('.js-device-message').show().css('display', 'flex');
				} else {
					$('.js-device-message').hide();
				}
			});

			_this.$dom.homeHeroSlider.slick({
                slidesToScroll: 1,
                slidesToShow: 1,
                dots: false,
                arrows: true,
                autoplay: false,
                infinite: false,
				draggable: false,
				touchMove: false,
				rows: 0,
				prevArrow: "<span type='button' class='slick-prev pull-left'><span class='icon-arrow-left-long'></span></span>",
			    nextArrow: "<span type='button' class='slick-next pull-right'><span class='icon-arrow-right-long'></span></span>",
				appendArrows: $('.home-gallery-arrows')
            });

			let maxSlides = $('.home-gallery-item').length;
			$('.js-max-slides').text(maxSlides);

			
			$('.js-gallery').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
				var nextSlideText = $('.js-gallery .slick-slide').eq(nextSlide).find('.js-fake-caption').text();
				$('.js-current-slide').text(nextSlide + 1)
				$('.js-gallery-caption').text(nextSlideText);
			});
		}
    },

};