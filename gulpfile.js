var gulp    = require('gulp'),
sass        = require('gulp-sass'),
colors      = require('colors'),
sassLint    = require('gulp-sass-lint'),
del         = require('del'),
prefix      = require('gulp-autoprefixer'),
rename      = require('gulp-rename'),
vinylPaths  = require('vinyl-paths'),
sourcemaps  = require('gulp-sourcemaps'),
runSequence = require('run-sequence');

colors.setTheme({
    silly:   'rainbow',
    input:   'grey',
    verbose: 'cyan',
    prompt:  'grey',
    info:    'green',
    data:    'grey',
    help:    'cyan',
    warn:    'yellow',
    debug:   'blue',
    error:   'red'
  });

  var displayError = function(error) {
    // Initial building up of the error
    var errorString = '[' + error.plugin.error.bold + ']';
    errorString += ' ' + error.message.replace("\n",''); // Removes new line at the end
  
    // If the error contains the filename or line number add it to the string
    if(error.fileName)
      errorString += ' in ' + error.fileName;
  
    if(error.lineNumber)
      errorString += ' on line ' + error.lineNumber.bold;
  
    // This will output an error like the following:
    // [gulp-sass] error message in file_name on line 1
    console.error(errorString);
  }
  
  var onError = function(err) {
    notify.onError({
      title:    "Gulp",
      subtitle: "Failure!",
      message:  "Error: <%= error.message %>",
      sound:    "Basso"
    })(err);
    this.emit('end');
  };
  
  var sassOptions = {
    outputStyle: 'expanded'
  };
  
  var prefixerOptions = {
    browsers: ['last 2 versions']
  };

// BUILD SUBTASKS
// --------------

gulp.task('styles', function() {
    return gulp.src('./lib/scss/styles.scss')
        .pipe(sourcemaps.init())
        .pipe(sass(sassOptions).on('error', sass.logError))
        .pipe(prefix(prefixerOptions))
        .pipe(rename('styles.css'))
        .pipe(gulp.dest('./lib/scss/'));
});

gulp.task('sass-lint', function() {
    gulp.src(['./lib/scss/**/*.scss', '!',
    + './lib/scss/libs/**/*.scss', '!',
    + './lib/scss/states/**/*.scss', '!', 
    + './lib/scss/partials/**/*.scss', '!'])
    .pipe(sassLint())
    .pipe(sassLint.format())
    .pipe(sassLint.failOnError());
});

gulp.task('watch', function() {
    gulp.watch('./lib/scss/**/*.scss', ['styles']);
});

// BUILD TASKS
// -----------

gulp.task('default', function(done) {
    runSequence('styles', 'watch', done);
});

gulp.task('build', function(done) {
    runSequence('styles', done);
});