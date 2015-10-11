module.exports = function(grunt) {

    grunt.loadTasks('grunt');

    grunt.registerTask('copy', ['copy:boostrap', 'copy:jquery']);
    grunt.registerTask('concat', ['concat:vendorjs']);
    grunt.registerTask('default', ['copy', 'concat']);
};