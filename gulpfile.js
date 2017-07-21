'use strict';

var gulp = require('gulp');
var watch = require('gulp-watch');
var concat = require('gulp-concat');
const babel = require('gulp-babel');
var rename = require("gulp-rename");
var sass = require('gulp-sass');

var debug = true;

var paths = {
    css: '/resources/assets/sass/app.scss',
};

var js_folder = './resources/assets/js/';
var scss_folder = './resources/assets/sass/';

var js_list = [
    'jquery-2.2.2.min.js',
    'viewport.min.js',
    'selectivizr-min.js',
    'bootstrap.min.js',
    'app.js'
].map(function (js) {
    return js_folder + js;
});

gulp.task('app.js', function () {
    return gulp
        .src(js_folder + 'main.js')
        .pipe(babel({
            presets: ['es2015']
        }))
        .pipe(rename("app.js"))
        .pipe(gulp.dest(js_folder));
});
gulp.task('js', ['app.js'], function () {
    return gulp
        .src(js_list)
        .pipe(concat('app.min.js'))
        .pipe(gulp.dest('./public/js'));
});

var elixir = require('laravel-elixir');
require('laravel-elixir-vue-2');

Elixir.extend('watchjs', function() {
    new Elixir.Task('watchjs', function(){
        return gulp
            .src(js_folder + 'main.js')
            .pipe(babel({
                presets: ['es2015']
            }))
            .pipe(rename("app.js"))
            .pipe(gulp.dest(js_folder));
    })
        .watch('./resources/assets/js/*.js');
});

elixir(function (mix) {

    mix.browserSync({
        proxy: 'dxsh.app'
    });

    mix.sass(scss_folder + 'app.scss', './public/css/app.css');
    mix.sass(scss_folder + 'devices.scss', 'public/css/media.css');
    mix.sass(scss_folder + 'app_simple.scss', 'public/css/app_s.css');


    mix.version([
        './public/css/app.css',
        './public/css/media.css'
    ]);

    mix.task('js',gulp.watch(js_folder + 'main.js', ['js'])
    );
    //mix.watchjs();
});

gulp.task('elixir', function(){
    debugger;
    elixir(function (mix) {
            mix.sass('app.scss');
        });
    console.log(elixir.fail);

    }
);
gulp.task('css', ['elixir'],function () {

    return gulp.src(scss_folder + 'app.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./public/css'));

});

/*gulp.task('watch', function () {
    gulp.watch(js_folder + 'main.js', ['js']);
    gulp.watch(scss_folder + '*.scss', ['css']);
});*/