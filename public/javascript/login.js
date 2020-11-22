
  
function mostrarFormulario(){
    let boton_on = document.getElementById("boton-sesion")
    let formulario = document.getElementById("form-sesion")
    formulario.style.display="flex";
    formulario.animate([
        {transform: 'translateY(0vh)'}

    ],{
        duration: 600,
        easing: "ease-in",
        fill: "forwards"
    });
    
    boton_on.style.border = 'solid thin rgba(114, 246, 255, 0.65)'
}