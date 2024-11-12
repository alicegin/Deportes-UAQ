//datos recopilados de la bd
window.addEventListener('datosCargados', function() {
    const t_deportes = JSON.parse(localStorage.getItem('deportes'));
    const t_horarios = JSON.parse(localStorage.getItem('horarios'));
    const t_entrenadores = JSON.parse(localStorage.getItem('entrenadores'));
    const t_ubicaciones = JSON.parse(localStorage.getItem('ubicaciones'));



    

//tipo de seleccion (individual o conjunto)
carrusel = document.querySelector(".carruselDeportes");
infoDeporte = document.querySelector(".infoDeporte");
desplazarUsuario = document.querySelector("#infoDeporte");
individual=document.querySelector('#individual');
individualDot=document.querySelector('#individualDot')
conjunto=document.querySelector('#conjunto');
conjuntoDot=document.querySelector('#conjuntoDot');


//inicialización
    //para la seccion de opciones, si selecciones individuales o en conjunto
    let tipoResultado;
    individual.style.color="#e0e0e0";
    individualDot.style.backgroundColor="#e0e0e0"
    individualDot.style.width="10px";
    individualDot.style.height="10px";
    conjunto.style.color="grey";
    conjuntoDot.style.backgroundColor="grey"
    conjuntoDot.style.width="5px";
    conjuntoDot.style.height="5px";
    seleccion('individual');
    



individual.onclick=function(){
    individual.style.color="#e0e0e0";
    individualDot.style.backgroundColor="#e0e0e0"
    individualDot.style.width="10px";
    individualDot.style.height="10px";
    conjunto.style.color="grey";
    conjuntoDot.style.backgroundColor="grey"
    conjuntoDot.style.width="5px";
    conjuntoDot.style.height="5px";
    seleccion('individual');

}

conjunto.onclick=function(){
    individual.style.color="grey";
    individualDot.style.backgroundColor="grey"
    individualDot.style.width="5px";
    individualDot.style.height="5px";
    conjunto.style.color="#e0e0e0";
    conjuntoDot.style.backgroundColor="#e0e0e0"
    conjuntoDot.style.width="10px";
    conjuntoDot.style.height="10px";
    seleccion('conjunto');
}



function seleccion(tipoSeleccion){
    if (tipoSeleccion==='individual'){
        tipoResultado=t_deportes.filter(item => item.individual === 1);
        let carruselIndividual=`<button class="prev" id="prevInd">&lt;</button>
        <div class="cardsContainer">`;

        tipoResultado.forEach(item => {
            carruselIndividual += `<article class="cardCarrusel">
                <img id="imagenCarrusel" src="${item.img}">
                <h1>${item.nombre}</h1>
            </article>`;
        });

        carruselIndividual += `</div>
        <button class="next" id="nextInd">&gt;</button>`;
       
        carrusel.innerHTML =carruselIndividual;
        mostrarInformacion(tipoResultado,0);
    }
    else{
        tipoResultado=t_deportes.filter(item => item.individual === 0);
        let carruselConjunto=`<button class="prev" id="prevInd">&lt;</button>
        <div class="cardsContainer">`;

        tipoResultado.forEach(item => {
            carruselConjunto += `<article class="cardCarrusel">
                <img id="imagenCarrusel" src="${item.img}">
                <h1>${item.nombre}</h1>
            </article>`;
        });

        carruselConjunto += `</div>
        <button class="next" id="nextInd">&gt;</button>`;
       
        carrusel.innerHTML =carruselConjunto;
        mostrarInformacion(tipoResultado,0);
    }
    
    //deporteSeleccionado
        carruselContainer = document.querySelector(".cardsContainer");
        deportes=document.querySelectorAll('.cardCarrusel');
        imagenes=document.querySelectorAll('#imagenCarrusel');
        nextInd=document.querySelector("#nextInd");
        prevInd=document.querySelector("#prevInd");

        //index carrusel
        indexC=0;

        //tamaño para desplazar el carrusel
        anchoDeportes = deportes[0].clientWidth + 2;
        anchocarrusel = carruselContainer.clientWidth;

        deportes[0].style.transform='scale(1)';
        imagenes[0].style.filter='brightness(0.7)';
        nextInd.onclick=function(){
            indexC = (indexC === deportes.length - 1) ? 0 : indexC + 1;
            mostrarInformacion(tipoResultado,indexC);
            actualizarEstilos(deportes,imagenes,indexC);
            centrarCard();
        }
        
        prevInd.onclick=function(){
            indexC = (indexC === 0) ?  deportes.length - 1 : indexC - 1;
            mostrarInformacion(tipoResultado,indexC);
            actualizarEstilos(deportes,imagenes,indexC);
            centrarCard();
        }
        
        function centrarCard() {
            targetScroll = deportes[indexC].offsetLeft - (anchocarrusel - anchoDeportes) / 2;
            carruselContainer.scrollTo({ left: targetScroll, behavior: 'smooth' });
        }
        
        
        deportes.forEach(function(deporte, index) {
            deporte.addEventListener('click', function() {
                //console.log('Hiciste clic en el card número: ' + (index + 1));
                indexC=index;
                mostrarInformacion(tipoResultado,index);
                actualizarEstilos(deportes,imagenes,indexC);
                centrarCard();
                desplazarUsuario.scrollIntoView({ behavior: 'smooth' });
            });
        });

        function mostrarInformacion(deportes, index){
            deporteXmostrar = deportes[index];
                
                // Filtrar horarios correspondientes al deporte seleccionado
                horariosResultado = t_horarios.filter(item => item.id_deporte == deportes[index].id);
                
                // Obtener los IDs de los entrenadores y ubicaciones correspondientes a los horarios filtrados
                const entrenadorIds = horariosResultado.map(item => item.id_entrenador);
                const ubicacionesIds = horariosResultado.map(item => item.id_ubicacion);
                
                // Filtrar entrenadores y ubicaciones basándose en los IDs obtenidos
                entrenadoresXmostrar = t_entrenadores.filter(item => entrenadorIds.includes(item.id));
                ubicacionesXmostrar = t_ubicaciones.filter(item => ubicacionesIds.includes(item.id));
                const entrenador = entrenadoresXmostrar.find(ent => ent.id === horariosResultado[0].id_entrenador);
                let voluntario;
                console.log("###########");
                console.log(deporteXmostrar.nombre);
                let datosDeporteXmostrarHTML=`<div class="tituloED">
                <img src="http://deportesuaq.mx/wp-content/uploads/2024/10/GS-44.png">
                <div>
                    <h1>${deporteXmostrar.nombre}</h1>
                    <p>SELECCIONES UNIVERSITARIAS</p>
                </div>
            </div>`;
                if (entrenador) {
                    console.log(entrenador.nombre);
                    console.log(entrenador.tel);
                    if (entrenador.voluntario === 1) {
                        voluntario="Entrenador Voluntario";
                    } else {
                        voluntario="Entrenador de Programa Selección Universitaria"
                    }
                    console.log(voluntario);
                    datosDeporteXmostrarHTML+=`
                    <div class="entrenador"> <br>
                    <img src="http://deportesuaq.mx/wp-content/uploads/2024/11/account_circle_24dp_000000_FILL0_wght400_GRAD0_opsz24.png">
                    <div>
                    <h1>ENTRENADOR</h1>
                    <h2>${entrenador.nombre}</h>
                    <p>${voluntario}</p>
                    <br>
                    <p>Tel: ${entrenador.tel}</p>
                </div>
            </div>`;
                }

                if(ubicacionesXmostrar.length!=0){
                    datosDeporteXmostrarHTML+=`<div class="ubicacion">
                <div class="division">
                    <div>
                        <h1>LUGAR</h1>
                    </div>
                    <div>
                        <h1>HORARIO</h1>
                    </div>
                </div>`;
                }

                ubicacionesXmostrar.forEach((ubicacion, index)=>{
                    console.log("----------------------------");
                    console.log(ubicacion.ubicacion);
                    datosDeporteXmostrarHTML+=`<div class="infoUbi">
                    <div>
                        <p>${ubicacion.ubicacion}</p>
                        <br>
                    </div>
                    <div>`;
                    horariosXmostrar= horariosResultado.filter(item=>item.id_ubicacion==ubicacion.id);
                    horariosXmostrar.forEach((horario, index)=>{
                        const inicio = new Date(horario.inicio.date).toLocaleTimeString();
                        const fin = new Date(horario.fin.date).toLocaleTimeString();
                        console.log(horario.dia+' '+inicio +' - '+fin);
                        datosDeporteXmostrarHTML+=`<p> ${horario.dia} ${inicio} - ${fin}</p> <br>`;
                        if (index === horariosXmostrar.length - 1) {
                            datosDeporteXmostrarHTML+=`</div>`;
                        }
                    });
                    datosDeporteXmostrarHTML+=`</div>`;
                    if (index === ubicacionesXmostrar.length - 1) {
                        datosDeporteXmostrarHTML+=`</div>`;
                    }
                });

                infoDeporte.innerHTML=datosDeporteXmostrarHTML;
                
        }
        
        function actualizarEstilos(deportes, imagenes, indexC) {
            // Restablecer estilos para todos los elementos
            deportes.forEach((c, i) => {
                c.style.transform = 'scale(0.9)';
                imagenes[i].style.filter = 'grayscale() brightness(0.7)';
            });

            // Aplicar estilos al elemento seleccionado
            deportes[indexC].style.transform = 'scale(1)';
            imagenes[indexC].style.filter = 'brightness(0.7)';
        }

}








});
