var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.copy('./bower_components/bootstrap-sass/assets/fonts/', 'public/fonts/')
        .sass('app.scss')
        .scripts([
            './bower_components/jquery/dist/jquery.js',
            './bower_components/bootstrap-sass/assets/javascripts/bootstrap.js'
        ], 'public/js/app.js');
});
