
//1. Includes the gulp core and plugins associated with the tasks that we will be performing
// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var browserSync = require('browser-sync');
// var php= require('gulp-connect-php');
var copy = require('gulp-copy');

var reload = browserSync.reload;


//2. Setup each of our separate tasks

// Lint Task
gulp.task('lint', function() {
    return gulp.src('dev/js/action.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src('dev/js/*.js')
        .pipe(concat('all.js'))
        .pipe(gulp.dest('dev/js'))
        .pipe(rename('all.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('prod/js'))
        .pipe(reload({ stream:true }));
});

// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src('dev/scss/styles.scss')
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(gulp.dest('prod/css'))
        .pipe(reload({ stream:true }));
});


gulp.task('plugin', function() {
    return gulp.src('dev/js/plugin/*.js')
        .pipe(concat('all_plugin.js'))
        .pipe(gulp.dest('dev/js'))
        .pipe(uglify())
        .pipe(gulp.dest('prod/js/plugin'));
});

//copy files from dev to prod
gulp.task('prod-deployment',function () {
    gulp.src('dev/*.{html,php}')
      .pipe(gulp.dest('prod/'))
      .pipe(reload({ stream:true }));


    gulp.src('dev/includes/*.{html,php}')
      .pipe(gulp.dest('prod/includes'));


    gulp.src(['dev/img/*.{png,jpg,svg}','dev/img/*.{mp4,webm}'])
      .pipe(gulp.dest('prod/img'));


    gulp.src('dev/img/icons/*.{png,jpg,svg}')
      .pipe(gulp.dest('prod/img/icons'));


    gulp.src('dev/fonts/*.{eof,ttf,svg,woff,woff2}')
      .pipe(gulp.dest('prod/fonts/'));


    gulp.src('dev/*.{txt,xml}')
      .pipe(gulp.dest('prod/'));
});



// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('dev/js/*.js', ['lint', 'scripts']);
    gulp.watch('dev/scss/*.scss', ['sass']);
    gulp.watch(['dev/*.{html,php}','dev/includes/*.{html,php}','dev/img/*.{png,jpg,svg}','dev/img/*.{mp4,webm}','dev/img/icons/*.{png,jpg,svg}','dev/fonts/*.{eof,ttf,svg,woff,woff2}','dev/*.{txt, xml}'], ['prod-deployment']);

});

//If php pages
// gulp.task('php', function(){
//   php.server({base : 'prod', port: 8010, keepalive: true});
// });
//
// gulp.task('browser-sync', ['sass','copy','php'], function() {
//   browserSync({
//     proxy :'127.0.0.1:8010'
//   });
// });

// watch Sass files for changes, run the Sass preprocessor with the 'sass' task and reload

gulp.task('serve', ['watch'], function() {
  browserSync({
    server: {
      baseDir: 'prod/'
    }
  });
});


//3 . Set the default task
// Default Task
gulp.task('default', ['lint', 'sass','scripts','plugin', 'watch','prod-deployment','serve']);
