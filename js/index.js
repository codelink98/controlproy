
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
  
function loginAdmin() {

    if(document.getElementById("login").value === "martintb@live.com.mx" && document.getElementById("password").value === "Nutrifit10") {

        alert("Usuario correcto!")
        setCookie("usuario", "Martin Torres Becerra", 1);
        window.location = "home.html";

    } else {
        alert("Datos incorrectos, intente de nuevo");
        location.reload();
    }
    
     

}

console.log("index js loaded")
