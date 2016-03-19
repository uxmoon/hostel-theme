var gulp         = require('gulp'),
    postcss      = require('gulp-postcss'),
    autoprefixer = require('autoprefixer'),
    cssnext      = require('postcss-cssnext'),
    precss       = require('precss'),
    atImport     = require('postcss-import'),
    mqpacker     = require('css-mqpacker'),
    cssnano      = require('gulp-cssnano'),
    sourcemaps   = require('gulp-sourcemaps'),
    lost         = require('lost'),
    pxtorem      = require('postcss-pxtorem');

// var paths = {
//   cssSource: 'scss/',
//   cssDestination: 'css/'
// };

gulp.task('css', function() {
    var processors = [
        autoprefixer,
        cssnext,
        precss,
        atImport,
        mqpacker,
        lost,
        pxtorem({
            prop_white_list: ['font-size', 'line-height', 'letter-spacing']
        }),
    ];
  // return gulp.src(paths.cssSource + '*app.css')
  return gulp.src('./scss/app.css')
    .pipe(sourcemaps.init())
    .pipe(postcss(processors))
    .pipe(cssnano())
    .pipe(sourcemaps.write('./'))
    // .pipe(gulp.dest(paths.cssDestination));
    .pipe(gulp.dest('./css'));
});

// Watch
gulp.task('watch', function() {
    // Watch .css files
  gulp.watch('scss/**/*.css', ['css']);
});

// gulp.watch(paths.cssSource + 'app.css', ['styles']);

gulp.task('default', ['css', 'watch']);
