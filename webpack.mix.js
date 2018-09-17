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

mix.scripts([
    'resources/js/jquery.js',
    'resources/js/jquery-ui.js',
    'resources/js/bootstrap_adminlte.js',
    'resources/js/jquery.dataTables.js',
    'resources/js/dataTables.bootstrap.js',
    'resources/js/raphael.js',
    'resources/js/morris.js',
    'resources/js/jquery.sparkline.js',
    'resources/js/jquery-jvectormap-1.2.2.min.js',
    'resources/js/jquery-jvectormap-world-mill-en.js',
    'resources/js/jquery.knob.min.js',
    'resources/js/moment.js',
    'resources/js/daterangepicker.js',
    'resources/js/bootstrap-datepicker.js',
    'resources/js/bootstrap3-wysihtml5.all.js',
    'resources/js/jquery.slimscroll.js',
    'resources/js/fastclick.js',
    'resources/js/adminlte.js',
    'resources/js/dashboard.js',
    'resources/js/demo.js',
    'resources/js/custom_app.js'
], 'public/js/all.js')

//.js('resources/js/app.js', 'public/js')
   //.sass('resources/sass/app.scss', 'public/css')
   .styles([
    'resources/css/bootstrap.css',
    'resources/css/font-awesome.css',
    'resources/css/ionicons.css',
    'resources/css/dataTables.bootstrap.css',
    'resources/css/AdminLTE.css',
    'resources/css/_all-skins.css',
    'resources/css/morris.css',
    'resources/css/jquery-jvectormap.css',
    'resources/css/bootstrap-datepicker.css',
    'resources/css/daterangepicker.css',
    'resources/css/bootstrap3-wysihtml5.css'
], 'public/css/all.css');
