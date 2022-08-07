let btn = document.querySelector('.submit');
let inputName = document.querySelector('.fname');
let inputLastName = document.querySelector('.lname');
let inputEmail = document.querySelector('.email');
let inputNumber = document.querySelector('.phone');
let form = document.querySelector('.form');
let error = document.querySelector('.error')
let emailFormat = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
let phoneno = /^\+?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/;

function outputError(message){
  error.innerHTML = message;
}
function validationForm(e) {
  e.preventDefault();

  if (inputName.value === ''){
    outputError('Please enter your name!')
  }
  else if (inputLastName.value === '') {
    outputError('Please enter your last name!')
  } 
  else if (inputEmail.value === '') {
    outputError('Please enter your email!')
  } 
  else if (!inputEmail.value.match(emailFormat)){
    outputError('Please enter valid email!')
  }
  else if (inputNumber.value === '') {
    outputError('Please enter your phone number!')
  } 
  else if (!inputNumber.value.match(phoneno)) {
    outputError('Please enter VALID phone number!')
  } 
  else{ 
    outputError('');
    form.submit()
    form.reset();
  }
}
btn.onclick = validationForm;