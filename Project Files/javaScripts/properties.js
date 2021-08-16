function get(id){
    return document.getElementById(id);
}
function searchProperty(n){
    if(n.value == ""){
        get("suggestion").innerHTML = "";
    }
    else{
        var xhr = new XMLHttpRequest();
        xhr.open("GET","search_property.php?key="+n.value,true);
        xhr.onreadystatechange=function(){
        if(this.readyState == 4 && this.status == 200){
            get("suggestion").innerHTML = this.responseText;
  
        }
     };
    xhr.send();
    }
  
  }