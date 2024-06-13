const register_input_password = document.querySelector("input[name='register_password']");
const register_input_password2 = document.querySelector("input[name='register_password_c'");
const register_see_password = document.querySelector("#register_see_password");
const register_see_password2 = document.querySelector("#register_see_password2");

register_see_password.addEventListener("click", ()=>{
    register_input_password.type == 'password' ? register_input_password.type = 'text' : register_input_password.type = 'password';
    register_input_password.type == 'password' ? register_see_password.src = '../../public/assets/images/icons/icon_eye.png' : register_see_password.src = '../../public/assets/images/icons/icon_eye_s.png';
});

register_see_password2.addEventListener("click", ()=>{
    register_input_password2.type == 'password' ? register_input_password2.type = 'text' : register_input_password2.type = 'password';
    register_input_password2.type == 'password' ? register_see_password2.src = '../../public/assets/images/icons/icon_eye.png' : register_see_password2.src = '../../public/assets/images/icons/icon_eye_s.png';
});
