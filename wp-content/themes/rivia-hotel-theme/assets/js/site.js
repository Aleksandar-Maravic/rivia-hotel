"use strict";

$ = require("jquery");

const example = require('./site/example');
const sound = require('./site/sound');
const sliders = require('./site/sliders');

jQuery(function () {

  example.init();
  sound.init();
  sliders.init();
  
});
