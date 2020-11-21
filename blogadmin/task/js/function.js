  function on() {
    document.getElementById("overlay").style.display = "block";
  }

  function off() {
    document.getElementById("overlay").style.display = "none";
  }

 
 //  function dragstemp(ev){
 //   ev.dataTransfer.setData("text", ev.target.id);
 //   x= ev.dataTransfer.getData("text"); 
 //   console.log(x);
 // }
 // function dropstamp(ev){
 //  ev.preventDefault();
 //     ev.preventDefault();
 //    var data = ev.dataTransfer.getData("text"); // data  là id di chuyển 
 //    document.getElementById(data).style.color = "red";
 //  }



  function allowDrop(ev) { //allowDrop
    ev.preventDefault();
  }

  function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
    x= ev.dataTransfer.getData("text"); 
    console.log(x);
    on();
  }
  function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text"); // data  là id di chuyển 
    document.getElementById(data).style.color = "red";
    remove();
    off();
  }

  function dropout(ev){
   off();
 }