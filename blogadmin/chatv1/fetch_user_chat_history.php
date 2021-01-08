<?php

//fetch_user_chat_history.php

include('database_connection.php');

session_start();
include("../../blogadmin/lib.php");


echo fetch_user_chat_history($_SESSION['user_id'], $_POST['to_user_id'], $connect);

?>