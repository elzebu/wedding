// Requires
var gulp = require('gulp');

// Include plugins
var less = require('gulp-less');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var minify = require('gulp-minify-css');
var rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
//var critical = require('critical').stream;
var imagemin = require('gulp-imagemin');
var gulpsync = require('gulp-sync')(gulp);
//var mainBowerFiles = require('main-bower-files');
var concatCss = require('gulp-concat-css');
var csslint = require('gulp-csslint');
var jshint = require('gulp-jshint');
var stylish = require('jshint-stylish');
var merge = require('merge-stream');

// Paths
var source = './cutout';
var prod = './web';
var bowerDir = './_inc';


gulp.task('copy', function() {
    var css  = gulp.src([
                bowerDir + '/fontawesome/css/font-awesome.css',
                bowerDir + '/knacss/css/knacss-unminified.css'
              ])
        .pipe(gulp.dest(source + '/css/'));

    var fonts = gulp.src([ 
                bowerDir + '/fontawesome/fonts/*'
              ])
        .pipe(gulp.dest(source + '/css/fonts/'));

    var js    = gulp.src([
                bowerDir + '/jquery/dist/jquery.min*',
                bowerDir + '/konami-code/src/jquery.konami.js',
                bowerDir + '/scrollmagic/scrollmagic/uncompressed/ScrollMagic.js'
              ])
        .pipe(gulp.dest(source + '/js/'));

    return merge(css, fonts, js); 
});


gulp.task('less', function() {
  return gulp.src(source + '/less/*.less')
    .pipe(less())
    .pipe(gulp.dest(source + '/css/'));
});

gulp.task('css-prod', function() {

  var css = gulp.src(source + '/css/**/*.css')
    .pipe(autoprefixer())
    .pipe(concatCss('style.min.css'))
    .pipe(minify())
    .pipe(gulp.dest(prod + '/css/'));

  var fonts = gulp.src([ 
                source + '/css/fonts/*'
              ])
        .pipe(gulp.dest(prod + '/css/fonts/'));

  return merge (css, fonts);
});

gulp.task('csshint', function() {
  return gulp.src([source + '/css/*.css'])
    .pipe(csslint())
    .pipe(csslint.reporter());
});

gulp.task('lint', function() {
  return gulp.src(source + '/js/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter(stylish));
});

// Tâche "js" = uglify + concat
gulp.task('js', function() {
  return gulp.src(source + '/js/**/*.js')
    .pipe(uglify())
    .pipe(concat('global.min.js'))
    .pipe(gulp.dest(prod + '/js/'));
});

// Tâche "img" = Images optimisées
gulp.task('img', function () {
  return gulp.src(source + '/img/*.{png,jpg,jpeg,gif,svg}')
    .pipe(imagemin())
    .pipe(gulp.dest(prod + '/img'));
});

// Tâche "prod" = toutes les tâches ensemble
gulp.task('validate', gulpsync.sync(['lint', 'csshint']));

// Tâche "prod" = toutes les tâches ensemble
gulp.task('prod', gulpsync.sync(['copy', 'less', 'css-prod', 'js', 'img']));

// Tâche "watch" = je surveille LESS et HTML
gulp.task('watch', function () {
  gulp.watch(source + '/css/*.less', ['css-dev']);
});

// Default task
gulp.task('default', ['css']);