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
    mix.less('app.less')

    //resulting CSS will be placed in public/css/all.css
    //mix.styles([
    //	'../../../vendor/bower_components/bootstrap/dist/css/bootstrap.min.css',
	//    '../../../vendor/bower_components/font-awesome/css/font-awesome.min.css'
    //])
    .scripts([
      '../bower/jquery/dist/jquery.min.js',
      '../bower/bootstrap/dist/js/bootstrap.min.js'
    ], 'public/js/vendor.js')

    .styles('pramen.css','public/css/pramen.css')
    .scripts('pramen.js','public/js/pramen.js')
    .version(['css/pramen.css','js/pramen.js']);
    
});