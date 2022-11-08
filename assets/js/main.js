(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });

})(jQuery);


$(document).ready(function(){
	$(".dropdown-saya").click(function(){
		$(this).next('ul').toggle()
	});

	// realtimeping();
});

 
// function realtimeping() {
// 	setTimeout(function() {
// 		update();
// 		realtimeping();
// 	}, 100000);
// }

// function update()
// {
// 	$.ajax({
// 		url: 'realtimeping.php',
// 		success: function(e) {
// 			$('#realtimeping').html(e);
// 		}
// 	});
// }