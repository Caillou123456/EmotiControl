function mostrarLogin() {
    document.getElementById("registroForm").style.display = "none";
    document.getElementById("loginForm").style.display = "block";
}

function mostrarRegistro() {
    document.getElementById("loginForm").style.display = "none";
    document.getElementById("registroForm").style.display = "block";
}

function mostrarMensajeRegistro() {
    document.getElementById("registroExitoso").style.display = "block";
    setTimeout(function() {
        document.getElementById("registroExitoso").style.display = "none";
    }, 8000); 
    return true; 
}

function mostrarMensajeInicioSesion() {
    document.getElementById("inicioSesionExitoso").style.display = "block";
    return true; 
}

function cerrarMensajeInicioSesion() {
    document.getElementById("inicioSesionExitoso").style.display = "none";
}
