 $(document).ready(function () {
 	$.LoadingOverlay("show");
 	setTimeout(function(){
 		$.LoadingOverlay("hide");
 	}, 1500);
 	// $.LoadingOverlay("show", {
 	// 	image       : "",
 	// 	progress    : true
 	// });
 	// var count     = 0;
 	// var interval  = setInterval(function(){
 	// 	if (count >= 100) {
 	// 		clearInterval(interval);
 	// 		$.LoadingOverlay("hide");
 	// 		return;
 	// 	}
 	// 	count += 20;
 	// 	$.LoadingOverlay("progress", count);
 	// }, 300);

 });
