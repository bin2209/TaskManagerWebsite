<?php
//custom alerts code!!
$currentuser=getLoggedMemberID();
//start magic
if ($currentuser=="admin") {
  # code...show custom alert for admin
  echo '<div class="alert alert-success fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><span class="fa fa-bullhorn fa-2x"></span> </strong> <strong>&nbsp;&nbsp;Welcome to your Admin Dashboard!!</strong>.
  </div>';
}
elseif ($currentuser=="guest") {
  # code...redirect unauthenticated users to login
  redirect("index.php?signIn=1");
}
  else {
    echo '<div class="alert alert-success fade in fade-out">
    <style>.alert {border: 1.5px solid black; border-radius: 3em; padding: 5px 20px 16px 20px;} </style>
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong><span class="fa fa-bullhorn fa-2x"></span> </strong> <strong>&nbsp;&nbsp;Chào mừng bạn đến với website quản lý công việc.</strong>.
    </div>';
  }
?>
