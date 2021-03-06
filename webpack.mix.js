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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/welcome.js', 'public/js')
    .js('resources/js/ta02.js', 'public/js')
    .js('resources/js/project1.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/ta02.scss', 'public/css')
    .sass('resources/sass/week03.scss', 'public/css')
    .sass('resources/sass/project1.scss', 'public/css');
