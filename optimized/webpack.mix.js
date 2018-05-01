let mix = require('laravel-mix');

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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
  'public/bower_components/bootstrap/dist/css/bootstrap.min.css',
  'public/bower_components/font-awesome/css/font-awesome.min.css',
  'public/bower_components/Ionicons/css/ionicons.min.css',
  'public/bower_components/jvectormap/jquery-jvectormap.css',
  'public/dist/css/AdminLTE.min.css',
  'public/dist/css/skins/_all-skins.min.css'
], 'public/app/style.css').minify('public/app/style.css');

mix.scripts([
  'public/bower_components/jquery/dist/jquery.min.js',
  'public/bower_components/bootstrap/dist/js/bootstrap.min.js',
  'public/bower_components/fastclick/lib/fastclick.js',
  'public/dist/js/adminlte.min.js',
  'public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js',
  'public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
  'public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
  'public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
  'public/bower_components/chart.js/Chart.js',
  'public/dist/js/pages/dashboard2.js',
  'public/dist/js/demo.js'
], 'public/app/script.js').minify('public/app/script.js');

if (mix.inProduction()) {
  mix.disableNotifications();
  mix.version();
}
