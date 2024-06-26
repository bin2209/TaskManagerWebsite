<?php include_once("header-user.php");
  

 ?>
<!DOCTYPE html>
<head>
</head>
<html>
<link rel="stylesheet" type="text/css" href="../css/iosdesign.css">

<?php
$currDir=dirname(__FILE__);
include("$currDir/defaultLang.php");
include("$currDir/language.php");
  // @include("$currDir/hooks/blogs.php");
include("$currDir/blogs_dml.php");

  // mm: can the current member access this page?
$perm=getTablePermissions('blogs');
if(!$perm[0]){
  echo error_message($Translation['tableAccessDenied'], false);
  echo '<script>setTimeout("window.location=\'index.php?signOut=1\'", 2000);</script>';
  exit;
}

$x = new DataList;
$x->TableName = "blogs";

  // Fields that can be displayed in the table view
$x->QueryFieldsTV = array(   
  "`blogs`.`id`" => "id",
  "`blogs`.`title`" => "title",
  "IF(    CHAR_LENGTH(`blog_categories1`.`name`), CONCAT_WS('',   `blog_categories1`.`name`), '') /* Category */" => "category",
  "`blogs`.`tags`" => "tags",
  "`blogs`.`content`" => "content",
  "`blogs`.`photo`" => "photo",
  "if(`blogs`.`date`,date_format(`blogs`.`date`,'%d/%m/%Y'),'')" => "date",
  "if(`blogs`.`ngayhethan`,date_format(`blogs`.`ngayhethan`,'%d/%m/%Y'),'')" => "ngayhethan",
  "`blogs`.`author`" => "author",
  "`blogs`.`posted`" => "posted",
  "`blogs`.`star`" => "star"  
);
  // mapping incoming sort by requests to actual query fields
$x->SortFields = array(   
  1 => '`blogs`.`id`',
  2 => 2,
  3 => '`blog_categories1`.`name`',
  4 => 4,
  5 => 5,
  6 => 6,
  7 => '`blogs`.`date`',
  8 => '`blogs`.`ngayhethan`',
  9 => 9,
  10 => 10,
  11 => 11
);

  // Fields that can be displayed in the csv file
$x->QueryFieldsCSV = array(   
  "`blogs`.`id`" => "id",
  "`blogs`.`title`" => "title",
  "IF(    CHAR_LENGTH(`blog_categories1`.`name`), CONCAT_WS('',   `blog_categories1`.`name`), '') /* Category */" => "category",
  "`blogs`.`tags`" => "tags",
  "`blogs`.`content`" => "content",
  "`blogs`.`photo`" => "photo",
  "if(`blogs`.`date`,date_format(`blogs`.`date`,'%d/%m/%Y'),'')" => "date",
    //TRUONG004 - TABLE NGÀY HẾT HẠN
  "if(`blogs`.`ngayhethan`,date_format(`blogs`.`ngayhethan`,'%d/%m/%Y'),'')" => "ngayhethan",
  "`blogs`.`author`" => "author",
  "`blogs`.`posted`" => "posted",
  "`blogs`.`star`" => "star"
);
  // Fields that can be filtered
$x->QueryFieldsFilters = array(   
  "`blogs`.`id`" => "ID",
  "`blogs`.`title`" => "Title",
  "IF(    CHAR_LENGTH(`blog_categories1`.`name`), CONCAT_WS('',   `blog_categories1`.`name`), '') /* Category */" => "Category",
  "`blogs`.`tags`" => "Tags",
  "`blogs`.`content`" => "Content",
  "`blogs`.`date`" => "Date",
  "`blogs`.`ngayhethan`" => "NgayHetHan",
  "`blogs`.`author`" => "Author",
  "`blogs`.`posted`" => "Status",
  "`blogs`.`star`" => "star"
);

  // Fields that can be quick searched
$x->QueryFieldsQS = array(   
  "`blogs`.`id`" => "id",
  "`blogs`.`title`" => "title",
  "IF(    CHAR_LENGTH(`blog_categories1`.`name`), CONCAT_WS('',   `blog_categories1`.`name`), '') /* Category */" => "category",
  "`blogs`.`tags`" => "tags",
  "`blogs`.`content`" => "content",
  "if(`blogs`.`date`,date_format(`blogs`.`date`,'%d/%m/%Y'),'')" => "date",
  "if(`blogs`.`ngayhethan`,date_format(`blogs`.`ngayhethan`,'%d/%m/%Y'),'')" => "ngayhethan",
  "`blogs`.`author`" => "author",
  "`blogs`.`posted`" => "posted",
  "`blogs`.`star`" => "star"
);


  // Lookup fields that can be used as filterers
$x->filterers = array(  'category' => 'Category');
$x->QueryFrom = "`blogs` LEFT JOIN `blog_categories` as blog_categories1 ON `blog_categories1`.`id`=`blogs`.`category` ";
$x->QueryWhere = '';
$x->QueryOrder = '';

$x->AllowSelection = 1;
$x->HideTableView = ($perm[2]==0 ? 1 : 0);
$x->AllowDelete = $perm[4];
$x->AllowMassDelete = true;
$x->AllowInsert = $perm[1];
$x->AllowUpdate = $perm[3];
$x->SeparateDV = 1;
$x->AllowDeleteOfParents = 1;
$x->AllowFilters = 1;
$x->AllowSavingFilters = 1;
$x->AllowSorting = 1;
$x->AllowNavigation = 1;
$x->AllowPrinting = 1;
$x->AllowCSV = 1;
$x->RecordsPerPage = 10;
$x->QuickSearch = 1;
$x->QuickSearchText = $Translation["quick search"];
$x->ScriptFileName = "vieccanlam.php";
$x->RedirectAfterInsert = "vieccanlam.php?SelectedID=#ID#";
$x->TableTitle = "<x class='chedobang'><i class='glyphicon glyphicon-list'></i> Chuyển sang bảng</x>";
  // $x->TableIcon = "resources/table_icons/feed.png";
$x->PrimaryKey = "`blogs`.`id`";

$x->ColWidth   = array(  150, 150, 150, 150, 150, 150, 150, 150,150,150);
  //TRUONG2 - Thêm database cột star/ blog + recode
$x->ColCaption = array("Tiêu đề công việc", "Phân loại", "Tags", "Nội dung", "Ảnh", "Ngày tạo","Ngày hết hạn", "Thành viên tạo  ", "Trạng thái","Độ ưu tiên");
$x->ColFieldName = array('title', 'category', 'tags', 'content', 'photo', 'date',' ngayhethan', 'author', 'posted','star');
$x->ColNumber  = array(2, 3, 4, 5, 6, 7, 8, 9, 10,11);

  // template paths below are based on the app main directory
// $x->Template = 'templates/blogs_templateTV.html';
$x->Template = 'templates/giaodienTV.php';
$x->SelectedTemplate = 'templates/blogs_templateTVS.html';
$x->TemplateDV = 'templates/blogs_templateDV.php';
$x->TemplateDVP = 'templates/blogs_templateDVP.html';

$x->ShowTableHeader = 1;
$x->ShowRecordSlots = 0;
$x->TVClasses = "";
$x->DVClasses = "";
$x->HighlightColor = '#FFF0C2';
  // mm: build the query based on current member's permissions
$DisplayRecords = $_REQUEST['DisplayRecords'];
if(!in_array($DisplayRecords, array('user', 'group'))){ $DisplayRecords = 'all'; }
  if($perm[2]==1 || ($perm[2]>1 && $DisplayRecords=='user' && !$_REQUEST['NoFilter_x'])){ // view owner only
    $x->QueryFrom.=', membership_userrecords';
    $x->QueryWhere="where `blogs`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='blogs' and lcase(membership_userrecords.memberID)='".getLoggedMemberID()."'";
  }elseif($perm[2]==2 || ($perm[2]>2 && $DisplayRecords=='group' && !$_REQUEST['NoFilter_x'])){ // view group only
    $x->QueryFrom.=', membership_userrecords';
    $x->QueryWhere="where `blogs`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='blogs' and membership_userrecords.groupID='".getLoggedGroupID()."'";
  }elseif($perm[2]==3){ // view all
    // no further action
  }elseif($perm[2]==0){ // view none
    $x->QueryFields = array("Not enough permissions" => "NEP");
    $x->QueryFrom = '`blogs`';
    $x->QueryWhere = '';
    $x->DefaultSortField = '';
  }
  // hook: blogs_init
  $render=TRUE;
  if(function_exists('blogs_init')){
    $args=array();
    $render=blogs_init($x, getMemberInfo(), $args);
  }
  if($render) $x->Render();
  // hook: blogs_header
  $headerCode='';
  if(function_exists('blogs_header')){
    $args=array();
    $headerCode=blogs_header($x->ContentType, getMemberInfo(), $args);
  }  
  if(!$headerCode){
    include_once("$currDir/headerTV.php"); 
  }else{
    ob_start(); include_once("$currDir/headerTV.php"); $dHeader=ob_get_contents(); ob_end_clean();
    echo str_replace('<%%HEADER%%>', $dHeader, $headerCode);
  }
  
  echo $x->HTML;
  include("tiendocongviec.php");

  ?>
  <style type="text/css">
    .m-hero  {
      display: none;
    }

    .m-hero__picture {
      display: none;
    }
    .m-site-name{
      font-size: 18px;
    }
    .m-submenu{
      font-size: 1.47rem;
    }
    .col-sm-8 a {
      float: left;
    }
    .l-content{
      position: relative;
      top: -8em;
    }
    
  </style>
</div>
</div>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- <script defer src="assets/js/home2daf.js?v=a5dd59f074"></script> -->
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

</div>
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js" ></script>
<script src="js/loading.js"></script>
</body>
</html>

