var gulp 		     = require('gulp'),
	 sass 		     = require('gulp-sass'),
   rename        = require('gulp-rename'),
   strip         = require('gulp-strip-css-comments'),
	 watch 		     = require('gulp-watch'),
	 browserSync   = require('browser-sync').create(),
   highlight     = require('gulp-highlight');

gulp.task('sass', function () {
 return gulp.src('sass/*.scss')
          .pipe(sass().on('error', sass.logError))
          .pipe(strip())
          .pipe(gulp.dest('dist/css'))
          .pipe(sass({outputStyle: 'compressed'})) 
          .pipe(rename('wired.min.css'))
          .pipe(gulp.dest('dist/css'))
          .pipe(browserSync.stream());
});

gulp.task('highlight', function () {
   gulp.src('dev/*.php')
              .pipe(highlight())
              .pipe(gulp.dest('docs'));

   gulp.src('dev/components/*.html')
              .pipe(highlight())
              .pipe(gulp.dest('docs/components'));            
});
 
gulp.task('watch', function () { 
   browserSync.init({
        proxy: "http://localhost/wired" 
    });	

  gulp.watch('sass/*.scss', ['sass']);
  gulp.watch('dev/*.*', ['highlight']);
  gulp.watch("**/*.*").on('change', browserSync.reload);
});

gulp.task('default', ['watch']);