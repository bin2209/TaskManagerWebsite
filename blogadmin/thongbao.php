<?php 
include("../blogadmin/lib.php"); 
include("libs/db_connect.php");
$currentuser= getLoggedMemberID();
if (getLoggedMemberID()=="guest"){
  header("location:login.php");
}else{
  include("header-user.php");
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/iosdesign.css">
<link rel="stylesheet" href="css/menuleft.css">
<link rel="stylesheet" type="text/css" href="assets/css/app2daf.css?v=a5dd59f074" media="screen" /> <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700|Montserrat:400,500,600,700|Roboto:400,500,700&amp;display=swap&amp;subset=vietnamese" rel="stylesheet"> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- STAR -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
</head>
<body  ondrop="dropout(event);"  ondragover="allowDrop(event)">
  <style type="text/css">
    .swal2-range{
     background: transparent !important;
   }
   .l-content{
    background-color: #e9ecef;
  }
  .m-hero{
    display: none;
  }
  .tagthongbao{
    border-radius: 3em;
    margin-top: 10px;
  }
  .tagthongbao:hover{
    background-color: rgba(0,123,255,.25) !important;
  }
</style>
<div class="wrapper" style="width: 100%; margin-top: 3%; background-color: #fff !important; border-radius: 1em;">
  <div id="content"><!-- <CONTENT -->
    <nav class="navbar navbar-light" style=" background: linear-gradient(to right, #f46b45, #eea849); border-top-left-radius: 1em; border-top-right-radius: 1em; border: 0px solid; color: white;">
      <h4 style="font-size: 1.2rem; padding: 5px 0px 0px;"><i class="fa fa-bell-o" aria-hidden="true"></i> Thông báo</h4>
    </nav>
    <div id="thongbao" style="padding: 1em;     height: 40em;">
      <?php 
      $sql = "SELECT * FROM thongbao";
      $result = mysqli_query($con, $sql);
      if (mysqli_num_rows($result) > 0) {
        $count=0;
        while($row = mysqli_fetch_assoc($result)) if ($row["user"] == $currentuser){
          if ($row["theloai"]=='taskhethan'){
             $count++;
            echo '
            <nav class="navbar navbar-light bg-light tagthongbao">
            <a class="navbar-brand" href="task/">
            <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" alt=""> Công việc '.$row["title"].' tại công việc thường xuyên đã hết hạn
            </a>
            </nav>
            ';
          }
        }
        if ($count == 0){
          echo "Không có thông báo.";
        }
      }
      ?>
    </div>
  </div> <!-- <!content> -->
</div>
<div id="overlay">
  <form method="post" action="trangthai.php" class="form" > 
    <div id="trash"  ondrop="drop(event)" ondragover="allowDrop(event)" style="height:100em; background: transparent;"></div>
  </form>
</div>
</div>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script defer src="assets/js/manifest2daf.js?v=a5dd59f074"></script>
<script defer src="assets/js/vendor2daf.js?v=a5dd59f074"></script>
<script defer src="assets/js/app2daf.js?v=a5dd59f074"></script>
<!-- <script src="../js/bootstrap.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js" ></script>

</body>
</html>