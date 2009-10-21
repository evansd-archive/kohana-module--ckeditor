//= requires "editor"
//= requires <mootools/DomReady>
//= requires <mootools/Selectors>

// Replace all textreas with class 'richtexteditor' with ckeditor instances
window.addEvent('domready', function() {
	document.getElements('textarea.richtexteditor').each(function(el) {
		CKEDITOR.replace(el, {
			// Turn off custom config so it doesn't attempt to load config file
			customConfig : '' 
		});
	});
});