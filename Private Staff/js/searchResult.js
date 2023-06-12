const form = document.getElementById('form');
const certificate = document.getElementById('certificate');
const lastName = document.getElementById('lastName');


form.addEventListener('submit' , e => {
    e.preventDefault()
    validateInputs();

}) 

const setError = (element, message)=>{
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error')

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
}

const setSuccess = (element , message)=>{
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error')

    errorDisplay.innerText = '';

    inputControl.classList.remove('error');

}

const validateInputs = ()=>{
    const certificateValue = certificate.value.trim();
    const lastNameValue = lastName.value.trim();

    if(certificateValue === ''){
        setError(certificate, 'both fields mandatory')
    }
    else{
        setSuccess(certificate);
    }

    if(lastNameValue === ''){
        setError(lastName, 'both fields mandatory')
    }
    else{
        setSuccess(lastName);
    }
}