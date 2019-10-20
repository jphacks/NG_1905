function a(){
  $(document).ready(function () {
      $(".headC").show(2000);
  });
};

function selcheck() {
  //formのアドレスを参照
  elementReference = document.getElementById("f");
  sIndex = elementReference.radio1;
  value = "";
  for(i = 0; i < sIndex.length; i++){
    if(sIndex[i].checked){
      value = sIndex[i].value;
    }
  }
  if( value == ""){
    document.getElementById( "q" ).value = "";
  }
  else{
    document.getElementById( "q" ).value = " "+value;
  }

}

function selcheck2() {
  //formのアドレスを参照
  elementReference = document.getElementById("f");
  sIndex = elementReference.radio2;
  val = "";
  for(i = 0; i < sIndex.length; i++){
    if(sIndex[i].checked){
      val = sIndex[i].value;
    }
  }
  if( val == ""){
    document.getElementById( "q" ).value += "";
  }
  else{
    document.getElementById( "q" ).value += " "+val;
  }
}