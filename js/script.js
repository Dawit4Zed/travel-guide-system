let reservBtn = document.querySelector("#reserv-btn");
let reservlist = document.querySelector(".reservation");

let formBtn = document.querySelector("#login-btn");
let loginForm = document.querySelector(".login-form");
let formClose = document.querySelector("#form-close");

let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');

let videoBtn = document.querySelectorAll('.vid-btn');

window.onscroll = () =>
{
    reservBtn.classList.remove('fa-times');
    reservlist.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
}
menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});
reservBtn.addEventListener('click',() =>
{
    reservBtn.classList.toggle('fa-times');
    reservlist.classList.toggle('active');
});

formBtn.addEventListener('click',() =>
{
    loginForm.classList.add('active');
});
formClose.addEventListener('click',() =>
{
    loginForm.classList.remove('active');
});

videoBtn.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src;
    });
});
