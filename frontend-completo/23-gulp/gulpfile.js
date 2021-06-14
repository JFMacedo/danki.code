const gulp = require('gulp');
const imagemin = require('imagemin');

gulp.task('mensagem', () => {
  return console.log('Jean Fernandes de Macedo')
});

gulp.task('copiarJs', () => {
  gulp.src('src/*.js').pipe(gulp.dest('newDir'));
});

gulp.task('reduceImage', () => {
  gulp.src('src/*').pipe(imagemin()).pipe(gulp.dest('newDir'));
});