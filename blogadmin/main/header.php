
<?php 
header('Content-type: text/html; charset=utf-8');
include("../libs/db_connect.php");
include 'functionOfMain.php';
session_start();

if(!defined('PREPEND_PATH')) define('PREPEND_PATH', ''); 
$path = $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$chat = '/chat/';
$luutru = '/luutru/';
$task = '/task/';
$duan = '/duan/';
//------------custom
$thongbao ='thongbao.php';
$thongke ='thongke.php';
$vieccanlam = 'vieccanlam.php';
if ((strpos($path, $chat) == true)||(strpos($path, $luutru) == true ||(strpos($path, $task) == true)||(strpos($path, $duan) == true)))  $returnfolder = 1 ; 
else if(strpos($path, $thongbao) == true || strpos($path, $thongke) == true || strpos($path, $vieccanlam) == true)  $returnfolder = 2;
else $returnfolder = 0 ;


if (strpos($path, 'vieccanlam.php') == true) { 
  include("lib.php");
} 
if (getLoggedMemberID()=='guest'){
  $path = $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
  $key = '/chat/';
  if ($returnfolder==1) { 
    header("location:../login.php");
} else { 
    header("location:login.php");
} 
}

?>

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <!-- Topbar Tim kiem -->
    <form
    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm kiếm..."
        aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-primary" type="button">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>
<ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-search fa-fw"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
    aria-labelledby="searchDropdown">
    <form class="form-inline mr-auto w-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small"
            placeholder="Tìm kiếm..." aria-label="Search"
            aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
</div>
</li>

<li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-bell fa-fw"></i>
    <span class="badge badge-danger badge-counter"><?php echo SoLuongThongBao();?>+</span>
</a>
<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
aria-labelledby="alertsDropdown">
<h6 class="dropdown-header">
  Thông báo
</h6>
<?php 
$sql = "SELECT * FROM thongbao";
mysqli_query($con, "SET NAMES 'utf8'");
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {

    $count=0;
    while($row = mysqli_fetch_assoc($result)) if ($row["user"] == $currentuser){
      if ($row["theloai"]=='taskhethan'  && $count<=4){
         $count++;
         echo '<a class="dropdown-item d-flex align-items-center" href="#">
         <div class="mr-3">
         <div class="icon-circle bg-primary">
         <i class="fas fa-file-alt text-white"></i>
         </div>
         </div>
         <div>
         <div class="small text-gray-500">Công việc thường xuyên</div>
         <span class="font-weight-bold">Công việc thường xuyên "'.$row["title"].'" đã quá 24h.</span>
         </div>
         </a>';
     }else if($row["theloai"]=='cvhethan'  && $count<=4){
         $count++;
         echo '<a class="dropdown-item d-flex align-items-center" href="#">
         <div class="mr-3">
         <div class="icon-circle bg-primary">
         <i class="fas fa-file-alt text-white"></i>
         </div>
         </div>
         <div>
         <div class="small text-gray-500">Công việc dài hạn.</div>
         <span class="font-weight-bold">Công việc dài hạn "'.$row["title"].'"  đã hết hạn.</span>
         </div>
         </a>';
     }
 }
  echo $result;
 echo $count;
 if ($count == 0){
    echo ' <div style="padding:10px;"> <span class="font-weight-bold">Không có thông báo nào.</span> </div>';
}
}
?>


<a class="dropdown-item text-center small text-gray-500" href="../thongbao.php">
 
    <?php 
    if (SoLuongThongBao()>5){
        echo 'Xem tất cả thông báo';
        echo '<span class="badge badge-danger badge-counter">';
        echo SoLuongThongBao()-5;
        echo '</span>'; 

    }
    ?>
</a>
</div>
</li>
<div class="topbar-divider d-none d-sm-block"></div>
<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo getLoggedMemberID()?></span>
    <img class="img-profile rounded-circle"
    src="<?php echo getUserImages(); ?>" style="border: 2px solid;">
</a>
<!-- Dropdown - User Information -->
<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
aria-labelledby="userDropdown">
<a class="dropdown-item" href="#">
    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
    Profile
</a>
<a class="dropdown-item" href="#">
    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
    Settings
</a>
<a class="dropdown-item" href="#">
    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
    Activity Log
</a>
<div class="dropdown-divider"></div>

<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
    Đăng xuất 
</a>
</div>
</li>
</ul>
</nav>


<!-- Đăng xuất Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Đăng xuất khỏi hệ thống?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Chọn đăng xuất để rời khỏi hệ thống.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <?php 
            if ($returnfolder==1)  echo '<a class="btn btn-primary" href="../index.php?signOut=1">Đăng xuất</a>';
            else  echo '<a class="btn btn-primary" href="index.php?signOut=1">Đăng xuất</a>';
            ?> 
        </div>
    </div>
</div>
</div>
