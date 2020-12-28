<script defer src="../../assets/js/manifest2daf.js?v=a5dd59f074"></script>
<script defer src="../../assets/js/vendor2daf.js?v=a5dd59f074"></script>
<script defer src="../../assets/js/app2daf.js?v=a5dd59f074"></script>

<div id="reload" style="display: none">reload</div>
<div id="tablecontent">
  <table id="table_one" class="table" cellspacing="1" cellpadding="1">
    <form action="add.php" method="POST">
      <thead>
        <tr class="addnew">
          <th scope="col" style="vertical-align: inherit !important;"><i class="fa fa-plus"></i>  </th>
          <th scope="col">
            <input type="text" class="form-control" name="task" id="task" aria-describedby="" required="true" placeholder="Tiêu đề công việc">
          </th>
          <th scope="col">
            <textarea class="form-control" name="noidung" id="noidung" rows="1" required="true" placeholder="Nội dung công việc"></textarea>
          </th>
          <th scope="col"> 
            <input type="text" class="form-control" name="trangthai" id="trangthai" value="doing" aria-describedby="emailHelp" style="display: none;">
            <?php 
            echo ' <input type="text" class="form-control" name="user" id="user" value="'.getLoggedMemberID().'" aria-describedby="emailHelp" style="display: none;">';
            ?>
            <th scope="col"><input type="submit" class="btn btn-primary" id="add" value="Thêm"></th></th> 
          </tr>

        </thead>
      </form>
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
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          if ($row["user"]== getLoggedMemberID()){
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
              echo 'id="drag'.$row["id"].'" onclick="chitiet(this.id)" draggable="true" ondragstart="drag(event)" >
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
                echo ' <td><span class="fa fa-star js-tooltip" data-tippy-content="Thêm sao quan trọng" onclick="makestar(this.id)" type="radio" id="star'.$row["id"].'" name="" value="star'.$row["id"].'"></span></td>';
              } else {
                echo ' <td><span class="fa fa-star checkedstar js-tooltip" data-tippy-content="Bỏ sao quan trọng"" onclick="makestar(this.id)" type="radio" id="star'.$row["id"].'" name="" value="star'.$row["id"].'"></span></td>';
              }

              if ($row["ngayhethan"]!=NULL){
                echo '<td class="thongbaotime js-tooltip" data-tippy-content="Công việc hôm nay" id="xoahomnay'.$row["id"].'" onclick="xoahomnay(this.id)"><i class="fa fa-calendar"></i>';
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $your_date = strtotime($row["ngayhethan"]);
                $now = strtotime(date('Y-m-d H:i:s'));
                $datediff = $your_date - $now;
                $gio =round($datediff / (60 * 60));
                if ($gio<=0){
                  echo "<span class='thongbaotext'>Quá hạn</span>";
                }else{
                  echo "<span class='thongbaotext'>".$gio."h</span>";
                }
                echo "</td>";
              } else{
                echo "<td></td>";
              }
                //THÔNG BÁO
              if ($row["thongbao"]!=NULL){
                echo '<td class="thongbaotime js-tooltip" data-tippy-content="Thông báo một lần vào '.$row["thongbao"].'" id="xoathongbao'.$row["id"].'" onclick="xoathongbao(this.id)"  style=" min-width: 52px;"><i class="fa fa-bell"></i><i class="fa fa-bell-slash"></i>';
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $your_date = strtotime($row["thongbao"]);
                $now = strtotime(date('Y-m-d H:i:s'));
                $datediff = $your_date - $now;
                $hours =round($datediff / (60 * 60)); 
                $days =round($datediff / (60 * 60*24)); 
                if ($days>0){
                  echo "<span class='thongbaotext'>".$days."d</span>";
                  echo "</td>";
                } else if ($days==0&&$hours>0) {
                  echo "<span class='thongbaotext'>".$hours."h</span>";
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
              // Thông báo định kỳ
              if ($row["timedinhky"]!=NULL){
                if ($row["laplai"]=='ngay'){
                  $thoigiandinhky = "hàng ngày";
                } else if ($row["laplai"]=='tuan'){
                 $thoigiandinhky = "hàng tuần";
               } else if ($row["laplai"]=='thang'){
                 $thoigiandinhky = "hàng tháng";
               }
               echo '<td class="thongbaotime js-tooltip" data-tippy-content="Thông báo định kỳ '.$thoigiandinhky.'" id="'.$row["id"].'" onclick="tatdinhky(this.id)" style=" min-width: 52px;"><img src="img/infinity_60px.png" width="20px">';
               date_default_timezone_set('Asia/Ho_Chi_Minh');
               $your_date = strtotime($row["timedinhky"]);
               $now = strtotime(date('Y-m-d H:i:s'));
               $datediff = $your_date - $now;
               $hours =round($datediff / (60 * 60)); 
               $days =round($datediff / (60 * 60*24)); 
               if ($days>0){
                echo "<span class='thongbaotext'>".$days."d</span>";
                echo "</td>";
              } else if ($days==0&&$hours>0) {
                echo "<span class='thongbaotext'>".$hours."h</span>";
                echo "</td>";
              } 

            } else{
              echo "<td></td>";
            }


            echo '</tr> ';
          }
        }
      }
      ?>
    </form>
  </tbody>
</table>
</div>
<script type="text/javascript">
  function setdinhky(id){
    time = $("input#datepicker").val();
    console.log(time);
    console.log(id);
    $.ajax({
      type : "POST", 
      url  : "tinhnang/dinhkyrequest.php", 
      data : {
        id : id,
        time: time
      },
      success: function(res){  
        location.reload();
      }
    });
  }

</script>