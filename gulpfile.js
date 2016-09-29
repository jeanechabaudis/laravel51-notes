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

 elixir.config.sourcemaps = false;

elixir(function(mix) {
    mix.sass(
    	'app.scss', 
    	null, 
    	{
			includePaths: [
				"resources/assets/foundation/bower_components/foundation-sites/scss"
			]
		}
    ).scripts(
    	[
    		"../foundation/bower_components/jquery/dist/jquery.min.js",
    		"../foundation/bower_components/foundation-sites/dist/foundation.min.js",
    		"app.js"
    	],
    	'public/js/app.js'
    );
});
