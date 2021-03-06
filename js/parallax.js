
gsap.registerPlugin(ScrollTrigger);

let sections = gsap.utils.toArray("section");

sections.forEach(section => {
    let canvas = section.querySelector("canvas");
    canvas ? initCanvas(section, canvas) : initOther(section);
});

function initCanvas(section, canvas) {
    let context = canvas.getContext("2d");
    canvas.width = 2000;
    canvas.height = 1000;

    let frameCount = 54;
    const currentFrame = index => (
        `img/imgSeq2/${(index + 1).toString().padStart(4, '0')}.png`
    );

    let images = []
    let ship = {
        frame: 0
    };

    for (let i = 0; i < frameCount; i++) {
        let img = new Image();
        img.src = currentFrame(i);
        images.push(img);
    }

    gsap.timeline({
            onUpdate: render,
            scrollTrigger: {
                trigger: 'section',
                pin: true,
                scrub: .1,
                end: "+=200%"
            }
        })
        .to(ship, {
            frame: frameCount - 1,
            snap: "frame",
            ease: "none",
            duration: 1
        }, 0);

    images[0].onload = render;

    function render() {
        context.clearRect(0, 0, canvas.width, canvas.height);
        context.drawImage(images[ship.frame], 0, 0);
    }
}

function initOther(section) {
    ScrollTrigger.create({
        trigger: section,
        pin: true,
        end: '+=200%'
    });
}

//Header anim
const reveal = gsap.utils.toArray('.head-anim');
reveal.forEach((text, i) => {
    ScrollTrigger.create({
        trigger: text,
        toggleClass: 'active',
        start: 'top 90%',
        end: 'top top'
    })
})

const container = gsap.utils.toArray('.myContent');
//let end = $('.myContent').height();
container.forEach((div, i) => {
    ScrollTrigger.create({
        trigger: div,
        toggleClass: 'activeC',
        start: 'top 75%',
        end: 'bottom top'
    })
})



