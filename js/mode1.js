function mode1() {
    localStorage.setItem('isMode1', true);
    localStorage.setItem('isMode2', false);
    localStorage.setItem('isMode3', false);
    localStorage.setItem('isMode4', false);



    if (localStorage.getItem('isMode1') === 'true') {
        document.documentElement.style.setProperty('--color-primary', '#0183ff');
        document.documentElement.style.setProperty('--color-secondary', '#CC1F1D');
        document.documentElement.style.setProperty('--color-two', '#000000');
        document.documentElement.style.setProperty('--color-one', '#FFFFFF');
        $("#mode1").prop("checked", true);
    }
}

//safe mode to session storage
if (localStorage.getItem('isMode1') === 'true') {
    document.documentElement.style.setProperty('--color-primary', '#0183ff');
    document.documentElement.style.setProperty('--color-secondary', '#CC1F1D');
    document.documentElement.style.setProperty('--color-two', '#000000');
    document.documentElement.style.setProperty('--color-one', '#FFFFFF');
    $("#mode1").prop("checked", true);
}