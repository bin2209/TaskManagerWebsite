<?php 
include("../../blogadmin/lib.php"); 
include("../libs/db_connect.php");
$currentuser= getLoggedMemberID();
if (getLoggedMemberID()=="guest"){
  header("location:../login.php");
}else{
  include("../header-user.php");
}
//------------------------------------------------------------------------------------------------
// TẠO MỚI USER Ở BẢNG THỐNG KÊ 
$found = false;
$sql = "SELECT * FROM `thongke`";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    if ($row["user"]== getLoggedMemberID()){
      $found= true;
    }
  }
}
if($found == false){
  $sql = 'INSERT INTO thongke (id,user,taskhoanthanh,taskxoa,taskhethan) VALUES (0,"'.getLoggedMemberID().'",0,0,0)';
  $result = mysqli_query($con, $sql);
}
//------------------------------------------------------------------------------------------------
// TẠO MỚI USER Ở BẢNG THỐNG KÊ NGÀY
$thongkengaytao = date("Y-m-d");
$found = false;
$sql = "SELECT * FROM `thongkengay`";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    if ($row["user"]== getLoggedMemberID() && $row["ngay"]==$thongkengaytao){
      $found= true;
    }
  }
}
if($found == false){
  $sql = 'INSERT INTO thongkengay (id,user,ngay,soluong) VALUES (0,"'.getLoggedMemberID().'","'.$thongkengaytao.'",0)';
  $result = mysqli_query($con, $sql);
}

//------------------------------------------------------------------------------------------------
// CHECK BẢNG TODO XEM CÁI NÀO QUÁ HẠN -> SET LẠI TIME: '1999-09-09 19:59:59': VÀ THỐNG KÊ ++;
// KHÁC TIME 1999 THÌ SET LẠI VÀ ++ Ở BẢNG THONGKE;
$sql = "SELECT * FROM `todo`";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    if ($row["user"]== getLoggedMemberID() && ($row["ngayhethan"]!= NULL)  &&  $row["ngayhethan"] != '1999-09-09 19:59:59' ){
      date_default_timezone_set('Asia/Ho_Chi_Minh');
      $your_date = strtotime($row["ngayhethan"]);
      $now = strtotime(date('Y-m-d H:i:s'));
      $datediff = $your_date - $now;
      $day =round($datediff / (60 * 60));
      if ($day<=0){
        // QUÁ THỜI GIAN -> SET LÊN DATABASE THONGKE;
        $sql_thongke = "UPDATE thongke SET taskhethan = taskhethan + 1 WHERE user='".getLoggedMemberID()."'";
        $result_thongke = mysqli_query($con, $sql_thongke);
        
        //THÔNG BÁO -> SET LÊN DATABASE THONGBAO;
        $sql_thongbao = 'INSERT INTO thongbao (id,user,title,noidung,link,theloai) VALUES (0,"'.getLoggedMemberID().'","'.$row["task"].'","'.$row["noidung"].'","'.$row["id"].'","taskhethan")';
        $result_thongbao = mysqli_query($con, $sql_thongbao);

        // LÍNH CANH: CHỈNH VỀ 1999;
        $id = $row["id"];
        $_sql_linhcanh = 'UPDATE todo SET ngayhethan = "1999-09-09 19:59:59" WHERE id='.$id.'';
        $result_linhcanh = mysqli_query($con, $_sql_linhcanh);
      }
      // echo $row["ngayhethan"];
    }
  }
}
//------------------------------------------------------------------------------------------------






?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="../css/iosdesign.css">
<link rel="stylesheet" href="css/menuleft.css">
<link rel="stylesheet" type="text/css" href="../assets/css/app2daf.css?v=a5dd59f074" media="screen" /> <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700|Montserrat:400,500,600,700|Roboto:400,500,700&amp;display=swap&amp;subset=vietnamese" rel="stylesheet"> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- STAR -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link href="lich/css/mobiscroll.jquery.min.css" rel="stylesheet" /> -->

<!-- DATE -->
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
 </style>
 <div class="wrapper" style="width: 100%; margin-top: 3%;">
   <nav id="sidebar">
    <ul class="list-unstyled components">
      <li class="js-tooltip" data-tippy-content="Xem tất cả công việc"><a data-toggle="collapse" aria-expanded="false" onclick="location.href='index.php'"><i class="fa fa-list"></i> Tất cả</a> </li>
      <li class="js-tooltip" data-tippy-content="Công việc làm trong hôm nay"><a data-toggle="collapse" aria-expanded="false" onclick="btnclick('tinhnang/homnay.php')"><i class="fa fa-calendar"></i> Hôm nay</a> </li>
      <li class="js-tooltip" data-tippy-content="Công việc được đánh dấu quan trọng"><a data-toggle="collapse" aria-expanded="false"  onclick="btnclick('tinhnang/quantrong.php')"><i class="fa fa-star"></i> Quan trọng</a> </li>
      <li class="js-tooltip" data-tippy-content="Các công việc đã được bật thông báo"><a data-toggle="collapse" aria-expanded="false"  onclick="btnclick('tinhnang/thongbao.php')"><i class="fa fa-bell"></i> Nhắc nhở</a> </li>
      <li class="js-tooltip" data-tippy-content="Thống kê hiệu suất làm việc"><a data-toggle="collapse" aria-expanded="false"  onclick="btnclick('tinhnang/thongke.php')"><i class="fa fa-pie-chart"></i> Thống kê</a> </li>
    </ul>
    <ul class="list-unstyled CTAs">
      <h2 id="idname" style="display: none;">idname</h2>
      <li id="addstep" style="display: none;"></li>
      <div id="changeganco">
      </div>
      <div id="thongbao">
      </div>
    </ul>
  </nav>

  <div id="content"><!-- <CONTENT -->
    <?php
    include('tinhnang/index.php');
    ?>
  </div> <!-- <!content> -->
</div>
<div id="overlay">
  <form method="post" action="trangthai.php" class="form" > 
    <div id="trash"  ondrop="drop(event)" ondragover="allowDrop(event)" style="height:100em; background: transparent;"></div>
  </form>
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

  function xoahomnay(id){
    Swal.fire({
      title: 'Xóa khỏi công việc hôm nay?',
      text: "Điều này sẽ mất đi thời gian đếm ngược.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Đồng ý',
      cancelButtonText: 'Hủy'
    }).then((result) => {
      if (result.isConfirmed) {
       $.ajax({
        type : "POST", 
        url  : "trangthai.php", 
        data : {id : id},
        success: function(res){  
          location.reload();
        }
      });
     }
   })
  }
  function xoathongbao(id){
    Swal.fire({
      title: 'Tắt nhắc nhở?',
      text: "Công việc này sẽ không nhận được nhắc nhở nữa.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Đồng ý',
      cancelButtonText: 'Hủy'
    }).then((result) => {
      if (result.isConfirmed) {
       $.ajax({
        type : "POST", 
        url  : "trangthai.php", 
        data : {id : id},
        success: function(res){  
          location.reload();
        }
      });
     }
   })
  }
  function clickid(id){
    console.log(id);
    $.post("tinhnang/alltomyday.php",
    {
      id: id,
    });
    location.reload(true);
  }
  function setthongbao(id){
    var str = id;
    var n = str.indexOf("khacdrag");
    //NẾU KHÁC
    if (n!=-1){
      Swal.fire({
        title: 'Cài đặt thời gian nhận nhắc nhở',
      // icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Đồng ý',
      html: '<input type="datetime-local"  id="datepicker"  name="datepicker">',
    }).then((result) => {

      if (result.isConfirmed) {
        datepicker = $("input#datepicker").val();
        result_khac = id+',thoigian:'+datepicker;
        console.log(result_khac);
        id = result_khac;
      }
      $.post("tinhnang/nhacnhorequest.php",
      {
        id: id,
      });
      location.reload(true);
    })
  } else{ // 2 OPTION CHỌN SẴN
    console.log(id);
    $.post("tinhnang/nhacnhorequest.php",
    {
      id: id,
    });
    location.reload(true);
  }
}


 //LICH
 function showcalendar(){
  $("#datepicker").datepicker(); 
}
function updateTextInput(val) {
  document.getElementById('textInput').value=val; 
}
 //LICH
 function nhacnho(id){
  Swal.fire({
    title: 'Nhắc nhở',
    text: "Chọn loại nhắc nhở",
    icon: 'question',
    showCancelButton: false,
    showDenyButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Một lần',
    denyButtonText: 'Định kỳ'
  }).then((result) => {
    if (result.isConfirmed) {
     Swal.fire({
      title: 'Nhắc nhở',
      showCancelButton: false,
      showConfirmButton: false,
      showCloseButton: true,
      confirmButtonColor: '#3085d6',
      html:'<button id="ngaymai'+id+'" type="button" class="btn btn-outline-primary" onclick="setthongbao(this.id)">Ngày mai</button><br><button id="tuansau'+id+'" type="button" class="btn btn-outline-primary" onclick="setthongbao(this.id)">Tuần sau</button><br><button id="khac'+id+'" type="button" class="btn btn-outline-primary" onclick="setthongbao(this.id)">Chọn ngày & giờ</button>',
      //onclick trong HTML
      cancelButtonColor: '#d33',
      confirmButtonText: 'Đồng ý'
    }).then((result) => {
      if (result.isConfirmed) {
       $.ajax({
        type : "POST", 
        url  : "nhacnhorequest.php", 
        data : {
          id : id,
          time: time
        },
        success: function(res){  
          alert("Data: " + data + "\nStatus: " + status);
        }
      });
     }
   })
  }
  if (result.isDenied){
    Swal.fire({
      title: 'Nhắc nhở định kì',
      html:'<label>Chọn ngày bắt đầu</label> <center><input id="datepicker" width="276" onclick="showcalendar()" /></center>'
      +'<label>Khoảng thời gian thông báo</label> <center><input type="number" id="textInput" value="" ><center>',
      showCloseButton: true,
      showCancelButton: false,
      focusConfirm: false,
      confirmButtonText:  'Đặt định kỳ',
    }).then((result) => {
      if (result.isConfirmed) {
      //  $.ajax({
      //   type : "POST", 
      //   url  : "nhacnhorequest.php", 
      //   data : {
      //     id : id,
      //     time: time
      //   },
      //   success: function(res){  
      //     alert("Data: " + data + "\nStatus: " + status);
      //   }
      // });
      console.log("done");
    }
  })
  } 
})
}

</script>
<script>
  function makestar(clicked_id){
   id = clicked_id;
   var element = document.getElementById(id);
   element.classList.add("checked");
   $.ajax({
    type : "POST", 
    url  : "trangthai.php", 
    data : {id : id},
    success: function(res){  
      location.reload();
    }
  });
 }
 function funtrangthaiclick(clicked_id) {
  id = clicked_id;
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
<script type="text/javascript">
  function xoathongtin(id) {
    $.ajax({
      type : "POST",  
      url  : "trangthai.php",  
      data : {id : id},
      success: function(res){   // UPDATE THỐNG KÊ 
       location.reload();
     }
   });
  }

  function updatethongke(id){
   $.ajax({
    type : "POST",  
    url  : "tinhnang/fxthongke.php",  
    data : {id : id},
    success: function(res){ 
      xoathongtin(id);
    }
  });
 }

 function remove(data) {
  Swal.fire({
    title: 'Xóa công việc này ?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Xóa'
  }).then((result) => {
    if (result.isConfirmed) {
      updatethongke(data);
      Swal.fire(
        'Đã xóa!',
        '',
        'success'
        )
    }
  })
}
function addstemp(data,name,id){
      // console.log(data);
      // console.log(id);  
      id = id;
      data= data;
      $.ajax({
        type : "POST",  
        url  : "stamp.php",  
        data : {id : id, data: data},
        success: function(res){ 
         // $('#tablecontent').load(document.URL +' #tablecontent');
         location.reload();
       }
     });
    }
  </script>

</div>
<script>
  $('#datepicker').datepicker();
</script>


<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script defer src="../assets/js/manifest2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/vendor2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/app2daf.js?v=a5dd59f074"></script>
<!-- <script src="../js/bootstrap.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js" ></script>

<script src="js/clicktable.js"></script>
<script src="js/function.js"></script>
<script src="js/autoload.js"></script>

</body>
</html>