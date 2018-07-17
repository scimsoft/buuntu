const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |


mix.js('resources/assets/js/app.js', __dirname +'public/js')
   .sass('resources/assets/sass/app.scss', __dirname +'public/css');
   */
mix.js('resources/assets/js/app.js', 'public/js/app.js')
    .js('resources/assets/js/bubble.js', 'public/js/bubble.js')
    .sass('resources/assets/sass/app.scss', 'public/css/app.css')
    .sass('resources/assets/sass/bubble.scss', 'public/css/bubble.css');
