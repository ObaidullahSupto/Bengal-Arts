(function() {

	"use strict";

	var Core = {

		initialized: false,

		initialize: function() {

			if (this.initialized) return;
			this.initialized = true;

			this.build();

		},

		build: function() {
			
			// Scroll to Top Button.
			$.scrollToTop();
			

			
			// dropdown menu
			this.dropdownhover();
			
			//flexslider
			this.flexslider();
			
			//choosenselect
			this.choosenselect();
			
			//masonrygrid
			this.masonrygrid();
			
		},



		
		flexslider: function(options) {
			// The slider being synced must be initialized first
			$('#carousel').flexslider({
				animation: "slide",
				controlNav: false,
				animationLoop: false,
				slideshow: false,
				itemWidth: 148,
				itemMargin: 10,
				asNavFor: '#slider'
			});
			$('#slider').flexslider({
				animation: "slide",
				controlNav: false,
				animationLoop: false,
				slideshow: false,
				sync: "#carousel"
			});
			
		},
		
		choosenselect: function(options) {
		
			var config = {
			  '.chosen-select'           : {},
			  '.chosen-select-deselect'  : {allow_single_deselect:true},
			  '.chosen-select-no-single' : {disable_search_threshold:10},
			  '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
			  '.chosen-select-width'     : {width:"95%"}
			}
			for (var selector in config) {
			  $(selector).chosen(config[selector]);
			}
			
		},
		
		masonrygrid: function(options) {
		
			// Masonry for desktop
			if($(window).width() < 361) return;
					
			var $container = $('.masonry-desk');
			// initialize
			
			$container.imagesLoaded( function() {
				$container.masonry();
			});
			var $items = document.querySelectorAll('.masonry-item');
			imagesLoaded( $items, function() {
				$container.masonry({
					itemSelector: '.masonry-item'
				});
			});
			
		}

	};

	Core.initialize();

	$(window).load(function () {


	});

})();