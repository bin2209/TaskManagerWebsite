<!DOCTYPE html>
<?php if(!defined('PREPEND_PATH')) define('PREPEND_PATH', ''); ?>
<?php if(!defined('datalist_db_encoding')) define('datalist_db_encoding', 'UTF-8'); ?>
<?php require_once("libs/count_records.php");?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo getLoggedMemberID(); ?> | Hỗ trợ công việc</title>

  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">


  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta name="HandheldFriendly" content="True" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <style>
   @font-face { font-family: 'icomoon'; src: url("assets/fonts/icomoonf924.eot?vukg2s?v=a5dd59f074"); src: url("assets/fonts/icomoone531.eot?vukg2s#iefix?v=a5dd59f074") format('embedded-opentype'), url("assets/fonts/icomoonf924.ttf?vukg2s?v=a5dd59f074") format('truetype'), url("assets/fonts/icomoonf924.woff?vukg2s?v=a5dd59f074") format('woff'), url("assets/fonts/icomoone531.svg?vukg2s#icomoon?v=a5dd59f074") format('svg'); font-weight: normal; font-style: normal; font-display: swap; } </style> <link rel="stylesheet" type="text/css" href="assets/css/app2daf.css?v=a5dd59f074" media="screen" /> <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700|Montserrat:400,500,600,700|Roboto:400,500,700&amp;display=swap&amp;subset=vietnamese" rel="stylesheet"> <style> .m-hero__picture { background-image: url(content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } @media(max-width: 1000px) { .m-hero__picture { background-image: url(content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } } @media(max-width: 600px) { .m-hero__picture { background-image: url(content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } }

 </style>

 <meta name="description" content="Bài viết, cập nhật mới nhất từ công ty và những nội dung tuyệt vời khác dành cho những độc giả yêu sách, muốn học hỏi nhiều điều mới lạ và cải thiện bản thân." />
 <link rel="icon" href="favicon.html" type="image/png" />


 <meta name="generator" content="Ghost 3.36" />
 <link rel="alternate" type="application/rss+xml" title="Fonos Blog" href="rss/index.html" />
 <!-- Google Tag Manager -->
 <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
 j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
 '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K58WK8W');</script>
<!-- End Google Tag Manager -->
<meta name="google-site-verification" content="sZvoMk2njR-Khp0y6gP-KpjRGfbTXGzy2eJ7sR6__Xg" />

<script>
      // @license magnet:?xt=urn:btih:d3d9a9a6595521f9666a5e94cc830dab83b65699&dn=expat.txt Expat
      const ghostHost = "index.html"
      // @license-end
    </script>

    <script>
      // @license magnet:?xt=urn:btih:d3d9a9a6595521f9666a5e94cc830dab83b65699&dn=expat.txt Expat
      WebFontConfig = {
        google: { families: ['Source+Sans+Pro:400,600,700&display=swap'] }
      };

      (function (d) {
        var wf = d.createElement('script'), s = d.scripts[0];
        wf.src = '../ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
      })(document);
      // @license-end
    </script>
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
                    <a href="index.html" class="m-site-name in-desktop-menu">
                     Khu vực thành viên
                   </a>
                 </li>
                 <li class="nav-ve-fonos" role="menuitem">
                  <?php 
                  $path = $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
                  $ketqua = basename($path);
                  if  ($ketqua=="index.php"){
                    echo ' <a href="../">Về trang chủ</a>';
                  } else{
                    echo ' <a href="./">Trở lại</a>';
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
                        <li><a href="<?php echo PREPEND_PATH; ?>membership_profile.php"><i class="fa fa-user"></i> <strong>Cài đặt chung</strong> </a></li>
                        <!--login/logout area starts-->

                        <?php if(getLoggedAdmin()){ ?>
                         <a href="<?php echo PREPEND_PATH; ?>admin/pageHome.php" class="btn btn-danger navbar-btn btn-sm hidden-xs"><i class="fa fa-cog"></i> <strong><?php echo $Translation['admin area']; ?></strong></a>
                         <a href="<?php echo PREPEND_PATH; ?>admin/pageHome.php" class="btn btn-danger navbar-btn btn-sm visible-xs btn-sm"><i class="fa fa-cog"></i> <strong><?php echo $Translation['admin area']; ?></strong></a>
                       <?php } ?>
                       <?php if(!$_GET['signIn'] && !$_GET['loginFailed']){ ?>
                         <?php if(getLoggedMemberID() == $adminConfig['anonymousMember']){ ?>
                           <p class="navbar-text navbar-right">&nbsp;</p>
                           <a href="<?php echo PREPEND_PATH; ?>index.php?signIn=1" class="">Đăng xuất</a>
                           <p class="navbar-text navbar-right">
                             Bạn chưa đăng nhập!
                           </p>
                         <?php }else{ ?>
                          <ul class="nav navbar-nav navbar-right hidden-xs" style="min-width: 330px;">
                          </ul>
                          <ul class="nav navbar-nav visible-xs">
                          </ul>
                        <?php } ?>
                      <?php } ?>
                      <!--login/logout area ends-->
                      <li><a  href="<?php echo PREPEND_PATH; ?>index.php?signOut=1"><i class="fa fa-power-off"></i> <strong>Đăng xuất</strong> </a></li>
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
     $ketqua = basename($path);
     if  ($ketqua=="index.php"){
      echo '<h1 class="m-hero-title bigger">Khu vực quản lý công việc</h1>
      <p class="m-hero-description bigger">Hãy bắt đầu ngày mới bằng cách hoàn thành các công việc</p>';
    } else{
      echo ' <h1 class="m-hero-title bigger">Danh sách công việc</h1>';
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
