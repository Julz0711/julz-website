const form = document.getElementById('form');
const firstName = document.getElementById('firstName');
const lastName = document.getElementById('lastName');
const email = document.getElementById('emailAdress');
const subject = document.getElementById('subject');
const message = document.getElementById('message');
const pattern = /\S+@\S+\.\S+/;
const errorFirstName = document.getElementById('errorFirstName');
const errorLastName = document.getElementById('errorLastName');
const errorEmail = document.getElementById('errorEmail');
const errorSubject = document.getElementById('errorSubject');
const errorMessage = document.getElementById('errorMessage');

form.addEventListener('submit', (e) => {
    let messagesFirstName = [];
    let messagesLastName = [];
    let messagesEmail = [];
    let messagesSubject = [];
    let messagesMessage = [];

    //Error possibilities
    if (firstName.value === '' || firstName.value == null) {
        messagesFirstName.push('Please provide your first name.');
    }
    if (lastName.value === '' || lastName.value == null) {
        messagesLastName.push('Please provide your last name.');
    }
    if (email.value === '' || email.value == null) {
        messagesEmail.push('Please enter an e-mail adress.');
    } else if (email.value.match(pattern)) {} else {
        messagesEmail.push('This is not a valid e-mail adress.');
    }
    if (subject.value === '' || subject.value == null) {
        messagesSubject.push('Please tell me your subject.');
    }
    if (message.value === '' || message.value == null) {
        messagesMessage.push('I need a little bit of information. ;)');
    }


    //Error outputs
    if (messagesFirstName.length > 0) {
        e.preventDefault();
        errorFirstName.innerText = messagesFirstName.join();
    }
    if (messagesLastName.length > 0) {
        e.preventDefault();
        errorLastName.innerText = messagesLastName.join();
    }
    if (messagesEmail.length > 0) {
        e.preventDefault();
        errorEmail.innerText = messagesEmail.join(' ');
    }
    if (messagesSubject.length > 0) {
        e.preventDefault();
        errorSubject.innerText = messagesSubject.join();
    }
    if (messagesMessage.length > 0) {
        e.preventDefault();
        errorMessage.innerText = messagesMessage.join();
    }
})