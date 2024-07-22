const logo = Array.from(document.querySelectorAll(".logo"));
const logo_img = Array.from(document.querySelectorAll(".logo img"));

for(let i = 0; i < logo.length; i++){
    logo[i].addEventListener("mouseover", () => {
        setTimeout(() => {logo_img[i].src = (logo_img[i].src).replace("black", "white");}, 50);
    });

    logo[i].addEventListener("mouseout", () => {
        setTimeout(() => {logo_img[i].src = (logo_img[i].src).replace("white", "black");}, 50);
    });
}


const banner = document.querySelector(".banner");

let i = 2;
setInterval(() => {
    var link = `url(https://github.com/eytorsousa/rp-images/raw/main/images/banner${i}.png)`;
    banner.style.backgroundImage = link;
    i++; if(i == 6){i = 1;}
}, 5500);
