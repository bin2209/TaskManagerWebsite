
<?php
//Nhận giá trị thông báo từ /task
// $event  = task || daihan
// $id = $id của task
// $title = tiêu đề
// $content = nội dung
// ex: task 175 homnay homnay

function postmessage($event, $id, $title, $content){

	echo '
	<script>
	(function($) { $.fn.easyNotify = function(options) { var settings = $.extend({ title: "Notification", options: { body: "", icon: "", lang: "pt-BR", onClose: "", onClick: "", onError: "" } }, options); this.init = function() { var notify = this; if (!("Notification" in window)) { alert("This browser does not support desktop notification"); } else if (Notification.permission === "granted") { var notification = new Notification(settings.title, settings.options); notification.onclose = function() { if (typeof settings.options.onClose == "function") { settings.options.onClose(); } }; notification.onclick = function(){ if (typeof settings.options.onClick == "function") { settings.options.onClick(); } }; notification.onerror  = function(){ if (typeof settings.options.onError  == "function") { settings.options.onError(); } }; } else if (Notification.permission !== "denied") { Notification.requestPermission(function(permission) { if (permission === "granted") { notify.init(); } }); } }; this.init(); return this; }; }(jQuery));
	var myFunction = function() {
		window.open("https://taskvn.com/blogadmin/", "_blank");
	};
	var myImg = "../images/logo.png";
	var openNotification = function(){
		var options = {
			title: "'. $title .'",
			options: {
				body: "'. $content .'",
				icon: myImg,
				lang: "en-US",
				onClick: myFunction
			}
		};
		console.log(options);

		jQuery(function ($) {  $().easyNotify(options); });
	};
	openNotification();
	</script>
	';

}


?>
