"use strict";

// const Global = require('./global');

// let	_this;

let _this = module.exports = {

	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		pause: $('.js-pause'),
		play: $('.js-play'),
        audio: $('.js-audio')
    },

    vars: {
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		if( _this ){
			_this.$dom.play.on('click', function() {
                $(this).parent().addClass('active');
                _this.$dom.audio[0].play();
            });
            _this.$dom.pause.on('click', function() {
                $(this).parent().removeClass('active');
                _this.$dom.audio[0].pause();
            });
		}
    },

};