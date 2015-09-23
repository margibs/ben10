var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    mix.styles([
    	'/dist/bootstrap.css',
    	'/dist/style.css',
    	'/dist/dark.css',
    	'/dist/animate.css',
    	// '/dist/responsive.css',
    	'/dist/font-icons.css',
        '/dist/simplebar.css',
    	'myStyle.css',
    ],'public/css/all.css');
    
    // mix.scripts([
    // 	'/dist/jquery.js',
    // 	'/dist/plugins.js',
    // 	'/dist/functions.js'
    // ],'public/js/all.js');


});
