/**
 * Grunt config file
 * @param  {grunt.js} grunt - Grunt runner
 */
module.exports = function(grunt) {

  grunt.initConfig({
    sass: {
      dist: {
        options: {
          style: 'expanded'
        },
        files: {
          'assets/dist/stylesheets/styles.css': 'assets/src/stylesheets/styles.scss'
        }
      }
    },
    watch: {
      sass: {
        files: [
          'assets/src/stylesheets/**/*.scss',
          'assets/src/stylesheets/*.scss'
        ],
        tasks: ['sass']
      },
    },
  });
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.registerTask('default', ['sass']);
  grunt.loadNpmTasks('grunt-contrib-watch');
};