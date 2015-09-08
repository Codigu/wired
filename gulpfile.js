var gulp 		= require('gulp');
	sass 		= require('gulp-sass');
	minifycss 	= require('gulp-minify-css');

function swallowError (error) {
  console.log(error.toString());
  this.emit('end');
}

gulp.task('sass', function () {
    gulp.src('sass/style.scss')
        .pipe(sass())
        .on('error', swallowError)
        .pipe(minifycss({keepBreaks: false}))
        .pipe(gulp.dest('css'));
});

gulp.task('watch', function () {
    gulp.watch('sass/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'watch']);



