var basePaths = {
  node: './node_modules/',
  dev: './src/'
};

var browserSyncWatchFiles = [
  './dist/css/*.min.css',
  './dist/js/*.min.js',
  './img/*',
  './**/*.php'
];

var browserSyncOptions = {
  proxy: "http://rest-wp.dev",
  notify: false,
  open: 'external',
  port: 9000
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
var watch = require('gulp-watch');
var notify = require('gulp-notify');
var browserSync = require('browser-sync');
var reload = browserSync.reload;


gulp.task('server', function() {
  browserSync.init(browserSyncWatchFiles, browserSyncOptions);
});

gulp.task('sass', function() {
  gulp.src('./sass/*.scss')
    .pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
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
    .pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
    .pipe(concat('app.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./dist/js'));

  gulp.src(scripts)
    .pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
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
    .pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
    .pipe(gettext())
    .pipe(gulp.dest('./lang'));
});

//total
gulp.task('go', ['sass', 'scripts', 'optimizeImage'], function () { });

//total + watch
gulp.task('watch-bs', ['server', 'watch', 'scripts'], function () { });

//watch
gulp.task('watch', () => {
  gulp.watch('./sass/**/*',   ['sass']);
  gulp.watch('./js/*',        ['scripts']);
  gulp.watch('./img/*',       ['optimizeImage']);
  gulp.watch('./lang/*.po',   ['gettext']);
});
