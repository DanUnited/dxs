'use strict';

var gulp = require('gulp');
var watch = require('gulp-watch');
var elixir = require('laravel-elixir');
require('laravel-elixir-vue-2'); // recommended for vue 2

var paths = {
    css: '/resources/assets/sass/app.scss',
};

console.log(elixir.config.css);

elixir.config.css.autoprefix = {
    enabled: true, //default, this is only here so you know how to disable
    options: {
        cascade: true,
        browsers: ['last 2 versions', '> 1%']
    }
};
//elixir.config.css.sass = {
var sassconf = {
    folder: 'sass',
    search: '/**/*.+(sass|scss)',
    pluginOptions: { outputStyle: 'compressed', precision: 10 }
};

    elixir(function (mix) {

        mix.sass('app.scss', 'public/css/app.css');                   //Compile SCSS
        mix.sass('devices.scss', 'public/css/media.css');

        mix.rollup('main.js', 'resources/assets/js/app.js')         //Compile JS
            .combine([                                              //Unity scripts
                'jquery-2.2.2.min.js',
                'selectivizr-min.js',
                'bootstrap.min.js',
                'app.js'
            ], 'public/js/app.min.js');

        //build version
        mix.version([
            'css/app.css',
            'css/media.css'
        ]);
    });

