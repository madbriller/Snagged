module.exports = function(grunt) {
    grunt.config('concat', {
        vendorcss: {
            src: [],
            dest: 'src/public/css/vendor.css'
        },
        vendorjs: {
            src: [
                'resources/vendor/bootstrap/dist/js/bootstrap.min.js',
                'resources/vendor/jquery/jquery.min.js',
            ],
            dest: 'src/public/js/vendor.js'
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
};