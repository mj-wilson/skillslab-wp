
// school pages: render & update skill blocks based on selected task

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
// Setup reveal animations	
var reveal = function(){
	var bottom = $(window).scrollTop() + $(window).height();
	$(".revealme, .ktweet").each(function(i){            
    	if($(this).offset().top < bottom - 50) {
    		$(this).addClass("animate_active");
    	} 
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

	$(window).bind("load scroll resize",function(e){	 
	    if( $(this).scrollTop() > 1000 ) {
	    	$("#back-to-top").fadeIn();
	    } else {
	    	$("#back-to-top").fadeOut();
	    } 

	    reveal();
	    
	});

	$(".mobile-nav-toggle").click(function() {
	   $(this).parent().toggleClass('open');
	});

	$('.bio-post:nth-child(even)').clone().appendTo( $( ".column.right" ) );

	$('.bio-post').on( "click", ".toggle", function() {
		$(this).toggleClass('open');
		$(this).parent().next('.show-hide').slideToggle();
	});
});

