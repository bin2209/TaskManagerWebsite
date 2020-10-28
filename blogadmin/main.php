<?php if(!isset($Translation)){ @header('Location: index.php'); exit; } ?>
<?php include_once("{$currDir}/header-user.php"); ?>
<?php @include("{$currDir}/hooks/links-home.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<!--cards-->


  <article class="m-article-card post tag-a-better-you">
    <div class="m-article-card__picture lozad" data-background-image="/content/images/size/w600/2020/09/Blog-Post-Image--2-.png">
      <a href="blogs_view.php" class="m-article-card__picture-link" aria-label="Article"></a>
    </div>
    <div class="m-article-card__info">
      <a href="blogs_view.php" class="m-article-card__tag"><?php countrecords("blogs","all");?></a>
      <a href="blogs_view.php" class="m-article-card__info-link">
        <div>
          <h2 class="m-article-card__title js-article-card-title ">
           Công việc đang theo dõi
         </h2>
       </div>
     </a>
   </div>
 </article>
 <article class="m-article-card post tag-nhung-cuon-sach-hay-nhat">
  <div class="m-article-card__picture lozad" data-background-image="/content/images/size/w600/2020/09/Blog-Post-Image--1-.png">
    <a href="blog_categories_view.php" class="m-article-card__picture-link" aria-label="Article"></a>
  </div>
  <div class="m-article-card__info">
    <a href="blog_categories_view.php" class="m-article-card__tag"><?php admincounter("blog_categories");?></a>
    <a href="blog_categories_view.php" class="m-article-card__info-link">
      <div>
        <h2 class="m-article-card__title js-article-card-title " >
          Phân loại công việc
        </h2>
      </div>
    </a>
  </div>
</article>
<article class="m-article-card post tag-thai-van-linh-book-club">
  <div class="m-article-card__picture lozad" data-background-image="/content/images/size/w600/2020/08/Blog-Post-Image--2--2.png">
    <a href="blogs_view.php" class="m-article-card__picture-link" aria-label="Article"></a>
  </div>
  <div class="m-article-card__info">
    <a href="blogs_view.php" class="m-article-card__tag"><?php countrecords("blogs","publish");?></a>
    <a href="blogs_view.php" class="m-article-card__info-link">
      <div>
        <h2 class="m-article-card__title js-article-card-title ">
         Đã hoàn thành
       </h2>
     </div>
   </a>
 </div>
</article>
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
<?php include 'footer.php' ?>
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

</div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->
<!-- JavaScript -->
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>