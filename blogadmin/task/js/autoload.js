function chitiet(clicked_id){
	document.getElementById("idname").style.display = "block";
	document.getElementById("addstep").style.display = "block";
	// console.log(clicked_id);
	x=clicked_id;
	x = document.getElementById(x+"value").value;
	document.getElementById("idname").innerHTML = x;
	clicked_id = clicked_id;
	document.getElementById("idnamesentname").value = x;
	document.getElementById("idnamesentid").value = clicked_id;

	document.getElementById("addstep").innerHTML = '<li class="" title="Thêm bước để giúp thêm các tiến độ công việc"> <a  href="" data-toggle="collapse" aria-expanded="false"><i class="fa fa-rocket"></i> Thêm bước</a> </li>';
 	// document.getElementById("menuleft").style.display = "block";
 	document.getElementById("changeganco").innerHTML = '<li class="" title="Thay đổi màu sắc công việc giúp phân loại công việc hiệu quả hơn."> <a class="dropdown-toggle" href="#ganco" data-toggle="collapse" aria-expanded="true"><i class="fa fa-flag" ></i> Gắn nhãn</a> </li> <ul class="list-unstyled collapse " id="ganco" style=""> <li id="stampdo" draggable="true" ondragstart="dragstemp(event)" > <a style="background-color: #fc636b">Công việc</a> </li> <li id="stampvang" draggable="true" ondragstart="dragstemp(event)" > <a style="background-color: #ffb900">Học tập</a> </li> <li id="stampxanh" draggable="true" ondragstart="dragstemp(event)" > <a style="background-color: #3be8b0">Hành động</a> </li> <li id="stamplam" draggable="true" ondragstart="dragstemp(event)" > <a style="background-color: #1aafd0">Ghi nhớ</a> </li> <li id="stamptim" draggable="true" ondragstart="dragstemp(event)" > <a style="background-color: #6a67ce">Khác</a> </li> </ul>';
 	document.getElementById("thongbao").innerHTML = '<li title="Bật nhắc nhở để nhận được thông báo về công việc"> <a id="'+clicked_id+'"  onclick="nhacnho(this.id)" data-toggle="collapse" aria-expanded="true"> <i class="fa fa-bell" ></i> Nhắc nhở</a> </li>';
 	


 }

