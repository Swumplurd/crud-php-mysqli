const { src, watch, dest } = require('gulp');
const sass = require('gulp-sass');

function css() {
    return src('sass/app.scss').pipe(sass({outputStyle: 'expanded'})).pipe(dest('./css'));
}

function observer() {
    watch('sass/**/*.scss', css)
}

exports.observer = observer;