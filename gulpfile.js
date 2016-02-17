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

var paths = {
  cssSource: 'scss/',
  cssDestination: 'css/'
};

gulp.task('styles', function() {
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
  return gulp.src(paths.cssSource + '*app.css')
    .pipe(sourcemaps.init())
    .pipe(postcss(processors))
    .pipe(cssnano())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(paths.cssDestination));
});

gulp.watch(paths.cssSource + 'app.css', ['styles']);

gulp.task('default', ['styles']);