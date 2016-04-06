// Version 0.2

function Select4Sorting() {
	
	$("#sortdiv").find("li").hover(function(){
	 	//event.stopPropagation();
		jQuery(this).parent().addClass("ul-hover");
		jQuery(this).parent().parent().parent().removeClass("ul-hover");
	},
		function(){
		//event.stopPropagation();
		jQuery(this).parent().removeClass("ul-hover");
		jQuery(this).parent().parent().parent("ul").addClass("ul-hover");
		});
		
	$("#sortdiv").find("li").click(function() {
		$("#sortdiv").find("li").unbind('mouseenter mouseleave click');
		jQuery(this).parent().removeClass("ul-hover");
		jQuery(this).parent().sortable({
			cursor : "move"
			});
		$("#controls").removeClass("hidden");
		$("#sort-help").html('<strong> Sort then Save: </strong> Arrange the elements as you would like then Save ');
	});

}


jQuery(function(){


	Select4Sorting();
	
		
	$('#save').click( function (){
		var sortdata = $(".ui-sortable").sortable( 'serialize');
		console.log( "The sorted IDs need to be sent to the server via AJAX for saving in the database :" );
		console.log( sortdata );
		$(".ui-sortable").sortable("destroy");
		Select4Sorting();
		jQuery(this).parent().addClass('hidden');
		$("#sort-help").html( '<strong> Want More? </strong> Feel free to select and sort again!');
		$("#save-warning").removeClass("hidden").css("display", "block");
		$("#save-warning").fadeOut( 10000 );
	});
		
	$('#cancel').click( function (){
		$(".ui-sortable").sortable("cancel");
		$(".ui-sortable").sortable("destroy");
		Select4Sorting();
		jQuery(this).parent().addClass('hidden');
		$("#sort-help").html( '<stong> More? </strong> Feel free to select and sort again!');
	
	});
});