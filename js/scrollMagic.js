$(document).ready(function() {

    var controllerVal1 = new ScrollMagic.Controller();
    var controllerVal2 = new ScrollMagic.Controller();
    var controllerVal3 = new ScrollMagic.Controller();
    var controllerVal4 = new ScrollMagic.Controller();
    var controllerVal5 = new ScrollMagic.Controller();
    var controllerVal6 = new ScrollMagic.Controller();

    new ScrollMagic.Scene({
            triggerElement: "#reveal3",
            triggerHook: 0.8,
        })
        .setClassToggle("#progbar1", "val1") // add class to reveal
        .addTo(controllerVal1);
    new ScrollMagic.Scene({
            triggerElement: "#reveal3",
            triggerHook: 0.8,
        })
        .setClassToggle("#progbar2", "val2") // add class to reveal
        .addTo(controllerVal2);
    new ScrollMagic.Scene({
            triggerElement: "#reveal3",
            triggerHook: 0.8,
        })
        .setClassToggle("#progbar3", "val3") // add class to reveal
        .addTo(controllerVal3);
    new ScrollMagic.Scene({
            triggerElement: "#reveal3",
            triggerHook: 0.8,
        })
        .setClassToggle("#progbar4", "val4") // add class to reveal
        .addTo(controllerVal4);
    new ScrollMagic.Scene({
            triggerElement: "#reveal3",
            triggerHook: 0.8,
        })
        .setClassToggle("#progbar5", "val5") // add class to reveal
        .addTo(controllerVal5);
    new ScrollMagic.Scene({
            triggerElement: "#reveal3",
            triggerHook: 0.8,
        })
        .setClassToggle("#progbar6", "val6") // add class to reveal
        .addTo(controllerVal6);
})