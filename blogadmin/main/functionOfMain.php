<?php  
//Config store 

function Caidat($phantu){
  $config = [
    "dungluongtoida" => 1000,
    "sofiletoida" => 500, 
    "dungluongmotfile" => 25 //MB
  ];
  return $config[$phantu]; 
}

// Lấy link avatar
function getUserImages(){
  include("../libs/db_connect.php");
  $sql = "SELECT * FROM membership_users WHERE memberID = '".getLoggedMemberID()."'";
  $result = mysqli_query($con, $sql);
  if ($result) {
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        if ($row["custom2"]=='')
          $link = 'http://taskvn.com/blogadmin/assets/user.png';
        else
          $link =  $row["custom2"];
      }
    }
  }
  return $link;
}

// Lấy số lượng file hiện tại của user
function getSoLuongFiles(){
  include("../libs/db_connect.php");
  $count = 0;
  $sql = "SELECT userupload FROM upload WHERE userupload = '".getLoggedMemberID()."'";
  $result = mysqli_query($con, $sql);
  if ($result) {
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        if ($row["userupload"]==getLoggedMemberID()) $count++;
      }
    }
  }
  return $count;
}


// Tinh % dung luong da su dung 

function PhanTramDungLuong(){
  $sofiletoida = Caidat("sofiletoida");
  $sofilehientai = getSoLuongFiles();
  $phantram = ($sofilehientai/$sofiletoida) * 100;
  return round($phantram);
}
// Check xem số lượng thông báo
function SoLuongThongBao(){
  
  include("../libs/db_connect.php");
  $sql = "SELECT * FROM thongbao";
  $result = mysqli_query($con, $sql);
  if ($result) {
    $count=0;
    while($row = mysqli_fetch_assoc($result)) 
      if ($row["user"] ==getLoggedMemberID())
       $count++;
   }
   return $count;
 }
 ?>