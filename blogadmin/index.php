<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$currDir = dirname(__FILE__);
include("{$currDir}/defaultLang.php");
include("{$currDir}/language.php");
include("{$currDir}/lib.php");
include("libs/db_connect.php");
$x = new DataList;
$x->TableTitle = $Translation['homepage'];
$tablesPerRow = 2;
$arrTables = getTableList();



	// according to provided GET parameters, either log out, show login form (possibly with a failed login message), or show homepage

$url= 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 
if (strpos($url, 'index.php?signIn=1')){
	header("Location:login.php");
}

if(isset($_GET['signOut'])){
	logOutUser();
	// redirect("index.php?signIn=1");
	redirect("../");
}elseif(isset($_GET['loginFailed']) || isset($_GET['signIn'])){
	if(!headers_sent() && isset($_GET['loginFailed'])) redirect("login.php?loginFailed=1");
	}else{

//------------------------------------------------------------------------------------------------
// CHECK BẢNG TODO XEM CÁI NÀO QUÁ HẠN -> SET LẠI TIME: '1999-09-09 19:59:59': VÀ THỐNG KÊ ++;
// KHÁC TIME 1999 THÌ SET LẠI VÀ ++ Ở BẢNG THONGKE;


		include("{$currDir}/main.php");

		$sql = "SELECT * FROM `todo`";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				if ($row["user"]== getLoggedMemberID() && ($row["ngayhethan"]!= NULL)  &&  $row["ngayhethan"] != '1999-09-09 19:59:59' ){
					date_default_timezone_set('Asia/Ho_Chi_Minh');
					$your_date = strtotime($row["ngayhethan"]);
					$now = strtotime(date('Y-m-d H:i:s'));
					$datediff = $your_date - $now;
					$day =round($datediff / (60 * 60));
					if ($day<=0){
        // QUÁ THỜI GIAN -> SET LÊN DATABASE THONGKE;
						$sql_thongke = "UPDATE thongke SET taskhethan = taskhethan + 1 WHERE user='".getLoggedMemberID()."'";
						$result_thongke = mysqli_query($con, $sql_thongke);

        //THÔNG BÁO -> SET LÊN DATABASE THONGBAO;
						$sql_thongbao = 'INSERT INTO thongbao (id,user,title,noidung,link,theloai) VALUES (0,"'.getLoggedMemberID().'","'.$row["task"].'","'.$row["noidung"].'","'.$row["id"].'","taskhethan")';
						$result_thongbao = mysqli_query($con, $sql_thongbao);

        // LÍNH CANH: CHỈNH VỀ 1999;
						$id = $row["id"];
						$_sql_linhcanh = 'UPDATE todo SET ngayhethan = "1999-09-09 19:59:59" WHERE id='.$id.'';
						$result_linhcanh = mysqli_query($con, $_sql_linhcanh);
        //THÔNG BÁO
						echo '<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>';
						include ('../thongbao/receivemessage.php');
						$event = 'task';
						$title = 'Công việc thường xuyên '. $row["task"].' đã quá hạn';
						$noidung = 'Nội dung: '. $row["noidung"];
						postmessage($event, $id, $title, $noidung);

					}
      // echo $row["ngayhethan"];
				}
			}
		}


		$sql = "SELECT * FROM `blogs`";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) > 0) {
    // output data of each row
			echo("<style> .thongbaothoigian{color:black;}</style>");
			$now= time();

			while($row = mysqli_fetch_assoc($result)) {
				if ($row["author"] == $currentuser){
					$firsttime = false;
			//THÒI GIAN CÒN LẠI
					$date1=strtotime($row["ngayhethan"]);
					$date2 = ($now); 
					$date1 = strtotime(date( "Y-m-d",$date1));
					$date2 = strtotime(date( "Y-m-d",$date2));
					$quathoigian = false;
					$returncolor = "";


					if ($date1-$date2<=0){
						$thongbao = 'document.getElementById("thoigian'.$row["id"].'").innerHTML = " Quá hạn"; 
						document.getElementById("trangthai-'.$row["id"].'").style.borderTop = "3em solid '.$xam.'";
						document.getElementById("article'.$row["id"].'").style.filter = "grayscale(100%)";
						';

				// CHECK XEM ĐÃ THÔNG BÁO CHƯA == NULL | NẾU CHƯA THÌ SENT LÊN checkthongbao = 1 |
				// LÀM 2 VIỆC | 1 INSERT THÔNG BÁO | 2 INSERT LÍNH CANH
						if ($row["checkthongbao"] == NULL){
					// echo $row["id"]."<br>";

					// THÔNG BÁO -> SET LÊN DATABASE THONGBAO;
							$sql_thongbao = 'INSERT INTO thongbao (id,user,title,noidung,link,theloai) VALUES (0,"'.$currentuser.'","'.$row["title"].'","'.$row["content"].'","cv'.$row["id"].'","cvhethan")';
							$result_thongbao = mysqli_query($con, $sql_thongbao);	
					// INSERT LÍNH CANH
							$_sql_linhcanh = 'UPDATE blogs SET checkthongbao = "1" WHERE id='.$row["id"].'';
							$result_linhcanh = mysqli_query($con, $_sql_linhcanh);	



							echo '<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>';
							include ('../thongbao/receivemessage.php');
							$event = 'task';
							$title = 'Công việc dài hạn '. $row["title"].' đã quá hạn';
							$noidung = 'Nội dung: '. $row["content"];
							postmessage($event, $id, $title, $noidung);

						}

					}


				}
			}
		}

	}
	?>
