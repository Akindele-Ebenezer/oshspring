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

// console.log(navLinks);
