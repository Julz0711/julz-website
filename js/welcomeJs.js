//GSAP
gsap.registerPlugin(ScrollTrigger);


const words = ["I am Julz.", "I am studying visual computing.", "I am a 3D Artist.", "I am a Web Developer.", "this is my Portfolio. :)"];

let cursor = gsap.to('.cursor', { opacity: 0, duration: .8, ease: "power2.inOut", repeat: -1 })

let boxTl = gsap.timeline()

boxTl.to('.wlc-box', { duration: 1, width: "17vw", delay: 0.5, ease: "power4.inOut" })
    .from('.hi', { duration: 1, y: "7vw", ease: "power3.inOut", onComplete: () => masterTl.play() })
    .to('.wlc-box', { duration: 1, height: "7vw", ease: "easeOut" })
    .to('.wlc-box', { duration: 1, autoAlpha: 0.5, yoyo: true, repeat: -1 })

let masterTl = gsap.timeline({ repeat: -1 }).pause()

words.forEach((word, key) => {
    let repeatAmount = Object.is(word.length - 1, key) ? 0 : 1
    let tl = gsap.timeline({ repeat: repeatAmount, yoyo: true, repeatDelay: 1 })
    tl.to('.text', { duration: 1, text: word })
    masterTl.add(tl)
})

ScrollTrigger.create({
    trigger: '.welcome_container',
    start: "top top",
    end: "bottom bottom",
    pinSpacing: false,
    pin: '.wlc-h'
})