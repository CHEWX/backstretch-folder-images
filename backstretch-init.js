MAIN = (function ($) {

	init = function () {
		// Code here runs straight away

		$(DOMready);

	},

	DOMready = function () {

		// Code here runs when the DOM is ready

		// inititize backstretch per page
		if ($('#index').size() > 0) {
			backstretchLoad('index', 'body');
		};

	};

	backstretchLoad = function(page, element) {

		// define array for json to be outputted to
		var images = [];

		$.ajax({
            url: "/ajax/banner?page="+page+"&notemplate",
            dataType: "json",
            success: function (data) {

            	// runs through the json data adding each to the images array
                $.each(data, function(key,filename) {
                	 images.push(filename);
                });
	            $(element).backstretch(
	            	// outputs images array
	            	images, {
	            		// any options add them here
	            		duration: 4000,
	            		fade: 2000
	            	}
	            );

            }
        });


    };

	return {
		start : init
	};


})(jQuery);

MAIN.start();