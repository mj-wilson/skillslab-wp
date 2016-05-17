	
$('.index ul li').click(function(){
	$(this).siblings().removeClass('active');
	$(this).addClass('active');
	updatePanel();
	updateBlocks();
});
var updatePanel = function(){
	var index = $('.index ul li.active').attr('data-index');
	$('.task-container').each(function(){
		$(this).hide();
		var currentIndex = $(this).attr('data-index');
		if (currentIndex == index) {
			$(this).show();
		}
	});
};
var updateBlocks = function(){
	var skills = $('.index ul li.active').attr('data-skills');
	skills = skills.split(' ');
	var colors = ['blue','orange','green','blue','orange','green'];
	$('#pt-skills ul li').removeClass('show blue orange green');
	$('#pt-skills ul li').each(function(){
		for ( var i = 0; i < skills.length; i++ ){
		  if ( $(this).hasClass( skills[i] ) ){
		    $(this).addClass('show');
		  }
		}
	});
	$('#pt-skills ul li.show').each(function(i){
		$(this).addClass( colors[i] );			
	});
};
$( document ).ready(function() {
	if($('.single-school').length) {
	    updateBlocks();
	}
	$('.post').on( "click", ".title", function() {
		$(this).toggleClass('open');
		$(this).next('.show-hide').slideToggle();
	});

	$("#back-to-top").click(function() {
	    $('html, body').animate({scrollTop: 0 }, 1000);
	});

	$(document).scroll(function() {
	    if( $(this).scrollTop() > 1000 ) {
	    	$("#back-to-top").fadeIn();
	    } else {
	    	$("#back-to-top").fadeOut();
	    } 
	});

	$(".mobile-nav-toggle").click(function() {
	   $(this).parent().toggleClass('open');
	});

});

