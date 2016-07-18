var gulp = require("gulp");
var concat = require("gulp-concat");
var uglify = require("gulp-uglify");
var rename = require("gulp-rename");
var notify = require("gulp-notify");
var sourcemaps = require("gulp-sourcemaps");


var jsSourcepath = ["www/app/**/*.js"];

gulp.task('js', function() {
	gulp.src(jsSourcepath)
		.pipe(sourcemaps.init())
		.pipe(concat("app.js"))
		.pipe(uglify({mangle: false}))
		.pipe(rename({extname:".min.js"}))
		.pipe(sourcemaps.write("map"))
		.pipe(gulp.dest("www/web/assets/js/"))
		.pipe(notify("js compress finished"));
});

gulp.task('watch', function () {
	gulp.watch(jsSourcepath, ['js']);
});

gulp.task("default", ['js', 'watch']);
