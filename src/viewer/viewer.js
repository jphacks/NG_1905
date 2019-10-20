function a(){
  $(document).ready(function () {
      $(".headC").show(2000);
      for(i = 0; i < sIndex.length; i++){
        sIndex[i].checked = false;
    }
      for(i = 0; i < sIndex2.length; i++){
        sIndex2[i].checked = false;
      }
  });
};

function selcheck() {
  //form  のアドレスを参照
  elementReference = document.getElementById("f");
  sIndex = elementReference.radio1;
  value = "";
  for(i = 0; i < sIndex.length; i++){
    if(sIndex[i].checked){
      value = sIndex[i].value;
      break;
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
  sIndex2 = elementReference.radio2;
  val = "";
  for(i = 0; i < sIndex2.length; i++){
    if(sIndex2[i].checked){
      val = sIndex2[i].value;
      break;
    }
  }
  if( val == ""){
    document.getElementById( "q" ).value += "";
  }
  else{
    document.getElementById( "q" ).value += " "+val;
  }

}