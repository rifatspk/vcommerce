<<<<<<< HEAD
const mix = require("laravel-mix");
=======
const mix = require('laravel-mix');
>>>>>>> d2a2a1c8eeade263e34c4c30efb94b56f50bd1dc

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

<<<<<<< HEAD
mix.js("resources/js/app.js", "public/js").sass(
    "resources/sass/app.scss",
    "public/css"
);

mix.copyDirectory("resources/backend", "public/backend");
mix.copyDirectory("resources/frontend", "public/frontend");
mix.js("resources/js/app.js", "public/backend/js");
=======
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
>>>>>>> d2a2a1c8eeade263e34c4c30efb94b56f50bd1dc
