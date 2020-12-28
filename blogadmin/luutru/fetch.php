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
		$file = $row["filename"];
		$findfirst = strpos($file,'_'); // TÌM KÍ TỰ _ ĐỂ RENAME FILE CHO GỌN
		$shortname = substr($file, $findfirst+1);

		if (strpos($row["filename"],".psd")){
			$row["dinhdang"]=  '../img/psd.png';
		} else{
			$row["dinhdang"]=  $row["filename"];
		}
		$row["shortname"]= $shortname;
		$output[] = $row;
	}

}

echo json_encode($output);
?>