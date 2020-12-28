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
		
		if (strpos($row["filename"],".psd")){
			$row["dinhdang"]=  '../img/psd.png';
		} else{
			$row["dinhdang"]=  $row["filename"];
		}
		$output[] = $row;
	}

}

echo json_encode($output);
?>