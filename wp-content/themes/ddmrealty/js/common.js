jQuery(document).ready(function($) {
	
	var str=location.href.toLowerCase();
	$('div.gNavi ul li a').each(function() {
		if (str.indexOf(this.href.toLowerCase()) > -1) {
			$("li.current_page").removeClass("current_page");
			$(this).parent().addClass("current_page"); 
		}
	}); 
	$('li.current_page').parents().each(function(){											  
		if ($(this).is('li')){
			$(this).addClass("current_page"); 
		}							  
	 });
	
		
	$('.linkimg').hover(function(){
		$(this).stop().animate({'opacity':0.7}, 300);
	}, function(){
		$(this).stop().animate({'opacity':1}, 300);
	});
	
	
	$('.imgNormal').hover(function(){
		$(this).stop().animate({'opacity':0}, 300);
	}, function(){
		$(this).stop().animate({'opacity':1}, 300);
	});
	
	//Smooth Scrolling
	jQuery.easing.quart = function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	};

	//Function invocation
	js_popup();

});

$(function () {
	$('.pageTop, .link_top a').click(function () {
		$('html,body').animate({ scrollTop: 0 }, 1000, 'quart');
		return false;
	});
});


$(window).load(function() {

		

});
/*	//	PAGE PRINT
-----------------------------------------------------------------------------------------------------------------*/
function js_page_print(){
	window.print();
	return false;
}

/*	//	POP UP 
-----------------------------------------------------------------------------------------------------------------*/
function js_popup(){
	var js_para = null;
	$('a[class^="js_popup_"], area[class^="js_popup_"]').each(function(index){
		$(this).click(function(){
			var wo = null;
			// get window width & height
			js_para = $(this).attr('class').match(/[0-9]+/g);
			// get window.name
			window.name ? js_para[2] = window.name+'_' : js_para[2] = ('');
			wo = window.open(this.href, 'popup'+index,'width='+js_para[0]+',height='+js_para[1]+',scrollbars=yes');
			
			var left = (screen.width/2)-(js_para[0]/2);
			var top = (screen.height/2)-(js_para[1]/2);
			wo.moveTo(left,top);
			wo.resizeTo(js_para[0],js_para[1]);
			return false;
		});
	});
}



/*	//	CLOSE
-----------------------------------------------------------------------------------------------------------------*/
function js_window_close(){
	window.close();
	return false;
}

