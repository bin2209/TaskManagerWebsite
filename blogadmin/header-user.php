<!DOCTYPE html>
<?php 

if(!defined('PREPEND_PATH')) define('PREPEND_PATH', ''); 
$path = $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$chat = '/chat/';
$luutru = '/luutru/';
$task = '/task/';
if ((strpos($path, $chat) == true)||(strpos($path, $luutru) == true ||(strpos($path, $task) == true))) { 
  $returnfolder = 1 ; // ở trong chat
} 
else { 
  $returnfolder = 0 ;
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
<?php if(!defined('datalist_db_encoding')) define('datalist_db_encoding', 'UTF-8'); ?>
<?php require_once("libs/count_records.php");?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo getLoggedMemberID(); ?> | TaskVN</title>
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="favicon.html" type="image/png" />
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Muli" />
  <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body class="home-template">
 <div class="main-wrap">
  <header class="m-header with-picture js-header">
    <div class="m-mobile-topbar" data-aos="fade-down">
      <button class="m-icon-button in-mobile-topbar js-open-menu" aria-label="Open menu">
        <span class="icon-menu"></span>
      </button>
      <a href="index.html" class="m-site-name in-mobile-topbar">
        Khu vực thành viên
      </a>
      <button class="m-icon-button in-mobile-topbar js-open-search" aria-label="Open search">
        <span class="icon-search"></span>
      </button>
    </div>
    <div class="m-menu js-menu">
      <button class="m-icon-button outlined as-close-menu js-close-menu" aria-label="Close menu">
        <span class="icon-close"></span>
      </button>
      <div class="m-menu__main" data-aos="fade-down">
        <div class="l-wrapper">
          <div class="m-nav">
            <nav class="m-nav__left">
              <ul role="submenu">
                <li class="only-desktop" role="menuitem">
                  <a href="https://taskvn.com" class="m-site-name in-desktop-menu">
                    TaskVN
                  </a>
                </li>
                <li class="nav-ve-fonos" role="menuitem">
                 <?php 
                  // $path = $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
                  // $key = '/chat/';
                 // echo $returnfolder;
                 if ($returnfolder==1) { 
                  echo ' <a href="../">Trở về</a>';
                } 
                ?>
              </li>
            </ul>
          </nav>
          <div class="m-nav__right">
            <button class="m-icon-button in-menu-main more js-toggle-submenu" aria-label="Toggle submenu">
              <span class="icon-more">
              </button><p class="in-menu-main more js-toggle-submenu m-icon-button" style="padding-left: 10px;   cursor: pointer; width: 100%; font-size: 15px;" >  <?php echo getLoggedMemberID(); ?><p>
                <div class="m-submenu js-submenu">
                  <div class="l-wrapper in-submenu">
                    <section class="m-recent-articles">

                      <li><i class="fa fa-user"></i> <strong>
                       <?php 
                       if ($returnfolder==1)  echo ' <a href="../task">Công việc thường xuyên</a>';
                       else echo '<a href="task/">Công việc thường xuyên</a>';
                       ?>
                     </strong></li><br>

                     <li><i class="fa fa-user"></i> <strong>
                       <?php 
                       if ($returnfolder==1)  echo ' <a href="../danhsachcongviec.php">Quản lý công việc dài hạn</a>';
                       else echo '<a href="danhsachcongviec.php">Quản lý công việc dài hạn</a>';
                       ?>
                     </strong></li><br>

                     <li><i class="fa fa-user"></i> <strong>

                      <?php 
                      if ($returnfolder==1)  echo ' <a href="../luutru">Lưu trữ dữ liệu</a>';
                      else echo '<a href="luutru/">Lưu trữ dữ liệu</a>';
                      ?>

                    </strong></li> <br>

                    <li><i class="fa fa-user"></i> <strong>  
                      <?php 
                      if ($returnfolder==1)  echo ' <a href="../thaoluan.php">Thảo luận</a>';
                      else echo ' <a href="chat/">Thảo luận</a>';
                      ?>
                    </strong></li>
                    <br>
                    <li><i class="fa fa-user"></i> <strong>
                     <?php 
                     if ($returnfolder==1) echo '<a href="../caidat.php">Cài đặt tài khoản</a>';
                     else  echo ' <a href="caidat.php">Cài đặt tài khoản</a>';
                     ?>
                   </strong> </a></li>
                   <?php if(getLoggedAdmin()){ ?>
                     <a href="<?php echo PREPEND_PATH; ?>admin/pageHome.php" class="btn btn-danger navbar-btn btn-sm hidden-xs"><i class="fa fa-cog"></i> <strong><?php echo $Translation['admin area']; ?></strong></a>
                     <a href="<?php echo PREPEND_PATH; ?>admin/pageHome.php" class="btn btn-danger navbar-btn btn-sm visible-xs btn-sm"><i class="fa fa-cog"></i> <strong><?php echo $Translation['admin area']; ?></strong></a>
                   <?php } ?>
                   <?php if(!$_GET['signIn'] && !$_GET['loginFailed']){ ?>
                     <?php if(getLoggedMemberID() == $adminConfig['anonymousMember']){ ?>
                       <p class="navbar-text navbar-right">&nbsp;</p>
                       <ul class="nav navbar-nav navbar-right hidden-xs" style="min-width: 330px;">
                       </ul>
                       <ul class="nav navbar-nav visible-xs">
                       </ul>
                     <?php } ?>
                   <?php } ?>
                   <br/>

                   <li>  
                    <?php 
                    if ($returnfolder==1)  echo '<a  href="../index.php?signOut=1"><i class="fa fa-power-off"></i> <strong>Đăng xuất</strong> </a>';
                    else  echo '<a  href="index.php?signOut=1"><i class="fa fa-power-off"></i> <strong>Đăng xuất</strong> </a>';
                    ?>
                  </li>
                </section>
              </div>
            </div>
          </li>
          <button class="m-icon-button in-menu-main js-open-search" aria-label="Open search">
            <span class="icon-search"></span>
          </button>
          <div class="m-toggle-darkmode js-tooltip" data-tippy-content="Bật chế độ tối">
            <input type="checkbox" class="js-toggle-darkmode">
            <div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</header>

<?php
$usernow=getLoggedMemberID();
if ($usernow=="admin") {
  echo'<li><a href="titles_view.php"><i class="fa fa-desktop"></i>Web Details</a></li>
  <li><a href="links_view.php"><i class="fa fa-link"></i>Links</a></li>
  <li><a href="editors_choice_view.php"><i class="fa fa-trophy"></i>Editors Choice</a></li>
  <li><a href="../adminstats"><i class="fa fa-bar-chart-o"></i>Admin Stats</a></li>';
}
?>
<section class="m-hero with-picture" data-aos="fade">
  <div class="m-hero__picture "></div>
  <div class="m-hero__content" data-aos="fade-down">

    <?php 
    $path = $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
    $keychat = '/chat/';
    $keyluutru = '/luutru/';
    $keydanhsachcongviec ='danhsachcongviec.php';
    $keycaidat='caidat.php';

  $ketqua = basename($path);//index
  if (strpos($path, $keychat) == true) { //chat
    echo '<h1 class="m-hero-title bigger">Thảo luận</h1>';
  } else if (strpos($path, $keydanhsachcongviec) == true){
   echo '<h1 class="m-hero-title bigger">Danh sách công việc</h1>';
 } else if (strpos($path, $keycaidat) == true){
   echo '<h1 class="m-hero-title bigger">Cài đặt tài khoản</h1>';
 } else if (strpos($path, $keyluutru) == true){
   echo '<h1 class="m-hero-title bigger">Lưu trữ dữ liệu  </h1>';
 }

 else if ((strpos($path, $keychat) == false) && $ketqua=="index.php"){ //index
   echo '<h1 class="m-hero-title bigger">Khu vực quản lý công việc</h1>
   <p class="m-hero-description bigger">Hãy bắt đầu ngày mới bằng cách hoàn thành các công việc</p>';
 }

 ?>

</div>
</section>
<div  class="l-grid centered" style="padding:20px">
 <?php 
 $path = $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
 $ketqua = basename($path);
 if  ($ketqua=="index.php"){
  include("libs/alerts.php");
}
?>
</div>
<main>
  <div class="l-content">
    <div class="l-wrapper" data-aos="fade-up" data-aos-delay="300">
      <div class="l-grid centered">
        <!-- THIS -->
