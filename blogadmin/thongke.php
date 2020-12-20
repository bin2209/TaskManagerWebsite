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
  #hieusuat-text{
   color: #6cd5b4;
   font-size: 30px !important;
   bottom: 71px;
   position: relative;
   font-weight: 500 !important;
 }
 #hieusuat-gif{
  width: 120px;
  height: 120px;
}
.nav-link {
  display: inline;
}

</style>
<div class="wrapper" style="width: 100%; margin-top: 3%; background-color: #fff !important; border-radius: 1em;">
 <div id="content"><!-- <CONTENT -->
   <nav class="navbar navbar-light" style=" background: linear-gradient(to right, #f46b45, #eea849); border-top-left-radius: 1em; border-top-right-radius: 1em; border: 0px solid; color: white;">
    <h4 style="font-size: 1.2rem; padding: 5px 0px 0px;"><i class="fa fa-area-chart" aria-hidden="true"></i> Thống kê</h4>
    <div class="navbar-nav" style="display: inline;">
      <a class="nav-item nav-link active js-tooltip" data-tippy-content="Thống kê công việc thường xuyên" onclick="btnclick('thongke/thongketask.php')">Công việc thường xuyên <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link js-tooltip" data-tippy-content="Thống kê công việc dài hạn" onclick="btnclick('thongke/thongkedaihan.php')">Công việc dài hạn</a>
    </div>
  </nav>
  <div id="thongke" style="padding: 1em;height: 40em;">
    <!-- TASK NHANH -->
    <div>
      <div id="bieudotron" style="width: 45%; float:left; text-align: center;"><canvas id="ThongKeTongBar" width="200" height="200"></canvas><button class="btn btn-primary" id="buton_text" onclick="chuyenchedo()">Biểu đồ cột</button></div>
      <div id="bieudocot" style="width: 45%; float:left; display: none; text-align: center;"><canvas id="ThongKeTongColumn" width="200" height="200"></canvas><button class="btn btn-primary" id="buton_text" onclick="chuyenchedo()">Biểu đồ tròn</button></div>
      <div id="bieudoduong" style="width: 45%; float:right; text-align: center;"><canvas id="bieudoLine" width="400" height="400"></canvas></div></div>
    </div>
    <!-- DAY -->
    <div id="" style="text-align: center;padding: 2em;">
      <?php $sql = "SELECT * FROM `thongke`";
      $result = mysqli_query($con, $sql);
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          if ($row["user"]== getLoggedMemberID()){
            echo "Tổng số công việc: ". ($row["taskhoanthanh"]+$row["taskxoa"]).".<br>";
            echo "Công việc hoàn thành: ". ($row["taskhoanthanh"]).".<br>";
            echo "Công việc đã hủy: ". $row["taskxoa"].".<br>";
            echo "Công việc quá hạn: ". $row["taskhethan"].".<br>";
            echo "<hr>";
            if ($row["taskhoanthanh"]!=0 || $row["taskxoa"]!=0){
              echo "Hiệu suất hoàn thành công việc: <br> <img id='hieusuat-gif' src='assets/loading.gif'> <p id='hieusuat-text'>". round(($row["taskhoanthanh"]/($row["taskhoanthanh"]+$row["taskxoa"]))*100)."% <p>";
            }
          }
        }
      }?>
      <button id="<?php echo getLoggedMemberID(); ?>" class="btn btn-primary" onclick="Reset(this.id)" style="margin-top: 1em;">Xóa dữ liệu</button>
    </div>
    <script>
      var ctx = document.getElementById('bieudoLine').getContext('2d');
      var bieudoLine = new Chart(ctx, {
        type: 'line',
        data: {
          labels: [ <?php $sql = "SELECT * FROM `thongkengay`";
          $result = mysqli_query($con, $sql);
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              if ($row["user"]== getLoggedMemberID()){
                echo "'".$row["ngay"]."',";
              }
            }
          }?>],
          datasets: [{
            label: 'Thống kê số lượng công việc theo ngày (không thể xóa) ',
            data: [
            <?php $sql = "SELECT * FROM `thongkengay`";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                if ($row["user"]== getLoggedMemberID()){
                  echo $row["soluong"].",";
                }
              }
            }?>],
            backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            ],
            borderColor: [
            'rgba(255, 99, 132, 1)',
            ],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });
    </script>
  </div>
</div> <!-- <!content> -->
</div>
<div id="overlay">
  <form method="post" action="trangthai.php" class="form" > 
    <div id="trash"  ondrop="drop(event)" ondragover="allowDrop(event)" style="height:100em; background: transparent;"></div>
  </form>
</div>
</div>
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
</script>
<script> 
 function XoaThongKe(id){ $.ajax({ type : "POST", url  : "task/tinhnang/xoathongke.php", data : {id : id}, success: function(res){ location.reload(); } }); } function Reset(id){ Swal.fire({ title: 'Xóa tất cả dữ liệu thống kê?', text: "Việc này sẽ xóa tất cả dữ liệu thống kê từ trước.", icon: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Đồng ý' }).then((result) => { XoaThongKe(id); if (result.isConfirmed) { Swal.fire( 'Đã làm mới tất cả dữ liệu!', '', 'success' ) } }) } function ThongKeTongBar(){ var ctx = document.getElementById('ThongKeTongBar').getContext('2d'); var ThongKeTongBar = new Chart(ctx, { type: 'polarArea', data: { labels: ['Công việc hết hạn', 'Công việc đã hoàn thành', 'Công việc đã hủy'], datasets: [{ label: 'Số công việc', data: [ <?php $sql = "SELECT * FROM `thongke`"; $result = mysqli_query($con, $sql); if (mysqli_num_rows($result) > 0) { while($row = mysqli_fetch_assoc($result)) { if ($row["user"]== getLoggedMemberID()){ echo $row["taskhethan"].",".$row["taskhoanthanh"].",".$row["taskxoa"]; } } }?>], backgroundColor: [ 'rgba(255, 99, 132, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(255, 159, 64, 0.2)' ], borderColor: [ 'rgba(255, 99, 132, 1)', 'rgba(75, 192, 192, 1)', 'rgba(255, 159, 64, 1)' ], borderWidth: 1 }] }, options: { scales: { yAxes: [{ ticks: { beginAtZero: true } }] } } }); } ThongKeTongBar(); function ThongKeTongColumn(){ var ctx = document.getElementById('ThongKeTongColumn').getContext('2d'); var ThongKeTongColumn = new Chart(ctx, { type: 'bar', data: { labels: ['Công việc hết hạn', 'Công việc đã hoàn thành', 'Công việc đã hủy'], datasets: [{ label: '', data: [ <?php $sql = "SELECT * FROM `thongke`"; $result = mysqli_query($con, $sql); if (mysqli_num_rows($result) > 0) { while($row = mysqli_fetch_assoc($result)) { if ($row["user"]== getLoggedMemberID()){ echo $row["taskhethan"].",".$row["taskhoanthanh"].",".$row["taskxoa"]; } } }?>], backgroundColor: [ 'rgba(255, 99, 132, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(255, 159, 64, 0.2)' ], borderColor: [ 'rgba(255, 99, 132, 1)', 'rgba(75, 192, 192, 1)', 'rgba(255, 159, 64, 1)' ], borderWidth: 1 }] }, options: { scales: { yAxes: [{ ticks: { beginAtZero: true } }] } } }); } ThongKeTongColumn(); function chuyenchedo(){ var bieudotron = document.getElementById("bieudotron"); var bieudocot = document.getElementById("bieudocot"); var buton_text = document.getElementById("buton_text"); if (bieudocot.style.display === "none") { bieudocot.style.display = "block"; bieudotron.style.display = "none"; } else { bieudotron.style.display = "block"; bieudocot.style.display = "none"; } }
</script>
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