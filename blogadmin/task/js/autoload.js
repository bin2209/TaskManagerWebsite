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

	document.getElementById("addstep").innerHTML = '<a  href="" data-toggle="collapse" aria-expanded="false"><i class="fa fa-rocket"></i> Thêm bước</a> ';
 	// document.getElementById("menuleft").style.display = "block";
 	document.getElementById("changeganco").innerHTML = '<li class=""> <a class="dropdown-toggle" href="#ganco" data-toggle="collapse" aria-expanded="true"><i class="fa fa-flag" ></i> Gắn nhãn</a> </li> <ul class="list-unstyled collapse show" id="ganco" style=""> <li id="stampdo" draggable="true" ondragstart="dragstemp(event)" > <a style="background-color: #fc636b">Đỏ</a> </li> <li id="stampvang" draggable="true" ondragstart="dragstemp(event)" > <a style="background-color: #ffb900">Vàng</a> </li> <li id="stampxanh" draggable="true" ondragstart="dragstemp(event)" > <a style="background-color: #3be8b0">Xanh</a> </li> <li id="stamplam" draggable="true" ondragstart="dragstemp(event)" > <a style="background-color: #1aafd0">Lam</a> </li> <li id="stamptim" draggable="true" ondragstart="dragstemp(event)" > <a style="background-color: #6a67ce">Tím</a> </li> </ul>';
 }

