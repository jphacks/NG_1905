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
  $('.hobby-submitbox').droppable({
    active:function(e,ui){
      x = 0;
      y = 0;
    },
    over: function(e,ui) {
      $(this)
        .find("h3")
        .css("color","white");
      $(ui.draggable)
        .css("color","blue");
    },
    out: function(e,ui) {
      $(this)
        .find("h3")
        .css("color","black");
      $(ui.draggable)
        .css("color","blue")
    },
    deactive: function(e,ui){
      $(ui.draggable)
        .css("color","black")
        .css("top",y)
        .css("left",x);
    },
    drop: function(e,ui) {
      $(ui.draggable)
        .css("color","black")
        .css("top",y)
        .css("left",x);
    }
  });
}