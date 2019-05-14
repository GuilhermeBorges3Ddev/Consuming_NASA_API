var gulp = require('gulp');
var sass = require('gulp-sass');

//Tranformador dos .scss em .css no diretório /css
gulp.task('sass', gulp.series(function(){
    return gulp.src(['node_modules/bootstrap/scss/*.scss','src/scss/*.scss'])
    .pipe(sass())
    .pipe(gulp.dest('src/css'));//Destino da conversão
}));

//Mantem assistindo as sobrescrições via 'gulp watch'
gulp.task('watch', gulp.series(function(){
    gulp.watch(['node_modules/bootstrap/scss/*.scss','src/scss/*.scss'],['sass']),
    gulp.parallel(['sass']);
}));

//Transformando o 'gulp-watch' em apenas 'gulp'
gulp.task('default',gulp.series(['sass','watch']));