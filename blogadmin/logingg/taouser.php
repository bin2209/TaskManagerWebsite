<?php 
include("../../blogadmin/lib.php"); 
include("../libs/db_connect.php");

$sql = 'INSERT INTO membership_users (memberID, passMD5, email, signupDate, groupID, isBanned, isApproved, custom1, custom2, custom3, custom4, comments, pass_reset_key, pass_reset_expiry, xacthuc) VALUES ("binazure@gmail.com","6d90d027a6020aa0c51a2bf8694d7c10","binazure@gmail.com","2020-12-14","3","0","1","BINTEAM","https://lh3.googleusercontent.com/a-/AOh14Gj4wfa3AGsX7zGO9i-Nq-DV9H_9gTVsqyeRY1lY3Q=s96-c",NULL,NULL,"gmail",NULL,NULL,1)';


mysqli_query($con, $sql);
?>