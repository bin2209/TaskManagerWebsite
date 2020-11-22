
<?php include_once("{$currDir}/header-user.php"); ?>
<?php @include("{$currDir}/hooks/links-home.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<iframe src="vieccanlam.php" style=" top:0; left:0; bottom:0; right:0; width:100%; height:2200px; border:none; margin:0; padding:0; overflow:hidden; z-index:999999; border-radius: 1em;"></iframe>
<style type="text/css">
  iframe{
    position: relative;
    top: 50%;
    left: 50%;
    margin-right: -50%;
  }
</style>
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

</div>
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js" ></script>
<script src="js/loading.js"></script>
</body>
</html>