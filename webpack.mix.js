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

mix.js('resources/assets/js/app.js', 'public/js');

mix.sass('resources/assets/sass/index.sass', 'public/css')
    .sass('resources/assets/sass/translation.sass', 'public/css');

mix.version();
/**
 * npm run watch  proxy localhost to https
 */
mix.browserSync({
    proxy: {
        target: 'en.translate.cc:7009',
    },
    https: true,
    port: 443,
    online: false,
    browser: []
});
