<div class="container_page_view">
    <div class="nombre_product_view">
        <p><?= esc($producto['Nombre']);?></p>
    </div>
    <div class="container_product_view" >
        <div class="product_img_view">
            <img src=<?=base_url("/img/". esc($producto['Imagen']));?>>
        </div>
        <div class="container_valoracion">
            <div class="valoracion_view">
                <p class="puntuacion_view"><span id="puntuacion"><?= $valoracion->getPuntuacionMedia($producto['ProductoId']);?></span></p>
                <p class="votaciones_view"><span id="votaciones"><?= $valoracion->getNumeroVotos($producto['ProductoId']);?></span> valoraciones.</p>  
            </div>
            
            <div class="container_votacion_view">
                <form id="form-valoracion" class="form_valoracion">
                    <div class="container_radio">
                        <input type="radio" id="check-1" name="puntuacion" value="1">
                        <label for="check-1" class="checkmark">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 30 30" version="1.1">
                                <path d="M 24.417969 14.484375 C 24.296875 14.074219 23.925781 13.746094 23.519531 13.664062 L 17.621094 12.4375 L 19.382812 1.425781 C 19.464844 0.894531 19.179688 0.359375 18.6875 0.117188 C 18.195312 -0.128906 17.582031 0.0351562 17.253906 0.441406 L 5.792969 14.074219 C 5.546875 14.402344 5.421875 14.8125 5.546875 15.179688 C 5.667969 15.589844 5.957031 15.875 6.324219 16 L 12.054688 17.921875 L 9.761719 28.527344 C 9.640625 29.058594 9.925781 29.632812 10.417969 29.878906 C 10.582031 29.960938 10.785156 30 10.992188 30 C 11.320312 30 11.6875 29.835938 11.890625 29.589844 L 24.214844 15.628906 C 24.5 15.34375 24.582031 14.894531 24.417969 14.484375 Z M 24.417969 14.484375 "/>
                            </svg>
                        </label>
                    </div>
                    <div class="container_radio">
                        <input type="radio" id="check-2" name="puntuacion" value="2">
                        <label for="check-2"  class="checkmark">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 30 30" version="1.1">
                                <path d="M 24.417969 14.484375 C 24.296875 14.074219 23.925781 13.746094 23.519531 13.664062 L 17.621094 12.4375 L 19.382812 1.425781 C 19.464844 0.894531 19.179688 0.359375 18.6875 0.117188 C 18.195312 -0.128906 17.582031 0.0351562 17.253906 0.441406 L 5.792969 14.074219 C 5.546875 14.402344 5.421875 14.8125 5.546875 15.179688 C 5.667969 15.589844 5.957031 15.875 6.324219 16 L 12.054688 17.921875 L 9.761719 28.527344 C 9.640625 29.058594 9.925781 29.632812 10.417969 29.878906 C 10.582031 29.960938 10.785156 30 10.992188 30 C 11.320312 30 11.6875 29.835938 11.890625 29.589844 L 24.214844 15.628906 C 24.5 15.34375 24.582031 14.894531 24.417969 14.484375 Z M 24.417969 14.484375 "/>
                            </svg>
                        </label>
                    </div>
                    <div class="container_radio">
                        <input type="radio" id="check-3" name="puntuacion" value="3">
                        <label for="check-3"  class="checkmark">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 30 30" version="1.1">
                                <path d="M 24.417969 14.484375 C 24.296875 14.074219 23.925781 13.746094 23.519531 13.664062 L 17.621094 12.4375 L 19.382812 1.425781 C 19.464844 0.894531 19.179688 0.359375 18.6875 0.117188 C 18.195312 -0.128906 17.582031 0.0351562 17.253906 0.441406 L 5.792969 14.074219 C 5.546875 14.402344 5.421875 14.8125 5.546875 15.179688 C 5.667969 15.589844 5.957031 15.875 6.324219 16 L 12.054688 17.921875 L 9.761719 28.527344 C 9.640625 29.058594 9.925781 29.632812 10.417969 29.878906 C 10.582031 29.960938 10.785156 30 10.992188 30 C 11.320312 30 11.6875 29.835938 11.890625 29.589844 L 24.214844 15.628906 C 24.5 15.34375 24.582031 14.894531 24.417969 14.484375 Z M 24.417969 14.484375 "/>
                            </svg>
                        </label>
                    </div>
                    <div class="container_radio">
                        <input type="radio" id="check-4" name="puntuacion" value="4">
                        <label for="check-4"  class="checkmark">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 30 30" version="1.1">
                                <path d="M 24.417969 14.484375 C 24.296875 14.074219 23.925781 13.746094 23.519531 13.664062 L 17.621094 12.4375 L 19.382812 1.425781 C 19.464844 0.894531 19.179688 0.359375 18.6875 0.117188 C 18.195312 -0.128906 17.582031 0.0351562 17.253906 0.441406 L 5.792969 14.074219 C 5.546875 14.402344 5.421875 14.8125 5.546875 15.179688 C 5.667969 15.589844 5.957031 15.875 6.324219 16 L 12.054688 17.921875 L 9.761719 28.527344 C 9.640625 29.058594 9.925781 29.632812 10.417969 29.878906 C 10.582031 29.960938 10.785156 30 10.992188 30 C 11.320312 30 11.6875 29.835938 11.890625 29.589844 L 24.214844 15.628906 C 24.5 15.34375 24.582031 14.894531 24.417969 14.484375 Z M 24.417969 14.484375 "/>
                            </svg>
                        </label>
                    </div>
                    <div class="container_radio">
                        <input type="radio" id="check-5" name="puntuacion" value="5">
                        <label for="check-5" class="checkmark">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 30 30" version="1.1">
                                <path d="M 24.417969 14.484375 C 24.296875 14.074219 23.925781 13.746094 23.519531 13.664062 L 17.621094 12.4375 L 19.382812 1.425781 C 19.464844 0.894531 19.179688 0.359375 18.6875 0.117188 C 18.195312 -0.128906 17.582031 0.0351562 17.253906 0.441406 L 5.792969 14.074219 C 5.546875 14.402344 5.421875 14.8125 5.546875 15.179688 C 5.667969 15.589844 5.957031 15.875 6.324219 16 L 12.054688 17.921875 L 9.761719 28.527344 C 9.640625 29.058594 9.925781 29.632812 10.417969 29.878906 C 10.582031 29.960938 10.785156 30 10.992188 30 C 11.320312 30 11.6875 29.835938 11.890625 29.589844 L 24.214844 15.628906 C 24.5 15.34375 24.582031 14.894531 24.417969 14.484375 Z M 24.417969 14.484375 "/>
                            </svg>
                        </label>
                    </div>
                    
                                <!-- Pruebaas
                    <div class="container_radio">
                        <input type="radio" id="check-1" name="puntuacion" value="1">
                        <label for="check-1" class="checkmark">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 30 30" version="1.1">
                                <path d="M 24.417969 14.484375 C 24.296875 14.074219 23.925781 13.746094 23.519531 13.664062 L 17.621094 12.4375 L 19.382812 1.425781 C 19.464844 0.894531 19.179688 0.359375 18.6875 0.117188 C 18.195312 -0.128906 17.582031 0.0351562 17.253906 0.441406 L 5.792969 14.074219 C 5.546875 14.402344 5.421875 14.8125 5.546875 15.179688 C 5.667969 15.589844 5.957031 15.875 6.324219 16 L 12.054688 17.921875 L 9.761719 28.527344 C 9.640625 29.058594 9.925781 29.632812 10.417969 29.878906 C 10.582031 29.960938 10.785156 30 10.992188 30 C 11.320312 30 11.6875 29.835938 11.890625 29.589844 L 24.214844 15.628906 C 24.5 15.34375 24.582031 14.894531 24.417969 14.484375 Z M 24.417969 14.484375 "/>
                            </svg>
                        </label>
                        <input type="radio" id="check-2" name="puntuacion" value="2">
                        <label for="check-2"  class="checkmark">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 30 30" version="1.1">
                                <path d="M 24.417969 14.484375 C 24.296875 14.074219 23.925781 13.746094 23.519531 13.664062 L 17.621094 12.4375 L 19.382812 1.425781 C 19.464844 0.894531 19.179688 0.359375 18.6875 0.117188 C 18.195312 -0.128906 17.582031 0.0351562 17.253906 0.441406 L 5.792969 14.074219 C 5.546875 14.402344 5.421875 14.8125 5.546875 15.179688 C 5.667969 15.589844 5.957031 15.875 6.324219 16 L 12.054688 17.921875 L 9.761719 28.527344 C 9.640625 29.058594 9.925781 29.632812 10.417969 29.878906 C 10.582031 29.960938 10.785156 30 10.992188 30 C 11.320312 30 11.6875 29.835938 11.890625 29.589844 L 24.214844 15.628906 C 24.5 15.34375 24.582031 14.894531 24.417969 14.484375 Z M 24.417969 14.484375 "/>
                            </svg>
                        </label>
                        <input type="radio" id="check-3" name="puntuacion" value="3">
                        <label for="check-3"  class="checkmark">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 30 30" version="1.1">
                                <path d="M 24.417969 14.484375 C 24.296875 14.074219 23.925781 13.746094 23.519531 13.664062 L 17.621094 12.4375 L 19.382812 1.425781 C 19.464844 0.894531 19.179688 0.359375 18.6875 0.117188 C 18.195312 -0.128906 17.582031 0.0351562 17.253906 0.441406 L 5.792969 14.074219 C 5.546875 14.402344 5.421875 14.8125 5.546875 15.179688 C 5.667969 15.589844 5.957031 15.875 6.324219 16 L 12.054688 17.921875 L 9.761719 28.527344 C 9.640625 29.058594 9.925781 29.632812 10.417969 29.878906 C 10.582031 29.960938 10.785156 30 10.992188 30 C 11.320312 30 11.6875 29.835938 11.890625 29.589844 L 24.214844 15.628906 C 24.5 15.34375 24.582031 14.894531 24.417969 14.484375 Z M 24.417969 14.484375 "/>
                            </svg>
                        </label>
                        <input type="radio" id="check-4" name="puntuacion" value="4">
                        <label for="check-4"  class="checkmark">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 30 30" version="1.1">
                                <path d="M 24.417969 14.484375 C 24.296875 14.074219 23.925781 13.746094 23.519531 13.664062 L 17.621094 12.4375 L 19.382812 1.425781 C 19.464844 0.894531 19.179688 0.359375 18.6875 0.117188 C 18.195312 -0.128906 17.582031 0.0351562 17.253906 0.441406 L 5.792969 14.074219 C 5.546875 14.402344 5.421875 14.8125 5.546875 15.179688 C 5.667969 15.589844 5.957031 15.875 6.324219 16 L 12.054688 17.921875 L 9.761719 28.527344 C 9.640625 29.058594 9.925781 29.632812 10.417969 29.878906 C 10.582031 29.960938 10.785156 30 10.992188 30 C 11.320312 30 11.6875 29.835938 11.890625 29.589844 L 24.214844 15.628906 C 24.5 15.34375 24.582031 14.894531 24.417969 14.484375 Z M 24.417969 14.484375 "/>
                            </svg>
                        </label>
                        <input type="radio" id="check-5" name="puntuacion" value="5">
                        <label for="check-5" class="checkmark">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 30 30" version="1.1">
                                <path d="M 24.417969 14.484375 C 24.296875 14.074219 23.925781 13.746094 23.519531 13.664062 L 17.621094 12.4375 L 19.382812 1.425781 C 19.464844 0.894531 19.179688 0.359375 18.6875 0.117188 C 18.195312 -0.128906 17.582031 0.0351562 17.253906 0.441406 L 5.792969 14.074219 C 5.546875 14.402344 5.421875 14.8125 5.546875 15.179688 C 5.667969 15.589844 5.957031 15.875 6.324219 16 L 12.054688 17.921875 L 9.761719 28.527344 C 9.640625 29.058594 9.925781 29.632812 10.417969 29.878906 C 10.582031 29.960938 10.785156 30 10.992188 30 C 11.320312 30 11.6875 29.835938 11.890625 29.589844 L 24.214844 15.628906 C 24.5 15.34375 24.582031 14.894531 24.417969 14.484375 Z M 24.417969 14.484375 "/>
                            </svg>
                        </label>
                    </div> -->


                    <input type="hidden" name="usuarioId" value=<?= session('UsuarioId') ?>>
                    <input type="hidden" name="productoId" value=<?= $producto['ProductoId']; ?>>

                </form>
            </div>
            <div id="respuesta" class="respuesta"></div>
        </div>
        <div class="descripcion_view">
            <p><?=esc($producto['Descripcion']); ?></p>
        </div>
    </div>
</div>

<script>
    let formulario = document.getElementById('form-valoracion');
    let respuesta = document.getElementById('respuesta');
    let puntuacion = document.getElementById('puntuacion');
    let votaciones = document.getElementById('votaciones');

    formulario.addEventListener('change', function(e){
     
        let datos = new FormData(formulario);

        fetch('/valoracion',{
            method: 'POST',
            body: datos
        })
        .then( res => res.json())
        .then( data => {
            if(data === 'ok'){
                respuesta.innerHTML = `<p class="afirmativa">Gracias por valorar este producto.</p>`;
            }else if(data === 'session_error'){
                respuesta.innerHTML = `<p class="negativa">Debe iniciar sesión.</p>`;
            }else{
                respuesta.innerHTML = `<p class="negativa">Ya ha valorado este producto.</p>`;
            }
        })

        fetch('/valoracion/datos/<?=$producto['ProductoId']; ?>')
        .then((res) => res.json())
        .then(response => {

            puntuacion.innerHTML = response['puntuacionMedia'];
            votaciones.innerHTML = response['votaciones'];
        }).catch(error => console.log(error))

    });
</script>

