const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
mix.js('resources/js/myscript.js', 'public/js')

    .postCss('resources/css/app.css', 'public/css', [])
    .postCss('resources/css/style.css', 'public/css');
