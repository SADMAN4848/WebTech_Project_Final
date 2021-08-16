var hasError = false;
function get(id){
  return document.getElementById(id);
}
function validate(){
    refresh();
    if(get("h_uname").value == ""){
        hasError = true;
        get("err_h_uname").innerHTML = " *Username Req";
    }
    if(get("h_pass").value == ""){
        hasError = true;
        get("err_h_pass").innerHTML = " *Password Req";
    }
    return !hasError;

}
function refresh(){
    get("err_h_uname").innerHTML = "";
    get("err_h_pass").innerHTML = "";

}