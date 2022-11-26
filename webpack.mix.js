const mix = require('laravel-mix');

mix.js('resources/js/app.js','public/cs')
    .postCss('resources/css/app.css','public/css',[

]);

mix.webpackConfig({
    stats:{
        children: true,
    },
});
