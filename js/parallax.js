// init controller
var controller = new ScrollMagic.Controller({ globalSceneOptions: { triggerHook: "onEnter", duration: "150%" } });
var controllerIntro = new ScrollMagic.Controller();

// build scenes
new ScrollMagic.Scene({ triggerElement: "#parallax1" })
    .setTween("#parallax1 > div", { y: "80%", ease: Linear.easeNone })
    .addIndicators()
    .addTo(controller);

new ScrollMagic.Scene({ triggerElement: "#parallax2" })
    .setTween("#parallax2 > div", { y: "80%", ease: Linear.easeNone })
    .addIndicators()
    .addTo(controller);

new ScrollMagic.Scene({ triggerElement: "#parallax3" })
    .setTween("#parallax3 > div", { y: "80%", ease: Linear.easeNone })
    .addIndicators()
    .addTo(controller);


var scene = new ScrollMagic.Scene({
        triggerElement: "#pinTrigger",
        triggerHook: 100,
        duration: $('#intro').height(),
    })
    .setPin("#pin1")
    .addIndicators() // add indicators (requires plugin)
    .addTo(controllerIntro);


//Image Sequence

const html = document.documentElement;
const intro = document.querySelector('#intro');
const canvas = document.getElementById('img-seq');
const context = canvas.getContext('2d');

const frameCount = 240;
const currentFrame = index => (
    `../img/imgSeq2/${index.toString().padStart(4, '0')}.jpg`
)

const preloadImages = () => {
    for (let i = 1; i < frameCount; i++) {
        const img = new Image();
        img.src = currentFrame(i);
    }
}

const img = new Image();
img.src = currentFrame(1);
canvas.width = 2453;
canvas.height = 1440;
img.onload = function() {
    context.drawImage(img, 0, 0);
}

const updateImage = index => {
    img.src = currentFrame(index);
    context.drawImage(img, 0, 0);
}

window.addEventListener('scroll', () => {
    const scrollTop = html.scrollTop;
    const maxScrollTop = html.scrollHeight - window.innerHeight;
    const scrollFraction = scrollTop / maxScrollTop;
    const frameIndex = Math.min(
        frameCount - 1,
        Math.ceil(scrollFraction * frameCount)
    );

    //context.clearRect(0, 0, canvas.width, canvas.height);
    requestAnimationFrame(() => updateImage(frameIndex + 1));
});

preloadImages()

console.log(index.toString().padStart(4, '0'))