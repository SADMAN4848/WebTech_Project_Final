function get(id){
  return document.getElementById(id);
}
function checkUsername(e){
  //alert(e.value);
  var xhr = new XMLHttpRequest();
  xhr.open("GET","check_username.php?h_uname="+e.value,true);
  xhr.onreadystatechange=function(){
    if(this.readyState == 4 && this.status == 200){
      if(this.responseText.trim() == "invalid"){
        get("err_h_uname").innerHTML = "Username Exists";
      }
      else{
        get("err_h_uname").innerHTML = "";
      }

    }
  };
  xhr.send();

}
function checkPhone(f){
  //alert(e.value);
  var xhr = new XMLHttpRequest();
  xhr.open("GET","check_phone.php?h_phone="+f.value,true);
  xhr.onreadystatechange=function(){
    if(this.readyState == 4 && this.status == 200){
      if(this.responseText.trim() == "invalid"){
        get("err_h_phone").innerHTML = "Phone No. Exists";
      }
      else{
        get("err_h_phone").innerHTML = "";
      }

    }
  };
  xhr.send();

}
function checkNid(g){
  //alert(e.value);
  var xhr = new XMLHttpRequest();
  xhr.open("GET","check_nid.php?h_nid="+g.value,true);
  xhr.onreadystatechange=function(){
    if(this.readyState == 4 && this.status == 200){
      if(this.responseText.trim() == "invalid"){
        get("err_h_nid").innerHTML = "NID Exists";
      }
      else{
        get("err_h_nid").innerHTML = "";
      }

    }
  };
  xhr.send();

}
