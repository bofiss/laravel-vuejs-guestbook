var elixir = require('laravel-elixir');
// grab all our packages
var gulp = require('gulp'),
    php = require('gulp-connect-php');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.scripts([
    	'vendor/vue.min.js',
    	'vendor/vue-resource.min.js'
    ], 'public/js/vendor.js');
});

// create a task to serve the app
gulp.task('serve', function() {

    // start the php server
    // make sure we use the public directory since this is Laravel
    php.server({
        base: './public'
    });

});