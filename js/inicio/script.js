
gsap.from("section",{
    scrollTrigger:{
        trigger:"section",
        start: "top top",
        end:"bottom bottom",
        scrub:1,
        pin:".pineada",
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
});

gsap.from(".caja",{
    y:-window.innerHeight,
    scrollTrigger:{
        trigger:"section",
        start:"top top",
        end: "90% bottom",
        scrub:1
    }
});





