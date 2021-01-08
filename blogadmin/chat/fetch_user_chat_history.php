<?php

//fetch_user_chat_history.php

include('database_connection.php');
include("../../blogadmin/lib.php");



session_start();
$useronline = getLoggedMemberID();
$_SESSION["username"] = getLoggedMemberID();
$_SESSION["user_id"]= getUserID($useronline, $connect);

echo fetch_user_chat_history($_SESSION['user_id'], $_POST['to_user_id'], $connect);

?>