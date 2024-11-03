"use strict";

$ = require("jquery");

const example = require('./site/example');
const sound = require('./site/sound');
const sliders = require('./site/sliders');
const stickyheader = require('./site/stickyheader');
const scrollto = require('./site/scrollto');
const fakesubmit = require('./site/fakesubmit');

jQuery(function () {

  example.init();
  sound.init();
  sliders.init();
  stickyheader.init();
  scrollto.init();
  fakesubmit.init();
  
});
