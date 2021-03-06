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

let home = document.getElementsByTagName("li");
    home[0].addEventListener("click", () => {
        window.open("https://oshspring.com/");   
    });

    home[1].addEventListener("click", () => {
        window.open("https://oshspring.com/#details");   
    });

    home[2].addEventListener("click", () => {
        window.open("https://oshspring.com/#services");   
    });

    home[3].addEventListener("click", () => {
        window.open("https://oshspring.com/#contact");   
    });

const footerLinks = document.getElementsByClassName("footer-links");

for(let i = 0; i < footerLinks.length; i++) {
    
  footerLinks[0].addEventListener("click", () => {
    window.open("https://oshspring.com/");
  });
    
    
  footerLinks[1].addEventListener("click", () => {
    window.open("https://oshspring.com/#details");
  });
    
    
  footerLinks[2].addEventListener("click", () => {
    window.open("https://oshspring.com/#services");
  });
    
    
  footerLinks[3].addEventListener("click", () => {
    window.open("https://oshspring.com/#contact");
  });
    
}

// const loadPage = () => {
//     let load = document.querySelector(".load");
//     const main = document.querySelector(".main"); 
//     setTimeout(() => { 
//         load.style.display = "none";
//         main.style.display = "block";
//     }, 3000);
// }

// loadPage();
 //console.log(home);
