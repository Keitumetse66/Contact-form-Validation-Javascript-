 document.querySelector('.form').addEventListener('submit', submitForm);
 
 function submitForm(e) {
     e.preventDefault();

     let username = document.querySelector('#username').value;
     let email = document.querySelector('#email').value;
     let subject = document.querySelector('#subject').value;
     let mesg = document.querySelector('#message').value;
    
     document.querySelector('.form').reset();

    sendEmail(username, email, subject, mesg);

 }

function sendEmail(username, email, subject, mesg) {
    Email.send({
        Host: "smtp.gmail.com",
        Username: "johnmolefe886@gmail.com",
        Password: "trcnobugolmlrwkv",
        To: "pipforex66@gmail.com",
        From: "johnmolefe886@gmail.com",
        Subject: `${subject}`,
        Body: ` Name: ${username}<br/> Email: ${email} <br/> Message: ${mesg} `,

    }).then((mesg) => alert("Message successfully sent, Thank you. :) "))
}

 