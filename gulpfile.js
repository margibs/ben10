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
    	'css1.css',
    	'css2.css',
    	'loloy.css'
    ],'public/css/all.css');
    
    mix.scripts([
    	'one.js',
    	'two.js'
    ],'public/js/all.js');


});
