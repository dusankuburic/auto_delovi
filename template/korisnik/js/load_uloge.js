function lo_uloge(){

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            var myObj = JSON.parse(this.responseText);
            var row = "";

            for(var i = 0; i < myObj.length; i++){

                row +="<option value=" + myObj[i]['sifra_uloge'] + ">" + myObj[i]['naziv'] + "</option>";
            }
            
            document.getElementById("uloga_k").innerHTML = row;
        }
    };

    xmlhttp.open("POST", "../../src/includes/vrati_sve_uloge.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}