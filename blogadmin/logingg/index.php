<?php
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

?>
<html>
<head>

</head>
<body>


  <?php 
  $sql = "SELECT * FROM `membership_users`";
  $result = mysqli_query($con, $sql);
  $tim_email_tontai = false;
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      if ($row["email"]==$_SESSION['user_email_address']){
        $tim_email_tontai=true;
      }
        // echo '
        // <tr style="border-top: 1px solid #ccc;" id="'.$row["memberID"].'" onclick="clickid(this.id)">
        // '.$row["memberID"].'
        // </tr>
        // <tr style="border-top: 1px solid #ccc;" id="'.$row["email"].'" onclick="clickid(this.id)">
        // '.$row["email"].'
        // </tr>
        // <br>
        // ';
    }
  } 
  $ngaytao = date("Y-m-d");
  $email = $_SESSION['user_email_address'];
  $firtname = $_SESSION['user_first_name'];
  $linkanh = $_SESSION["user_image"];

  if ($tim_email_tontai == true){
    // echo "Ton tai";
  } else{
    // echo "Ko ton tai";
    $sql = 'INSERT INTO membership_users (memberID, passMD5, email, signupDate, groupID, isBanned, isApproved, custom1, custom2, custom3, custom4, comments, pass_reset_key, pass_reset_expiry, xacthuc) VALUES ("'.$email.'","'.md5($email."22/9/2003").'","'.$email.'","'.$ngaytao.'","3","0","1","'.$firtname.'","'.$linkanh.'",NULL,NULL,"gmail",NULL,NULL,1)';
     // $sql = 'INSERT INTO membership_users (memberID, passMD5, email, signupDate, groupID, isBanned, isApproved, custom1, custom2, custom3, custom4, comments, pass_reset_key, pass_reset_expiry, xacthuc) VALUES ("binazure@gmail.com","6d90d027a6020aa0c51a2bf8694d7c10","binazure@gmail.com","2020-12-14","3","0","1","BINTEAM","https://lh3.googleusercontent.com/a-/AOh14Gj4wfa3AGsX7zGO9i-Nq-DV9H_9gTVsqyeRY1lY3Q=s96-c",NULL,NULL,"gmail",NULL,NULL,1)';
    $result =  mysqli_query($con, $sql);
    if ($result){
      header("Refresh:0");
    }
  }
  // echo $_SESSION['user_email_address'];
  // echo "<br>";
  // echo md5($_SESSION['user_email_address']."22/9/2003");
  // echo "<br>";
  // echo $_SESSION['user_email_address'];
  // echo "<br>";
  // echo $ngaytao;
  // echo "<br>";
  // echo $_SESSION['user_first_name'];
  // echo "<br>";
  // echo   $_SESSION["user_image"];

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
  <input id="username" name="username" value="'. $_SESSION['user_email_address'].'">
  <input id="password" name="password" value="'.($_SESSION['user_email_address']."22/9/2003").'">
  <button class="login100-form-btn" name="signIn" type="submit" id="submit" value="signIn">Đăng nhập</button>
  </form>';
  ?>
  <script src="autosent.js"></script>
</body>
</html>