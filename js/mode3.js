function mode3() {
    localStorage.setItem('isMode3', true);
    localStorage.setItem('isMode1', false);
    localStorage.setItem('isMode2', false);


    if (localStorage.getItem('isMode3') === 'true') {
        document.documentElement.style.setProperty('--color-primary', '#a7a7a7');
        document.documentElement.style.setProperty('--color-secondary', '#7a7a7a');
        document.documentElement.style.setProperty('--color-two', '#000000');
        document.documentElement.style.setProperty('--color-one', '#FFFFFF');
        $(".activeMode").css("display", "flex");
        $(".modeChooser").css("display", "none");
        $("#mode3").prop("checked", true);
    }
}

//safe mode to session storage
if (localStorage.getItem('isMode3') === 'true') {
    document.documentElement.style.setProperty('--color-primary', '#a7a7a7');
    document.documentElement.style.setProperty('--color-secondary', '#7a7a7a');
    document.documentElement.style.setProperty('--color-two', '#000000');
    document.documentElement.style.setProperty('--color-one', '#FFFFFF');
    $(".activeMode").css("display", "flex");
    $(".modeChooser").css("display", "none");
    $("#mode3").prop("checked", true);
}