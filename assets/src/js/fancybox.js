const $ = require("jquery");
window.jQuery = $;
require("@fancyapps/fancybox");

// Rewrite default settings
// Remove Zoom option
$.fancybox.defaults.buttons = [
  //"zoom",
  //"share",
  "slideShow",
  "fullScreen",
  //"download",
  "thumbs",
  "close",
];
// Disable Zoom img on click
$.fancybox.defaults.clickContent = false;
