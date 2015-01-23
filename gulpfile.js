var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');
});



var gulp = require('gulp');
var sass = require('gulp-sass')
var prefix = require('gulp-autoprefixer');
var minifycss = require('gulp-minify-css');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var svgmin = require('gulp-svgmin');
var imagemin = require('gulp-imagemin');
var rename = require('gulp-rename');
var util = require('gulp-util');
var livereload = require('gulp-livereload');
var jshint = require("gulp-jshint");

var dirs = {
    public: {
        assets: 'public/assets',
        css: {
            root: 'public/assets/css'
        },
        js: {
            root: 'public/assets/js'
        },
        img: {
            root: 'public/assets/img'
        }
    },
    resources: {
        assets:       'resources/assets',
        bower:        'resources/assets/bower_components',
        foundation:   'resources/assets/bower_components/foundation',
        css: {
            source: 'resources/assets/css/source',
            dist: 'resources/assets/css/dist'
        },
        sass: 'resources/assets/sass',
        js: 'resources/assets/js',
        img: 'resources/assets/img',
    }
};

gulp.task('sass', function ()
{
    gulp.src([
        dirs.resources.bower  + '/foundation/scss/normalize.scss',
        dirs.resources.bower  + '/bower_components/fontawesome/scss/font-awesome.scss',
        dirs.resources.assets + '/sass/app.scss'
    ])
        .pipe(sass({style: 'compressed', errLogToConsole: true}))
        .pipe(concat('main.css'))
        .pipe(gulp.dest(dirs.resources.css.dist))
        .pipe(gulp.dest(dirs.public.css.root))
        .pipe(rename({suffix: '.min'}))
        .pipe(minifycss({ keepSpecialComments:0 }))
        .pipe(gulp.dest(dirs.resources.css.dist))
        .pipe(gulp.dest(dirs.public.css.root))
    ; //.pipe(livereload(35728)); //35729 default

    util.log(util.colors.yellow('Sass compiled & minified'));

});

gulp.task('js', function ()
{
    gulp.src([
        dirs.resources.bower + '/jquery/dist/jquery.min.map',
        dirs.resources.bower + '/jquery/dist/jquery.min.js',
        dirs.resources.bower + '/jquery/dist/jquery.js'
    ])
        .pipe(gulp.dest(dirs.public.js.root + '/jquery/' ));

    gulp.src([
        dirs.resources.bower + '/modernizr/modernizr.js',
        dirs.resources.bower + '/fastclick/lib/fastclick.js',
        dirs.resources.bower + '/foundation/js/foundation.js',
    ])
        .pipe(concat('scripts.js'))
        .pipe(gulp.dest(dirs.public.js.root))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest(dirs.public.js.root));


    gulp.src([
        dirs.resources.js + '/app.js'
    ])
        .pipe(concat('app.js'))
        .pipe(gulp.dest(dirs.public.js.root))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest(dirs.public.js.root));


    util.log(util.colors.yellow('JS compiled & minified'));

});

gulp.task('img', function ()
{
    // Gets all images except SVGs
    gulp.src([
        dirs.resources.img + '/*',
        dirs.resources.img + '/**/*.jpg',
        dirs.resources.img + '/**/*.png',
        dirs.resources.img + '/**/*.gif',
        '!' +   dirs.resources.img + '/**/*.svg'
    ])
        .pipe(imagemin())
        .pipe(gulp.dest(dirs.public.img.root));

    // get all svg and just copy for now
    gulp.src([
       dirs.resources.img + '/**/*.svg'
    ])
        .pipe(gulp.dest(dirs.public.img.root));

    util.log(util.colors.yellow('Img compiled & minified'));
});


gulp.task('watch', function(){

    //var path = require('path'),
    //    lr = require('gulp-livereload')();
    //
    //gulp.watch( dirs.resources + '/**/*').on('change', function(file) {
    //    //    server.changed(file.path);
    //    //    util.log(util.colors.yellow('PHP file changed' + ' (' + file.path + ')'));
    //    // lr.changed(file.path);
    //});
    //
    //util.log(util.colors.yellow('sass path is: ' + dirs.resources.sass + "/**/*.scss"));
    //
    //gulp.watch( dirs.resources.sass + "/**/*.scss", ['sass']);
    //
    //// gulp.watch("assets/js/_*.js", ['jshint', 'javascripts']);
    //// gulp.watch("assets/js/plugins/*.js", ['javascripts']);
    //// gulp.watch("assets/img/**/*", ['imagemin', 'svgmin']);

});

gulp.task('default', ['sass']);