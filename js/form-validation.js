const firstName = document.getElementById('first_name');
const lastName = document.getElementById('last_name');
const userEmail = document.getElementById('user_email');
// subject - not sure if I want to make this required
const userMessage = document.getElementById('user_message');

const regEmail = /^[^@]+@[^@.].+\.[a-z]+$/i;
const regTel = /\d{11}/;