var basePaths = {
  node: './node_modules/',
  dev: './src/'
};

var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var plumber = require('gulp-plumber');
var rename = require('gulp-rename');
var cssnano = require('gulp-cssnano');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var imagemin  = require('gulp-imagemin');
var imagePath = {
  src:  './img',
  dist: './dist'
};
var gettext = require('gulp-gettext');

gulp.task('sass', function() {
  gulp.src('./sass/*.scss')
    .pipe(plumber())
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(gulp.dest('./dist/css'))
    .pipe(rename({suffix: '.min'}))
    .pipe(cssnano({discardComments: {removeAll: true}}))
    .pipe(gulp.dest('./dist/css'));
});

gulp.task('scripts', function() {
  var scripts = [
    './js/app.js'
  ];
  gulp.src(scripts)
    .pipe(concat('app.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./dist/js'));

  gulp.src(scripts)
    .pipe(concat('app.js'))
    .pipe(gulp.dest('./dist/js'));
});

gulp.task('optimizeImage', function() {
  return gulp.src(imagePath.src + '**/*')
    .pipe(imagemin())
    .pipe(gulp.dest(imagePath.dist));
});

gulp.task('gettext', function() {
  gulp.src('./lang/*.po')
    .pipe(plumber({
    handleError: function (err) {
      console.log(err);
      this.emit('end');
    }
  }))
  .pipe(gettext())
  .pipe(gulp.dest('./lang'))
  ;
});

gulp.task('go', ['sass', 'scripts', 'optimizeImage', 'gettext'], function () { });
