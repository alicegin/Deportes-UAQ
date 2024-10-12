
gsap.from("section",{
    scrollTrigger:{
        trigger:"section",
        start: "top top",
        end:"bottom bottom",
        scrub:1,
        pin:".pineada",
    }
})


gsap.from(".caja",{
    y:-window.innerHeight,
    scrollTrigger:{
        trigger:"section",
        start:"top top",
        end: "90% bottom",
        scrub:1
    }
})

gsap.from(".imagen", {
    y:-100,
    scrollTrigger: {
        trigger: "body",
        start: "top top", 
        end: "bottom top", 
        scrub: true 
    }
});

gsap.from(".atletas",{
    bottom:"-20%",
    scrollTrigger:{
        trigger:"section",
        start: "top top",
        end:"bottom bottom",
        scrub:1,
    }
})


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

