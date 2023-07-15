const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.styles([
    'resources/css/bootstrap.min.css',
    'resources/css/slides.css',
    'resources/css/slides.min.css',
    'resources/css/swiper.min.css',
], 'public/css/main.css');


mix.js([
    'resources/js/plugins.js',
    'resources/js/bootstrap.js',
    'resources/js/bootstrap.min.js',
    'resources/js/slides.js',
    'resources/js/slides.min.js',
    'resources/js/soundcloud.min.js',
    'resources/js/swiper.min.js',
], 'public/js/main.js')

mix.js('resources/js/app.js', 'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

mix.copyDirectory('resources/css/fonts', 'public/css/fonts')
mix.copyDirectory('resources/img', 'public/img')

 