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
mix.styles([
    'resources/vendor/css/adminlte.min.css',
    'resources/vendor/css/all.min.css',
    'resources/vendor/css/select2.min.css'
], 'public/css/plantilla.css')
    .js('resources/js/app.js', 'public/js')
    .scripts([
        'resources/vendor/js/adminlte.min.js',
        'resources/vendor/js/demo.js',
        'resources/vendor/js/Chart.bundle.min.js',
        'resources/vendor/js/Chart.min.js',
        'resources/vendor/js/jquery.min.js',
        'resources/vendor/js/select2.full.min.js'
    ], 'public/js/plantilla.js')
    .copy('resources/vendor/fontawesome/webfonts', 'public/webfonts');

