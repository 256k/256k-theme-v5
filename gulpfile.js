var gulp        = require('gulp');
var browserSync = require('browser-sync').create();;
var reload      = browserSync.reload;
var sass        = require('gulp-sass');

// browser-sync task for starting the server.


// Sass task, will run when any SCSS files change & BrowserSync
// will auto-update browsers
gulp.task('sass', function () {
    return gulp.src('sass/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('./'))
        .pipe(reload({stream:true}));
});

// Default task to be run with `gulp`
gulp.task('default', ['sass'], function () {
    gulp.watch("sass/**/*.scss", ['sass']);

});
