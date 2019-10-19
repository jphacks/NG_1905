//汎用的な関数を置く場所

/**
 * classNameで指定したclassをドラッグ可能にする
 */
function drag(className){
  $('.'+className).draggable();
}

function drop(){
  var x = 0;
  var y = 0;
  $("html").droppable({
    deactive: function(e,ui){
      $(ui.draggable)
        .css("top",0)
        .css("left",0)
        .css("color","blue");
    },
    drop: function(e,ui) {
      $(ui.draggable)
        .css("top",0)
        .css("left",0)
        .css("color","blue");
    }
  });
  $('.hobby-submitbox').droppable({
    over: function(e,ui) {
      $(ui.draggable)
        .css("color","blue");
    },
    out: function(e,ui) {
      $(ui.draggable)
        .css("color","blue")
    },
    deactive: function(e,ui){
      $(ui.draggable)
        .css("color","blue");
    },
    drop: function(e,ui) {
<<<<<<< HEAD
=======
      $(ui.draggable)
        .css("color","black")
        .css("top",y) 
        .css("left",x);
        console.log("x=="+x+"y=="+y+" ");
>>>>>>> 7d26025a98309c82504a628d112ec927dce953c8
    }
  });
}