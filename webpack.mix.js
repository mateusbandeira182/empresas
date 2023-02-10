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

mix.js('resources/js/app.js', 'public/assets/js')
    .sass('resources/sass/styles.scss', 'public/assets/css')
    .copyDirectory('node_modules/jquery-mask-plugin/dist/jquery.mask.min.js', 'public/assets/plugins/jquery-mask-plugin/jquery.mask.min.js')
    .js('resources/js/company/company.js', 'public/assets/js/company')
    .js('resources/js/user/user.js', 'public/assets/js/user')
    .js('resources/js/user/panel.js', 'public/assets/js/user');
