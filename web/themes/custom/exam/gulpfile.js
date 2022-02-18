var gulp = require('gulp'),
    sass = require('gulp-sass')(require('sass')),
    sourcemaps = require('gulp-sourcemaps'),
    cleanCss = require('gulp-clean-css'),
    rename = require('gulp-rename'),
    postcss = require('gulp-postcss'),
    autoprefixer = require('autoprefixer');
var paths = {
    styles: {
        src: 'scss/**/*.scss',
        dest: 'css'
    }
};

function buildCss() {
    return gulp.src(paths.styles.src, {
            sourcemaps: true
        })
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss([autoprefixer({
            overrideBrowserslist: [
                'Chrome >= 35',
                'Firefox >= 38',
                'Edge >= 12',
                'Explorer >= 10',
                'iOS >= 8',
                'Safari >= 8',
                'Android 2.3',
                'Android >= 4',
                'Opera >= 12'
            ]
        })]))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('css/'))
        .pipe(cleanCss())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('css/'))
}

function watcher() {
    gulp.watch(['scss/*.scss'], gulp.series(buildCss));
}

exports.watch = gulp.series(buildCss, watcher);
exports.default = gulp.series(buildCss, watcher);