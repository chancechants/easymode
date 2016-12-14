$(function() {
	// Simple Parallax script
	// Set CSS of parallax sections to background: url('../img/....jpg') 50% 0 repeat fixed;
	// Add these attributes to the section: data-type="background" data-speed="5" where speed can be how fast you want it to scroll

	// Cache the Window object
	var $window = $(window);
	
	// Parallax Backgrounds
	// Tutorial: http://code.tutsplus.com/tutorials/a-simple-parallax-scrolling-technique--net-27641
	
	$('section[data-type="background"]').each(function(){
		var $bgobj = $(this); // assigning the object
		
		$window.scroll(function() {
			if ($bgobj.data('name') == 'featurette2'){
				return;
			}
			if ($window.width() > 1024 & $bgobj.id !== 'featurette2') {
				var yPos = ($window.scrollTop() - $bgobj.offset().top) / $bgobj.data('speed');
				var coords = 'center '+ yPos + 'px';
				//console.log('scrollTop: '+ $window.scrollTop() + ' backgroundPosition: '+coords);
				$bgobj.css({ backgroundPosition: coords });
			} else {
				//console.log('screen under 1024 leave alone');
				$bgobj.css({ backgroundPosition: 'center 0px' });
			}	
		}); // end window scroll
	});
});