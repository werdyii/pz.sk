var gulp = require('gulp');  
var concat = require('gulp-concat');  
var filter = require('gulp-filter');  
var mainBowerFiles = require('main-bower-files');

var filterByExtension = function(extension){  
    return filter(function(file){
        return file.path.match(new RegExp('.' + extension + '$'));
    });
};

gulp.task('default', function(){  
    var mainFiles = mainBowerFiles();

    if(!mainFiles.length){
        // No main files found. Skipping....
        return;
    }

    var jsFilter = filterByExtension('js');

    return gulp.src(mainFiles)
        .pipe(jsFilter)
        .pipe(concat('third-party.js'))
        .pipe(gulp.dest('./app'))
        .pipe(jsFilter.restore())
        .pipe(filterByExtension('css'))
        .pipe(concat('third-party.css'))
        .pipe(gulp.dest('./app'));
});