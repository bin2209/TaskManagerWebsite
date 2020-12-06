<?php 
// include("libs/db_connect.php");
include("../../blogadmin/lib.php"); 
include("../libs/db_connect.php");
$currentuser= getLoggedMemberID();
if (getLoggedMemberID()=="guest"){
  header("location:../login.php");
}else{
  include("../header-user.php");
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="../css/iosdesign.css">
<link rel="stylesheet" href="css/menuleft.css">
<link rel="stylesheet" type="text/css" href="../assets/css/app2daf.css?v=a5dd59f074" media="screen" /> <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700|Montserrat:400,500,600,700|Roboto:400,500,700&amp;display=swap&amp;subset=vietnamese" rel="stylesheet"> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- STAR -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body  ondrop="dropout(event);"  ondragover="allowDrop(event)">
  <style type="text/css">
    .swal2-popup{
     width: auto !important;
   }
   .fa-calendar:hover{
    color: #fb5d5d;
  }
</style>
<div class="wrapper" style="width: 100%">
 <nav id="sidebar">
  <ul class="list-unstyled components">
    <li class=""><a data-toggle="collapse" aria-expanded="false" onclick="btnclick('tinhnang/tatca.php')"><i class="fa fa-list"></i> Tất cả</a> </li>
    <li class=""><a data-toggle="collapse" aria-expanded="false" onclick="btnclick('tinhnang/homnay.php')"><i class="fa fa-calendar"></i> Hôm nay</a> </li>
    <li class=""><a data-toggle="collapse" aria-expanded="false"  onclick="btnclick('tinhnang/quantrong.php')"><i class="fa fa-star"></i> Quan trọng</a> </li>
    <li class=""><a data-toggle="collapse" aria-expanded="false"  onclick="btnclick('tinhnang/thongke.php')"><i class="fa fa-pie-chart"></i> Thống kê</a> </li>
  </ul>
  <ul class="list-unstyled CTAs">
    <h2 id="idname" style="display: none;">idname</h2>
    <li id="addstep" style="display: none;"></li>
    <div id="changeganco">
    </div>
  </ul>
</nav>
<div id="content"><!-- <CONTENT -->
  <?php
  include('tinhnang/tatca.php');
  ?>
</div> <!-- <!content> -->
</div>
<div id="overlay">
  <form method="post" action="trangthai.php" class="form" > 
    <div id="trash"  ondrop="drop(event)" ondragover="allowDrop(event)" style="height:100em; background: transparent;"></div>
  </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script defer src="../assets/js/vendor/content-api.min2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/manifest2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/vendor2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/app2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/home2daf.js?v=a5dd59f074"></script>
<script src="../js/bootstrap.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js" ></script>
<script src="js/clicktable.js"></script>
<script src="js/function.js"></script>
<script src="js/autoload.js"></script>
<script src="js/loading.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
  function btnclick(_url){
    $.ajax({
      url : _url,
      type : 'post',
      success: function(data) {
       $('#content').html(data);
     },
     error: function() {
       $('#content').text('An error occurred');
     }
   });
  }

  function xoahomnay(id){
   console.log(id);
   $.ajax({
    type : "POST", 
    url  : "trangthai.php", 
    data : {id : id},
    success: function(res){  
      location.reload();
    }
  });
   
 }


</script>
</body>
</html>