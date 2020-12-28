<script defer src="../../assets/js/manifest2daf.js?v=a5dd59f074"></script>
<script defer src="../../assets/js/vendor2daf.js?v=a5dd59f074"></script>
<script defer src="../../assets/js/app2daf.js?v=a5dd59f074"></script>
<?php 
date_default_timezone_set('Asia/Ho_Chi_Minh');
include("../../../blogadmin/lib.php");  
include("../../libs/db_connect.php");
?>
<h4><?php 
$thu = date("l");
if ($thu == "Monday"){
	echo "Thứ Hai";
} else 
if ($thu == "Tuesday"){
	echo "Thứ Ba";
} else 
if ($thu == "Wednesday"){
	echo "Thứ Tư";
} else 
if ($thu == "Thursday"){
	echo "Thứ Năm";
} else 
if ($thu == "Friday"){
	echo "Thứ Sáu";
} else 
if ($thu == "Saturday"){
	echo "Thứ Bảy";
} else 
if ($thu == "Sunday"){
	echo "Chủ Nhật";
}

echo " " . date("d/m/Y") ;
$countmyday = 0;	// tổng task đếm được dưới 24h
$counthethan = 0; 	// tổng task đếm được quá 24h
$countmydaytong = 0;// Tổng task đếm được
$sql = "SELECT * FROM `todo`";
$result = mysqli_query($con, $sql);
$idpost=0;
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		if ($row["user"]== getLoggedMemberID() && $row["ngayhethan"]!=NULL ){
			$countmydaytong++;

			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$your_date = strtotime($row["ngayhethan"]);
			$now = strtotime(date('Y-m-d H:i:s'));
			$datediff = $your_date - $now;
			$day =round($datediff / (60 * 60));	
			if ($day>0){
				$countmyday++;
			}else{
				$counthethan++;
			}
		} 
	}

}
if ($countmyday == 0 ){
	echo "";
} else{
	echo " | Có ".$countmyday. " việc cần làm trong hôm nay.";
}

?></h4>
<table id="table_one" class="table">
	<thead>
		<tr class="addnew">
			<th scope="col" style="vertical-align: inherit !important;"></th>
			<th scope="col">Công việc</th>
			<th scope="col">Nội dung</th>
			<th scope="col" style="text-align:center;">Quan trọng</th>
			<th scope="col" style="text-align:center;">Thời gian còn lại</th>
		</tr>
	</thead>
	<script type="text/javascript">
		function dragstemp(ev){
			ev.dataTransfer.setData("text", ev.target.id);
			x= ev.dataTransfer.getData("text"); 

		}
		function dropstamp(ev){
			ev.preventDefault();
			ev.preventDefault();
    var data = ev.dataTransfer.getData("text"); // data  là id di chuyển 
    // document.getElementById(data).style.color = "red";
    name= document.getElementById("idnamesentname").value;
    id= document.getElementById("idnamesentid").value;
    addstemp(data,name,id);
}
</script>
<!-- <form> -->
	<tbody id="tableBody" ondrop="dropstamp(event)" ondragover="allowDrop(event)" >
		<form action="stamp.php" method="POST">
			<input id="idnamesentname" type="" name="" value="" style="display: none;">
			<input id="idnamesentid" type="" name="" value="" style="display: none;">
			<?php 
			$sql = "SELECT * FROM `todo`";
			$result = mysqli_query($con, $sql);
			$idpost=0;
			if ($countmydaytong==0){
				echo "<tr><th style='position: absolute; width: 70%;text-align: center;     border-top: 0px solid #dee2e6;'>Hôm nay ko có công việc nào cả, hãy thêm công việc vào danh sách hôm nay.</th></tr>";
			} else 
			if (mysqli_num_rows($result) > 0 && $countmydaytong>0) {
				// if ($countmyday==0){ echo ""; }
				while($row = mysqli_fetch_assoc($result)) {
					if ($row["user"]== getLoggedMemberID() && $row["ngayhethan"]!=NULL){
						  if ($row["stamp"]=="do"){ // danghoatdong
						  	echo '<tr style="border-left: 5px solid #fc636b;"';
						  } else if ($row["stamp"]=="vang"){
						  	echo '<tr style="border-left: 5px solid #ffb900;"';
						  } else if ($row["stamp"]=="xanh"){
						  	echo '<tr style="border-left: 5px solid #3be8b0;"';
						  } else if ($row["stamp"]=="lam"){
						  	echo '<tr style="border-left: 5px solid #1aafd0;"';
						  } else if ($row["stamp"]=="im"){
						  	echo '<tr style="border-left: 5px solid #6a67ce;"';
						  } else{
						  	echo '<tr ';
						  } 
						  if ($row["trangthai"]=="doing"){
						  	echo 'id="drag'.$row["id"].'"onclick="chitiet(this.id)" draggable="true" ondragstart="drag(event)" >
						  	<input  id="drag'.$row["id"].'value" value="'.$row["task"].'" style="display:none;" />
						  	<td scope="row"   class="taskcon" >
						  	<input type="radio" onclick="funtrangthaiclick(this.id)" id="'.$row["id"].'" name="id'.$row["id"].'" class="" value="'.$row["id"].'"/>
						  	<span class="checkmark"></span>
						  	</td>
						  	<td>'.$row["task"].'</td>
						  	<td>'.$row["noidung"].'</td>
						  	<td style="display:none;">
						  	<button  style="display:none;" id="remove'.$row["id"].'" name="'.$row["id"].'" class="btn btn-primary btn-sm remove" value="delete'.$row["id"].'">Xóa</button></td>

						  	';
						  }else if ($row["trangthai"]=="done"){
						  	echo 'id="drag'.$row["id"].'" class="hoanthanh" value="'.$row["task"].'" onclick="chitiet(this.id)"   draggable="true" ondragstart="drag(event)">

						  	<input  id="drag'.$row["id"].'value" value="'.$row["task"].'" style="display:none;" />

						  	<td scope="row"  class="taskcon" >

						  	<input type="radio" checked="checked"  type="radio" onclick="funtrangthaiclick(this.id)" id="'.$row["id"].'" class="" name="'.$row["id"].'" value="'.$row["id"].'"/>
						  	<span class="checkmark"></span>

						  	</td>
						  	<td style=" text-decoration: line-through;">'.$row["task"].'</td>
						  	<td style=" text-decoration: line-through;">'.$row["noidung"].'</td>
						  	<td style="display:none;">
						  	<button style="display:none;" id="remove'.$row["id"].'" class="btn btn-primary btn-sm remove" name="id" value="delete'.$row["id"].'">Xóa</button></td>

						  	';
						  }
               //star
               if ($row["star"]=="0"){ // danghoatdong
               	echo ' <td style="text-align:center;"><span class="fa fa-star" onclick="makestar(this.id)" type="radio" id="star'.$row["id"].'" name="" value="star'.$row["id"].'"></span></td>';
               } else {
               	echo ' <td style="text-align:center;" class="js-tooltip" data-tippy-content="Gắn sao để ưu tiên làm trước việc này"><span class="fa fa-star checkedstar" onclick="makestar(this.id)" type="radio" id="star'.$row["id"].'" name="" value="star'.$row["id"].'"></span></td>';
               }


               if ($row["ngayhethan"]!=NULL){
               	date_default_timezone_set('Asia/Ho_Chi_Minh');
               	$your_date = strtotime($row["ngayhethan"]);
               	$now = strtotime(date('Y-m-d H:i:s'));
               	$datediff = $your_date - $now;
               	$day =round($datediff / (60 * 60));
               	if ($day<=0){
               		echo '<td class="thongbaotime" id="xoahomnay'.$row["id"].'" onclick="xoahomnay(this.id)"><i class="fa fa-calendar"></i><span class="thongbaotext">Quá thời gian</span></td>';
               	} else
               	echo '<td class="thongbaotime" id="xoahomnay'.$row["id"].'" onclick="xoahomnay(this.id)"><i class="fa fa-calendar"></i> <span class="thongbaotext">'. $day .'h </span></td>';
               }
               echo '  </tr> ';
           } 
       }
   }
   ?>
</form>
</tbody>
</table>
<br>



<center><button type="submit" class="btn btn-primary" id="add" onclick="themhomnay()">Thêm</button></center>
<script type="text/javascript">
	function clickid(id){
		console.log(id);
		$.post("tinhnang/alltomyday.php",
		{
			id: id,
		});
		location.reload(true);
	}
	function themhomnay() {
		Swal.fire({
			title: 'Thêm',
			html: '<style>tr:hover{background: #a5c7e9; cursor: pointer;}</style><?php $countall =0 ; $sql = "SELECT * FROM `todo`"; $result = mysqli_query($con, $sql); if (mysqli_num_rows($result) > 0) { echo "<table><form>"; while($row = mysqli_fetch_assoc($result)) { if ($row["user"]== getLoggedMemberID() && $row["ngayhethan"]== NULL){ $countall++; echo ' <tr style="border-top: 1px solid #ccc;" id="'.$row["id"].'" onclick="clickid(this.id)"> <td >'. $row["task"].'</td><td>'. $row["noidung"] .'</td> </tr>'; } } } if ($countall == 0){ echo "Danh sách thêm cần trống, hãy thêm mới một công việc";} echo "</form></table>"; ?>',
			showCloseButton: true,
			showConfirmButton: false,
			showCancelButton: true,
		})
	}
</script>
