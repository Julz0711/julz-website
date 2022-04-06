gsap.timeline({
        scrollTrigger: {
            trigger: ".box123",
            start: "center center",
            end: "bottom top",
            scrub: 1,
            pin: true
        }
    })
    .from(".text1", {
        x: innerWidth * 1
    })
    .from(".text2", {
        x: innerWidth * -1
    })
    .from(".text3", {
        x: innerWidth * 1
    })