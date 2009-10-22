//= requires "editor"
//= requires <mootools/DomReady>
//= requires <mootools/Selectors>
//= requires <mootools/Element.Dimensions>

// Replace all textreas with class 'richtexteditor' with ckeditor instances
window.addEvent('domready', function() {
	document.getElements('textarea.richtexteditor').each(function(el) {
		var size = el.getSize();
		CKEDITOR.replace(el, {
			// Turn off custom config so it doesn't attempt to load config file
			customConfig : '',
			width: size.y,
			height: size.y 
		});
	});
});