"use strict";

// const Global = require('./global');

// let	_this;

let _this = module.exports = {

	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		body: $('body')
    },

    vars: {
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		if( _this ){
			$('.js-open-contact-form').on('click', function() {
				$('.contact-form-wrapper').addClass('active');
				$('body').addClass('overflow-hidden');
			});
			$('.js-close-form').on('click', function() {
				$('.contact-form-wrapper').removeClass('active');
				$('body').removeClass('overflow-hidden');
			});
		}
    },

};