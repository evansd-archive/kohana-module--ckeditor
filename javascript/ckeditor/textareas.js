//= requires "editor"
//= requires <mootools/DomReady>
//= requires <mootools/Selectors>
//= requires <mootools/Element.Dimensions>

// Replace all textreas with class 'richtexteditor' with ckeditor instances
window.addEvent('domready', function() {
	document.getElements('textarea.richtexteditor').each(function(el) {
		var size = el.getSize();
		
		var config = {
			// Turn off custom config so it doesn't attempt to load config file
			customConfig : '',
			height: size.y 
		};
		
		if( ! el.hasClass('richtexteditor-fullwidth')) {
			config.width = size.y;
		}
		
		CKEDITOR.replace(el, config);
	});
});
