import 'slick-carousel'
import 'slick-carousel/slick/slick.css'
import 'slick-carousel/slick/slick-theme.css'

require('../css/app.css');
require('select2');
let $ = require('jquery');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.

$('[data-slider]').slick({
    dots: true,
    arrows: true
});
console.log('Hello Webpack Encore! Edit me in assets/js/app.js');

