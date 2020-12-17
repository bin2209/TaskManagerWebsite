<?php 
date_default_timezone_set('Asia/Ho_Chi_Minh');
include("../../../blogadmin/lib.php");  
include("../../libs/db_connect.php");
?>
<h4>Thông báo & nhắc nhở</h4>
<table id="table_one" class="table">
	<thead>
		<tr class="addnew">
			<th scope="col" style="vertical-align: inherit !important;"></th>
			<th scope="col">Công việc</th>
			<th scope="col">Nội dung</th>
			<th scope="col" style="text-align:center;">Quan trọng</th>
			<th scope="col" style="text-align:center;">Thông báo tiếp theo</th>
			<th scope="col" style="text-align:center;">Định kỳ</th>
			<th scope="col" style="text-align:center;">Thông báo</th>
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
			if (mysqli_num_rows($result)) {
				// if ($countmyday==0){ echo ""; }
				while($row = mysqli_fetch_assoc($result)) {
					if ($row["user"]== getLoggedMemberID()  && (($row["thongbao"]!=NULL)||$row["timedinhky"]!=NULL) ){
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
               	echo ' <td style="text-align:center;"><span class="fa fa-star " onclick="makestar(this.id)" type="radio" id="star'.$row["id"].'" name="" value="star'.$row["id"].'"></span></td>';
               } else {
               	echo ' <td style="text-align:center;"><span class="fa fa-star checkedstar" onclick="makestar(this.id)" type="radio" id="star'.$row["id"].'" name="" value="star'.$row["id"].'"></span></td>';
               }

               if ($row["thongbao"]!=NULL){
               	echo '<td class="thongbaotime" id="xoathongbao'.$row["id"].'" onclick="xoathongbao(this.id)"  style=" min-width: 52px;"><i class="fa fa-bell"></i><i class="fa fa-bell-slash"></i>';
               	date_default_timezone_set('Asia/Ho_Chi_Minh');
               	$your_date = strtotime($row["thongbao"]);
               	$now = strtotime(date('Y-m-d H:i:s'));
               	$datediff = $your_date - $now;
               	$hours =round($datediff / (60 * 60)); 
               	$days =round($datediff / (60 * 60*24)); 
               	if ($days>0){
               		echo "<span class=''> " .$days." ngày nữa</span>";
               		echo "</td>";
               	} else if ($days==0&&$hours>0) {
               		echo "<span class=''> " .$hours." giờ nữa</span>";
               		echo "</td>";
               	} else{
                    // tính năng thông báo ra hoặc thông báo về mail tại đây
               		$requestid = $row["id"];
               		$sql = 'UPDATE todo
               		SET thongbao = NULL WHERE id='.$requestid.';
               		';
               		$result = mysqli_query($con, $sql);
               		if($result)
               		{
               			header("Refresh:0");
               		}
               	}

               } else{
               	echo "<td></td>";
               }

               if ($row["timedinhky"]!=""){
               	echo '<td>'.$row["timedinhky"].'</td>';
               } else{
               	echo '<td></td>';
               }

               if ($row["nhanthongbao"]!=0){
               	echo '<td><center><label class="form-switch"> <input id="tatthongbao'.$row["id"].'" type="checkbox" checked onclick="nhanthongbao(this.id)"> <i></i> </label></center></td>';
               } else{
               	echo '<td><center><label class="form-switch"> <input id="batthongbao'.$row["id"].'" type="checkbox" onclick="nhanthongbao(this.id)"> <i></i> </label></center></td>';
               }

               echo '  </tr> ';
           } 


       }
   }
   ?>
</form>
<script type="text/javascript">
	function nhanthongbao(id){
		console.log(id);
		$.ajax({
			type : "POST",  
			url  : "./trangthai.php",  
			data : {id : id},
			success: function(res){ 
			}
		});
	}
</script>

</tbody>
</table>
<br>


