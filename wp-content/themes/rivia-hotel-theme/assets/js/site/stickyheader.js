"use strict";

var Global = require('./global');

// let	_this;

var _this = module.exports = {

	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		header: $('.site-header')
    },

    classes: {
        sticky: 'sticky-header',
    },

    vars: {
        headerOffset: 150,
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
        Global.$dom.window.on('scroll', _this.toggleHeaderSticky);
        Global.$dom.document.ready(_this.toggleHeaderSticky);
    },

    toggleHeaderSticky: function() {
        window.pageYOffset >= _this.vars.headerOffset ? _this.$dom.header.addClass( _this.classes.sticky ) : _this.$dom.header.removeClass( _this.classes.sticky );
    }

};