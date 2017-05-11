//by Michalis Tzikas
//thanks to www.webhoster.gr & www.michalistzikas.com
//27-04-2011
//v1.3
//web site: http://www.jquery.gr/introtzikas
/*
Copyright (C) 2011 by Michalis Tzikas

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/
(function( $ ){
  $.fn.introtzikas = function(options) {
	  
		var defaults = {
			line   : '#F00',
			speedwidth	 : 2000,
			speedheight	 : 1000,
			speedopacity : 800,
			bg : '#333',
			lineheight : 2
		};
		var options = $.extend(defaults, options);
  
  		$('iframe').hide();
		$('body').css('overflow-y','hidden');
		$('<div class="introtzikas_bg" style="visibility:visible"><div class="introtzikas" style="visibility:visible"></div></div>').appendTo('body');

  		$('.introtzikas_bg').css('background-color',options.bg);
  		$('.introtzikas_bg').css('position','fixed');
  		$('.introtzikas_bg').css('height','100%');
  		$('.introtzikas_bg').css('width','100%');
  		$('.introtzikas_bg').css('top','0');
  		$('.introtzikas_bg').css('left','0');
  		$('.introtzikas_bg').css('visibility','visible');
  
		$('body').css('visibility','hidden');
		$('.introtzikas').css('background-color',options.line);
		$('.introtzikas').css('position','fixed');
		$('.introtzikas').css('top','50%');
		$('.introtzikas').css('height',options.lineheight+'px');
		$('.introtzikas').css('width','0%');
		$('.introtzikas').css('visibility','visible');
		$('.introtzikas').animate({
			width: '+=100%'
		  }, options.speedwidth, function() {
				$('.introtzikas').animate({
					height: '+=100%',
					top: '-=50%'
				  }, options.speedheight, function() {
					  	$('body').attr('style','');
						$('body').css('visibility','visible');
						$('.introtzikas_bg').css('visibility','hidden');
						$('.introtzikas').animate({
							opacity: 0
						  }, options.speedopacity, function(){
							  $('.introtzikas_bg').remove();
							  $('iframe').show();
							  $('body').css('overflow-y','visible');
							  
						  });
						  
				  });
		
		  });
  };
})( jQuery );