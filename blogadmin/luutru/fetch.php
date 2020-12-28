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


		// ẢNH ĐỊNH DẠNG FILE
		/* 
		['png', 'jpeg', 'jpg', 'gif', 
		'psd', 
		'pdf', 
		'eps', 
		'ai', 
		'indd', x
		'raw', 
		'zip', 
		'mp3', 
		'accdb', x
		'avi', 
		'csv', 
		'doc', 'docx',
		 'mdb',x
		  'mov', 
		  'mp4', 
		  'pptx', 
		  'txt'];

		*/
		// TÁCH ĐUÔI VÀ ẢNH ĐỊNH DẠNG
		$timdaucham = strrpos($file,'.');
		$row["dinhdang"] = substr($file, $timdaucham+1); // ĐUÔI CỦA FILE
		switch ($row["dinhdang"]) {
			case 'psd':
			$row["anhdinhdang"]=  '../img/psd.png';
			break;
			case 'pdf':
			$row["anhdinhdang"]=  '../img/pdf.png';
			break;
			case 'eps':
			$row["anhdinhdang"]=  '../img/eps.png';
			break;
			case 'ai':
			$row["anhdinhdang"]=  '../img/ai.png';
			break;
			case 'raw':
			$row["anhdinhdang"]=  '../img/raw.png';
			break;
			case 'zip':
			$row["anhdinhdang"]=  '../img/zip.png';
			break;
			case 'mp3':
			$row["anhdinhdang"]=  '../img/mp3.png';
			break;
			case 'avi':
			$row["anhdinhdang"]=  '../img/avi.png';
			break;
			case 'csv':
			$row["anhdinhdang"]=  '../img/csv.png';
			break;
			case 'doc':
			$row["anhdinhdang"]=  '../img/doc.png';
			break;
			case 'docx':
			$row["anhdinhdang"]=  '../img/doc.png';
			break;
			case 'sql':
			$row["anhdinhdang"]=  '../img/sql.png';
			break;
			case 'mov':
			$row["anhdinhdang"]=  '../img/mov.png';
			break;
			case 'mp4':
			$row["anhdinhdang"]=  '../img/mp4.png';
			break;
			case 'pptx':
			$row["anhdinhdang"]=  '../img/pptx.png';
			break;
			case 'txt':
			$row["anhdinhdang"]=  '../img/txt.png';
			break;



			default:
			$row["anhdinhdang"]=  $row["filename"];
			break;
		}
		// if ($row["dinhdang"]=="psd"){
		// 	$row["anhdinhdang"]=  '../img/psd.png';
		// } else if ($)


		// // FILE ẢNH
		// else{
		// 	$row["anhdinhdang"]=  $row["filename"];
		// }


		$row["shortname"]= $shortname;
		$output[] = $row;
	}

}

echo json_encode($output);
?>