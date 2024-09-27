
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
    y:"-100%",
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