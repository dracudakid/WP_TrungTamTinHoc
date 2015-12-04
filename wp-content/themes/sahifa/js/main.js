$(document).ready(function() {

	$("#my-menu").mmenu();
	  $("#close_open_menu").click(function() {
	     $("#my-menu").trigger("open.mm");
	  });

 	//  	var h = 85;
	// $(window).scroll(function(){
	//     curloca=$(window).scrollTop();
	//     if (curloca > h) {
	//         $(".menu").addClass('fixed');
	//     } else {
	//         $(".menu").removeClass('fixed');
	//     }
	// });

	//Menu
    $('#ddmenu li').hover(function () {
        clearTimeout($.data(this,'timer'));
        $('ul',this).stop(true,true).slideDown(200);
    }, function () {
    $.data(this,'timer', setTimeout($.proxy(function() {
        $('ul',this).stop(true,true).slideUp(200);
        }, this), 100));
    });//Menu

    // show search
	$("#search_button").click(function(){
		$("#search_form").fadeToggle(300);
	})
	
});
$(window).load(function() {
	$('.flexslider').flexslider({
		animation: "fade"
	});
	$('.prev').on('click', function(){
		$('.flexslider').flexslider('prev')
		return false;
	})

	$('.next').on('click', function(){
	    $('.flexslider').flexslider('next')
	    return false;
	})
});

