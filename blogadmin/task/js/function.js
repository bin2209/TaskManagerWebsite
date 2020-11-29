  function on() {
    document.getElementById("overlay").style.display = "block";
  }

  function off() {
    document.getElementById("overlay").style.display = "none";
  }

  function allowDrop(ev) { //allowDrop
    ev.preventDefault();
  }

  function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
    x= ev.dataTransfer.getData("text"); 
    on();
  }
  function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text"); // data  là id di chuyển 
    remove();
    off();
  }
  function dropout(ev){
   off();
 }