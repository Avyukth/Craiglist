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


// const path = require('path');
const glob = require('glob');

mix.js(glob.sync('resources/assets/js/**/*.js'), 'public/js')
    .sass(glob.sync('resources/assets/css/**/*.css', 'public/css'));



// mix.js('resources/assets/js/app.js', 'public/js')
//     .sass('resources/assets/sass/app.scss', 'public/css');

// mix.styles([
//     'resources/assets/css/libs/blog-post.css',
//     'resources/assets/css/libs/bootstrap.css',
//     'resources/assets/css/libs/font-awesome.css',
//     'resources/assets/css/libs/metisMenu..css',
//     'resources/assets/css/libs/sb-admin-2.css',
//     'resources/assets/css/libs/styles.css',
//
// ],'public/css/libs.css');
//
//
// mix.scripts([
//     'resources/assets/js/libs/blog-post.js',
//     'resources/assets/js/libs/bootstrap.js',
//     'resources/assets/js/libs/font-awesome.js',
//     'resources/assets/js/libs/metisMenu.js',
//     'resources/assets/js/libs/sb-admin-2.js',
//     'resources/assets/js/libs/styles.js',
// ],'public/js/libs.js');





// const { mix } = require('laravel-mix');
//
// mix
//
//     .js('resources/assets/js/app.js', 'public/js/app.js')
//     .js('resources/assets/js/bootstrap.js', 'public/js/app.js')
//     .js('resources/assets/js/plugins/jquery.appear.js', 'public/js/plugins/jquery.appear.js')
//     .js('resources/assets/js/plugins/jquery.backstretch.min.js', 'public/js/plugins/jquery.backstretch.min.js')
//     .js('resources/assets/js/plugins/modernizr.js', 'public/js/plugins/modernizr.js')
//     .combine([
//         'resources/assets/js/libs/app.js',
//         'resources/assets/js/libs/bootstrap.js',
//         'resources/assets/js/libs/custom.js',
//         'resources/assets/js/libs/gmap.js',
//         'resources/assets/js/libs/ipad.js',
//         'resources/assets/js/libs/jquery.form.min.js',
//         'resources/assets/js/libs/jquery.min.js',
//         'resources/assets/js/libs/jquery.pjax.js',
//         'resources/assets/js/libs/jquery.slim.min.js',
//         'resources/assets/js/libs/myform.js',
//         'resources/assets/js/libs/sb-admin-2.js',
//         'resources/assets/js/libs/sb-admin-2.min.js',
//         'resources/assets/js/libs/sticky.js',
//         'resources/assets/js/libs/template.js',], 'public/js/libs/libs.js')
//     .js('resources/assets/js/isotope/isotope.pkgd.min.js', 'public/js/plugins/isotope/isotope.pkgd.min.js')
//     .sass('resources/assets/sass/app.scss', 'public/css/lib.css')
//     .version();
// Reply
// Post Reply Button
