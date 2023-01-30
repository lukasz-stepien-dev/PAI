const form = document.querySelector('form');
const username = document.querySelector('#username');
const pass1 = document.querySelector('#password');
const pass2 = document.querySelector('#repeat-password');
const email = document.querySelector('#email');
const send = document.querySelector('.send');
const clear = document.querySelector('.clear');
const popup = document.querySelector('.popup')

const showError = (input, msg) => {
    const formBox = input.parentElement;
    const errorMsg = formBox.querySelector('.error-text');
    formBox.classList.add('error');
    errorMsg.textContent = msg;
};

const clearError = input => {
    const formBox = input.parentElement;
    formBox.classList.remove('error');
};

const checkForm = input => {
    input.forEach(el => {
        if (el.value === '') {
            showError(el, el.placeholder);
        } else {
            clearError(el);
        }
    })
};

const checkLength = (input, min) => {
    if (input.value.length < min) {
        showError(input, `${input.previousElementSibling.innerText.slice(0, -1)} składa się z min. ${min} znaków.`)
        console.log(input.previousElementSibling)
    }
}

const checkPassword = (pass1, pass2) => {
    if (pass1.value !== pass2.value) {
        showError(pass2, 'Hasło do siebie nie pasują.')
    }
}

const checkEmail = email => {
    const re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

    if (re.test(email.value)) {
        clearError(email);
    } else {
        showError(email, 'Email jest niepoprawny');
    }
}

const checkError = () => {
    const allInputs = document.querySelectorAll('.form-box');
    let errorCount = 0;

    allInputs.forEach(el => {
        if (el.classList.contains('error')) {
            errorCount++;
        }
    })

    if (errorCount === 0) {
        popup.classList.add('show-popup')
    }
}

clear.addEventListener('click', event => {
    event.preventDefault();

    [username, pass1, pass2, email].forEach(el => {
        el.value = ''
    })
})

send.addEventListener('click', e => {
    e.preventDefault();
    checkForm([username, pass1, pass2, email])
    checkLength(username, 3);
    checkLength(pass1, 8);
    checkPassword(pass1, pass2);
    checkEmail(email);
    checkError();
})