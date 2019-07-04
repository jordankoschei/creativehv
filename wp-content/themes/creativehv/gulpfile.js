var gulp         = require('gulp');
var sass         = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var combineMq    = require('gulp-combine-mq');
var uglify       = require('gulp-uglify');
var imagemin     = require('gulp-imagemin');
var pngquant     = require('imagemin-pngquant');
var rename       = require('gulp-rename');
var gulpCopy     = require('gulp-copy');

gulp.task('styles', function() {
    return gulp.src('_scss/app.scss')
        .pipe(sass({
            outputStyle: 'compressed',
            precision: 7
            }).on('error', sass.logError))
        .pipe(combineMq({
                beautify: false
            }))
        .pipe(autoprefixer({
                cascade: false
            }))
        .pipe(rename('app.min.css'))
        .pipe(gulp.dest('./assets/css'));
});

gulp.task('js', function() {
    return gulp.src('_js/*.js')
        .pipe(uglify())
        .pipe(rename(function (path) {
            path.extname = '.min.js';
        }))
        .pipe(gulp.dest('./assets/js'));
});


gulp.task('img', function() {
    return gulp.src('_img/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [
                {removeViewBox: false},
                {cleanupIDs: false}
            ],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('./assets/img'));
});



gulp.task('default', gulp.parallel('styles', 'js', 'img'), function() {
    gulp.watch('_scss/*.scss', ['styles']);
    gulp.watch('_js/*.js', ['js']);
    gulp.watch('_img/*', ['img']);
});
