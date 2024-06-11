const box_login = document.querySelector("#header_box_login");
const close_box_login = document.querySelector("#header_box_login_close");
const box_cart = document.querySelector("#header_box_cart")
const close_box_cart = document.querySelector("#header_box_cart_close");
const keep_buying = document.querySelector("#keep_buying");
const link_login = document.querySelector("#header_login");
const link_cart = document.querySelector("#header_cart");

link_login.addEventListener("click", ()=> {
    if(link_login.href != "#"){
        box_login.classList.toggle("hidden");
    }
});
close_box_login.addEventListener("click", ()=>{box_login.classList.toggle("hidden");});

link_cart.addEventListener("click", ()=>{close_cart()});
close_box_cart.addEventListener("click", ()=>{close_cart()});
keep_buying.addEventListener("click", ()=>{close_cart()});

function close_cart(){
    box_cart.classList.toggle("right-[0px]");
}
