const races= document.querySelector(".elementosScroll");
let racesWidth= races.offsetWidth;
let amountToScroll = racesWidth-window.innerWidth;
gsap.to(".cuerpo",{
  backgroundColor:"black",
  scrollTrigger:{
    trigger:".scroll",
    start:"top top",
    end:"+="+ amountToScroll,
    scrub:5,
}
});
gsap.to(".elementosScroll",{
    x:-amountToScroll,
    backgroundColor:"black",
    duration:1,
    ease:"none",
    scrollTrigger:{
        trigger:".scroll",
        start:"top top",
        end:"+="+ amountToScroll,
        pin:true,
        scrub:2
    }
});
gsap.to(".elementosScroll h1",{
  color:"white",
  duration:3,
  ease:"none",
  scrollTrigger:{
      trigger:".scroll",
      start:"top top",
      end:"+="+ amountToScroll,
      scrub:1,
  }
});

gsap.to(".elementosScroll",{
  height:"20vh",
  scrollTrigger:{
      trigger:".scroll",
      start:"top top",
      end:"+="+ amountToScroll,
      scrub:true,
  }
});

