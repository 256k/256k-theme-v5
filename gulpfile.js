var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var reload      = browserSync.reload;
var sass        = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

// browser-sync task for starting the server.


// Sass task, will run when any SCSS files change & BrowserSync
// will auto-update browsers
gulp.task('browser-sync', function() {
  browserSync.init({
    server: {
      baseDir: "./"
    }
  });
});
gulp.task('sass', function () {
    return gulp.src('sass/*.scss')
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(gulp.dest('./'))
        .pipe(reload({stream:true}));
});

// Default task to be run with `gulp`
gulp.task('default', ['sass', 'browser-sync'], function () {
  gulp.watch("*.html").on("change", reload);
    gulp.watch("sass/**/*.scss", ['sass']);

});
