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

mix.js('resources/js/back.js', 'public/js')
    .js('resources/js/front.js', 'public/js')
    .vue()
    .sass('resources/sass/back.scss', 'public/css')
    .sass('resources/sass/front.scss', 'public/css')
    .options({
        processCssUrls: false,
    })
    mix.copyDirectory( './node_modules/@fortawesome/fontawesome-free/webfonts/*', './dist/fonts/font-awesome' );
