var gulp 		     = require('gulp'),
	 sass 		     = require('gulp-sass'),
	 watch 		     = require('gulp-watch'),
	 browserSync   = require('browser-sync').create(),
   highlight     = require('gulp-highlight');

gulp.task('sass', function () {
 return gulp.src('sass/*.scss')
            .pipe(sass().on('error', sass.logError))
            .pipe(sass({outputStyle: 'compressed'}))
            .pipe(gulp.dest('css'))
            .pipe(browserSync.stream());
});

gulp.task('highlight', function () {
    return gulp.src('dev/*.php')
                .pipe(highlight())
                .pipe(gulp.dest('docs'));
});
 
gulp.task('watch', function () {
   browserSync.init({
        proxy: "http://localhost/wired"
    });	

  gulp.watch('sass/*.scss', ['sass']);
  gulp.watch('dev/*.php', ['highlight']);
  gulp.watch("dev/*.php").on('change', browserSync.reload);
});

gulp.task('default', ['watch']);