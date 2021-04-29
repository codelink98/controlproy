function loginAdmin() {

    if(document.getElementById("login").value === "martintb@live.com.mx" && document.getElementById("password").value === "Nutrifit10") {

        alert("Usuario correcto!")
        window.location = "home.html";

    } else {
        alert("Datos incorrectos, intente de nuevo");
        location.reload();
    }
    
     

}

console.log("index js loaded")