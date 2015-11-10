var gulp 		     = require('gulp'),
	 sass 		     = require('gulp-sass'),
	 watch 		     = require('gulp-watch'),
	 browserSync   = require('browser-sync').create();

gulp.task('sass', function () {
 return gulp.src('sass/*.scss')
          .pipe(sass().on('error', sass.logError))
          .pipe(sass({outputStyle: 'compressed'})) 
          .pipe(gulp.dest('css'))
          .pipe(browserSync.stream());
});
 
gulp.task('watch', function () { 
   browserSync.init({ 
        proxy: "http://localhost/wired" 
    });	 

  gulp.watch('**/*.scss', ['sass']); 
  gulp.watch("**/*.*").on('change', browserSync.reload); 
});

gulp.task('default', ['watch']); 
