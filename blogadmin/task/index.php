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
<link rel="stylesheet" href="css/menuleft.css">
<!-- <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- STAR -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style type="text/css">
  .m-hero.with-picture{
    display: none !important;
  }
  #sidebar{
    border:0px solid;
    border-radius: 1em;
  }
</style>

<body  ondrop="dropout(event);"  ondragover="allowDrop(event)">
  <div class="wrapper" style="width: 100%">
   <nav id="sidebar">
    <ul class="list-unstyled components">
      <li class=""><a  href="" data-toggle="collapse" aria-expanded="false"><i class="fa fa-list"></i> Tất cả</a> </li>
      <li class=""><a href="" data-toggle="collapse" aria-expanded="false"><i class="far fa-sun"></i> Ngày hôm nay</a> </li>
      <li class=""><a href="" data-toggle="collapse" aria-expanded="false"><i class="fa fa-star"></i> Quan trọng</a> </li>
    </ul>
    <ul class="list-unstyled CTAs">
      <h2 id="idname" style="display: none;">idname</h2>
      <li id="addstep" style="display: none;"></li>
      <div id="changeganco">
      </div>
    </ul>
  </nav>
  <div id="content"><!-- <CONTENT -->
    <button type="button" id="sidebarCollapse" class="btn btn-info">
      <i class="fas fa-align-left"></i>
      <!--  <span></span> -->
    </button>
    <div id="reload" style="display: none">reload</div>
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
          $('#tablecontent').load( ' #tablecontent');
        }
      });
     }
     $('#tablecontent').load( ' #tablecontent');
     function funtrangthaiclick(clicked_id) {
      id = clicked_id;
      $.ajax({
        type : "POST", 
        url  : "trangthai.php", 
        data : {id : id},
        success: function(res){  
          $('#tablecontent').load( ' #tablecontent');
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
         $('#tablecontent').load(document.URL +' #tablecontent');
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
      })
    }
    function addstemp(data,name,id){
      console.log(data);
      console.log(id);  
      id = id;
      data= data;
      $.ajax({
        type : "POST",  
        url  : "stamp.php",  
        data : {id : id, data: data},
        success: function(res){ 
         $('#tablecontent').load(document.URL +' #tablecontent');
       }
     });
    }
  </script>
  <div id="tablecontent">
    <table class="table">
      <thead>
       <form class="form" action="add.php" method="post">
        <tr class="addnew">
          <th scope="col" style="vertical-align: inherit !important;"><i class="fa fa-plus"></i> Thêm </th>
          <th scope="col"><input type="text" class="form-control" name="task" id="task" aria-describedby="" required="true" placeholder="Task"></th>
          <th scope="col"><textarea class="form-control" name="noidung" id="noidung" rows="1" required="true" placeholder="Nội dung"></textarea></th>
          <th scope="col"> <input type="text" class="form-control" name="trangthai" id="trangthai" value="doing" aria-describedby="emailHelp" style="display: none;">
            <?php 
            echo ' <input type="text" class="form-control" name="user" id="user" value="'.getLoggedMemberID().'" aria-describedby="emailHelp" style="display: none;">';
            ?>
            <th scope="col"><button type="submit" class="btn btn-primary" id="add">Thêm</button></th></th> 
          </tr>
        </form>
      </thead>
      <script type="text/javascript">
        function dragstemp(ev){
         ev.dataTransfer.setData("text", ev.target.id);
         x= ev.dataTransfer.getData("text"); 

       }
       function dropstamp(ev){
        ev.preventDefault();
        ev.preventDefault();
    var data = ev.dataTransfer.getData("text"); // data  là id di chuyển 
    document.getElementById(data).style.color = "red";
    name= document.getElementById("idnamesentname").value;
    id= document.getElementById("idnamesentid").value;
    addstemp(data,name,id);
  }
</script>
<!-- <form> -->
  <tbody id="tableBody" ondrop="dropstamp(event)" ondragover="allowDrop(event)" >
    <form action="stamp.php" method="POST">
      <input id="idnamesentname" type="" name="" value="">
      <input id="idnamesentid" type="" name="" value="">
      <?php 
      $sql = "SELECT * FROM `todo`";
      $result = mysqli_query($con, $sql);
      $idpost=0;
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          if ($row["user"]== getLoggedMemberID()){
            echo '  
            ';
            if ($row["trangthai"]=="doing"){
              echo ' 
              <tr id="drag'.$row["id"].'"onclick="chitiet(this.id)" draggable="true" ondragstart="drag(event)" >
              <input  id="drag'.$row["id"].'value" value="'.$row["task"].'" style="display:none;" />
              <th scope="row"   class="taskcon" >
              <input type="radio" onclick="funtrangthaiclick(this.id)" id="'.$row["id"].'" name="id'.$row["id"].'" class="" value="'.$row["id"].'"/>
              <span class="checkmark"></span>
              </th>
              <td>'.$row["task"].'</td>
              <td>'.$row["noidung"].'</td>
              <td>
              <button  style="display:none;" id="remove'.$row["id"].'" name="'.$row["id"].'" class="btn btn-primary btn-sm remove" value="delete'.$row["id"].'">Xóa</button></td>

              ';
            }else if ($row["trangthai"]=="done"){
             echo ' 
             <tr id="drag'.$row["id"].'" value="'.$row["task"].'" onclick="chitiet(this.id)"   draggable="true" ondragstart="drag(event)"  style="background-color: #e7e7e7; color: black;">

             <input  id="drag'.$row["id"].'value" value="'.$row["task"].'" style="display:none;" />

             <th scope="row"  class="taskcon" >

             <input type="radio" checked="checked"  type="radio" onclick="funtrangthaiclick(this.id)" id="'.$row["id"].'" class="" name="'.$row["id"].'" value="'.$row["id"].'"/>
             <span class="checkmark"></span>

             </th>
             <td style=" text-decoration: line-through;">'.$row["task"].'</td>
             <td style=" text-decoration: line-through;">'.$row["noidung"].'</td>
             <td>
             <button style="display:none;" id="remove'.$row["id"].'" class="btn btn-primary btn-sm remove" name="id" value="delete'.$row["id"].'">Xóa</button></td>

             ';
           }
               //star
               if ($row["star"]=="0"){ // danghoatdong
                echo ' <td><span class="fa fa-star " onclick="makestar(this.id)" type="radio" id="star'.$row["id"].'" name="" value="star'.$row["id"].'"></span></td>';
              } else {
                echo ' <td><span class="fa fa-star checkedstar" onclick="makestar(this.id)" type="radio" id="star'.$row["id"].'" name="" value="star'.$row["id"].'"></span></td>';
              }

                if ($row["stamp"]=="do"){ // danghoatdong
                  echo '<td><img src="img/do.png"></td>';
                } else if ($row["stamp"]=="vang"){
                  echo '<td><img src="img/vang.png"></td>';
                } else if ($row["stamp"]=="xanh"){
                  echo '<td><img src="img/xanh.png"></td>';
                } else if ($row["stamp"]=="lam"){
                  echo '<td><img src="img/lam.png"></td>';
                } else if ($row["stamp"]=="im"){
                  echo '<td><img src="img/tim.png"></td>';
                } 



                echo '  </tr> ';
              }
            }
          }
          ?>
        </form>
      </tbody>
    </table>
  </div>
  <style>
  @font-face { font-family: 'icomoon'; src: url("../assets/fonts/icomoonf924.eot?vukg2s?v=a5dd59f074"); src: url("../assets/fonts/icomoone531.eot?vukg2s#iefix?v=a5dd59f074") format('embedded-opentype'), url("../assets/fonts/icomoonf924.ttf?vukg2s?v=a5dd59f074") format('truetype'), url("../assets/fonts/icomoonf924.woff?vukg2s?v=a5dd59f074") format('woff'), url("../assets/fonts/icomoone531.svg?vukg2s#icomoon?v=a5dd59f074") format('svg'); font-weight: normal; font-style: normal; font-display: swap; } </style> <link rel="stylesheet" type="text/css" href="../assets/css/app2daf.css?v=a5dd59f074" media="screen" /> <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700|Montserrat:400,500,600,700|Roboto:400,500,700&amp;display=swap&amp;subset=vietnamese" rel="stylesheet"> 
  <style> .m-hero__picture { background-image: url(../content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } @media(max-width: 1000px) { .m-hero__picture { background-image: url(../content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } } @media(max-width: 600px) { .m-hero__picture { background-image: url(../content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } }
</style>
<style>
  #overlay {
    position: fixed;
    display: none;
    width: 20%;
    height: 100%;
    top: 0;
    right: 0;
    float: right;
    bottom: 0;
    background-image: linear-gradient(to right, rgba(255,0,0,0), rgb(191 78 78));
    z-index: 2;
    cursor: pointer;
  }
  #menuleft {
    position: relative;
    display: none;
    width: 15em;
    border:0px solid;
    border-radius: 4%; 
    max-width: 150px;
    height: 40%;
    top: 0;
    float: left;
    bottom: 0;
    background-image: linear-gradient(to right, rgba(255,0,0,0), rgb(191 78 78));
    z-index: 2;
    cursor: pointer;
  }
</style>
</div> <!-- <!content> -->
</div>
<div id="overlay">
  <form method="post" action="trangthai.php" class="form" > 
    <div id="trash"  ondrop="drop(event)" ondragover="allowDrop(event)" style="height:100em; background: transparent;"></div>
  </form>
</div>
<script type="text/javascript">

</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script defer src="../assets/js/vendor/content-api.min2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/manifest2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/vendor2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/app2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/home2daf.js?v=a5dd59f074"></script>
<script src="../js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js" ></script>

<script src="js/function.js"></script>
<script src="js/autoload.js"></script>
<script src="../js/loading.js"></script>
</body>
</html>