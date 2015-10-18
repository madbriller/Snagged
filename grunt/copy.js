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
        },
        fontawesome: {
            files: [
                {
                    nonull: true,
                    expand: true,
                    cwd: 'src/vendor/components/font-awesome',
                    src: ['fonts/**'],
                    dest: 'src/public'
                },
                {
                    nonull: true,
                    expand: true,
                    cwd: 'src/vendor/components/font-awesome',
                    src: ['css/**'],
                    dest: 'resources/vendor/fontawesome'
                }
            ]
        },
    });
    
    grunt.loadNpmTasks('grunt-contrib-copy');
};