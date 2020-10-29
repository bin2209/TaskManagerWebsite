<!DOCTYPE html>
<?php if(!defined('PREPEND_PATH')) define('PREPEND_PATH', ''); ?>
<?php if(!defined('datalist_db_encoding')) define('datalist_db_encoding', 'UTF-8'); ?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php echo datalist_db_encoding; ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/initializr/css/yeti.css">
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/lightbox/css/lightbox.css" media="screen">
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/select2/select2.css" media="screen">
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/timepicker/bootstrap-timepicker.min.css" media="screen">
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/datepicker/css/datepicker.css" media="screen">
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>dynamic.css.php">

    <script src="<?php echo PREPEND_PATH; ?>resources/jquery/js/jquery-1.12.4.min.js"></script>
    <script>var $j = jQuery.noConflict();</script>
    <script src="<?php echo PREPEND_PATH; ?>resources/jquery/js/jquery.mark.min.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>resources/initializr/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>resources/lightbox/js/prototype.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>resources/lightbox/js/scriptaculous.js?load=effects"></script>
    <script src="<?php echo PREPEND_PATH; ?>resources/select2/select2.min.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>resources/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>resources/jscookie/js.cookie.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>resources/datepicker/js/datepicker.packed.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>common.js.php"></script>
    <?php if(isset($x->TableName) && is_file(dirname(__FILE__) . "/hooks/{$x->TableName}-tv.js")){ ?>
    <script src="<?php echo PREPEND_PATH; ?>hooks/<?php echo $x->TableName; ?>-tv.js"></script>
    <?php } ?>



    <!-- <new -->

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>binazure | Hỗ trợ công việc</title>
      <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="HandheldFriendly" content="True" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <style>
        @font-face { font-family: 'icomoon'; src: url("assets/fonts/icomoonf924.eot?vukg2s?v=a5dd59f074"); src: url("assets/fonts/icomoone531.eot?vukg2s#iefix?v=a5dd59f074") format('embedded-opentype'), url("assets/fonts/icomoonf924.ttf?vukg2s?v=a5dd59f074") format('truetype'), url("assets/fonts/icomoonf924.woff?vukg2s?v=a5dd59f074") format('woff'), url("assets/fonts/icomoone531.svg?vukg2s#icomoon?v=a5dd59f074") format('svg'); font-weight: normal; font-style: normal; font-display: swap; }
    </style>
    <link rel="stylesheet" type="text/css" href="assets/css/app2daf.css?v=a5dd59f074" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700|Montserrat:400,500,600,700|Roboto:400,500,700&amp;display=swap&amp;subset=vietnamese" rel="stylesheet">
    <style>
        .m-hero__picture { background-image: url(content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } @media(max-width: 1000px) { .m-hero__picture { background-image: url(content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } } @media(max-width: 600px) { .m-hero__picture { background-image: url(content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } }
    </style>
    <meta name="description" content="Bài viết, cập nhật mới nhất từ công ty và những nội dung tuyệt vời khác dành cho những độc giả yêu sách, muốn học hỏi nhiều điều mới lạ và cải thiện bản thân." />
    <link rel="icon" href="favicon.html" type="image/png" />
    <script type="application/ld+json">
      { "@context": "https://schema.org", "@type": "WebSite", "publisher": { "@type": "Organization", "name": "Fonos Blog", "url": "https://blog.fonos.vn/", "logo": { "@type": "ImageObject", "url": "https://blog.fonos.vn/favicon.png" } }, "url": "https://blog.fonos.vn/", "image": { "@type": "ImageObject", "url": "https://fonos.ghost.io/content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg", "width": 2000, "height": 1333 }, "mainEntityOfPage": { "@type": "WebPage", "@id": "https://blog.fonos.vn/" }, "description": "Bài viết, cập nhật mới nhất từ công ty và những nội dung tuyệt vời khác dành cho những độc giả yêu sách, muốn học hỏi nhiều điều mới lạ và cải thiện bản thân." }
  </script>
  <meta name="generator" content="Ghost 3.36" />
  <link rel="alternate" type="application/rss+xml" title="Fonos Blog" href="rss/index.html" />
  <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K58WK8W');
</script>
<meta name="google-site-verification" content="sZvoMk2njR-Khp0y6gP-KpjRGfbTXGzy2eJ7sR6__Xg" />
<script>
    WebFontConfig = { google: { families: ['Source+Sans+Pro:400,600,700&display=swap'] } }; (function (d) { var wf = d.createElement('script'), s = d.scripts[0]; wf.src = '../ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'; wf.async = true; s.parentNode.insertBefore(wf, s); })(document);
</script>

</head>
<body>
    <style type="text/css">
        .m-article-card{
            float: left;
            padding: 10px;
            width: calc(33.33333% - 40px);
            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: 40px;
        }
        .table-responsive .table{
            display: none;
        }
        .row{
          width: 100%;
        }
    </style>
    <div class="container theme-yeti theme-compact">
        <?php if(function_exists('handle_maintenance')) echo handle_maintenance(true); ?>

        <?php if(!$_REQUEST['Embedded']){ ?>
        <?php if(function_exists('htmlUserBar')) echo htmlUserBar(); ?>
        <div style="height: 70px;" class="hidden-print"></div>
        <?php } ?>

        <?php if(class_exists('Notification')) echo Notification::placeholder(); ?>

        <!-- process notifications -->
        <?php $notification_margin = ($_REQUEST['Embedded'] ? '15px 0px' : '-15px 0 -45px'); ?>
        <div style="height: 60px; margin: <?php echo $notification_margin; ?>;">
            <?php if(function_exists('showNotifications')) echo showNotifications(); ?>
        </div>

        <?php if(!defined('APPGINI_SETUP') && is_file(dirname(__FILE__) . '/hooks/header-extras.php')){ include(dirname(__FILE__).'/hooks/header-extras.php'); } ?>
        <div class="l-grid centered">
            <!-- Add header template below here .. -->



