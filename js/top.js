
$(function(){
	"use strict";
	var obj = {
		init : function(){
			this.smoothScroll();
			this.backgroundIndex();
		},
		
		smoothScroll : function(){
			$('a[href^="#"]').click(function () {
				if ($($(this).attr('href')).length) {
					var p = $($(this).attr('href')).offset();
						$('html,body').animate({
							scrollTop: p.top - 10
						}, 600);
				}
				return false;
			});
			var hash1= location.hash;
			var $root = $('html, body');
			if(hash1!==""){  
				var top01 = $(hash1).offset().top;   
				$root.animate({ scrollTop:top01 - 10}, 600);
			}
		},
		
		backgroundIndex : function(){
			$(window).scroll(function(){
				var y = $(this).scrollTop();
				var x = y/5;
				$('body#index').css({
					background : 'url(images/wrapper_bg.jpg) '+ x+'px ' + (y-250) + 'px no-repeat'
				});
			});
		}
		
	
	};
	
	obj.init();
	
});