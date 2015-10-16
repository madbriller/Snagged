module.exports = function(grunt) {

    grunt.config('less', {
        options: {
            compress: false,
            outputSourceFiles: true
        },
        app: {
            files: {
                'src/public/css/app.min.css': [
                    'resources/core/less/app.less'
                ]
            }
        },
    });
    grunt.loadNpmTasks('grunt-contrib-less');
}