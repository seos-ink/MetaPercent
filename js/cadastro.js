const container = document.querySelector('.container');
const registerBtn = document.querySelector('.register-btn');
const loginBtn = document.querySelector('.login-btn');

const loginTitle = document.querySelector('.form-box.login .title');
const registerTitle = document.querySelector('.form-box.register .title');

registerBtn.addEventListener('click', () => {
    container.classList.add('active');
    loginTitle.textContent = "Login";
    registerTitle.textContent = "Cadastro";
});

loginBtn.addEventListener('click', () => {
    container.classList.remove('active');
    loginTitle.textContent = "Login";
    registerTitle.textContent = "Cadastro";
});
