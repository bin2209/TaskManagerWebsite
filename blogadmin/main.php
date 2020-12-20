
<?php include_once("{$currDir}/header-user.php"); ?>
<?php @include("{$currDir}/hooks/links-home.php"); ?>
<?php 
include("libs/db_connect.php");
$currentuser=getLoggedMemberID();
$sql = "SELECT  posted,author FROM blogs";
$result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset=UTF-8>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.css" integrity="sha512-C7hOmCgGzihKXzyPU/z4nv97W0d9bv4ALuuEbSf6hm93myico9qa0hv4dODThvCsqQUmKmLcJmlpRmCaApr83g==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<!--cards-->
<style type="text/css">
  .list-inline{
    display: inline;
  }
  .list-inline img{
   transition: transform .2s;
 }
 .list-inline img:hover{
  transform: scale(1.2);
}
</style>

<div style="text-align: center;width: 100%; display: inline;">
  <ul class="nav navbar-nav list-inline" >
    <li id="tool1" class="list-inline-item  js-tooltip" data-tippy-content=" Công việc thường xuyên" data-toggle="tooltip" data-placement="bottom"><a class="social-icon text-xs-center" href="task/"> <img src="../images/giaodien/1.png"></a></li>
    <li class="list-inline-item js-tooltip" data-tippy-content=" Công việc dài hạn" data-toggle="tooltip" data-placement="bottom"><a class="social-icon text-xs-center" href="danhsachcongviec.php"> <img src="../images/giaodien/4t.png"></a></li>
    <li class="list-inline-item js-tooltip" data-tippy-content="Lưu trữ tài liệu" data-toggle="tooltip" data-placement="bottom"><a class="social-icon text-xs-center" href="luutru/"> <img src="../images/giaodien/2t.png"></a></li>
    <li class="list-inline-item js-tooltip" data-tippy-content="Thảo luận" data-toggle="tooltip" data-placement="bottom"><a class="social-icon text-xs-center" href="chat/"> <img src="../images/giaodien/3t.png"></a></li>
  </ul>
</div>

<article class="m-article-card post tag-a-better-you">
  <div class="m-article-card__picture lozad" data-background-image="content/images/system/1.jpg">
    <a href="task/" class="m-article-card__picture-link" aria-label="Article"></a>
  </div>
  <div class="m-article-card__info">
    <a href="task/" class="m-article-card__info-link">
      <div>
        <h2 class="m-article-card__title js-article-card-title ">
         Số công việc thường xuyên.
       </h2>
       <h2 >
        <?php 
        $sqlx = "SELECT  user FROM todo";
        $resultx = mysqli_query($con, $sqlx);
        if (mysqli_num_rows($resultx) > 0) {
          $count=0;
          while($row = mysqli_fetch_assoc($resultx)) if ($row["user"] == $currentuser) $count++;    
        }
        echo $count;
        ?>
      </h2>
    </div>
  </a>
</div>
</article>
<article class="m-article-card post ">
  <div class="m-article-card__picture lozad" data-background-image="content/images/system/2.jpg">
    <a href="vieccanlam.php" class="m-article-card__picture-link" aria-label="Article"></a>
  </div>
  <div class="m-article-card__info">
    <a href="vieccanlam.php" class="m-article-card__info-link">
      <div>
        <h2 class="m-article-card__title js-article-card-title " >
          Số công việc dài hạn.
        </h2>
        <h2 >
          <?php 
          if (mysqli_num_rows($result) > 0) {
            $count=0;
            while($row = mysqli_fetch_assoc($result)) if ($row["author"] == $currentuser) $count++;    
          }
          echo $count;
          ?>
        </h2>
      </div>
    </a>
  </div>
</article>

<article class="m-article-card post tag-thai-van-linh-book-club">
  <div class="m-article-card__picture lozad" data-background-image="content/images/system/3.jpg">
    <a href="thongbao.php" class="m-article-card__picture-link" aria-label="Article"></a>
  </div>
  <div class="m-article-card__info">
    <a href="thongbao.php" class="m-article-card__info-link">
      <div>
        <h2 class="m-article-card__title js-article-card-title ">
         Thông báo & thư hệ thống.
       </h2>
       <h2>
        <?php 
        $sql = "SELECT * FROM thongbao";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
          $count=0;
          while($row = mysqli_fetch_assoc($result)) if ($row["user"] == $currentuser) $count++;    
        }
        echo $count;
        ?>
      </h2>
    </div>
  </a>
</div>
</article>
<article class="m-article-card post tag-thai-van-linh-book-club">
  <div class="m-article-card__picture lozad" data-background-image="content/images/system/4.jpg">
   <a href="thongke.php" class="m-article-card__picture-link" aria-label="Article"></a>
 </div>
 <div class="m-article-card__info">
  <a href="thongke.php" class="m-article-card__info-link">
    <div>
      <h2 class="m-article-card__title js-article-card-title ">
       Thống kê hiệu suất làm việc
     </h2>
     <h2 class="m-article-card__title js-article-card-title ">
     </h2>
   </div>
 </a>
</div>
</article>


<div class="l-wrapper aos-init aos-animate" style="
text-align: center; padding: 20px; margin-bottom: 20px; margin-bottom: 40px;
">
<!--  <div class="chart-container" style="position: relative; height:400px; width:400px;">
  <canvas id="myChart" width="250" height="250" style="width: 250px !important; height: 250px !important; "></canvas>
</div> -->
<style type="text/css">
  .myChart{
    width: 250px !important;
    height: 250px !important;
  }
  .m-article-card__info{
    border-bottom-left-radius: 3em !important;
    border-bottom-right-radius: 3em !important;
  }

</style>
</div>
</div>
</div>
</div>
</main>
</div>

<?php include '../footer.php' ?>
<script crossorigin="anonymous" src="../polyfill.io/v3/polyfill.mina50e.js?features=IntersectionObserver%2CPromise%2CArray.prototype.includes%2CString.prototype.endsWith%2CString.prototype.startsWith%2CObject.assign%2CNodeList.prototype.forEach"></script>
<script defer src="assets/js/vendor/content-api.min2daf.js?v=a5dd59f074"></script>
<script defer src="assets/js/manifest2daf.js?v=a5dd59f074"></script>
<script defer src="assets/js/vendor2daf.js?v=a5dd59f074"></script>
<script defer src="assets/js/app2daf.js?v=a5dd59f074"></script>
<script defer src="assets/js/home2daf.js?v=a5dd59f074"></script>
</body>
</html>


<?php
$usernow=getLoggedMemberID();
if ($usernow=="admin") {
          # code...show more widgets for admin only
  include_once(
    'adminview.php'
  );
}
?>



<?php 
// TẠO MỚI USER Ở BẢNG THỐNG KÊ DÀI HẠN
$found = false;
$sql = "SELECT * FROM `thongkedaihan`";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    if ($row["user"]== getLoggedMemberID()){
      $found= true;
    }
  }
}
if($found == false){
  $sql = 'INSERT INTO thongkedaihan (id,user,cvhoanthanh,cvchuaxong,cvhethan) VALUES (0,"'.getLoggedMemberID().'",0,0,0)';
  $result = mysqli_query($con, $sql);
}
?>
</div>
</div>



<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js" ></script>
<script src="js/loading.js"></script>
<script src="js/thongke.js"></script>
<script src="js/tooltipbs4.js"></script>
<!-- THỐNG KÊ -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js" integrity="sha512-zO8oeHCxetPn1Hd9PdDleg5Tw1bAaP0YmNvPY8CwcRyUk7d7/+nyElmFrB6f7vg4f7Fv4sui1mcep8RIEShczg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>