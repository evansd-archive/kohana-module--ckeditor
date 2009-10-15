//= requires "editor"
//= requires <mootools/DomReady>
//= requires <mootools/Selectors>

// Replace all textreas with class 'ckeditor' with ckeditor instances
window.addEvent('domready', function() {
	document.getElements('textarea.ckeditor').each(function(el) {
		var area = CKEDITOR.replace(el, {
			// Turn off custom config so it doesn't attempt to load config file
			customConfig : '' 
		});
	});
});