const main = document.querySelector("main"); 
const navBar = document.querySelector("nav");
const navIcon = document.querySelector(".nav div img");

navIcon.addEventListener("click", () => {
    navBar.classList.toggle("nav-toggle"); 
});

main.addEventListener("click", () => {
    navBar.classList.remove("nav-toggle");
});
 
const navLinks = document.getElementsByTagName("li");
 
for(let n = 0; n < navLinks.length; n++) {
    navLinks[n].addEventListener("click", () => {
        navBar.classList.remove("nav-toggle"); 
    });
} 

window.onscroll = () => {
    navBar.classList.remove("nav-toggle");
}

const home = document.querySelector(".nav-toggle ul li a:first-child");
    home.addEventListener("click", () => {
    window.open("index.php");   
});

const about = document.querySelector(".nav-toggle ul li a:nth-child(2)");
    about.addEventListener("click", () => {
    window.open("index.php/#details");   
});

const services = document.querySelector(".nav-toggle ul li a:nth-child(3)");
    services.addEventListener("click", () => {
    window.open("index.php/#services");   
});

const contact = document.querySelector(".nav-toggle ul li a:last-child");
    contact.addEventListener("click", () => {
    window.open("index.php/#contact");   
});

// console.log(navLinks);
