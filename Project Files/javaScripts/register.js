var hasError = false;
function get(id){
  return document.getElementById(id);
}
function validateGen(){
			var gn = document.getElementsByName("h_gender");
			for(var i=0; i<gn.length; i++){
				if(gn[i].checked){
					return true;
				}
			}
			return false;
		}
function validate(){
  refresh();
  if(get("h_purpose").selectedIndex == 0){
    hasError = true;
    get("err_h_purpose").innerHTML = " *Purpose Req";
  }
  if(get("h_name").value == ""){
    hasError = true;
    get("err_h_name").innerHTML = " *Name Req";
  }
  if(get("h_uname").value == ""){
    hasError = true;
    get("err_h_uname").innerHTML = " *Username Req";
  }
  if(get("h_pass").value == ""){
    hasError = true;
    get("err_h_pass").innerHTML = " *Password Req";
  }
  if(get("h_day").selectedIndex == 0){
    hasError = true;
    get("err_h_day").innerHTML = " *Day Req";
  }
  if(get("h_month").selectedIndex == 0){
    hasError = true;
    get("err_h_month").innerHTML = " *Month Req";
  }
  if(get("h_year").selectedIndex == 0){
    hasError = true;
    get("err_h_year").innerHTML = " *Year Req";
  }
  if(!validateGen()){
		hasError = true;
		get("err_h_gender").innerHTML = " *Gender Req";
	}
  if(get("h_email").value == ""){
    hasError = true;
    get("err_h_email").innerHTML = " *Email Req";
  }
  if(get("h_address").value == ""){
    hasError = true;
    get("err_h_address").innerHTML = " *Address Req";
  }
  if(get("h_phone").value == ""){
    hasError = true;
    get("err_h_phone").innerHTML = " *Phone No. Req";
  }
  if(get("h_nid").value == ""){
    hasError = true;
    get("err_h_nid").innerHTML = " *NID Req";
  }
  return !hasError;
}
function refresh(){
  hasError = false;
  get("err_h_purpose").innerHTML = "";
  get("err_h_name").innerHTML = "";
  get("err_h_uname").innerHTML = "";
  get("err_h_pass").innerHTML = "";
  get("err_h_day").innerHTML = "";
  get("err_h_month").innerHTML = "";
  get("err_h_year").innerHTML = "";
  get("err_h_gender").innerHTML = "";
  get("err_h_email").innerHTML = "";
  get("err_h_address").innerHTML = "";
  get("err_h_phone").innerHTML = "";
  get("err_h_nid").innerHTML = "";
}
