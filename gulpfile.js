var gulp 	= require('gulp');
var concatCss = require('gulp-concat-css');
var cssMin = require('gulp-css');

gulp.task('styles', function(){
	return gulp.src('public/css/*.css')
    .pipe(concatCss("style.css"))
    .pipe(cssMin())
    .pipe(gulp.dest('./'));
});

gulp.task('watch', function(){
	gulp.watch('public/css/*.css', gulp.series('styles'));
});

