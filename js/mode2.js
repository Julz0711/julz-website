function mode2() {
    localStorage.setItem('isMode2', true);
    localStorage.setItem('isMode1', false);
    localStorage.setItem('isMode3', false);



    if (localStorage.getItem('isMode2') === 'true') {
        document.documentElement.style.setProperty('--color-primary', '#ffb600');
        document.documentElement.style.setProperty('--color-secondary', '#0183ff');
        document.documentElement.style.setProperty('--color-two', '#000000');
        document.documentElement.style.setProperty('--color-one', '#FFFFFF');
        $("#mode2").prop("checked", true);
    }
}

//safe mode to session storage
if (localStorage.getItem('isMode2') === 'true') {
    document.documentElement.style.setProperty('--color-primary', '#ffb600');
    document.documentElement.style.setProperty('--color-secondary', '#0183ff');
    document.documentElement.style.setProperty('--color-two', '#000000');
    document.documentElement.style.setProperty('--color-one', '#FFFFFF');
    $("#mode2").prop("checked", true);
}