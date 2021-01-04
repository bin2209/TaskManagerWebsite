<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="http://localhost/resblog/thongbao/easyNotify.js"></script>
<?php
  // $data = $_POST("data");
$currDir = dirname(__FILE__);
echo $currDir;
// include("$currDir/settings-manager.php");
$events = $_POST['event'];
$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];

echo($events);
echo($id);
echo($title);
echo($content);



?>

<script>
  var myFunction = function() {
    window.open("https://taskvn.com/blogadmin/", "_blank");
  };
  var openNotification = function(){
      var myImg = "../images/logo.png";
    var options = {
      title: "<?php echo $title; ?>",
      options: {
        body: "<?php echo $content; ?>",
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