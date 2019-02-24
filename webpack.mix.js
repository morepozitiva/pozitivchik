const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js/')
   .sass('resources/sass/app.scss', 'public/css');
mix.sass('resources/sass/style.scss', 'public/css/vendor');
mix.styles([
    'public/css/vendor/style.css',
    'public/css/vendor/clock.css',
    'public/css/vendor/fons.css',
    'public/css/vendor/naviki.css'
], 'public/css/all.css');
