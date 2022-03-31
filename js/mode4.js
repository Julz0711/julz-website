function mode4() {
    localStorage.setItem('isMode4', true);
    localStorage.setItem('isMode1', false);
    localStorage.setItem('isMode2', false);
    localStorage.setItem('isMode3', false);


    if (localStorage.getItem('isMode4') === 'true') {
        document.documentElement.style.setProperty('--color-primary', '#a7a7a7');
        document.documentElement.style.setProperty('--color-secondary', '#7a7a7a');
        document.documentElement.style.setProperty('--color-two', '#f5f5f5');
        document.documentElement.style.setProperty('--color-one', '#121212');
        $("#mode4").prop("checked", true);
    }
}

//safe mode to session storage
if (localStorage.getItem('isMode4') === 'true') {
    document.documentElement.style.setProperty('--color-primary', '#a7a7a7');
    document.documentElement.style.setProperty('--color-secondary', '#7a7a7a');
    document.documentElement.style.setProperty('--color-two', '#f5f5f5');
    $("#mode4").prop("checked", true);
}