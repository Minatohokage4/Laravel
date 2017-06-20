var elixir = require('laravel-elixir');

elixir(function (mix)
{
		mix.sass('app.sass');
		 mix.webpack('app.js', 'public/dist', 'app/assets/js');
});
