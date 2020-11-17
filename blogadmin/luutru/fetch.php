<?php
include("../../blogadmin/lib.php"); 
$conn = new mysqli('localhost', 'root', '', 'blog_admin_db');
$output = array();
$sql = "SELECT * FROM upload";
$userupload = getLoggedMemberID();

$query=$conn->query($sql);



$currentuser = getLoggedMemberID();
while($row=$query->fetch_array()){
	if ($row["userupload"]==$currentuser){
			$output[] = $row;
	}
}

echo json_encode($output);
?>