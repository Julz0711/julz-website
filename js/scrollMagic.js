$(document).ready(function() {
    /*var controllerRevealNav = new ScrollMagic.Controller();
    new ScrollMagic.Scene({
            triggerHook: 0.8,
            triggerElement: '#smAboutMe'
        })
        .setClassToggle('#smNav', 'appear')
        .addIndicators()
        .addTo(controllerRevealNav)

    var controllerRevealTog = new ScrollMagic.Controller();
    new ScrollMagic.Scene({
            triggerHook: 0.8,
            triggerElement: '#smAboutMe'
        })
        .setClassToggle('#smTog', 'appear')
        .addIndicators()
        .addTo(controllerRevealTog)

    var controllerReveal = new ScrollMagic.Controller();
    new ScrollMagic.Scene({
            triggerHook: 0.8,
            triggerElement: '#smAboutMe'
        })
        .setClassToggle('#smAboutMe', 'fade-in')
        .addIndicators()
        .addTo(controllerReveal)

    var controllerRevealTL1 = new ScrollMagic.Controller();
    new ScrollMagic.Scene({
            triggerHook: 0.8,
            triggerElement: '#revealTL1'
        })
        .setClassToggle('#revealTL1', 'fade-in')
        .addIndicators()
        .addTo(controllerRevealTL1)

    var controllerRevealTL2 = new ScrollMagic.Controller();
    new ScrollMagic.Scene({
            triggerHook: 0.8,
            triggerElement: '#revealTL2'
        })
        .setClassToggle('#revealTL2', 'fade-in')
        .addIndicators()
        .addTo(controllerRevealTL2)

    var controllerRevealTL3 = new ScrollMagic.Controller();
    new ScrollMagic.Scene({
            triggerHook: 0.8,
            triggerElement: '#revealTL3'
        })
        .setClassToggle('#revealTL3', 'fade-in')
        .addIndicators()
        .addTo(controllerRevealTL3)

    var controllerReveal2 = new ScrollMagic.Controller();
    new ScrollMagic.Scene({
            triggerHook: 0.8,
            triggerElement: '#reveal2'
        })
        .setClassToggle('#reveal2', 'fade-in')
        .addIndicators()
        .addTo(controllerReveal2)

    var controllerReveal = new ScrollMagic.Controller();
    new ScrollMagic.Scene({
            triggerHook: 0.8,
            triggerElement: '#smProjects'
        })
        .setClassToggle('#smProjects', 'fade-in')
        .addIndicators()
        .addTo(controllerReveal)

    var controllerReveal = new ScrollMagic.Controller();
    new ScrollMagic.Scene({
            triggerHook: 0.8,
            triggerElement: '#reveal3'
        })
        .setClassToggle('#reveal3', 'fade-in')
        .addIndicators()
        .addTo(controllerReveal)

    var controllerReveal = new ScrollMagic.Controller();
    new ScrollMagic.Scene({
            triggerHook: 0.8,
            triggerElement: '#reveal4'
        })
        .setClassToggle('#reveal4', 'fade-in')
        .addIndicators()
        .addTo(controllerReveal)

*/


    var controllerVal1 = new ScrollMagic.Controller();
    var controllerVal2 = new ScrollMagic.Controller();
    var controllerVal3 = new ScrollMagic.Controller();
    var controllerVal4 = new ScrollMagic.Controller();
    var controllerVal5 = new ScrollMagic.Controller();
    var controllerVal6 = new ScrollMagic.Controller();

    new ScrollMagic.Scene({
            triggerElement: "#reveal2",
            triggerHook: 0.8,
        })
        .setClassToggle("#progbar1", "val1") // add class to reveal
        .addTo(controllerVal1);
    new ScrollMagic.Scene({
            triggerElement: "#reveal2",
            triggerHook: 0.8,
        })
        .setClassToggle("#progbar2", "val2") // add class to reveal
        .addTo(controllerVal2);
    new ScrollMagic.Scene({
            triggerElement: "#reveal2",
            triggerHook: 0.8,
        })
        .setClassToggle("#progbar3", "val3") // add class to reveal
        .addTo(controllerVal3);
    new ScrollMagic.Scene({
            triggerElement: "#reveal2",
            triggerHook: 0.8,
        })
        .setClassToggle("#progbar4", "val4") // add class to reveal
        .addTo(controllerVal4);
    new ScrollMagic.Scene({
            triggerElement: "#reveal2",
            triggerHook: 0.8,
        })
        .setClassToggle("#progbar5", "val5") // add class to reveal
        .addTo(controllerVal5);
    new ScrollMagic.Scene({
            triggerElement: "#reveal2",
            triggerHook: 0.8,
        })
        .setClassToggle("#progbar6", "val6") // add class to reveal
        .addTo(controllerVal6);
})