const allFields = document.getElementsByClassName('form-field');
const form = document.getElementById('contact-form');
const firstName = document.getElementById('first_name');
const lastName = document.getElementById('last_name');
const userEmail = document.getElementById('user_email');
const userPhone = document.getElementById('user_phone');
// subject - not sure if I want to make this required
const userMessage = document.getElementById('user_message');

const regEmail = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;
const regTel = /^(?:0|\+?44)(?:\d\s?){9,10}$/;

function chkMail(email) {
    return regEmail.test(email);
}

function chkTel(phone) {
    return regTel.test(phone);
}

// I'm sure this could be more concise
// form.addEventListener('submit', (event) => {
//     if (firstName.value == '' || firstName.value == null) {
//         document.getElementById('error-msg').innerHTML="Please enter your first name";
//     } else if (lastName.value == '' || lastName == null) {
//         document.getElementById('error-msg').innerHTML=`Please enter your last name ${firstName.value}`;
//     } else if (chkMail(userEmail.value) == false) {
//         document.getElementById('error-msg').innerHTML=`Please enter a valid email address ${firstName.value}`;
//     } else if (chkTel(userPhone.value) == false) {
//         document.getElementById('error-msg').innerHTML=`Please enter a valid telephone number ${firstName.value}`;
//     } else if (userMessage.value == '' || userMessage.value == null) {
//         document.getElementById('error-msg').innerHTML=`Did you not want to send me a message ${firstName.value}?`;
//     } else {
//         this.submit();
//     }
//     event.preventDefault();
// });

form.addEventListener('submit', (event) => {
    let errors = false;
    let message ='';
    for ( let i = 0; i < allFields.length; i++ ) {
        allFields[i].classList.remove("invalid");
    }
    if (firstName.value == '' || firstName.value == null) {
        message +="Please enter your first name </br>";
        firstName.classList.add("invalid");
        errors = true;
    }
    if (lastName.value == '' || lastName.value == null) {
        message +="Please enter your last name </br>";
        lastName.classList.add("invalid");
        errors = true;
    }
    if (chkMail(userEmail.value) == false) {
        message +="Please enter a valid email address </br>";
        userEmail.classList.add("invalid");
        errors = true;
    }
    if (chkTel(userPhone.value) == false) {
        message += "Please enter a valid UK telephone number </br>";
        userPhone.classList.add("invalid");
        errors = true;
    }
    if (userMessage.value =='' || userMessage.value == null) {
        message += "The message field is empty";
        userMessage.classList.add("invalid");
        errors = true;
    }
    if (errors) {
        document.getElementById('error-msg').innerHTML=message;
        event.preventDefault();
    }
    else submit;
});