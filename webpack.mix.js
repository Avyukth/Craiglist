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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'resources/assets/css/libs/blog-post.css',
    'resources/assets/css/libs/bootstrap.css',
    'resources/assets/css/libs/font-awesome.css',
    'resources/assets/css/libs/metisMenu..css',
    'resources/assets/css/libs/sb-admin-2.css',
    'resources/assets/css/libs/styles.css',

],'public/css/libs.css');


mix.scripts([
    'resources/assets/js/libs/blog-post.js',
    'resources/assets/js/libs/bootstrap.js',
    'resources/assets/js/libs/font-awesome.js',
    'resources/assets/js/libs/metisMenu.js',
    'resources/assets/js/libs/sb-admin-2.js',
    'resources/assets/js/libs/styles.js',
],'public/js/libs.js');
