function sendEmail() {
    Email.send({
        SecurityToken: "8f093a5e-3644-41f4-8bcc-ee4e694e4f1e",
        To: 'contact@julz.life',
        From: document.getElementById('emailAdress').value,
        Subject: "New Contact form Enquiry",
        Body: "First Name: " + document.getElementById('firstName').value +
            "<br> Last Name: " + document.getElementById('lastName').value +
            "<br> Email Adress: " + document.getElementById('emailAdress').value +
            "<br> Phone Number: " + document.getElementById('phone').value +
            "<br><br> Message: <br>" + document.getElementById('message').value
    }).then(
        //message => alert("Your message sent succesfully! :)")
    );
}