const show = "https://github.com/eytorsousa/rp-images/raw/main/images/icons/icon_eye.png";
const hidden = "https://github.com/eytorsousa/rp-images/raw/main/images/icons/icon_eye_s.png";
const inputs = Array.from(document.querySelectorAll(".password"));
const icons = Array.from(document.querySelectorAll(".show_password_img"));

for(let i = 0; i < icons.length; i++){
    icons[i].src = `${show}`;
    icons[i].addEventListener("click", () => {
        icons[i].src == `${show}` ? icons[i].src = `${hidden}` : icons[i].src = `${show}`;
        inputs[i].type == "password" ? inputs[i].type = "text" :  inputs[i].type = "password";
    });
}
