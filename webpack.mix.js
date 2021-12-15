const mix = require('laravel-mix');
let ImageminPlugin = require( 'imagemin-webpack-plugin' ).default;
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
    .js('resources/js/chart-area-demo.js', 'public/js')
    .js('resources/js/chart.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .copy('resources/img', 'public/images', true)
    .copy('resources/video', 'public/videos', true)
    .copy('docs/erd/index.html', 'public/docs/erd.html', true)
    .sourceMaps();
