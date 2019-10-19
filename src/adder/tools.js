//汎用的な関数を置く場所

/**
 * classNameで指定したclassをドラッグ可能にする
 */
function drag(className){
  $('.'+className).draggable();
}

function drop(){
  $('.hobby-submitbox').droppable({
    over: function(e,ui) {
      $(this)
        .find("h3")
        .css("color","white");
    },
    out: function(e,ui) {
      $(this)
        .find("h3")
        .css("color","black");
    },
    drop: function(e,ui) {
      $(this)
        return true;
    }
  });
}