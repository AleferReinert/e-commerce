module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
	bake: {
        your_target: {
            files: {
                'index.html': 'assets/html/index.html'
            }
        },
    },
	less: {
		development: {
			files: {
				'assets/css/style.css': 'assets/less/style.less'
			}
		}
	},
	cssmin: { 
		target : {
			files : [ { 
				expand:	true,
				src:	['assets/css/style.css'],
				ext:	'.min.css'
			} ] 
		}
	},
	uglify: {
		my_target: {
			files: {
				'assets/js/scripts.min.js': ['assets/js/jquery-3.6.0.min.js']
			}
		}
	},
	sprite:{
		all: {
			src: 'assets/img/icons/*.png',
			dest: 'assets/img/icons.png',
			cssFormat: 'css',
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
		html: {
			files: ['assets/html/*.html'],
			tasks: ['bake']
		},
		js: {
			files: ['**/*.js'],
			tasks: ['uglify']
		},
		less: {
			files: ['**/*.less'],
			tasks: ['less','cssmin']
		},
		spriteIcons: {
			files: ['assets/img/icons/*.png'],
			tasks: ['sprite','less','cssmin']
		}
	},
  });

  // Plugis
  grunt.loadNpmTasks('grunt-bake');
  grunt.loadNpmTasks('grunt-spritesmith');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-connect');
  // Default tasks
  grunt.registerTask('default', ['sprite','bake','less','cssmin','uglify']);
};