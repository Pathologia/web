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
.babel('resources/js/app-export.js', 'public/js/app-export.js')
    .sass('resources/sass/app.scss', 'public/css')
    .copy('resources/css/light.css', 'public/css', true)
    .copy('resources/img', 'public/images', true)
    .sourceMaps();

mix.webpackConfig( {
    plugins: [
        new ImageminPlugin( {
//            disable: process.env.NODE_ENV !== 'production', // Disable during development
            pngquant: {
                quality: '95-100',
            },
            test: /\.(jpe?g|png|gif|svg)$/i,
        } ),
    ],
} );

mix.copy( 'resources/img', 'public/images', false );