module.exports = function(grunt) {
    grunt.config('copy', {
        bootstrap: {
            files: [
                {
                    nonull: true,
                    expand: true,
                    cwd: 'src/vendor/twbs/bootstrap',
                    src: ['js/**', 'dist/**', 'less/**'],
                    dest: 'resources/vendor/bootstrap'
                }
            ]
        },
        jquery: {
            files: [
                {
                    nonull: true,
                    expand: true,
                    cwd: 'src/vendor/components/jquery',
                    src: ['jquery.min.js'],
                    dest: 'resources/vendor/jquery'
                }
            ]
        }
    });
    
    grunt.loadNpmTasks('grunt-contrib-copy');
};