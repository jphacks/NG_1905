function a(){
  $(document).ready(function () {
      $(".headC").show(2000);
  });
};

function selcheck() {
  //formのアドレスを参照
  elementReference = document.f.type.selectedIndex;
  sIndex = document.f.type.options[elementReference].value;
  
  return sIndex;
}