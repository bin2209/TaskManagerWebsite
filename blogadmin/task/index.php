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
<!-- <link href="lich/css/mobiscroll.jquery.min.css" rel="stylesheet" /> -->

<!-- DATE -->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

</head>
<body  ondrop="dropout(event);"  ondragover="allowDrop(event)">
  <style type="text/css">

    .swal2-range{
     background: transparent !important;
   }
 </style>
 <div class="wrapper" style="width: 100%">
   <nav id="sidebar">
    <ul class="list-unstyled components">
      <li class=""><a data-toggle="collapse" aria-expanded="false" onclick="location.href='index.php'"><i class="fa fa-list"></i> Tất cả</a> </li>
      <li class=""><a data-toggle="collapse" aria-expanded="false" onclick="btnclick('tinhnang/homnay.php')"><i class="fa fa-calendar"></i> Hôm nay</a> </li>
      <li class=""><a data-toggle="collapse" aria-expanded="false"  onclick="btnclick('tinhnang/quantrong.php')"><i class="fa fa-star"></i> Quan trọng</a> </li>
      <li class=""><a data-toggle="collapse" aria-expanded="false"  onclick="btnclick('tinhnang/thongbao.php')"><i class="fa fa-bell"></i> Nhắc nhở</a> </li>
      <li class=""><a data-toggle="collapse" aria-expanded="false"  onclick="btnclick('tinhnang/thongke.php')"><i class="fa fa-pie-chart"></i> Thống kê</a> </li>
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
   console.log(id);
   $.post("tinhnang/nhacnhorequest.php",
   {
    id: id,
  });
   location.reload(true);
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
          // $('#tablecontent').load( ' #tablecontent');
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
          // $('#tablecontent').load( ' #tablecontent');
          location.reload();
        }
      });
}
function xoathongtin() {
  var removefirstid = document.getElementsByClassName("remove")[0].id;
  var id = document.getElementById(removefirstid).value;
  $.ajax({
    type : "POST",  
    url  : "trangthai.php",  
    data : {id : id},
    success: function(res){ 
         // $('#tablecontent').load(document.URL +' #tablecontent');
         location.reload();
       }
     });
}

</script>
<script type="text/javascript">
  function remove() {
    Swal.fire({
      title: 'Xóa công việc này ?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Xóa'
    }).then((result) => {
      if (result.isConfirmed) {
        xoathongtin();
        Swal.fire(
          'Đã xóa!',
          '',
          'success'
          )
      }
      location.reload();
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
<!-- <script src="lich/js/mobiscroll.jquery.min.js"></script> -->
<!-- <div id="lich">
 <input id="datepicker" width="276" />
</div>
-->


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