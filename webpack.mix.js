const mix = require('laravel-mix');

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

const tailwindcss = require('tailwindcss');

mix.js('resources/js/app.js', 'public/js')
    // NOTE: SASS/Tailwind compilation is temporarily disabled here to avoid
    // build failures on environments using very new Node.js versions that are
    // incompatible with some legacy PostCSS loaders. Re-enable the line below
    // after switching to a compatible Node.js (recommended: 16.x or 18.x) or
    // after updating the frontend dependencies.
    // .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [
            // tailwindcss('./tailwind.config.js'),
        ],
    });
