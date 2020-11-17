// var mysql = require('mysql');

// var con = mysql.createConnection({
//   host: "localhost",
//   user: "root",
//   password: "",
//   database: "blog_admin_db"
// });


// con.connect(function(err) {
//   if (err) throw err;
//   console.log("Connected!");
// });

// function xong(){
//     console.log("xong");
//     con.connect(function(err) {
//       if (err) throw err;
//   //Update the address field:
//   var sql = "UPDATE todo SET trangthai = 'done' WHERE id = '1'";
//   con.query(sql, function (err, result) {
//     if (err) throw err;
//     console.log(result.affectedRows + " record(s) updated");
// });
// });

// }
// function hoantac(){
//     console.log("hoantac");
// }
// function xoa(){
//     console.log("xoa");
// }

// console.log("ok");
// $(document).ready(function(){
//     $("#add").click(function(){
//         var task = $("#task").val();
//         var noidung = $("#noidung").val();
//         var trangthai = $("#trangthai").val();
//         var user = $("#user").val();

//         $.ajax({
//            url:'add.php',
//            type:'post',
//            data:{task:task,noidung:noidung,trangthai:trangthai,user:user},
//            success:function(response){
//           location.reload(); // reloading page
//       }
//   });

//     });
// });
