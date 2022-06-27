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
    .vue()
    .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'public/assets/css/bootstrap.min.css',
    'public/assets/css/style.css'
], 'public/css/all.css');

mix.scripts([
    'public/assets/js/bootstrap.min.js',
    'public/assets/js/jquery-3.3.1.slim.min.js',
    'public/assets/js/popper.min.js'
], 'public/js/all.js');
