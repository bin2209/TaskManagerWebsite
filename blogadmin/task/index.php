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
<!DOCTYPE html>
<html>
<head>
  <meta charset charset=UTF-8>
  <title></title>
  <script src="java.js"></script>
</head>
<!-- <CONTENT -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<h1 id="drag1"  draggable="true" ondragstart="drag(event)" width="336" height="69">helo</h1>
<form class="form" action="add.php" method="post">
  <div class="form-group">
    <label for="task">Task</label>
    <input type="text" class="form-control" name="task" id="task" aria-describedby="emailHelp" required="true">
    <label for="noidung">Nội dung</label>
    <textarea class="form-control" name="noidung" id="noidung" rows="1" required="true"></textarea>
    <input type="text" class="form-control" name="trangthai" id="trangthai" value="doing" aria-describedby="emailHelp" style="display: none;">
    <?php 
    echo ' <input type="text" class="form-control" name="user" id="user" value="'.getLoggedMemberID().'" aria-describedby="emailHelp" style="display: none;">';
    ?>
  </div>
  <button type="submit" class="btn btn-primary" id="add">Thêm</button>
</form>
  
<table class="table">
  <thead>
    <tr>
      <th scope="col">TT</th>
      <th scope="col">Task</th>
      <th scope="col">Nội dung</th>
      <th scope="col"></th>
      <th scope="col"></th> 
    </tr>
  </thead>

  <form method="post" action="trangthai.php">
    <tbody id="tableBody">
      <?php 
      $sql = "SELECT * FROM `todo`";
      $result = mysqli_query($con, $sql);
      $idpost=0;
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          if ($row["user"]== getLoggedMemberID()){
            $idpost ++;
            echo '  
            ';
            if ($row["trangthai"]=="doing"){
              echo ' 
              <tr draggable="true" ondragstart="drag(event)" >
              <th scope="row" >'.$idpost.'</th>
              <td>'.$row["task"].'</td>
              <td>'.$row["noidung"].'</td>
              <td><button type="submit" id="'.$row["id"].'" name="id" class="btn btn-primary btn-sm " value="'.$row["id"].'">Hoàn thành</button>
              <button type="submit" id="'.$row["id"].'" name="id" class="btn btn-primary btn-sm " value="delete'.$row["id"].'">Xóa</button></td>
              </tr>';
            }else if ($row["trangthai"]=="done"){
             echo ' 
             <tr draggable="true" ondragstart="drag(event)"  style="background-color: #e7e7e7; color: black;">
             <th scope="row">'.$idpost.'</th>
             <td style=" text-decoration: line-through;">'.$row["task"].'</td>
             <td style=" text-decoration: line-through;">'.$row["noidung"].'</td>
             <td><button type="submit" id="redoing" class="btn btn-primary btn-sm" name="id" value="'.$row["id"].'">Hoàn tác</button>
             <button type="submit" id="deleted" class="btn btn-primary btn-sm" name="id" value="delete'.$row["id"].'">Xóa</button></td>
             </tr>';
           }
         }

       }
     }
     ?>
   
     <br>
    

   </tbody>
 </form>
</table>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script>
  function allowDrop(ev) {
    ev.preventDefault();
  }

  function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
  }

  function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
  }
</script>
<style>
#div1 {
  width: 250px;
  height: 70px;
  padding: 10px;
  border: 1px solid #aaaaaa;
}
</style>

<!-- <CONTENT -->

</div>
</div>
</div>
</main>
</div>
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
<script defer src="../assets/js/vendor/content-api.min2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/manifest2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/vendor2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/app2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/home2daf.js?v=a5dd59f074"></script>
<script src="../js/jquery-1.10.2.js"></script>
<script src="../js/bootstrap.js"></script>

</body>
</html>