/*	ChillTip Packed - Version 1.3.0 - jQuery PlugIn 
	by Christopher Hill - http://www.chillwebdesigns.co.uk/
	Last Modification: 01.11.2011
	
	Licensed under the Creative Commons Attribution 3.0 Unported License - http://creativecommons.org/licenses/by/3.0/
	- Free for use in both personal and commercial projects
	- Attribution requires leaving author name, author link, and the license info intact 
	- ChillBox has been tested with jQuery versions 1.4.3 to 1.6.4.
	- For more information, visit: http://www.chillwebdesigns.co.uk/chilltip.html
	
	This version of ChillTip includes the debouncing function by John Hann & Paul Irish: - http://paulirish.com/2009/throttled-smartresize-jquery-event-handler/
*/

(function($){	

		// ChillTip Function
		$.fn.ChillTip = function(options){
			
			var defaults = { 
			
				// Settings for modification.				
				CTBK: '#000000', // Background colour using (hex colour codes)		
				CTBC: '#333333', // Border colour using (hex colour codes)
				CTTC: '#FFFFFF', // Normal text colour using (hex colour codes)		
				C1 	: '#1E90FF', // Text colour 1 using (hex colour codes)
				C2  : '#FF00CC', // Text colour 2 using (hex colour codes)
				C3  : '#33CC00', // Text colour 3 using (hex colour codes)
				C4  : '#9900FF', // Text colour 4 using (hex colour codes)
				C5  : '#FF0000', // Text colour 5 using (hex colour codes)
				C6  : '#FFFF00', // Text colour 6 using (hex colour codes)
				CTTF: 'Arial, Helvetica, sans-serif', // Font family
				CTC	: 'pointer', // Cursor type, options are pointer, default and help.
				CTFT:       250, // ChillTip fade in time in (milliseconds))
				CTW	:     '250', // ChillTip max width in (px)
				CTTP:      '10', // Text padding in (px)
				CTTS:      '11', // Text size in (px)
				CTBW:    	'2', // Border width in (px)
				CTTO:        20, // top offset in (px)
				CTLO:        20, // Left offset in (px)
				SHAD:	 'true'	 // Show shadow true / false
				
			}; 			
var opts = $.extend(defaults, options),title;eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('d.11(f(e){b=$(d).1b(\'b\');d.b=\'\';$(\'<Q 17="4"><p>\'+b+\'</p></Q>\').18(\'19\');$(\'#4\').5({E:2.C,H:2.z+\'g x\',A:2.I,G:\'B\',16:2.15,s:\'q\',T:e.12+$(9).P()+U,l:e.13+U,1a:\'10\',1h:2.w+\'g\',F:\'1i\',8:\'q\',1j:\'1g\'});j N=$(\'#4\').8();$(\'#4 p\').5({7:2.1f,"1c":\'l\',G:\'B\',F:\'1d\',E:2.C,1e:2.1k+\'g\',R:\'0\',Y:2.V+\'g\',Z:\'W\',8:\'q\'});c(($.o.J&&$.o.X<=6)&&(N>2.w)){$(\'#4 p\').5({8:2.w})}c(2.14==\'D\'){$(\'#4\').5({1C:\'0 0 t r(0, 0%, 0%, 1.0)\',1I:\'0 0 t r(0, 0%, 0%, 1.0)\',1J:\'0 0 t r(0, 0%, 0%, 1.0)\'});c($.o.J){$(\'#4 p\').5({R:\'L 0 0 L\',H:2.z+\'g x\',A:2.I});$(\'#4\').5({y:\'1H:1G.1E.1L(1l="3", 1Q="D", 1P="0.1O")\'})}}$(\'#4 p a.1N\').5({7:2.1M});$(\'#4 p a.1F\').5({7:2.1D});$(\'#4 p a.1r\').5({7:2.1s});$(\'#4 p a.1q\').5({7:2.1p});$(\'#4 p a.1m\').5({7:2.1n});$(\'#4 p a.1o\').5({7:2.1t});$(d).1u(f(e){j i=e.M+2.k,h=e.O+2.u,m=$(\'#4\').8(),v=$(\'#4\').s();n();$(9).1A(f(){n()});f n(){j K=$(9).8()-(i+m+$(9).1B());j S=($(9).s()+$(9).P())-(h+v);c(K<2.k){i=e.M-m-2.k}c(S<2.u){h=e.O-v-2.u}$(\'#4\').5({T:h,l:i})}});$(\'#4,#4 p\').1z(2.1y);$(\'#4 p\').1v(\'y\')},f(){d.b=b;$(\'#4\').1w()}).5({1x:2.1K});',62,115,'||opts||ct|css||color|width|window|span|title|if|this||function|px|mousey|mousex|var|CTLO|left|tipWidth|run|browser||auto|hsla|height|1em|CTTO|tipHeight|CTW|solid|filter|CTBW|borderColor|none|CTBK|true|background|position|display|border|CTBC|msie|tipVisX|7px|pageX|ctw|pageY|scrollTop|div|margin|tipVisY|top|20|CTTP|justify|version|padding|textAlign|10px|hover|clientY|clientX|SHAD|CTT|fontFamily|id|appendTo|body|minWidth|attr|float|relative|fontSize|CTTC|1001|maxWidth|absolute|Zindex|CTTS|PixelRadius|five|C5|six|C4|four|three|C3|C6|mousemove|removeAttr|remove|cursor|CTFT|fadeIn|smartresize|scrollLeft|WebkitBoxShadow|C2|Microsoft|two|DXImageTransform|progid|MozBoxShadow|boxShadow|CTC|Blur|C1|one|25|ShadowOpacity|MakeShadow'.split('|'),0,{}));return this;};})(jQuery);eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('(0($,9){4 f=0(7,g,a){4 1;e 0 j(){4 3=8,5=i;0 c(){6(!a){7.b(3,5);1=h}}6(1){k(1)}r 6(a){7.b(3,5);1=l(c,g||q)}}};d.2[9]=0(2){e 2?8.n(\'o\',f(2)):8.m(9)}})(d,\'p\');',28,28,'function|timeout|fn|obj|var|args|if|func|this|sr|execAsap|apply|delayed|jQuery|return|debounce|threshold|null|arguments|debounced|clearTimeout|setTimeout|trigger|bind|scroll|smartresize|100|else'.split('|'),0,{}));