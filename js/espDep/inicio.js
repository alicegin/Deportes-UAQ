const races = document.querySelector(".scroll");

function getScrollAmount(){
  let racesWidth =races.scrollWidth;
  return -(racesWidth-window.innerWidth);
}

const tween = gsap.to(races,{
  x:getScrollAmount,
  color:'#e0e0e0',
  duration:3,
  ease:"none"
});

ScrollTrigger.create({
  trigger:".cajita",
  start:"top 20%",
  end:() => `+=${getScrollAmount()*-1}`,
  pin:true,
  animation:tween,
  scrub:1,
  invalidateOnRefresh:true,
});

gsap.to("main",{
backgroundColor:"#121212",
scrollTrigger:{
  trigger:".cajita",
  start:"top 20%",
  end:() => `+=${getScrollAmount()*-1}`,
  scrub:1,
}
});
