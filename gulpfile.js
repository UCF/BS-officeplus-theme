//gulpfile.js

var gulp        = require('gulp');
var sass        = require('gulp-sass');

//Style paths
var sassFiles = 'lib/css/sass/*.sass',
    cssDest = 'lib/css/';

/*
 * Uses gulp.src() to pass the location of SCSS files.
 * Path is relative to the gulpfile.js.
 * sass() function emits events if tehre are errors. You can listen using .on('error', sass.logError))
 * 
 */
gulp.task('styles', function(){
    gulp.src(sassFiles)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(cssDest));
});

gulp.task('watch',function() {
    gulp.watch(sassFiles,['styles']);
});

gulp.task('default', ['watch']);