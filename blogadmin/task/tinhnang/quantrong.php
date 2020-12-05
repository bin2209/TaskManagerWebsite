<?php 
include("../../../blogadmin/lib.php");  
include("../../libs/db_connect.php");
?>
<!-- <div id="tablecontent"> -->
	<h4><?php 
	$countimportant = 0;
	$sql = "SELECT * FROM `todo`";
	$result = mysqli_query($con, $sql);
	$idpost=0;
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			if ($row["user"]== getLoggedMemberID() && $row["star"]==1){
				$countimportant ++;
			}
		}
	}
	if ($countimportant == 0){
		echo "Không có công việc quan trọng nào, hãy đánh sao vào công việc để thêm.";
	} else{
		echo "Có ".$countimportant." công việc quan trọng, hãy sớm hoàn thành nhé.";
	}
	
	?>
</h4>
<table id="table_one" class="table">
	<thead>
		<!-- 	<form class="form" action="add.php" method="post">
				<tr class="addnew">
					<th scope="col" style="vertical-align: inherit !important;"><i class="fa fa-plus"></i> Thêm </th>
					<th scope="col"><input type="text" class="form-control" name="task" id="task" aria-describedby="" required="true" placeholder="Task"></th>
					<th scope="col"><textarea class="form-control" name="noidung" id="noidung" rows="1" required="true" placeholder="Nội dung"></textarea></th>
					<th scope="col"> <input type="text" class="form-control" name="trangthai" id="trangthai" value="doing" aria-describedby="emailHelp" style="display: none;">
						<?php 
						echo ' <input type="text" class="form-control" name="user" id="user" value="'.getLoggedMemberID().'" aria-describedby="emailHelp" style="display: none;">';
						?>
						<th scope="col"><button type="submit" class="btn btn-primary" id="add">Thêm</button></th></th> 
					</tr>
				</form> -->
				<tr class="addnew">
					<th scope="col" style="vertical-align: inherit !important;"></th>
					<th scope="col">Công việc</th>
					<th scope="col">Nội dung</th>
					<th scope="col">Quan trọng</th>
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
			$countimportant = 0;
			$sql = "SELECT * FROM `todo`";
			$result = mysqli_query($con, $sql);
			$idpost=0;
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					if ($row["user"]== getLoggedMemberID() && $row["star"]==1){
						$countimportant ++;

						echo '  
						';
						if ($row["trangthai"]=="doing"){
							echo ' 
							<tr id="drag'.$row["id"].'"onclick="chitiet(this.id)" draggable="true" ondragstart="drag(event)" >
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
							echo ' 
							<tr id="drag'.$row["id"].'" value="'.$row["task"].'" onclick="chitiet(this.id)"   draggable="true" ondragstart="drag(event)"  style="background-color: #e7e7e7; color: black;">

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
               	echo ' <td><span class="fa fa-star " onclick="makestar(this.id)" type="radio" id="star'.$row["id"].'" name="" value="star'.$row["id"].'"></span></td>';
               } else {
               	echo ' <td><span class="fa fa-star checkedstar" onclick="makestar(this.id)" type="radio" id="star'.$row["id"].'" name="" value="star'.$row["id"].'"></span></td>';
               }

                if ($row["stamp"]=="do"){ // danghoatdong
                	echo '<td><img src="img/do.png"></td>';
                } else if ($row["stamp"]=="vang"){
                	echo '<td><img src="img/vang.png"></td>';
                } else if ($row["stamp"]=="xanh"){
                	echo '<td><img src="img/xanh.png"></td>';
                } else if ($row["stamp"]=="lam"){
                	echo '<td><img src="img/lam.png"></td>';
                } else if ($row["stamp"]=="im"){
                	echo '<td><img src="img/tim.png"></td>';
                } else{
                	echo '<td></td>';
                }
                echo '  </tr> ';
            }
        }
    }
    ?>
</form>
</tbody>
</table>
<!-- </div> -->