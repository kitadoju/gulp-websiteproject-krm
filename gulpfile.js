
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
var php= require('gulp-connect-php');
var copy = require('gulp-copy');

var reload = browserSync.reload;


//2. Setup each of our separate tasks
// Lint Task
gulp.task('lint', function() {
    return gulp.src('dev/js/action.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src('dev/scss/styles.scss')
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(gulp.dest('prod/css'))
        .pipe(reload({ stream:true }));
});

//compile css library
gulp.task('css', function() {
    return gulp.src('dev/css/*.css')
        .pipe(concat('library.css'))
        .pipe(gulp.dest('prod/css'))
        .pipe(reload({ stream:true }));
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


//copy files from dev to prodw
gulp.task('copy-pages',function () {
    return gulp.src('dev/*.{html,php}')
    .pipe(gulp.dest('prod/'))
    .pipe(reload({ stream:true }));
});
gulp.task('copy-includes',function () {
    return gulp.src('dev/includes/*.{html,php}')
    .pipe(gulp.dest('prod/includes'))
    .pipe(reload({ stream:true }));
});

gulp.task('copy-img',function () {
    return gulp.src('dev/img/*.{png,jpg,svg,mp4,webm}')
    .pipe(gulp.dest('prod/img'))
    .pipe(reload({ stream:true }));
});
gulp.task('copy-icon',function () {
    return gulp.src('dev/img/*/*.{png,jpg,svg}')
    .pipe(gulp.dest('prod/img'))
    .pipe(reload({ stream:true }));
});
gulp.task('copy-fonts',function () {
    return gulp.src('dev/fonts/*.{eof,ttf,svg,woff,woff2}')
    .pipe(gulp.dest('prod/fonts/'))
    .pipe(reload({ stream:true }));
});
gulp.task('copy-files',function () {
    return gulp.src('dev/*.{txt,xml}')
    .pipe(gulp.dest('prod/'))
    .pipe(reload({ stream:true }));
});
gulp.task('copy-library',function () {
    return gulp.src('dev/js/plugin/*.js')
    .pipe(gulp.dest('prod/js/plugin'))
    .pipe(reload({ stream:true }));
});


// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('dev/js/*.js', ['lint', 'scripts']);
    gulp.watch('dev/scss/*.scss', ['sass']);
    gulp.watch('dev/*.{html,php}',['copy-pages']);
    gulp.watch('dev/includes/*.php',['copy-includes']);
    gulp.watch('dev/*.{txt,xml}',['copy-files']);
    gulp.watch('dev/img/*.{png,jpg,svg,mp4,webm}',['copy-img']);
    gulp.watch('dev/fonts/*.{eof,ttf,svg,woff,woff2}',['copy-fonts']);
    gulp.watch('dev/js/plugin/*.js',['copy-library']);
});

//If php pages
gulp.task('php', function(){
  php.server({base : 'prod', port: 8010, keepalive: true});
});

gulp.task('browser-sync', ['sass','copy','php'], function() {
  browserSync({
    proxy :'127.0.0.1:8010'
  });
});

// watch Sass files for changes, run the Sass preprocessor with the 'sass' task and reload

// gulp.task('serve', ['sass','copy'], function() {
//   browserSync({
//     server: {
//       baseDir: 'prod/'
//     }
//   });
// });


//3 . Set the default task
gulp.task('style',['sass','css']);
gulp.task('copy',['copy-img','copy-pages','copy-files','copy-fonts', 'copy-includes','copy-library']);
// Default Task
gulp.task('default', ['lint', 'style','scripts','watch','copy','browser-sync']);
