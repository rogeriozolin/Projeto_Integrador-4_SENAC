
		$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: target.offset().top
			}, 600);
			return false;
		  }
		}
	  });
	});
				 
				 
				 
				 
					
		$(document).ready(function(){
		$('.menu a').click(
			function(e)
			{
				$('.menu a').removeClass('active');
				$(e.currentTarget).addClass('active');
			}
		);
	});
			




$(function(){
 
	$(document).on( 'scroll', function(){
		if ($(window).scrollTop() > 100) {
			$('.voltar').addClass('show');
		} else {
			$('.voltar').removeClass('show');
		}
	});
});

 
$(function(){
 
	$(document).on( 'scroll', function(){
 
		if ($(window).scrollTop() > 100) {
			$('.voltar').addClass('show');
		} else {
			$('.voltar').removeClass('show');
		}
	});
 
	$('.voltar').on('click', scrollToTop);
	
});
 
function scrollToTop() {
	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}

$(document).ready(function(){
    $('.voltar').click(
        function(e)
        {
            $('nav a').removeClass('active');
			
        }
    );
});



       /* SCRIPT PARA MOBILE */
		$(document).ready(function(){
			$(".mobile").click(function(){
				$(".menu ul").toggle();
			});
		});
	