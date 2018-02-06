var sel = document.getElementsByTagName("select");
sel[0].addEventListener("change", displayOption);

function displayOption(){
  alert(sel[0].value);
}