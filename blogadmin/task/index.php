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
<meta charset charset=UTF-8>
<title></title>
<script src="java.js"></script>
<!-- <script src="sweetalert2.all.min.js"></script> -->
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<!-- <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- STAR -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <CONTENT -->
 <script>
  function on() {
    document.getElementById("overlay").style.display = "block";
  }

  function off() {
    document.getElementById("overlay").style.display = "none";
  }

  function allowDrop(ev) { //allowDrop
    ev.preventDefault();

  }

  function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
    x= ev.dataTransfer.getData("text"); 
    console.log(x);
    on();
  }

  function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text"); // data  là id di chuyển 
    document.getElementById(data).style.color = "red";
    remove();
    off();
  }

  function dropout(ev){
     off();
  }
</script>
<body  ondrop="dropout(event);"  ondragover="allowDrop(event)">  
  <div id="reload" style="display: none">reload</div>
  <div class="l-content" style="width: 100%;     text-align: center;"> 
   <button class="btn"><i class="fa fa-list"></i> Tất cả</button>
   <button class="btn"><i class="fa fa-star"></i> Quan trọng</button>
   <button class="btn"><i class="fa fa-flag"></i> Gắn nhẵn</button>
 </div>
 <script>


  function makestar(clicked_id){
   id = clicked_id;
   var element = document.getElementById(id);
   element.classList.add("checked");
   $.ajax({
            type : "POST",  //type of method
            url  : "trangthai.php",  //your page
            data : {id : id},// passing the values
            success: function(res){  
              // $("#reload").click(function () {
              //   $("#tablecontent").load();
              // });
              // $("#reload").click();
              $('#tablecontent').load( ' #tablecontent');
            }
          });
 }
 $('#tablecontent').load( ' #tablecontent');
 function funtrangthaiclick(clicked_id) {
  id = clicked_id;
  $.ajax({
            type : "POST",  //type of method
            url  : "trangthai.php",  //your page
            data : {id : id},// passing the values
            success: function(res){  
              // $("#reload").click(function () {
              //   $("#tablecontent").load();
              // });
              // $("#reload").click();
              $('#tablecontent').load( ' #tablecontent');
            }
          });
}

function xoathongtin() {
  var removefirstid = document.getElementsByClassName("remove")[0].id;
  var id = document.getElementById(removefirstid).value;
  $.ajax({
            type : "POST",  //type of method
            url  : "trangthai.php",  //your page
            data : {id : id},// passing the values
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

      }else{

      }
    })
  }

</script>
<!--   <div class="form-group">
    <form class="form" action="add.php" method="post">
      <label for="task">Task</label>
      <input type="text" class="form-control" name="task" id="task" aria-describedby="emailHelp" required="true">
      <label for="noidung">Nội dung</label>
      <textarea class="form-control" name="noidung" id="noidung" rows="1" required="true"></textarea>
      <input type="text" class="form-control" name="trangthai" id="trangthai" value="doing" aria-describedby="emailHelp" style="display: none;">
      <?php 
      echo ' <input type="text" class="form-control" name="user" id="user" value="'.getLoggedMemberID().'" aria-describedby="emailHelp" style="display: none;">';
      ?>
      <br>
      <button type="submit" class="btn btn-primary" id="add">Thêm</button>
    </form>

  </div> -->



  <div id="tablecontent" style="width: 100%; max-width: 75%; ">
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

      <!-- <form> -->
        <tbody id="tableBody">
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
                  <tr id="drag'.$row["id"].'"  draggable="true" ondragstart="drag(event)" >
                  <th scope="row" >

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
                 <tr id="drag1"  draggable="true" ondragstart="drag(event)"  style="background-color: #e7e7e7; color: black;">
                 <th scope="row">

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
              echo '  </tr> ';
            }
          }
        }
        ?>
      </tbody>
    </div>
  </table>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script>





  </script>
  <style>
    .addnew{
      color: #007bff;
    }
    .addnew:hover{
      color:#3e69e4;
    }
    .fa-star:hover{
      color: orange;
    }
    .checkedstar {
      color: orange;
    }
    .form {
      max-width: 100%;
    }
    #trash {
     width: 100%;
     height: 20em;
     padding: 10px;
     z-index: 9999;
     border: 1px solid #aaaaaa;
     margin-top: 1rem;
     /*background-image: url("trash.png");*/
     background-repeat: none; text-align: center; 
     background-position: 0em;
     background-size: 50px;
     color: #495057;
     background-color: #fff;
     background-clip: padding-box;
     border: 1px solid transparent;
     border-radius: .25rem;
   }

   .popup{
    width:300px;
    position:absolute;
    left:50%;
    top:100px;
    margin-left:-150px;

  }
</style>

<!-- <CONTENT -->

</div>
</div>
</div>
</div>
</main>
<!-- <div id="dropbg" class="overlay" style="display: none;">
  <div class="popup">

  </div>
</div> -->

<div class="m-search js-search">
  <button class="m-icon-button outlined as-close-search js-close-search" aria-label="Close search">
    <span class="icon-close"></span>
  </button>
  <div class="m-search__content">
    <form class="m-search__form">
      <fieldset>
        <span class="icon-search m-search-icon"></span>
        <input type="text" class="m-input in-search js-input-search" placeholder="Nhập để tìm kiếm" aria-label="Type to search">
      </fieldset>
    </form>
    <div class="js-search-results hide"></div>
    <p class="m-not-found align-center hide js-no-results">
      Không tìm thấy kết quả, bạn hãy thử một từ khác nhé
    </p>
  </div>
</div>


<style>
  @font-face { font-family: 'icomoon'; src: url("../assets/fonts/icomoonf924.eot?vukg2s?v=a5dd59f074"); src: url("../assets/fonts/icomoone531.eot?vukg2s#iefix?v=a5dd59f074") format('embedded-opentype'), url("../assets/fonts/icomoonf924.ttf?vukg2s?v=a5dd59f074") format('truetype'), url("../assets/fonts/icomoonf924.woff?vukg2s?v=a5dd59f074") format('woff'), url("../assets/fonts/icomoone531.svg?vukg2s#icomoon?v=a5dd59f074") format('svg'); font-weight: normal; font-style: normal; font-display: swap; } </style> <link rel="stylesheet" type="text/css" href="../assets/css/app2daf.css?v=a5dd59f074" media="screen" /> <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700|Montserrat:400,500,600,700|Roboto:400,500,700&amp;display=swap&amp;subset=vietnamese" rel="stylesheet"> <style> .m-hero__picture { background-image: url(../content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } @media(max-width: 1000px) { .m-hero__picture { background-image: url(../content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } } @media(max-width: 600px) { .m-hero__picture { background-image: url(../content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } }
</style>

<footer class="m-footer" style="width: 100%">
  <div class="m-footer__content">
    <p class="m-footer-copyright">
      Nguyễn Hải Trường - Binazure Team<br>
      Chịu trách nhiệm sản phẩm về Nguyễn Hải Trường.<br>
      Địa chỉ: Phường 1 - Thành Phố Đông Hà - Tỉnh Quảng Trị<br>
      EMAIL: binteam@outlook.com<br>
      PHONE: 0899240332<br>
      Copyright 2020 By NGUYENHAITRUONG
    </p>
  </div>
</footer>
</body>
</html>
</div>
</div>
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
</style>
</head>
<body>

  <div id="overlay" onclick="off()">

   <form method="post" action="trangthai.php" class="form" > 
    <!-- <div class="form-group"> -->
      <div id="trash"  ondrop="drop(event)" ondragover="allowDrop(event)" style="height:100em; background: transparent;"></div>
      <!-- </div> -->
    </form>
  </div>






  <script defer src="../assets/js/vendor/content-api.min2daf.js?v=a5dd59f074"></script>
  <script defer src="../assets/js/manifest2daf.js?v=a5dd59f074"></script>
  <script defer src="../assets/js/vendor2daf.js?v=a5dd59f074"></script>
  <script defer src="../assets/js/app2daf.js?v=a5dd59f074"></script>
  <script defer src="../assets/js/home2daf.js?v=a5dd59f074"></script>
  <!-- <script src="../js/jquery-1.10.2.js"></script> -->
  <script src="../js/bootstrap.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

</body>
</html>