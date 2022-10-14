$(document).ready( function(){
	/*$("#intro").mouseenter( function(){
		$("#intro").fadeTo("fast",0.5);		
	});	
	$("#intro").mouseleave( function(){
		$("#intro").fadeTo("fast",1);
	});
	$("img").mouseenter( function(){
		this.fadeTo("fast",0.5);
	});
	$("img").mouseleave( function(){
		this.fadeTo("fast",1);
	});*/
	$("#intro").hide();
	
	$(window).load(function() {
		$("#intro").fadeIn(3000);
	});
});