function sendEmail() {
    Email.send({
        Host: "smtp.yahoo.com",
        Username: "luisps1991@yahoo.es",
        Password: "password",
        To: 'luisps1991@yahoo.es',
        From: document.getElementById("email").value,
        Subject: document.getElementById("asunto").value,
        Body: document.getElementById("mensaje").value
    }).then(
        message => alert(message)
    );
}

// ----------------------------------- SLLIDER ------------------------------------------
