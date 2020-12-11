<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Timeline</title>
  
  
  
  <link rel="stylesheet" href="css/style.css">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>
  <button onclick="taomoi()">Tạo</button>
  <div class="wrapper">
    <!-- SORT THEO THỜI GIAN -->
    <!-- NẾU BẰNG NHAU THÌ KO QUA SECTION  -->
    <!-- KHÁC NHAU THÌ QUA -->

    <section class="block">
      <div class="each-year">
        <div class="title">date</div><!--  LẶP TIME -->

        <!-- LẶP KHỐI THEO NGÀY NẾU CÙNG NGÀY -->

        <div class="each-event">
          <div class="event-description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam molestiae sint ut sit sed impedit, minus, eligendi modi.
          </div>
        </div>



      </div>
    </section>



    <section class="block">
      <div class="each-year">
        <div class="title">2015</div>
        <div class="each-event">
          <div class="event-description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
          </div>
        </div>
      </div>
    </section>

    <script type="text/javascript">
      function taomoi(){
        Swal.fire({
          title: 'Do you want to save the changes?',
          showDenyButton: false,
          showCancelButton: false,
          confirmButtonText: `Save`,
          denyButtonText: `Don't save`,
          html: '<input type="text" id="tieude" name="tieude"><br>'
          +'<input type="text" id="noidung" name="noidung"><br>'
          +'<input type="text" id="ngaythuchien" name="ngaythuchien">',
        }).then((result) => {
          /* Read more about isConfirmed, isDenied below */
          if (result.isConfirmed) {

            var tieude = $( "input#tieude" ).val();
            var noidung = $("input#noidung").val();
            var ngaythuchien = $("input#ngaythuchien").val();
            console.log (tieude);
            console.log (noidung);
            console.log (ngaythuchien);
            Swal.fire('Đã thêm!', '', 'success');
            $.ajax({
              type : "POST",  
              url  : "./request/taomoi.php",  
              data : {
                tieude: tieude,
                noidung: noidung,
                ngaythuchien: ngaythuchien
              },
              success: function(res){ 
         // $('#tablecontent').load(document.URL +' #tablecontent');
         location.reload();
       }
     });

          }
        })
      }
    </script>



  </div>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

  <script src="js/index.js"></script>

</body>
</html>
