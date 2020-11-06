<!DOCTYPE html>
<?php if(!defined('PREPEND_PATH')) define('PREPEND_PATH', ''); ?>
<?php if(!defined('datalist_db_encoding')) define('datalist_db_encoding', 'UTF-8'); ?>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
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
  <meta charset="utf-8">
  <title>binazure | Hỗ trợ công việc</title>
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="assets/css/app2daf.css?v=a5dd59f074" media="screen" />
  <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700|Montserrat:400,500,600,700|Roboto:400,500,700&amp;display=swap&amp;subset=vietnamese" rel="stylesheet">
  <style>
    .m-hero__picture { background-image: url(content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } @media(max-width: 1000px) { .m-hero__picture { background-image: url(content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } } @media(max-width: 600px) { .m-hero__picture { background-image: url(content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } }
  </style>
  <link rel="icon" href="favicon.html" type="image/png" />
  <link rel="stylesheet" type="text/css" href="css/styles.css">
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
    <?php $notification_margin = ($_REQUEST['Embedded'] ? '15px 0px' : '-15px 0 -45px'); ?>
    <div style="height: 60px; margin: <?php echo $notification_margin; ?>;">
      <?php if(function_exists('showNotifications')) echo showNotifications(); ?>
    </div>
    <?php if(!defined('APPGINI_SETUP') && is_file(dirname(__FILE__) . '/hooks/header-extras.php')){ include(dirname(__FILE__).'/hooks/header-extras.php'); } ?>
    <div class="l-grid centered">



