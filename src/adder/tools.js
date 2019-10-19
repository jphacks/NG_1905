//汎用的な関数を置く場所
function a() {
  $(document).ready(function () {
      $(".headC").show(2000);
  });
};
/**
 * classNameで指定したclassをドラッグ可能にする
 */
function drag(className){
  $('.'+className).draggable();
}

function CCC(CL){
  $("."+CL+"-a").css("background-color","red");
  $("ul").append("<li>"+CL+"</li>")

}

function drop(){
  var x = 0;
  var y = 0;
  var Dnow ;
  $("html").droppable({
    deactive: function(e,ui){
      $(ui.draggable)
        .css("top",0)
        .css("left",0)
        .css("color","blue");
    },
    activate: function(e,ui){
      Dnow = $(this) ;
      console.dir(Dnow);
      $(ui.draggable)
        .css("color","red");
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
      console.log("drop");
      $(ui.draggable)
        .css("color","blue")
        .addClass("canPublish");
      $(".hobby-shows")
        .find("li")
      //  .html("ok");
        var CLS = ui.draggable.attr('class');
        var CL = CLS[0] ;
        CCC(CL);
    }
  });
}

function haveClassinClass(className,baseClassName){
  console.log("function start!");
  if($("."+baseClassName).hasClass(className)){
    console.log("true");
    return true;
  }
  console.log("false");
  return false;
}

