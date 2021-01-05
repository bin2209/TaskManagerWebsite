<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<link rel="stylesheet" href="../css/iosdesign.css">
<?php
$currDir=dirname(__FILE__);
include("../../blogadmin/lib.php"); 
include("../libs/db_connect.php");

//index.php

//Include Configuration File
include('config.php');

$login_button = '';

//This $_GET["code"] variable value received after user has login into their Google Account redirct to PHP script then this variable value has been received
if(isset($_GET["code"]))
{
 //It will Attempt to exchange a code for an valid authentication token.
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

 //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
 if(!isset($token['error']))
 {
  //Set the access token used for requests
  $google_client->setAccessToken($token['access_token']);

  //Store "access_token" value in $_SESSION variable for future use.
  $_SESSION['access_token'] = $token['access_token'];

  //Create Object of Google Service OAuth 2 class
  $google_service = new Google_Service_Oauth2($google_client);

  //Get user profile data from google
  $data = $google_service->userinfo->get();

  //Below you can find Get profile data and store into $_SESSION variable

  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
 }

 if(!empty($data['family_name']))
 {
   $_SESSION['user_last_name'] = $data['family_name'];
 }

 if(!empty($data['email']))
 {
   $_SESSION['user_email_address'] = $data['email'];
 }

 if(!empty($data['gender']))
 {
   $_SESSION['user_gender'] = $data['gender'];
 }

 if(!empty($data['picture']))
 {
   $_SESSION['user_image'] = $data['picture'];
 }
}
}

//This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.
if(!isset($_SESSION['access_token']))
{
 //Create a URL to obtain user authorization
  // $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="google_logo.png" width="300px"/></a>';
  header('location:'.$google_client->createAuthUrl().'');
}




//SEND FORM -> CHECK XEM CÓ TRONG DB CHƯA 
if($_GET['username'] != ''){

  $usernameTYPE = $_GET['username'];
  // echo $usernameTYPE; 
  // CHECK 
  $sql = "SELECT * FROM `membership_users`";
  $result = mysqli_query($con, $sql);
  $checkfind = false;
  $isXacThuc = 0;
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      if ($usernameTYPE==$row['memberID']){
        $checkfind=true;
        break;
      }
    }
  } 



}

?>
<html>
<head>

</head>
<body>


  <?php 
  $sql = "SELECT * FROM `membership_users`";
  $result = mysqli_query($con, $sql);
  $tim_email_tontai = false;
  $isXacThuc = 0;
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      if ($row["email"]==$_SESSION['user_email_address']){
        $tim_email_tontai=true;
        if ($row["xacthuc"]==1)  $isXacThuc = 1; else $isXacThuc = 0;
        $userlogin = $row["memberID"];
        break;
      }
    }
  } 

  $ngaytao = date("Y-m-d");
  $email = $_SESSION['user_email_address'];
  $firtname = $_SESSION['user_first_name'];
  $linkanh = $_SESSION["user_image"];


  // echo $row["email"];

  if ($tim_email_tontai == true){
    // echo "Tồn tại";
      // TH TỒN TẠI 
      // NẾU CÓ TÀI KHOẢN TẠO BẰNG TASKVN TRƯỚC ĐÓ THÌ AUTO XÁC THỰC LUÔN VÀ ĐĂNG NHẬP VÀO
    // CHECK EMAIL KHÔNG TỒN TẠI
    echo $isXacThuc;
    if($isXacThuc!=1){
      @db_query("update membership_users set xacthuc=1, xacthuc_key = NULL , xacthuc_key_expiry= NULL where email='" . $email . "'");
    }


  } else{
    // echo "Ko tồn tại";
    // echo $username;

    $randomUsername = md5(microtime());
    $randomUsername = substr($randomUsername, 0,4);
    // echo $randomUsername;

    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.1.4/semantic.min.css" />
    <script type="text/javascript" src="lib/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="dist/jquery.validate.js"></script>
      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Muli" />
    <style type="text/css">
      .fix-rounded-right {
        border-top-right-radius: .2rem !important;
        border-bottom-right-radius: .2rem !important;
      }
      .avatar{
       text-align: center;
     }
     input{
      border-radius: 3em !important;
    }
    .container{
      border: 0px solid;
      border-radius: 1.5em;
      margin-top: 50px;
      padding: 2em;
      max-width: 440px;
      position: relative;
      background: linear-gradient(to bottom, #ffffffde 0%, rgb(255 255 255 / 0%) 100%);
      transition: opacity 0.1s, transform 0.3s cubic-bezier(0.17, -0.65, 0.665, 1.25);
      transform: scale(1);
      -webkit-box-shadow: -27px 12px 54px -19px rgba(0,0,0,0.46);
      -moz-box-shadow: -27px 12px 54px -19px rgba(0,0,0,0.46);
      box-shadow: -27px 12px 54px -19px rgba(0,0,0,0.46);
    }
    .btn{
      padding: 5px 21px;
      font-size: 16px;
      font-weight: 600;
          font-size: 14px !important;
    }
    label{
      position: relative;
    left: 5px;
      font-weight: 600;
      color: #524d4d;
      font-size: 16px;
    }
    body{

      font-family: 'Muli' !important;
      background-image: linear-gradient(to top, #fff1eb 0%, #ace0f9 100%);
    }
  </style>

  <div class="container">
    <a href="../"><i class="fa fa-chevron-left" aria-hidden="true"></i> Trở về</a>
    <form method="get" id="thongtin" action="">

      <center><img src="<?php echo $_SESSION["user_image"]; ?>" class="img-responsive img-circle img-thumbnail avatar" style="border-radius: 50%;"/></center>
      <br>
      <div>
        <label for="basic-url">Tên hiển thị</label>
        <input  type="text" class="form-control " placeholder="<?php echo $_SESSION['user_first_name']." ".$_SESSION['user_last_name']; ?>" aria-label="Name" aria-describedby="addon-wrapping" readonly>

        <br>

        <label for="basic-url">Email</label>
        <input type="email" class="form-control " placeholder="<?php echo $_SESSION['user_email_address']; ?>" aria-label="Email" aria-describedby="addon-wrapping" readonly>

        <br>

        <label name="username" for="username">Tên người dùng</label>
        <input id="username" type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="nhapusername" onchange="removeClassx()">
        <span id="nhapusername" class="invalid-feedback">
          Tên người dùng yêu cầu 5-12 ký tự, chỉ có ký tự thường, hoa và số. VD: Taskvn<?php echo $randomUsername; ?>
        </span>
        <div class="row row-cols-2">
          <div class="col"></div>
        </div>
      </div>
      <br>
      <center><input  class="btn btn-primary" type="submit" value="Tiếp tục" id=""/> </center> 
    </form>
  </div>

  <script type="text/javascript">
    jQuery.validator.addMethod("usernamevalid", function(value, element) {
      return this.optional( element ) || /^[a-zA-Z0-9 ]+$/.test( value );
    }, 'Please enter a valid email address.');


    function removeClassx(){
     $("#username").removeClass("is-invalid");
   }

   $( document ).ready( function () {

    $( "#thongtin" ).validate( {
      rules: {
        username: {
          required: true,
          minlength: 5,
          maxlength: 12,
          usernamevalid: true,
        }
      },
      errorPlacement: function ( error, element ) {
        console.log(error[0]); 
        $("#username").addClass("is-invalid");
        console.log(element);

      },
    } );
  } );
</script>
<?php      
if ($checkfind){
  echo '<script>
  $(document).ready(function() {
   Swal.fire({
     icon: "error",
     title: "Tên người dùng đã tồn tại.",
     text: "Tên người dùng đã tồn tại trong hệ thống.",
     showConfirmButton: false,
     timer: 2000
     })
     })
     </script>';
   } else{

    if($usernameTYPE != '' ){
      $fullname = $_SESSION['user_first_name']." ".$_SESSION['user_last_name'];
      $sql = 'INSERT INTO membership_users (memberID, passMD5, email, signupDate, groupID, isBanned, isApproved, custom1, custom2, custom3, custom4, comments, pass_reset_key, pass_reset_expiry, xacthuc,xacthuc_key,xacthuc_key_expiry) VALUES ("'.$usernameTYPE.'","'.md5($email."22/9/2003").'","'.$email.'","'.$ngaytao.'","3","0","1","'.$fullname.'","'.$linkanh.'",NULL,NULL,"gmail",NULL,NULL,1,NULL,NULL)';
      $result =  mysqli_query($con, $sql);
      if ($result){
        header("Refresh:0");
      }
    }


  }

  ?>
  <?php
  exit;
}

?>

<?php
if($login_button == '')
{
    // echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    // echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
    // echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' </h3>';
    // echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
    // echo '<h3><a href="logout.php">Logout</h3></div>';

}
else
{
  echo '<div align="center">'.$login_button . '</div>';
}
echo ' <form method="post" action="../index.php" style="display:none;">
<input id="username" name="username" value="'.$userlogin.'">
<input id="password" name="password" value="'.($_SESSION['user_email_address']."22/9/2003").'">
<button class="login100-form-btn" name="signIn" type="submit" id="submit" value="signIn">Đăng nhập</button>
</form>';
?>
<script src="autosent.js"></script>
</body>

</html>