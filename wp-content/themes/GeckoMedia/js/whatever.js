/*----------------------------------------------------*/
/*	Twitter Feed
/*----------------------------------------------------*/

$(document).ready(function() {
    $(".tweet").tweet({
        username: "envatowebdesign",
        count: 2,
        loading_text: "loading tweets..."
    });
});

/*----------------------------------------------------*/
/*	Flickr Feed
/*----------------------------------------------------*/

$(document).ready(function() {
	$('div.flickr').flickrush({
		limit:6,
		id:'44499772@N06',
		random:true
	}); 
});


/*----------------------------------------------------*/
/*	Flexslider
/*----------------------------------------------------*/

$(document).ready(function() {
	$('.flexslider').flexslider({
		directionNav: false,
	});
});

/*----------------------------------------------------*/
/*	Navigation Effect
/*----------------------------------------------------*/
var site = function() {
	this.navLi = $('#nav li').children('ul').hide().end();
	this.init();
};

site.prototype = {
 	
 	init : function() {
 		this.setMenu();
 	},
 	
 	// Enables the slidedown menu, and adds support for IE6
 	
 	setMenu : function() {
 	
 	$.each(this.navLi, function() {
 		if ( $(this).children('ul')[0] ) {
 			$(this)
 				.append('<span />')
 				.children('span')
 					.addClass('hasChildren')
 		}
 	});
 	
 		this.navLi.hover(function() {
 			// mouseover
			$(this).find('> ul').stop(true, true).slideDown(400);
 		}, function() {
 			// mouseout
 			$(this).find('> ul').stop(true, true).hide(); 		
		});
 		
 	}
 
}


new site();

/*----------------------------------------------------*/
/*	Dropdown menu responsive layout
/*----------------------------------------------------*/

$(document).ready(function() {

	//build dropdown
	$("<select />").appendTo(".navigation nav ");
	
	// Create default option "Go to..."
	$("<option />", {
	   "selected": "selected",
	   "value"   : "",
	   "text"    : "Go to..."
	}).appendTo("nav select");	
	
	// Populate dropdowns with the first menu items
	$(".navigation nav li a").each(function() {
	 	var el = $(this);
	 	$("<option />", {
	     	"value"   : el.attr("href"),
	    	"text"    : el.text()
	 	}).appendTo("nav select");
	});
	
	//make responsive dropdown menu actually work			
  	$("nav select").change(function() {
    	window.location = $(this).find("option:selected").val();
  	});

});

/*----------------------------------------------------*/
/*	Accordion
/*----------------------------------------------------*/

$(document).ready(function() {
	 
	//accordion button action (on click do the follwing)
	$('.accordionButton').click(function() {

		//remove the on class from all buttons
		$('.accordionButton').removeClass('on');
		$('.accordionButton span').removeClass('on');
		$('.accordionButton span').replaceWith('<span>+</span>');
				  
		//no matter what we close all open slides
	 	$('.accordionContent').slideUp('normal');
		   
		//if the next slide wasn't open, then open it
		if($(this).next().is(':hidden') == true) {
			
			//add the on class to the button
			$(this).addClass('on');
			$(this).find('span').replaceWith('<span>-</span>');
			$(this).find('span').addClass('on');
			  
			//open the slide
			$(this).next().slideDown('normal');
		 } 		 		  
	 });
	 
	 
	 
	  
	
	/*** REMOVE IF MOUSEOVER IS NOT REQUIRED ***/
	
	//add the .over class from the stylesheet on mouseover
	$('.accordionButton').mouseover(function() {
		$(this).addClass('over');
		
	//on mouseout remove the over class
	}).mouseout(function() {
		$(this).removeClass('over');										
	});
	
	//end on mouseout remove the over class
	
	
	//close all on page
	$('.accordionContent').hide();

});


/*----------------------------------------------------*/
/*	Recent work carousel
/*----------------------------------------------------*/
jQuery(document).ready(function($) {
    var $postcarousel = $('#mycarousel');

        if( $postcarousel.length ) {

            var itemWidth = 220;

            $postcarousel.jcarousel({
                animation : 600,
                setupCallback: function(carousel) {
                    carousel.reload();
                },
                reloadCallback: function(carousel) {
                    var num = Math.round(carousel.clipping() / itemWidth);
                    carousel.options.scroll = num;
                    carousel.options.visible = num;
                }
            });
 
        }
        
        $postcarousel
    			.touchwipe({
        			wipeLeft: function() {
            		$postcarousel.jcarousel('next');
        		},
        			wipeRight: function() {
            		$postcarousel.jcarousel('prev');
        		}
    	});
    	
	});
	
	

 $('li').mouseover(function () {
    	$(this).find('.bgfade').css('background','rgba(0,153,51, 0.8)');
    });
		
 $('li').mouseout(function () {
		$(this).find('.bgfade').css('background','none');
	});

	// zoom
 $('li').mouseover(function () {
		$(this).find('span').css('top','20%');
	});
	
 $('li').mouseout(function () {
		$(this).find('span').css('top','-40px');
	});
	
	// zoom2
	 $('li').mouseover(function () {
			$(this).find('.zoom2').css('top','40%');
		});
		
	 $('li').mouseout(function () {
			$(this).find('.zoom2').css('top','-40px');
		});
	
	// title
	
  $('li').mouseover(function () {
		$(this).find('p').css('bottom','0');
	});

  $('li').mouseout(function () {
		$(this).find('p').css('bottom','-60px');
	});
        
/*----------------------------------------------------*/
/*	nivo slider
/*----------------------------------------------------*/

    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    
/*----------------------------------------------------*/
/*	Box layout background changing style
/*----------------------------------------------------*/

$('.siteoptions-btn').toggle(
	function() {
		$('.siteoptions').animate({
			left: '0px'
		}, 500 );
	},
	function() {
		$('.siteoptions').animate({
			left: '-150px'
		}, 500 );
	});

$('.siteoptions-container ul li').click(function(){
	$('.boxview').css('max-width','1000px');
	$('.boxview').css('border-left','1px solid #a1a1a1');
	$('.boxview').css('border-right','1px solid #a1a1a1');
	$('.nivo-caption').css('margin-left','50px');
});

$('.bg1').click(function(){
	$('.boxcontainer').css('background','url(http://www.geckomedia.vn/wp-content/themes/GeckoMedia/images/tileable_wood_texture.png) fixed');
});

$('.bg2').click(function(){
	$('.boxcontainer').css('background','url(http://www.geckomedia.vn/wp-content/themes/GeckoMedia/images/grey.png) fixed');
});

$('.bg3').click(function(){
	$('.boxcontainer').css('background','url(http://www.geckomedia.vn/wp-content/themes/GeckoMedia/images/subtle_dots.png) fixed');
});

$('.bg4').click(function(){
	$('.boxcontainer').css('background','url(http://www.geckomedia.vn/wp-content/themes/GeckoMedia/images/tiny_grid.png) fixed');
});

$('.bg5').click(function(){
	$('.boxcontainer').css('background','url(http://www.geckomedia.vn/wp-content/themes/GeckoMedia/images/bright_squares.png) fixed');
});

$('.bg6').click(function(){
	$('.boxcontainer').css('background','url(http://www.geckomedia.vn/wp-content/themes/GeckoMedia/images/light_wool.png) fixed');
});

$('.bg7').click(function(){
	$('.boxcontainer').css('background','url(http://www.geckomedia.vn/wp-content/themes/GeckoMedia/images/hexellence.png) fixed');
});

$('.bg8').click(function(){
	$('.boxcontainer').css('background','url(http://www.geckomedia.vn/wp-content/themes/GeckoMedia/images/perforated_white_leather.png) fixed');
});

$('.bg9').click(function(){
	$('.boxcontainer').css('background','url(http://www.geckomedia.vn/wp-content/themes/GeckoMedia/images/ravenna.png) fixed');
});

$('.bg10').click(function(){
	$('.boxcontainer').css('background','url(http://www.geckomedia.vn/wp-content/themes/GeckoMedia/images/vichy.png) fixed');
});

$('.bg11').click(function(){
	$('.boxcontainer').css('background','url(http://www.geckomedia.vn/wp-content/themes/GeckoMedia/images/dark_wood.png) fixed');
});

$('.bg12').click(function(){
	$('.boxcontainer').css('background','url(http://www.geckomedia.vn/wp-content/themes/GeckoMedia/images/pinstriped_suit.png) fixed');
});

$('.bg13').click(function(){
	$('.boxcontainer').css('background','url(http://www.geckomedia.vn/wp-content/themes/GeckoMedia/images/carbon_fibre.png) fixed');
});

$('.bg14').click(function(){
	$('.boxcontainer').css('background','url(http://www.geckomedia.vn/wp-content/themes/GeckoMedia/images/low_contrast_linen.png) fixed');
});

$('.bg15').click(function(){
	$('.boxcontainer').css('background','url(http://www.geckomedia.vn/wp-content/themes/GeckoMedia/images/woven.png) fixed');
});

	//clear box view
$('.removebg').click(function(){
	$('.boxcontainer').css('background','none');
	$('.boxview').css('max-width','100%');
	$('.boxview').css('border','none');
	$('.nivo-caption').css('margin-left','0');
});

/*----------------------------------------------------*/
/*	watermark
/*----------------------------------------------------*/

var watermark = 'Find something';

//init, set watermark text and class
$('#search').val(watermark).addClass('watermark');

//if blur and no value inside, set watermark text and class again.
	$('#search').blur(function(){
		if ($(this).val().length == 0){
		$(this).val(watermark).addClass('watermark');
	}
	});

//if focus and text is watermrk, set it to empty and remove the watermark class
$('#search').focus(function(){
		if ($(this).val() == watermark){
		$(this).val('').removeClass('watermark');
}

});


var watermark2 = 'Enter your name';

//init, set watermark text and class
$('#name').val(watermark2).addClass('watermark2');

//if blur and no value inside, set watermark text and class again.
	$('#name').blur(function(){
		if ($(this).val().length == 0){
		$(this).val(watermark2).addClass('watermark2');
	}
	});

//if focus and text is watermrk, set it to empty and remove the watermark class
$('#name').focus(function(){
		if ($(this).val() == watermark2){
		$(this).val('').removeClass('watermark2');
}

});


var watermark3 = 'Enter your email';

//init, set watermark text and class
$('#email').val(watermark3).addClass('watermark2');

//if blur and no value inside, set watermark text and class again.
	$('#email').blur(function(){
		if ($(this).val().length == 0){
		$(this).val(watermark3).addClass('watermark2');
	}
	});

//if focus and text is watermrk, set it to empty and remove the watermark class
$('#email').focus(function(){
		if ($(this).val() == watermark3){
		$(this).val('').removeClass('watermark2');
}

});


var watermark4 = 'Website (optional)';

//init, set watermark text and class
$('#website').val(watermark4).addClass('watermark2');

//if blur and no value inside, set watermark text and class again.
	$('#website').blur(function(){
		if ($(this).val().length == 0){
		$(this).val(watermark4).addClass('watermark2');
	}
	});

//if focus and text is watermrk, set it to empty and remove the watermark class
$('#website').focus(function(){
		if ($(this).val() == watermark4){
		$(this).val('').removeClass('watermark2');
}

});


var watermark5 = 'Enter you message';

//init, set watermark text and class
$('#message').val(watermark5).addClass('watermark2');

//if blur and no value inside, set watermark text and class again.
	$('#message').blur(function(){
		if ($(this).val().length == 0){
		$(this).val(watermark5).addClass('watermark2');
	}
	});

//if focus and text is watermrk, set it to empty and remove the watermark class
$('#message').focus(function(){
		if ($(this).val() == watermark5){
		$(this).val('').removeClass('watermark2');
}

});


var watermark6 = 'Enter your email';

//init, set watermark text and class
$('#newsletters').val(watermark6).addClass('watermark2');

//if blur and no value inside, set watermark text and class again.
	$('#newsletters').blur(function(){
		if ($(this).val().length == 0){
		$(this).val(watermark6).addClass('watermark2');
	}
	});

//if focus and text is watermrk, set it to empty and remove the watermark class
$('#newsletters').focus(function(){
		if ($(this).val() == watermark6){
		$(this).val('').removeClass('watermark2');
}

});


/*----------------------------------------------------*/
/*	back to top btn
/*----------------------------------------------------*/
$(window).scroll(function() {
	if($(this).scrollTop() != 0) {
		$('#toTop').fadeIn();	
	} else {
		$('#toTop').fadeOut();
	}
});

$('#toTop').click(function() {
	$('body,html').animate({scrollTop:0},800);
});

//portfolio mouse over
$('li').mouseover(function () {
    	$(this).find('.port-bgfade').css('background','rgba(10,144,26, 0.9)');
  		});
		
$('li').mouseout(function () {
	$(this).find('.port-bgfade').css('background','none');
});
