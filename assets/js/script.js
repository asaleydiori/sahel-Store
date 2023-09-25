let navbar = document.querySelector('.navbar')

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    loginForm.classList.remove('active');
    searchForm.classList.remove('active');
}
 

let searchForm = document.querySelector('.search-form')

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
     navbar.classList.remove('active');
     loginForm.classList.remove('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
    searchForm.classList.remove('active');
}
 
var swiper = new Swiper(".review-slider", {
    loop:true,
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 5500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});

let loginBtn = document.querySelector('#login-btn');

loginBtn.onclick = () => {
    // Set the location to the login.php page
    window.location.href = '../ss/login.php';
}

let cartBtn = document.querySelector('#cart-btn');

cartBtn.onclick = () => {
    // Set the location to the login.php page
    window.location.href = '../ss/panier.php';
}