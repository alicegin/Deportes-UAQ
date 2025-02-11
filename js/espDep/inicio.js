//Contenedor que tiene el título que se va a desplazar
const races = document.querySelector(".scroll");

function getScrollAmount(){
  //Ancho total del contenido dentro de .scroll
  let racesWidth =races.scrollWidth;
  //Determina cuánto contenido extra (fuera de la vista) tiene el contenedor.
  //Tamaño de contenedor - tamaño de lo visible (tamaño actual de la ventana)
  //Es negativo para que  .scroll se desplace hacia la izquierda.
  return -(racesWidth-window.innerWidth);
}

//Crea una animación para desplazar el contenedor .scroll horizontalmente mientras cambia su color de texto.
const tween = gsap.to(races,{
  //Desplaza horizontalmente el contenedor .scroll según el cálculo de getScrollAmount.
  x:getScrollAmount,
  color:'#e0e0e0',
  duration:3,
  //El movimiento será uniforme, sin aceleración o desaceleración.
  ease:"none"
});

ScrollTrigger.create({
  trigger:".cajita",
  //La animación comienza cuando el 20% superior de la ventana alcanza la parte superior de .cajita.
  start:"top 20%",
  //La animación termina después de un desplazamiento equivalente al ancho total de la animación horizontal.
  end:() => `+=${getScrollAmount()*-1}`,
  //Fija el contenedor .cajita en su lugar mientras se realiza la animación.
  pin:true,
  animation:tween,
  //Sincroniza la animación con el desplazamiento del usuario, haciendo que el avance o retroceso dependa del movimiento del scroll.
  scrub:1,
  //Recalcula valores como getScrollAmount si se redimensiona la ventana.
  invalidateOnRefresh:true,
});

//Cambio de color para el fondo
gsap.to("main",{
backgroundColor:"#121212",
scrollTrigger:{
  trigger:".cajita",
  start:"top 20%",
  end:() => `+=${getScrollAmount()*-1}`,
  scrub:1,
}
});
