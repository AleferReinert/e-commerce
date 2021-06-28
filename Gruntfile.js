module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
	less: {
		development: {
			files: {
				'assets/css/min/style.min.css': 'assets/less/style.less'
			}
		}
	},
	cssmin: { 
		target : {
			files : [ { 
				expand:	true,
				cwd: 	'assets/css/min',
				src:	['*css'],
				dest: 	'assets/css/min',
				ext: 	'.min.css'
			} ] 
		}
	},
	uglify: {
		my_target: {
			files: {
				'assets/js/min/scripts.min.js': ['assets/js/jquery-3.6.0.js','assets/js/scripts.js'],
				//'assets/js/min/scripts-home.min.js': ['assets/js/owl.carousel.min.js','assets/js/home.js']
			}
		}
	},
	sprite:{
		all: {
			src: 'assets/img/icons/*.png',
			dest: 'assets/img/sprite.png',
			cssFormat: 'css',
			imgPath: '../../img/sprite.png',
			destCss: 'assets/less/icons.less'
		}
    },
	connect: {
		all: {
		  options:{
			port: 9000,
			hostname: 'localhost',
			keepalive: true,
			livereload: 35729,
			open: true
		  }
		}
	},
    watch: {
		options: {
			livereload: true
		},
		js: {
			files: ['**/*.js','!**/*.min.js'],
			tasks: ['uglify']
		},
		less: {
			files: ['**/*.less'],
			tasks: ['less']
		},
		spriteIcons: {
			files: ['assets/img/icons/*.png'],
			tasks: ['sprite','less',]
		}
	},
  });

  // Plugis
  grunt.loadNpmTasks('grunt-spritesmith');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-connect');
  // Default tasks
  grunt.registerTask('default', ['sprite','less','cssmin','uglify']);
};