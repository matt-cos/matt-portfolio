// (function($){
//   $(function(){

//     $('.button-collapse').sideNav();

// 	$('.scrollspy').scrollSpy();

//   }); // end of document ready

// 	// $(document).ready(function(){
// 	// 	$('.scrollspy').scrollSpy();
// 	// });
// })(jQuery); // end of jQuery name space


jQuery(document).ready(function($){
	$('.scrollspy').scrollSpy();
	$('.table-of-contents').pushpin({
		top: 220,
		// bottom: 1000,
		offset: 20
	});
});