module.exports = function(grunt) {
    grunt.config('concat', {
        vendorcss: {
            src: [
                'resources/vendor/bootstrap/dist/css/bootstrap.min.css',
                'resources/vendor/fontawesome/css/font-awesome.mis.css'
            ],
            dest: 'src/public/css/vendor.min.css'
        },
        vendorjs: {
            src: [
                'resources/vendor/bootstrap/dist/js/bootstrap.min.js',
                'resources/vendor/jquery/jquery.min.js'
            ],
            dest: 'src/public/js/vendor.js'
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
};
