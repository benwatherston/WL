const gulp = require('gulp');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');

const tasks = ['main', 'head'];

gulp.task('main', () => {
  return gulp
    .src([
      'assets/dev-js/functions.js',
      'assets/dev-js/navigation.js',
      'assets/dev-js/instagram.js'
    ])
    .pipe(concat('main.js'))
    .pipe(
      babel({
        presets: ['es2015']
      })
    )
    .pipe(
      uglify().on('error', e => {
        console.log(e);
      })
    )
    .pipe(gulp.dest('assets/js'));
});

gulp.task('head', () => {
  return gulp
    .src(['assets/dev-js/instafeed.min.js'])
    .pipe(concat('head.js'))
    .pipe(
      babel({
        presets: ['es2015']
      })
    )
    .pipe(
      uglify().on('error', e => {
        console.log(e);
      })
    )
    .pipe(gulp.dest('assets/js'));
});

gulp.task('default', tasks, () => {
  gulp.watch('assets/dev-js/**/*.js', tasks);
});
