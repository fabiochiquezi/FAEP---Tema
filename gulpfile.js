var gulp = require('gulp');


var scss = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var	connect = require('gulp-connect');


var allFiles = './src/**/*.*'
//var jsFiles = "./src/js/*.js";
//var cssFiles = "./src/css/*.css";
var scssFiles = "./src/scss/*.scss";
//var imgFiles = "./src/img/*.img";



/* Gulp Connect */
gulp.task('porta', function() {
  connect.server({
    port: 8080,
  });

  connect.serverClose();
});

/** SASS **/
gulp.task('scss', function () {
  return gulp.src(scssFiles)
    .pipe(scss().on('error', scss.logError))
	.pipe(autoprefixer({
        browsers: ['last 5 versions'],
        cascade: false
    }))
    .pipe(gulp.dest('./build/css/'))
});

// Gulp
gulp.task('default', function() {
	gulp.run('scss', 'porta');

	gulp.watch(allFiles, function(evt) {
		gulp.run('scss');
	});
});