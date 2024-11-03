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
			function triggerFakeClick() {
                // Get all elements with class 'js-fake-submit'
                const $fakeSubmitButtons = $('.js-fake-submit');
            
                // Iterate through each fake submit button
                $fakeSubmitButtons.each(function() {
                    $(this).on('click', function(event) {
                        event.preventDefault(); // Prevent any default action
            
                        // Find the closest parent with the class '.contact-form-wrapper'
                        const $contactFormWrapper = $(this).closest('.contact-form-wrapper');
            
                        if ($contactFormWrapper.length) {
            
                            // Within the parent, find the element with class '.frm_button_submit'
                            const $realSubmitButton = $contactFormWrapper.find('.frm_button_submit');
            
                            if ($realSubmitButton.length) {
                                $realSubmitButton.click();
                            } else {
                                console.error('Real submit button not found');
                            }
                        } else {
                            console.error('Contact form wrapper not found');
                        }
                    });
                });
            }
            
            // Call the function to add event listeners on page load
            $(document).ready(triggerFakeClick);
		}
    },

};